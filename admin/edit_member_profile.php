<?php
	include "header.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>

	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
		.form-control
		{
			width:1050px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}

	</style>
</head>
<body >

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>

	<?php
		
		$sql = "SELECT * FROM members WHERE mem_id= ' ".$mem_id." '";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{

			$fname = $row['fname'];
			$id_no = $row['id_no'];
			$gender = $row['gender'];
			$email = $row['email'];
			$phone = $row['phone'];
			$address = $row['address'];
			$city = $row['city'];
			$postcode = $row['postcode'];
			$state = $row['state'];
			$country = $row['country'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['email']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<label><h4><b>Full Name: </b></h4></label>
		<input class="form-control" type="text" name="fname" value="<?php echo $fname; ?>">

		<label><h4><b>ID number</b></h4></label>
		<input class="form-control" type="text" name="id_no" value="<?php echo $id_no; ?>">

		<label><h4><b>Gender</b></h4></label>
		<input class="form-control" type="text" name="gender" value="<?php echo $gender; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b>Phone Number</b></h4></label>
		<input class="form-control" type="text" name="phone" value="<?php echo $phone; ?>">

		<label><h4><b>Address</b></h4></label>
		<input class="form-control" type="text" name="address" value="<?php echo $address; ?>">

		<label><h4><b>City</b></h4></label>
		<input class="form-control" type="text" name="city" value="<?php echo $city; ?>">

		<label><h4><b>Postcode</b></h4></label>
		<input class="form-control" type="text" name="postcode" value="<?php echo $postcode; ?>">

		<label><h4><b>State</b></h4></label>
		<input class="form-control" type="text" name="state" value="<?php echo $state; ?>">

		<label><h4><b>Country</b></h4></label>
		<input class="form-control" type="text" name="country" value="<?php echo $country; ?>">

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-primary" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{

			$fname = $_POST['fname'];
			$id_no = $_POST['id_no'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$postcode = $_POST['postcode'];
			$state = $_POST['state'];
			$country = $_POST['country'];

			$sql1= "UPDATE members SET fname='$fname', id_no='$id_no', gender='$gender', email='$email', phone='$phone', address='$address', city='$city', postcode='$postcode', state='$state', country='$country' WHERE email='".$_SESSION['email']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="mem.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>

