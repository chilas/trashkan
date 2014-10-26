<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author Ayeni Olusegun
 */

    require_once ('../libs/bootstrap_slim.php');

    require_once SITE_PATH . ENGINE_ROOM .DS . 'Slim' . DS . 'Slim.php';

    // Register Slim's autoloader
    \Slim\Slim::registerAutoloader();
    
    $app = new \Slim\Slim();

    function echoResponse($status_code, $response) {
       $app = \Slim\Slim::getInstance();
       //Http Status Code
       $app->status($status_code);
       //setting response content type to json
       $app->contentType('application/json');
       echo json_encode($response);
    }
   
   
    //test
    $app->get('/get/', function ()  use ($app){ 
        
        echo"Working";
        
    });
    
    $app->post('/loginuser/', function ()  use ($app){ 
        
        $phone_number = $app->request()->post('phone_number');
        $pin = $app->request()->post('pin');
        
        $response = array();
        
        $acc = new account();
        list($status, $id ) = $acc->loginRuser($phone_number, $pin);
        $response['error'] = $status;
        $response['message'] = $id;
        echoResponse(200, $response);
    });
    
    $app->post('/createuser/', function ()  use ($app){ 
        
        $phone_number = $app->request()->post('phone_number');
        $lname = $app->request()->post('lname');
        $fname = $app->request()->post('fname');
        
        $acc = new account();
        list($status, $id) = $acc->createRUser($fname, $lname, $phone_number);
        echo $status ? "1" : "0";
    });
    
    
    $app->get('/create/',function() use ($app) {

        echo "It has been created ";
        
    });
    //should always be the last..
    $app->run();
?>