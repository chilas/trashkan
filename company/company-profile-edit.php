<?php 
	require_once '../libs/bootstrap.php';
    
    include_once "../includes/protectsec_.php"; 
	include_once "../includes/header.php"; 
?>
<?php include_once "../includes/company_top_bar.php" ?>
<?php include_once "../includes/company_nav_bar.php" ?>

<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!--main content goes here-->

		<div class="row">
			<aside class="profile-nav col-lg-3">
				<section class="panel">
					<div class="user-heading round">
						<a href="#">
							<img src="img/profile-avatar.jpg" alt="">
						</a>
						<h1>Unicode Plastics</h1>
						<p>+234 802 655 9071</p>
					</div>
					<?php $menu="edit"; include("includes/company_profile_menu.php"); ?>
				</section>
			</aside>

			<aside class="profile-info col-lg-9">
				<section class="panel">
					<div class="bio-graph-heading">
						Please edit your profile if and only if you have found any information to be incorrect or if you are new.
					</div>
					<div class="panel-body bio-graph-info">
						<h1> Profile Info</h1>
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label  class="col-lg-2 control-label">Company Name</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="f-name" placeholder=" ">
								</div>
							</div>
							<div class="form-group">
								<label  class="col-lg-2 control-label">Contact Person</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="l-name" placeholder=" ">
								</div>
							</div>

							<div class="form-group">
								<label  class="col-lg-2 control-label">Email</label>
								<div class="col-lg-6">
									<input type="email" class="form-control" id="email" placeholder=" ">
								</div>
							</div>
							<div class="form-group">
								<label  class="col-lg-2 control-label">Address</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" placeholder=" " >
								</div>
							</div>
							<div class="form-group">
								<label  class="col-lg-2 control-label">City/Town</label>
								<div class="col-lg-6">
									<input type="text" class="form-control" placeholder=" " >
								</div>
							</div>
							<div class="form-group">
								<label  class="col-lg-2 control-label">State</label>
								<div class="col-lg-6">
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
								</div>
							</div>

							<div class="form-group">
								<label  class="col-lg-2 control-label">Change Avatar</label>
								<div class="col-lg-6">
									<input type="file" class="file-pos" id="exampleInputFile">
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-success">Save</button>
									<button type="button" class="btn btn-default">Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</section>
				<section>
					<div class="panel panel-danger">
						<div class="panel-heading"> Create new password </div>
						<div class="panel-body">
							<form class="form-horizontal" role="form" _lpchecked="1">
								<div class="form-group">
									<label class="col-lg-2 control-label">Password</label>
									<div class="col-lg-6">
										<input type="password" class="form-control" id="c-pwd" placeholder=" ">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Re-Enter Password</label>
									<div class="col-lg-6">
										<input type="password" class="form-control" id="c-pwd" placeholder=" " >
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn btn-info">Save</button>
										<button type="button" class="btn btn-default">Cancel</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</section>
				<section>
					<section class="panel panel-info">
						<header class="panel-heading">
							Interests
						</header>
						<div class="panel-body">
							<form class="form-horizontal" role="form" _lpchecked="1">
								<div class="form-group">
									<!-- <label class="col-lg-2 control-label"></label> -->
									<div class="col-lg-12">
									<textarea class="form-control" placeholder="Ex. Paper, Electronics, Plastics..." ></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<button type="submit" class="btn btn-block btn-shadow btn-success">Okay</button>
									</div>
								</div>
							</form>
						</div>
					</section>
				</section>
				
			</aside>	
		</div>

	</section>
</section>
<!--main content end-->
<!--custom tagsinput-->
<script src="js/jquery.tagsinput.js"></script>
<?php include_once "../includes/footer.php" ?>