<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Add New Facilities
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New Facilities</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 20 symbols</span>
									<label>Facilities Type <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="fac_type" required />
								</p>
								<p>
									<span class="req">max 100 symbols</span>
									<label>Description <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="description" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Facilities Code <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="fac_code" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Facilities Cost <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="rent_cost" required />
								</p>
								

								<p>
									<span class="req">Current Images</span>
									<label>Facilities Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" required />
								</p>
								<p>
									<span class="req">Unit</span>
									<label>Facilities Unit<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity" required />
								</p>	
							
						</div>
						
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../fac/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$description = $_POST['description'];
								$fac_code = $_POST['fac_code'];
								$fac_type = $_POST['fac_type'];
								$rent_cost = $_POST['rent_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "INSERT INTO facilities (image, description,fac_code,fac_type,rent_cost,capacity,status) 
													VALUES ('$image','$description','$fac_code','$fac_type','$rent_cost','$capacity',
													'Pending')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Facilities Succesfully Added\");
											window.location = (\"add_newfac.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				</div>
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> </span>
		<span class="right">
			Design by <a href="">UUM</a>
		</span>
	</div>
</div>
	
</body>
</html>