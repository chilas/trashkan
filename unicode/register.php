<?php    require_once './libs/bootstrap.php';      
	if( isset($_POST['com_submit'])){        
	   if(!empty($_POST['comp_name'])and !empty($_POST['contact_Pname']) and !empty($_POST['comp_phone']) and !empty($_POST['city'])                
	      and !empty($_POST['state']) and !empty($_POST['com_addr']) and !empty($_POST['email_addr']) and !empty($_POST['com_pwd'])                
		  and !empty($_POST['c_com_pwd'])){            
		      if($_POST['com_pwd'] === $_POST['c_com_pwd']){                
			     $acc = new account();                    
				 list($status, $id) = $acc->createResdential($_POST['comp_name'], $_POST['contact_Pname'],$_POST['com_addr'], $_POST['city'], $_POST['state'], $_POST['email_addr'], $_POST['comp_phone'], $_POST['c_com_pwd']);                                
				 if($status){                    
				   $output = "<div class=\"alert alert-block alert-danger fade in\">                           
				   <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">                               
				   <i class=\"fa fa-times\"></i>                            
				   </button> Done!                             
				   " . $id . "                        
				   </div>";               
				   }else{                    
				   $output = "<div class=\"alert alert-block alert-danger fade in\">                            
				   <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">                                
				   <i class=\"fa fa-times\"></i>                            
				   </button>                             
				   System error                        
				   </div>";                
				   }            
			} else {                
			 $output = "<div class=\"alert alert-block alert-danger fade in\">                            
			 <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">                               
 			 <i class=\"fa fa-times\"></i>                            
			 </button>                            
			 Passwords ain't the same                        
			 </div>";            
			 }          
		}else{           
 		$output = "<div class=\"alert alert-block alert-danger fade in\">                           
  		<button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">                                
		<i class=\"fa fa-times\"></i>                           
		</button>                            
		All Fields Required!                        
		</div>";         
		}      
	  }      
	  
	  if(isset( $_POST['user_submit'] )){      
	  }?>
	  <!DOCTYPE html>
	  <html>
	  <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <link rel="stylesheet" type="text/css" media="all" href="style.css" />
	  <title>Register</title></head><body>        
	  <h2> Company Registration </h2>        
	  <form action="" method="post">                
	  <div>		
	   <h2>Company Name: </h2>		 
	  </div>		 
	  <div>			 
	  <input type="text" name="comp_name" />		 
	  </div>		 
	  <div>		     
	  <h2>Contact Person Name: </h2>		
	  </div>		 
	  <div>			 
	  <input type="text" name="contact_Pname" />		 
	  </div>		  
	  <div>		     
	  <h2>Company Phone No: </h2>		 
	  </div>
	  <div>			 
	  <input type="text" name="comp_phone" />		 
	  </div>		 
	  <div>		     
	  <h2>City:</h2>		 
	  </div>		
	  <div>			 
	  <input type="text" name="city" />		 
	  </div>		 
	  <div>		     
	  <h2>State </h2>		 
	  </div>		 
	  <div>			 
	  <select id="state" >                        
	  <option value="">Please select region, state or province</option>                        
	  <option value="Lagos">Lagos</option>                        
	  <option value="Abuja">Abuja</option>                        
	  <option value="Rivers">Rivers</option>                        
	  <option value="Abia">Abia</option>                        
	  <option value="Adamawa">Adamawa</option>                        
	  <option value="Akwa Ibom">Akwa Ibom</option>                       
	  <option value="Anambra">Anambra</option>                        
	  <option value="Bauchi">Bauchi</option>                        
	  <option value="Bayelsa">Bayelsa</option>                      
	  <option value="Benue">Benue</option>                    
	  <option value="Borno">Borno</option>                    
	  <option value="Cross River">Cross River</option>        
	  <option value="Delta">Delta</option>                    
	  <option value="Ebonyi">Ebonyi</option>                  
      <option value="Edo">Edo</option>                        
	  <option value="Ekiti">Ekiti</option>                    
	  <option value="Enugu">Enugu</option>                    
	  <option value="Gombe">Gombe</option>                    
	  <option value="Imo">Imo</option>                        
	  <option value="Jigawa">Jigawa</option>                  
      <option value="Kaduna">Kaduna</option>                   
	  <option value="Kano">Kano</option>                       
	  <option value="Katsina">Katsina</option>                 
	  <option value="Kebbi">Kebbi</option>                     
	  <option value="Kogi">Kogi</option>                       
	  <option value="Kwara">Kwara</option>                     
	  <option value="Nasarawa">Nasarawa</option>               
	  <option value="Niger">Niger</option>                     
	  <option value="Ogun">Ogun</option>                       
	  <option value="Ondo">Ondo</option>                       
	  <option value="Osun">Osun</option>                       
	  <option value="Oyo">Oyo</option>                       
	  <option value="Plateau">Plateau</option>               
	  <option value="Sokoto">Sokoto</option>                 
	  <option value="Taraba">Taraba</option>                 
	  <option value="Yobe">Yobe</option>                     
	  <option value="Zamfara">Zamfara</option>               
	  </select>		 
	  </div>		 
	  <div>		     
	  <h2>Address: </h2>		
	  </div>		
	  <div>			 
	  <input type="text" name="com_addr" />		 
	  </div>		  
	  <div>		     
	  <h2>Email Address </h2>		
	  </div>		 
	  <div>			 
	  <input type="email" name="email_addr" />		
	  </div>		  
	  <div>		     
	  <h2>Create Password: </h2>		 
	  </div>		
	  <div>			
	  <input type="password" name="com_pwd" />		 
	  </div>                            
	  <div>		     
	  <h2>Confirm Password: </h2>		 
	  </div>		 
	  <div>			 
	  <input type="password" name="c_com_pwd" />		 
	  </div>		 
	  <div>		    
	  <input type="submit" name="com_submit" value="submit" />		 
	  </div>	 
	  </form>     
	  <h2> User Registration </h2>	 
	  <form action="" method="post">	    
	  <div>		   
	  <h2> First Name </h2>		   
	  <input type="text" name="fname" />	
	  </div>		
	  <div>		   
	  <h2> Last Name </h2>		   
	  <input type="text" name="lname" />		
	  </div>		
	  <div>		   
	  <h2> Phone No </h2>		   
	  <input type="text" name="phone_no" />		
	  </div>		
	  <div>		   
	  <input type="submit" name="user_submit" value="Submit" />		
	  </div>			 
	  </form>	 
  </body>
</html>