<?php 
require_once 'libs/bootstrap.php';
    
    include_once "includes/protectsec.php";
include_once "includes/header.php"; 
?>
<?php include_once "includes/user_top_bar.php" ?>
<?php include_once "includes/user_nav_bar.php" ?>

<?php
if( isset($_POST['pick_submit'])){ 
   if(!empty($_POST['category']) and !empty($_POST['p_type']) and !empty($_POST['p_qty']) and !empty($_POST['address'])                
		  and !empty($_POST['city']) and !empty($_POST['state'])){  
				//print_r($_POST);
				$pu = new pickup();
                list($status, $id) = $pu->addPickUp($_POST['address'], $_POST['city'],  $_POST['state'], $_POST['p_qty'], $_POST['p_type'], $_POST['comment'], $_POST['category']);
				
				 if($status){                    
				   $output = "<div class=\"alert alert-block alert-danger fade in\">                           
				   <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">                               
				   <i class=\"fa fa-times\"></i>                            
				   </button> Added Successfully                        
				   </div>";               
				   }else{                    
				   $output = "<div class=\"alert alert-block alert-danger fade in\">                            
				   <button type=\"button\" class=\"close close-sm\" data-dismiss=\"alert\">                                
				   <i class=\"fa fa-times\"></i>                            
				   </button>                             
				   System error                        
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
?>
<!-- main content start-->
<section id="main-content">
	<section class="wrapper">
		<!--main content goes here-->

		<div class="row">
			<div class="col-lg-6">
				<section class="panel">
					<header class="panel-heading">
						<i class="icon-truck icon-3x"></i> Request form
					</header>
					<div class="panel-body">
						
						<form role="form" method="post">
						<?php if(!empty($output)) echo $output; ?>
							<div class="form-group inline">
								<label for="category">Select Category</label>
								<div class="radio">
									<label title="Example: Food waste, Paper, Garden waste, e.t.c">
										<input type="radio" name="category" checked="checked" value="organic"> Organic Waste

									</label>
								</div>
								<div class="radio">
									<label title="Example: Plastics, Wood, e.t.c">
										<input type="radio" name="category" value="inorganic"> Inorganic Waste

									</label>
								</div>
							</div>
							
							<div class="form-group">
								<label for="exact">What exactly?</label>
								<input type="text" class="form-control" id="exactly" placeholder="Ex. Paper, Bottles..." name="p_type">
							</div>
							<div class="form-group">
								<label for="weight">Weight Estimation</label>
								<input type="text" class="form-control" id="weight" placeholder="Ex. One Truck load, a carton or 65KG..." name="p_qty">
							</div>
							<div class="form-group">
								<label for="exact">Address</label>
								<input type="text" class="form-control" id="exactly" placeholder="Address...." name="address">
							</div>
							<div class="form-group">
								<label for="weight">City</label>
								<input type="text" class="form-control" id="weight" placeholder="City..." name="city">
							</div>
							<div class="form-group">
								<label for="exact">State</label>
								<input type="text" class="form-control" id="exactly" placeholder="State..." name="state">
							</div>
							<div class="form-group">
								<label for="weight">Comments</label>
								<textarea class="form-control" id="weight" placeholder="Comment..." name="comment"></textarea>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I agree to the Terms of Service
								</label>
							</div>
							<input type="submit" class="btn btn-shadow btn-info" name="pick_submit">
						</form>

					</div>
				</section>
			</div>
			<div class="col-lg-6">
				<section class="panel">
					<header class="panel-heading">
						<i class="icon-file-text-alt icon-3x"></i> Terms of service agreement
					</header>
					<div class="panel-body">
						All users should have a sense of honesty and be modest in the kind of wastes they want to give out as recycleable.
						Any user thats found in any form of deceit just to make money off this platform would be sanctioned!
					</div>
				</section>
			</div>	
		</section>
	</section>

	<?php include_once "includes/footer.php" ?>