<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *@author : Ayeni Olusegun Samson
 */
class session{
    public static function destroy(){
        @session_start();
        @session_save_path('/tmp'); 
        @session_destroy();
        unset($_SESSION);
    }
	
    public static function _unset($name){
        @session_start();
        @session_save_path('/tmp'); 
        unset($_SESSION[$name]);
    }
	
    public static function _set($sname, $value){
        @session_start();
        @session_save_path('/tmp'); 
        $_SESSION[$sname] = $value;
    }
	
    public static function _get($sname){
        @session_start();
        if(isset($_SESSION[$sname])){
            return $_SESSION[$sname];
        }
    }
	
    public static function _isset($sname){
        @session_start();
        @session_save_path('/tmp'); 
        $ans = false;
        if(isset($_SESSION[$sname])){
            $ans = true;
        }else{
            $ans = false;
        }
        return $ans;
    }
}
?>
