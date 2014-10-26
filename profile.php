<?php 
    require_once 'libs/bootstrap.php';
    
    include_once "includes/protectsec.php"; 
    include_once "includes/header.php"; 
?>
<?php include_once "includes/user_top_bar.php" ?>
<?php include_once "includes/user_nav_bar.php" ?>

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
						<h1>Chilezie Unachukwu</h1>
                                                <p><?php echo hash::decode_data(session::_get('UNIQUE_PHONE')); ?></p>
					</div>

					<?php $menu='recent'; include "includes/profile-menu.php"; ?>

				</section>
			</aside>
			<aside class="profile-info col-lg-9">
				<section class="panel">
					<div class="panel-body profile-activity">
						<h5 class="pull-right">12 October 2014</h5>
						<div class="activity terques">
							<span>
								<i class="icon-truck"></i>
							</span>
							<div class="activity-desk">
								<div class="panel">
									<div class="panel-body">
										<div class="arrow"></div>
										<i class=" icon-time"></i>
										<h4>10:59 AM</h4>
										<p>Vector Ltd has offerred you ₦5000 for your recent <a href="http://localhost/trashkan/requests-single.php?id=">posts</a>

											<table class="table table-striped table-advance table-hover">
												<thead>
													<tr>
														<th><i class="icon-bullhorn"></i> Company</th>
														<th class="hidden-phone"><i class="icon-question-sign"></i> Description</th>
														<th><i class="icon-bookmark"></i> Bid</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="#">Vector Ltd</a></td>
														<td class="hidden-phone">Recyclable Tyres</td>
														<td>₦5,000</td>
														<td>
															<button class="btn btn-success btn-xs"><i class="icon-ok"></i></button>
														</td>
													</tr>
													<tr>
														<td><a href="#">Unicode Plastics</a></td>
														<td class="hidden-phone">Recyclable Plastics</td>
														<td>₦3,210</td>
														<td>
															<!-- <button class="btn btn-info btn-xs"><i class="icon-ok"></i></button> -->
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

					<div class="panel-body profile-activity">
						<h5 class="pull-right">30 September 2014</h5>
						<div class="activity terques">
							<span>
								<i class="icon-truck"></i>
							</span>
							<div class="activity-desk">
								<div class="panel">
									<div class="panel-body">
										<div class="arrow"></div>
										<i class=" icon-time"></i>
										<h4>9:45 AM</h4>
										<p>Unicode Plastics has offerred you ₦1,300 for your recent <a href="http://localhost/trashkan/requests-single.php?id=">posts</a>

											<table class="table table-striped table-advance table-hover">
												<thead>
													<tr>
														<th><i class="icon-bullhorn"></i> Company</th>
														<th class="hidden-phone"><i class="icon-question-sign"></i> Description</th>
														<th><i class="icon-bookmark"></i> Bid</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="#">Vector Ltd</a></td>
														<td class="hidden-phone">Rubber Band</td>
														<td>₦1,000</td>
														<td>
															<button class="btn btn-info btn-xs"><i class="icon-ok"></i></button>
														</td>
													</tr>
													<tr>
														<td><a href="#">Unicode Plastics</a></td>
														<td class="hidden-phone">Eva Bottle</td>
														<td>₦1,300</td>
														<td>
															<button class="btn btn-info btn-xs"><i class="icon-ok"></i></button>
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
				<div class="text-center">
					<a class="btn btn-danger" href="javascript:;">Load Old Activities</a>
				</div>
			</aside>

		</div>

	</section>
</section>
<!--main content end-->

<?php include_once "includes/footer.php" ?>