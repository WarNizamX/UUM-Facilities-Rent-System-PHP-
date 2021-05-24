<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">University Utara Malaysia</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Administrator</strong></a>
				<span>|</span>
				<a href="#">Help</a>
				<span>|</span>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Dashboard</span></a></li>
				<li><a href="member_profile.php"><span>User Profile</span></a></li>
			    <li><a href="add_newfac.php"><span>Facilities Management</span></a></li>
			    <li><a href="mem_requests.php"><span>Rent Requests</span></a></li>
			    <li><a href="csvfile.php"><span>Upload Facilities List</span></a></li>
			    
			</ul>
		</div>