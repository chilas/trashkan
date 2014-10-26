    <?php 
       require_once 'libs/bootstrap.php';
        
       if(isset( $_POST['user_submit'] )){
            if(!empty($_POST['fname']) and !empty($_POST['lname']) and !empty($_POST['phone_no'])){
                $acc = new account();
                list($status, $id) = $acc->createRUser($_POST['fname'], $_POST['lname'], $_POST['phone_no']);
                if($status){
                    $output = "<div class=\"alert alert-block alert-danger fade in\">
                        <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                        Done! Your Pin Has Been Sent To Your Phone
                    </div>";
                }else{
                    $output = "<div class=\"alert alert-block alert-danger fade in\">
                        <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                        System Error.Please Try Again!
                    </div>";
                }
             } else {
                 $output = "<div class=\"alert alert-block alert-danger fade in\">
                            <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">
                                <i class=\"fa fa-times\"></i>
                            </button>
                            All Field Required!
                        </div>";
             }
        }
		
		if( isset($_POST['com_submit'])){
        if(!empty($_POST['comp_name'])and !empty($_POST['contact_pname']) and !empty($_POST['comp_phone']) and !empty($_POST['city'])
                and !empty($_POST['state']) and !empty($_POST['com_addr']) and isEmail($_POST['email_addr']) and !empty($_POST['com_pwd'])
                and !empty($_POST['c_com_pwd'])){
            if($_POST['com_pwd'] === $_POST['c_com_pwd']){
                $acc = new account();    
                list($status, $id) = $acc->createcompany($_POST['comp_name'], $_POST['contact_pname'], 
                        $_POST['com_addr'], $_POST['city'], $_POST['state'], $_POST['email_addr'], $_POST['comp_phone'], $_POST['c_com_pwd']);
                
                if($status){
                    $output = "<div class=\"alert alert-block alert-danger fade in\">
                            <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">
                                <i class=\"fa fa-times\"></i>
                            </button> Done! 
                        </div>";
                }else{
                    $output = "<div class=\"alert alert-block alert-danger fade in\">
                            <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">
                                <i class=\"fa fa-times\"></i>
                            </button>
                             System error!
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
                            All Fields and Valid Email Are Required!
                        </div>";
         }
      }
    include_once "includes/header.php"; 
    ?>
    <?php include_once "includes/nod.php"; ?>
<div style="height:100%; background-image: url('img/landing-page.jpg'); background-size: cover;background-attachment: fixed;background-clip: content-box;/* background-size: contain; */position: absolute;width: 100%;z-index: -990999999;"></div>
    <div class="container" style="">
    <div class="container">

    	<?php if(isset($_GET['type']) and $_GET['type'] == 'user'){ ?>

        <form class="form-signin" action="" method="post">
    		<h2 class="form-signin-heading">user registration</h2>
    		<div class="login-wrap">
                        <?php if(!empty($output)) echo $output; ?>
    			<input type="text" class="form-control" required="required" placeholder="Firstname" name="fname" autofocus>
    			<input type="text" class="form-control" required="required" placeholder="Lastname" name="lname">
                        <input type="text" class="form-control" required="required" placeholder="Mobile Number (+234 xxx xxx xxxx)" name="phone_no">
<!--    			<a href="#myModal" data-toggle="modal" class="btn btn-lg btn-login btn-block" >Okay</a>-->
<input class="btn btn-lg btn-block" style="background: #f67a6e;
color: #fff;
text-transform: uppercase;
font-weight: 300;
font-family: 'Open Sans', sans-serif;
box-shadow: 0 4px #e56b60;
margin-bottom: 20px;" name="user_submit" type="submit" value="OKAY" />
    			<div class="registration">
    				<a href="<?php echo SITE_URL?>registration.php?type=company">Create a company account instead</a>
    			</div>
    		</div>
    	</form>

    	<?php } else if (isset($_GET['type']) and $_GET['type'] == 'company') { ?>

    	<form class="form-signin" action="" method="post">
    		<h2 class="form-signin-heading">company registration <br>
    			<small><span class="">
    				<a style="color: #f67a6e" href="<?php echo SITE_URL?>registration.php?type=user">
    					Create a regular user account instead
    				</a>
    			</span>
    		</small>
    	</h2>

    	<div class="login-wrap">
                <?php if(!empty($output)) echo $output; ?>
    		<input type="text" class="form-control" placeholder="Company name" name="comp_name"   autofocus>
    		<input type="text" class="form-control" placeholder="Contact person" name="contact_pname" >
			<input type="text" class="form-control" placeholder="Phone Number" name="comp_phone" >
    		<input type="email" class="form-control" placeholder="Email" name="email_addr">
    		<input type="password" class="form-control" placeholder="Password" name="com_pwd" >
    		<input type="password" class="form-control" placeholder="Re-type Password" name="c_com_pwd">
    		<input type="text" class="form-control" placeholder="Address" name="com_addr">
    		<input type="text" class="form-control" placeholder="City/Town" name="city">
    		<select name="state" class="form-control input-sm m-bot15">
    			<option>Please select state</option>                        
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
    		<label class="checkbox">
    			<input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
    		</label>

    		<button class="btn btn-lg btn-block"  style="background: #f67a6e;
color: #fff;
text-transform: uppercase;
font-weight: 300;
font-family: 'Open Sans', sans-serif;
box-shadow: 0 4px #e56b60;
margin-bottom: 20px;" type="submit" name="com_submit">Submit</button>

    		<div class="registration">
    			Already Registered.
    			<a class="" href="<?php echo SITE_URL; ?>">
    				Login
    			</a>
    		</div>
    	</div>
    </form>

    <?php } else {
    	header("location:" . SITE_URL . "registration.php?type=user");
    } ?>
</div>

<?php include_once "includes/footer.php"; ?>