<?php    
    require_once './libs/bootstrap.php';    
    print_r($_POST);    
	if(isset($_POST['user_login'])){ 
     	echo "here";        
		//print_r($_POST);     
		$acc = new account();        
		list($status, $id) = $acc->loginRuser($_POST['phone_no'], $_POST['pin']);       
		if($status){            
		session::_set("UNIQUE_ID_R", hash::encode_data($id));            
		session::_set("UNIQUE_PHONE", hash::encode_data($_POST['phone_no']));            
		echo "GUDDDDDUUUUUDDDDUUUDDUUDD";
          redirect('dashboard.php?user=1');        
		}else{            
		$output = '<div class="alert alert-block alert-danger fade in">                           
		<button data-dismiss="alert" class="close close-sm" type="button">                              
		<i class="fa fa-times"></i>                           
		</button>                            
		<strong>Oops!</strong> Incorrect Login Detail                        
		</div>';        
		}    
	}    
		
		//Company Login  
		if(isset( $_POST['company_submit']) ){       
		if( !empty($_POST['email_addr']) && !empty($_POST['pwd']) ){	
                 $acc = new account();        
				list($status, $id) = $acc->loginCompuser($_POST['email_addr'], $_POST['pwd']);       
				if($status){            
				session::_set("UNIQUE_ID_COMP", hash::encode_data($id));            
				  redirect('dashboard.php?company=1');        
				}else{            
				$output = '<div class="alert alert-block alert-danger fade in">                           
				<button data-dismiss="alert" class="close close-sm" type="button">                              
				<i class="fa fa-times"></i>                           
				</button>                            
				<strong>Oops!</strong> Incorrect Login Detail                        
				</div>';    		
		       }
         }			   
		else{          
		}  
	}?>
		
		<!Doc html><html><head><title></title></head><body>    
		<h2>User Login</h2>       
		<?php if(!empty($output)) echo $output; ?>	<form action="" method="post">		
		<div>		   
		<span> Phone Number: </span>		
		</div>		
		<div>		  
		<input type="text" name="phone_no" />		
		</div>		
		<div>		  
		<span> Pin: </span>		
		</div>
        <div>		
		<input type="password" name="pin" />		
		</div>		
		<div>			
		<input type="submit" name="user_login" value="Login" />		
		</div>	
		</form>		
		<h2>Company Login</h2>	
		<form action="" method="post">		
		<div>		   
		<span> Email Address: </span>		
		</div>		
		<div>		   
		<input type="email" name="email_addr" />		
		</div>		
		<div>		  
		<span> Password:  </span>		
		</div>		   
		<input type="password" name="pwd" />		
		</div>		
		<div>		
		<input type="submit" name="company_submit" value="Login" />		
		</div>	
		</form>
	</body>
</html>