<?php
function cPost($name){
        if(isset($_POST[$name])){
                $var = str_replace(array('\\r\\n','\r\\n','r\\n','\r\n', '\n', '\r'), '<br />', $_POST[$name]);
                $var = htmlentities($var,ENT_NOQUOTES,'UTF-8');
                if(get_magic_quotes_gpc())
                {
                        $var = stripslashes($var); //removes slashes
                }
                $var = addslashes($var); //sql injection
                return $var;
        }else{
                return NULL;
        }
}

function cGet($name){
    if(isset($_GET[$name])){
        $var = str_replace(array('\\r\\n','\r\\n','r\\n','\r\n', '\n', '\r'), '<br />', $_GET[$name]);
        $var = htmlentities($var,ENT_NOQUOTES,'UTF-8');
        if(get_magic_quotes_gpc()){
                $var = stripslashes($var); //removes slashes
        }
        $var = addslashes($var); //sql injection
        return $var;
    }else{
        return NULL;
    }
}

function error_handler(){
        exit(1);
}
	
//send email from script
function sendEmailComplete($to,$subject,$body){
        $mail = new phpmailer();
        /*
                uncomment this if u re using gmail smtp...just try kid'stuff
                $mail->IsSMTP();
                $mail->SMTPAuth   = true;// enable SMTP authentication
                $mail->SMTPSecure = "ssl";// sets the prefix to the server
                $mail->Host       = "smtp.gmail.com";// sets GMAIL as the SMTP server
                $mail->Port       = 465;// set the SMTP port for the GMAIL server
                $mail->Username   = GMAIL_USER;
                $mail->Password   = GMAIL_PASS;
        */
        $mail->IsHTML(true);
        $mail->FromName = FromName;
        $mail->From = From;
        $mail->AddAddress($to);
        $mail->Subject  = $subject;
        $mail->Body = $body;
        $mail->Send();
        return true;
}
	
function redirect($location = NULL){
    if($location != NULL){
        if (headers_sent()){
            die('<script type="text/javascript">window.location.href="' . $location . '";</script>');
        }else{
            header("location:{$location}");
            exit;
        }
//        header("location:{$location}");
//        exit;
    }
}
	
function autoload($class){
    require_once SITE_PATH . ENGINE_ROOM . '/'.  strtolower($class) . '.php';
}
	
function buildEmailBodyHtml($var_array = array()){
        $path =  SITE_PATH . ENGINE_ROOM . "/email/template.html";
        if(file_exists($path))
                $path =  SITE_PATH . ENGINE_ROOM . "/email/template.html";
        $fh = fopen($path, "r");
        $mailcontent = fread($fh, filesize($path));

        foreach($var_array as $key => $value){
                $mailcontent = str_replace("%$value[0]%", $value[1],$mailcontent);
        }

        $array_content[]=array("DATE", Date("l F d, Y"));
        $array_content[]=array("SITE_NAME", SITE_NAME);
        $array_content[]=array("SITE_URL", SITE_URL);

        foreach ($array_content as $key=>$value){
                $mailcontent = str_replace("%$value[0]%", $value[1],$mailcontent);
        }
        $mailcontent = stripslashes($mailcontent);
        fclose ($fh);
        return $mailcontent;
}

function buildTicketBodyHtml($var_array = array()){
        $path =  SITE_PATH . ENGINE_ROOM . "/email/ticket.html";
        if(file_exists($path))
                $path =  SITE_PATH . ENGINE_ROOM . "/email/ticket.html";
        $fh = fopen($path, "r");
        $ticketcontent = fread($fh, filesize($path));

        foreach($var_array as $key => $value){
                $ticketcontent = str_replace("%$value[0]%", $value[1],$ticketcontent);
        }

//        $array_content[]=array("DATE", Date("l F d, Y"));
//        $array_content[]=array("SITE_NAME", SITE_NAME);
//        $array_content[]=array("SITE_URL", SITE_URL);
//
//        foreach ($array_content as $key=>$value){
//                $mailcontent = str_replace("%$value[0]%", $value[1],$mailcontent);
//        }
        $ticketcontent = stripslashes($ticketcontent);
        fclose ($fh);
        return $ticketcontent;
}

function md5_base64($data){
     return base64_encode(pack('H*',md5($data)));
}
	
function isEmail($email){//check that the email is correct
        $pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/";
        return (preg_match($pattern, $email) > 0);
}
	
function generate_password( $length = 12, $special_chars = true, $extra_special_chars = false ) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        if ( $special_chars )
                $chars .= '!@#$%^&*()';
        if ( $extra_special_chars )
                $chars .= '-_ []{}<>~`+=,.;:/?|';

        $password = '';
        for ( $i = 0; $i < $length; $i++ ) {
                $password .= substr($chars, rand(0, strlen($chars) - 1), 1);
        }

        return $password;
}
	
	
function pagination($per_page = 10, $page = 1, $url = '', $total){    

    $adjacents = "2";

    $page = ($page == 0 ? 1 : $page); 
    $start = ($page - 1) * $per_page;                              

    $prev = $page - 1;                         
    $next = $page + 1;
    $lastpage = ceil($total/$per_page);
    $lpm1 = $lastpage - 1;

    $pagination = "";
    if($lastpage > 1)
    {  
        $pagination .= "<div class='pager'><ul class='paginationss'>";
        $pagination .= "<li class='details'>Page $page of $lastpage</li>";
                    if($prev != 0)
                             $pagination.= "<li><a href='{$url}$prev'>Prev</a></li>";

        if ($lastpage < 7 + ($adjacents * 2))
        {  
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li><a class='current'>$counter</a></li>";
                else
                    $pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                   
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))
        {
            if($page < 1 + ($adjacents * 2))    
            {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                   
                }
                $pagination.= "<li class='dot'>...</li>";
                $pagination.= "<li><a href='{$url}$lpm1'>$lpm1</a></li>";
                $pagination.= "<li><a href='{$url}$lastpage'>$lastpage</a></li>";     
            }
            elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
            {
                $pagination.= "<li><a href='{$url}1'>1</a></li>";
                $pagination.= "<li><a href='{$url}2'>2</a></li>";
                $pagination.= "<li class='dot'>...</li>";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                   
                }
                $pagination.= "<li class='dot'>..</li>";
                $pagination.= "<li><a href='{$url}$lpm1'>$lpm1</a></li>";
                $pagination.= "<li><a href='{$url}$lastpage'>$lastpage</a></li>";     
            }
            else
            {
                $pagination.= "<li><a href='{$url}1'>1</a></li>";
                $pagination.= "<li><a href='{$url}2'>2</a></li>";
                $pagination.= "<li class='dot'>..</li>";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                   
                }
            }
        }

        if ($page < $counter - 1){
            $pagination.= "<li><a href='{$url}$next'>Next</a></li>";
           // $pagination.= "<li><a href='{$url}$lastpage'>Last</a></li>";
        }else{
            //$pagination.= "<li><a class='current'>Next</a></li>";
           // $pagination.= "<li><a class='current'>Last</a></li>";
        }
        $pagination.= "</ul></div>\n";     
    }          
    return $pagination;
}

function fire_remote_script($url){
    $url_parsed = parse_url($url);
    $scheme = $url_parsed["scheme"];
    $host = $url_parsed["host"];
    $port = isset($url_parsed["port"]) ? $url_parsed["port"] : 80;
    $path = isset($url_parsed["path"]) ? $url_parsed["path"] : "/";
    $query = isset($url_parsed["query"]) ? $url_parsed["query"] : "";
    $user = isset($url_parsed["user"]) ? $url_parsed["user"] : "";
    $pass = isset($url_parsed["pass"]) ? $url_parsed["pass"] : "";
    $useragent="phpJobScheduler (http://www.dwalker.co.uk/phpjobscheduler/)";
    $referer = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
    $buffer="";
    if (function_exists('curl_exec')){
        $ch = curl_init($scheme."://".$host.$path);
        curl_setopt($ch, CURLOPT_PORT, $port);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch, CURLOPT_FAILONERROR,1); // true to fail silently
        curl_setopt($ch, CURLOPT_AUTOREFERER,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$query);
        curl_setopt($ch, CURLOPT_REFERER,$referer);
        curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
        curl_setopt($ch, CURLOPT_USERPWD,$user.":".$pass);
        $buffer = curl_exec($ch);
        curl_close($ch);
    }
    else if ( $fp = @fsockopen($host, $port, $errno, $errstr, 30) ){
        $header = "POST $path HTTP/1.0\r\nHost: $host\r\nReferer: $referer\r\n"
                  ."Content-Type: application/x-www-form-urlencoded\r\n"
                  ."User-Agent: $useragent\r\n"
                  ."Content-Length: ". strlen($query)."\r\n";
        if($user!= "") $header.= "Authorization: Basic ".base64_encode("$user:$pass")."\r\n";
        $header.= "Connection: close\r\n\r\n";
        fputs($fp, $header);
        fputs($fp, $query);
        if ($fp) while (!feof($fp)) $buffer.= fgets($fp, 8192);
            @fclose($fp);
    }
    return $buffer;
}

function checkGETValue($name){
    if(isset($_GET[$name])){
        return $_GET[$name];
    }else{
        return "";
    }
}

function randomPin(){
    $str = "";
    for($i = 0;$i < 4; $i++){
        $randNum = rand(0, 9);
        $str .= $randNum;
    }
    return $str;
}

function truncate($text, $chars = 25) {
    if(strlen($text) > $chars){
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
    return $text;
    }else{
        return $text;
    }
}

?>