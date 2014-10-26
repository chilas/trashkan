<?php
    defined("DBHOST") ? NULL : define("DBHOST", "localhost");//db username
    defined("DBNAME") ? NULL : define("DBNAME", "securepa_tk");//db name
    defined("DBUSER") ? NULL : define("DBUSER", "securepa_oil");//db username
    defined("DBPWD") ? NULL : define("DBPWD", "-H{L2BATJWMb");//db password
    defined("DBCHARSET") ? NULL : define("DBCHARSET", "utf8");// db charset
    defined("DBTIMEZONE") ? NULL : define("DBTIMEZONE", "");//db timezone
    defined("SITE_PATH") ? NULL : define("SITE_PATH", substr(dirname(__FILE__),0, -4));// site directory
    defined("SITE_URL") ? NULL : define("SITE_URL", "http://securepactltd.com/trashkan/");// site url
    defined("SITE_NAME") ? NULL : define("SITE_NAME", "TrashKan");//Name of d site*(it wil b needed in d email template)..kid's stuff

    
    /*
    *deal wit directory
    */
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    defined('BACKDS') ? null : define('BACKDS', '..' . DS);
    defined('ENGINE_ROOM') ? NULL : define('ENGINE_ROOM', 'libs');
    /*
    *set DEBUG variable...
    *if DEBUG is true, it will display error
    *if DEBUG is false, it will not display erro
    */
	
    defined("DEBUG") ? NULL : define("DEBUG", true);
    /*
    *dis is for mail
    */
    defined("FromName") ? null : define("FromName","noreply@XXX.com");//the from name(Person name)
    defined("From") ? null : define("From","Skill Commerce");//the from email(person email)

    /**
     *  put ur gmail username and gmail password,if u re using Gmail SMTP server
    */
    defined("GMAIL_USER") ? null : define("GMAIL_USER","");//ur Gmail user(it must be correct oh...)
    defined("GMAIL_PASS") ? null : define("GMAIL_PASS","");//ur Gmail password(it must be correct oh...)
    
    /*
     * IMG SETTING
     */
    define('MAX_IMG_SIZE','4000000');
   
    //sms username
    defined("SMS_USERNAME") ? null : define("SMS_USERNAME","raphson");
    //sms password
    defined("SMS_PASSWORD") ? null : define("SMS_PASSWORD", "thinMAN1991");
    
    defined("ENCTYPE") ? null : define("ENCTYPE","?,:=g>qQKo-gp5)F");
    
?>