<?php
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Faculties</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
		.form-control
		{
			width:250px;
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
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

        <br><br>
	<h1 style="text-align: center;color: #fff;"><b>Edit Facilities</b></h1>
	<?php

			$sql = "SELECT * FROM facilities WHERE fac_id= ' ".$fac_id." '";
			$result = mysqli_query($db,$sql) or die (mysql_error());

			while ($row = mysqli_fetch_assoc($result)) 
			{
				$description = $row['description'];
				$fac_type = $row['fac_type'];
				$fac_code = $row['fac_code'];
				$rent_cost = $row['rent_cost'];
				$capacity = $row['capacity'];
				$status = $row['status'];
			}

	?>

	<div class="profile_info" style="text-align: center;">
		<h2><span style="color: white;"></span><h2>	
		<h1 style="color: white;"></h1>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<label><h1>Description: </h1></label><br>
		<input class="form-control" type="text" name="descriptiom" value="<?php echo $description; ?>">

		<br><br><label><h1>Facilities Type</h1></label><br>
		<input class="form-control" type="text" name="fac_type" value="<?php echo $fac_type; ?>">

		<br><br><label><h1>Fac Unit</h1></label><br>
		<input class="form-control" type="text" name="fac_code" value="<?php echo $fac_code; ?>">

		<br><br><label><h1>Rent Cost</h1></label><br>
		<input class="form-control" type="text" name="rent_cost" value="<?php echo $rent_cost; ?>">

		<br><br><label><h1>Facilities Image</h1></label><br>
		<input class="form-control" type="file" name="image">

		<br><br><label><h1>Capacity</h1></label><br>
		<input class="form-control" type="text" name="capacity" value="<?php echo $capacity; ?>">

        

		<br>
		<div style="padding-left: 100px;"><br><br>
			<button class="btn btn-primary" type="submit" name="submit">Save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{

            
            $target_path = "../fac/";
			$target_path = $target_path . basename ($_FILES['image']['name']);
				if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path))
								
			$image = basename($_FILES['image']['name']);
            $description = $_POST['description'];
			$fac_type = $_POST['fac_type'];
			$fac_code = $_POST['fac_code']; 
            $rent_cost = $_POST['rent_cost'];
			$capacity = $_POST['capacity']; 
			$status = $_POST['status']; 
			
			   
			
            
            

			$sql1= "UPDATE facilities SET image='$image', description='$description', fac_type='$fac_type', fac_code='$fac_code', rent_cost='$rent_cost', capacity='$capacity',fac_status='$fac_status' WHERE fac_id= ' ".$fac_id." ' ";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="add_newfac.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>

