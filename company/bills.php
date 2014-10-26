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
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-12">
						<section class="panel">
							<header class="panel-heading">
								Items to pay for
							</header>
							<table class="table table-striped table-advance table-hover">
								<thead>
									<tr>
										<th><i class="icon-sort-by-order"></i></th>
										<th class="hidden-phone"><i class="icon-file-text"></i> Description</th>
										<th><i class=""></i> Costs</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td class="hidden-phone">3 bags of Eva water BOTTLES</td>
										<td>₦500</td>
										<td>
											<button class="btn btn-success btn-xs"><i class="icon-plus"></i></button>
											<button class="btn btn-danger btn-xs"><i class="icon-minus "></i></button>
										</td>
									</tr>
									
									<tr>
										<td>2</td>
										<td class="hidden-phone">1 truck of rubber Slippers</td>
										<td>₦300</td>
										<td>
											<button class="btn btn-success btn-xs"><i class="icon-plus"></i></button>
											<button class="btn btn-danger btn-xs"><i class="icon-minus "></i></button>
										</td>
									</tr>

									<tr>
										<td>3</td>
										<td class="hidden-phone">2 trucks of Papers </td>
										<td>₦2100</td>
										<td>
											<button class="btn btn-success btn-xs"><i class="icon-plus"></i></button>
											<button class="btn btn-danger btn-xs"><i class="icon-minus "></i></button>
										</td>
									</tr>
								</tbody>
							</table>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<button type="button" class="btn btn-success btn-block btn-shadow btn-lg "><i class="icon-plus"></i> Add all </button>

					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-12">
						<section class="panel">
							<header class="panel-heading">
								
							</header>
							<form style="margin-top: 10px" class="form-signin" action="index.php">
								<h2 class="form-signin-heading">Total: ₦2900</h2>
								<div class="login-wrap">
									<select class="form-control" name="card-type">
										<option>Select Card type</option>
										<option value="mastercard">Mastercard</option>
										<option value="visacard">Visacard</option>
										<option value="verve">Verve</option>
										<option value="paga">Paga</option>
										<option value="interswitch">Interswitch</option>
										<option value="etranzact">ETranzact</option>
									</select>
									<input type="text" class="form-control" required="required" placeholder="Name on card" >
									<input type="text" class="form-control" required="required" placeholder="Card Number" >
									<input type="date" class="form-control" style="margin-bottom: 10px" required="required" placeholder="Expiry date" >
									<input type="password" size="3" maxlength="3" required="required" class="form-control" placeholder="CVV">
									<button class="btn btn-lg btn-login btn-block" type="submit">Pay</button

									</div>
									</form>

								</section>
							</div>
						</div>
					</div>	
				</section>
			</section>
			<?php include_once "../includes/footer.php"; ?>