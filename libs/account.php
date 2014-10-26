<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account
 *
 * @author Ayeni Olusegun
 */
class account {
    //put your code here
    
    public function createcompany($companyname, $contactfn, $address, $city, $state, $email, $phonenum, $pwd){
        $db = phpdb::GetInstance();
        //$pin = randomPin();
        //$smstext = "Your New Pin: " + $pin + "Kindly change this PIN before Usage";
        $pass = sha1("!@#$" . $pwd . " %^&*");
        $result = $db->insertRecords("tk_industry", array(
            'companyname' => $db->sanitizeData($companyname), 
            'contactfn' => $db->sanitizeData($contactfn),
            'address' => $db->sanitizeData($address),
            'city' => $db->sanitizeData($city),
            'state' => $db->sanitizeData($state),
            'email' => $db->sanitizeData($email),
            'phonenum' => $db->sanitizeData($phonenum),
            'pwd' => $db->sanitizeData($pass)
         ));
        if($result){
            $id = $db->lastInsertID();
            return array(true, $id);
        }else{
            return array(false,0);
        }
    }
    
    public function createRUser($fname, $lname, $phone_no){
        $db = phpdb::GetInstance();
        $pin = randomPin();
        $smstext = "Your Pin is: " . $pin . ". You are advised to change this pin after first login.";
        $smsurl = "http://smsc.xwireless.net/API/WebSMS/Http/v1.0a/index.php"
                . "?username=" . SMS_USERNAME . "&password=" . SMS_PASSWORD . "&sender=TrashKan&to={$phone_no}&message={$smstext}&format={json|text}";
                
        fire_remote_script($smsurl);
        if(substr($phone_no, 0, 1) === "0"){
            $phone = "234" . substr($phone_no, 1, strlen($phone_no) - 1);
        }else{
            $phone = $phone_no;
        }
        $pass = sha1("!@#$" . $pin . " %^&*");
        $result = $db->insertRecords("tk_user", array(
            'fname' => $db->sanitizeData($fname), 
            'lname' => $db->sanitizeData($lname),
            'phonenum' => $db->sanitizeData($phone),
            'pwd' => $db->sanitizeData($pass)
         ));
        
        if($result){
            $id = $db->lastInsertID();
            return array(true, $id);
        }else{
            return array(false,0);
        }
    }
    
    public function loginRuser($phone_num, $pin){
        $db = phpdb::GetInstance();
        $pass = sha1("!@#$" . $pin . " %^&*");
        if(substr($phone_num, 0, 1) === "0"){
            $phone = "234" . substr($phone_num, 1, strlen($phone_num) - 1);
        }else{
            $phone = $phone_num;
        }
        $sql = "SELECT `uid` FROM `tk_user` WHERE `phonenum` = '" . $db->sanitizeData($phone) . "' AND `pwd` = '" . $db->sanitizeData($pass) . "'";
        $db->executeQuery($sql);
        if($db->numRows() > 0){
            if($row = $db->fetch_object()){
                return array(TRUE, $row->uid);
            }
        }else{
            return array(FALSE, 0);
        }
    }
	
	public function loginCompuser($email_addr, $pwd ){
        $db = phpdb::GetInstance();
        $pass = sha1("!@#$" . $pwd . " %^&*");
        $sql = "SELECT `inid` FROM `tk_industry` WHERE `email` = '" . $email_addr . "' AND `pwd` = '" . $pwd . "'";
        $db->executeQuery($sql);
        if($db->numRows() > 0){
            if($row = $db->fetch_object()){
                return array(TRUE, $row->inid );
            }
        }else{
            return array(FALSE, 0);
        }
    }
	
	public static function getComDetail($field = '*', $id){
        $db = phpdb::GetInstance();
        $db->executeQuery("SELECT {$field} FROM `tk_industry` where inid = '" . $db->sanitizeData($id) . "'");
        if($row = $db->fetch_object()){
            return $row->$field;
        }
    }
}
