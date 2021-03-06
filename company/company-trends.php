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

					<?php $menu='trends'; include "includes/company_profile_menu.php"; ?>

				</section>
			</aside>
			<aside class="profile-info col-lg-9">
				<section class="panel">
					<div class="panel-body profile-activity">
						<h5 class="pull-right">12 August 2013</h5>
						<div class="activity terques">
							<span>
								<i class="icon-bolt"></i>
							</span>
							<div class="activity-desk">
								<div class="panel">
									<div class="panel-body">
										<div class="arrow"></div>
										<i class=" icon-time"></i>
										<h4>Trends</h4>
										<!-- <p>Unicode Plastics has offerred you ₦500 for your recent <a href="http://localhost/trashkan/requests-single.php?id=">posts</a> -->

										<table class="table table-striped table-advance table-hover">
											<thead>
												<tr>
													<th><i class="icon-bullhorn"></i> Name</th>
													<th class="hidden-phone"><i class="icon-question-sign"></i> Description</th>
													<th><i class="icon-bookmark"></i>Make Bid</th>
													<th></th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#">Vector Ltd</a></td>
													<td class="hidden-phone">Lorem Ipsum dorolo imit</td>
													<td>
														<form class="form-inline" role="form">
															<div class="form-group">
																<input type="text" class="form-control input-sm" id="bid" placeholder="Enter bid">
															</div>
															<button type="submit" class="btn btn-success btn-sm"><i class="icon-ok"></i> </button>
														</form>
													</td>
													<td>
														<button class="btn btn-info btn-sm" data-toggle="modal" href="#myModal"><i class="icon-info"></i></button>

													</td>
												</tr>
												<tr>
													<td><a href="#">Vector Ltd</a></td>
													<td class="hidden-phone">Lorem Ipsum dorolo imit</td>
													<td>
														<form class="form-inline" role="form">
															<div class="form-group">
																<input type="text" class="form-control input-sm" id="bid" placeholder="Enter bid">
															</div>
															<button type="submit" class="btn btn-success btn-sm"><i class="icon-ok"></i> </button>
														</form>
													</td>
													<td>
														<button class="btn btn-info btn-sm" data-toggle="modal" href="#myModal"><i class="icon-info"></i></button>

													</td>
												</tr>
												<tr>
													<td><a href="#">Vector Ltd</a></td>
													<td class="hidden-phone">Lorem Ipsum dorolo imit</td>
													<td>
														<form class="form-inline" role="form">
															<div class="form-group">
																<input type="text" class="form-control input-sm" id="bid" placeholder="Enter bid">
															</div>
															<button type="submit" class="btn btn-success btn-sm"><i class="icon-ok"></i> </button>
														</form>
													</td>
													<td>
														<button class="btn btn-info btn-sm" data-toggle="modal" href="#myModal"><i class="icon-info"></i></button>

													</td>
												</tr>
											</tbody>
										</table>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Modal -->
			<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title"><i class="icon-info"></i></h4>
						</div>
						<div class="modal-body">
							<p>Contact Person: Otemuyiwa Prosper</p>
							<p>Address: [Address], [City/Town], [State]</p>
							<p>Mobile number: +234 802 655 9071</p>


						</div>
						<div class="modal-footer">
							<!-- <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button> -->
							<button data-dismiss="modal" class="btn btn-success" type="button">Okay</button>
						</div>
					</div>
				</div>
			</div>
			<!-- modal -->
		</aside>

	</div>

</section>
</section>
<!--main content end-->

<?php include_once "../includes/footer.php" ?>