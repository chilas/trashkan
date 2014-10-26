<?php
    require_once './libs/bootstrap.php';

	if( isset($_GET['user']) ){
	    echo "Welcome to the User Dashboard, pls keep calm and place Company Order!";
	?>
	  <br/>
	<span><b>User Profile</b></span><br/>
    ======================
	
	
	<br/>
	<a href="logout.php">Log Out</a>
    ======================
	
	
	
	<br/>
	<span><b>Companies</b></span><br/>
    =======================
	
	<a href="pickup.php"> Request Pick Up </a>
	
	<br/>
	<a href="viewp.php">View Pick Up Offers that Companies have Placed an Amount On</a>
    ======================
	
	  
	<?php
	}else{
		echo "Welcome to your Page, Manage Well biko";
	}
	
	
	// When Company logs into the Dashboard
	if( isset($_GET['company']) ){
	    echo "Welcome to the Company Dashboard, pls keep calm and place Accept Offer!";
	?>
	  <br/>
	<span><b>User Profile</b></span><br/>
    ======================
	
	
	<br/>
	<a href="logout.php">Log Out</a>
    ======================
	
	
	
	<br/>
	<span><b>Companies</b></span><br/>
    =======================
	<?php
	   $db = phpdb::GetInstance();
       $sql = "SELECT * FROM `tk_pickdetails`";
        $db->executeQuery($sql);
        if($db->numRows() > 0){
            while($row = $db->fetch_array()){
                echo  $row['fname'] . $row['lname'] . $row['email_address']. $row['city'].$row['state'].$row['pickup_qty'].$row['pickup_type'].$row['request_pickup_date'];
            }
        }else{
            return array(FALSE, 0);
        }
	?>
	
	  
	<?php
	}else{
		echo "Welcome to your Page, Manage Well biko";
	}
	
	
	
	
	
	
	

?>
    
	

	
	
	
	

