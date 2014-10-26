<?php
    require_once("app_config.php");
    require_once("functions.php");
	
    if (!DEBUG){
        //do not display any error message
        error_reporting(0);
        ini_set('display_errors','off');
        set_error_handler("error_handler");
    }
    else{
        //displays error messages and debug
        error_reporting(E_ALL | E_STRICT);
        ini_set('display_errors','on');
    }
	
    spl_autoload_register("autoload");
    
    
?>