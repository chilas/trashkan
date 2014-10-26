<?php 
	require_once '../libs/bootstrap.php';
    
    include_once "../includes/protectsec_.php"; 
	include_once "../includes/header.php"; 
?>
<?php include_once "../includes/top_bar.php" ?>

<div class="container">
	<form class="form-signin" action="dispute.php">
	<h2 class="form-signin-heading">Dispute Form</h2>
	<div class="login-wrap">
		<input type="text" class="form-control" required="required" placeholder="Fullname" name="fullname" autofocus>
		<input type="text" class="form-control" required="required" placeholder="Email" name="email">
		<input type="text" class="form-control" placeholder="Transaction ID if any" name="tranz-id">
		<textarea class="form-control" placeholder="Please state the problem here." rows="7" style="margin-bottom: 10px" required></textarea>
		<button type="submit" data-toggle="myModal" class="btn btn-lg btn-login btn-block">Okay</button>
	</div>
</form>
</div>


<?php include_once "../includes/footer.php"; ?>