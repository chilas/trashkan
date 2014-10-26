<?php
     require_once './libs/bootstrap.php';
	 echo hash::decode_data(session::_get('UNIQUE_ID_R'));
    if( isset($_POST['submit']) ){
	  if( !empty($_POST['qpic_up']) and !empty($_POST['fn']) and !empty($_POST['ln']) and !empty($_POST['e_addr'])                
	      and !empty($_POST['serv_addr']) and !empty($_POST['city'])and !empty($_POST['state']) ){
		  $fname = $_POST['fn'];
		  $lname = $_POST['ln'];
		  $emailAddr = $_POST['e_addr'];
		  $servAddr = $_POST['serv_addr'];
		  $city = $_POST['city'];
		  $state = $_POST['state'];
	      $pickUpQty = $_POST['qpic_up'];
		  $pickUpType = $_POST['pick_uptype'];
		  $requestPickupDate = date("l, F d, Y h:i" ,time()); 
		  $db = phpdb::GetInstance();
		  $uid = hash::decode_data(session::_get('UNIQUE_ID_R'));
		  $result = $db->insertRecords("tk_pickdetails", array(
            'uid' => $db->sanitizeData($uid),
			'fname' => $db->sanitizeData($fname),
            'lname' => $db->sanitizeData($lname),
            'email_address' => $db->sanitizeData($emailAddr),	
			'serviceAddress' => $db->sanitizeData($servAddr),
			'city' => $db->sanitizeData($city),		
            'state' => $db->sanitizeData($state),			
            'pickup_qty' => $db->sanitizeData($pickUpQty),
            'pickup_type' => $db->sanitizeData($pickUpType),
            'request_pickup_date' => $db->sanitizeData($requestPickupDate)
         ));
		 if($result){
            $id = $db->lastInsertID();
            return array(true, $id);
        }else{
            return array(false,0);
        }
	  }
	  else{
	  $output = "<div class=\"alert alert-block alert-danger fade in\">                           
  		<button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">                                
		<i class=\"fa fa-times\"></i>                           
		</button>                            
		All Fields Required!                        
		</div>";
	 }
	}
?>
<html>
<head>
  <title></title>
</head>
<body>
<?php if(!empty($output)) { echo $output; } ?>
<form action="" method="post">
   <select id="pickup" name="pick_uptype">
      <option value="organic">Organic Waste</option>
	  <option value="inorganic">Inorganic Waste</option>
   </select>
   <div>
   <span>First Name</span>
   </div>
   <div>
   <input type="text" name="fn" />
   </div>
   <div>
   <span>Last Name</span>
   </div>
   <div>
   <input type="text" name="ln" />
   </div>
   <div>
   <span>Email Address</span>
   </div>
   <div>
   <input type="text" name="e_addr" />
   </div>
   <div>
   <span>Service Address</span>
   </div>
   <div>
   <input type="text" name="serv_addr" />
   </div>
   <div>
   <span>City</span>
   </div>
   <div>
   <input type="text" name="city" />
   </div>
   <div>
   <span>State or Province</span>
   </div>
   <div>
   <input type="text" name="state" />
   </div>
   <div>
   <span>Quantity</span>
   </div>
   <div>
   <input type="text" name="qpic_up" />
   </div>
   <input type="submit" name="submit" value="Request For Pick Up" />
</form>
</body>
</html>