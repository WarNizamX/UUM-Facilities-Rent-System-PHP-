<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include "connection.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Delete ?")){
				window.location.href ='delete_user.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Staff Messages
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Staff Profile</h2>
						<div class="right">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="Staff username(email)" required="">
				
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						

							<?php

if(isset($_POST['submit']))
{
	$q=mysqli_query($db,"SELECT * FROM `members` where email like '%$_POST[search]%' ");

	if(mysqli_num_rows($q)==0)
	{
		echo "Sorry! No Staff found with that username. Try searching again.";
	}
	else
	{
echo "<table class='table table-bordered table-hover' >";
	echo "<tr style='background-color: #6db6b9e6;'>";
		//Table header
		echo "<th>"; echo "Full Name";	echo "</th>";
		echo "<th>"; echo "Email";  echo "</th>";
		echo "<th>"; echo "Phone";  echo "</th>";
		echo "<th>"; echo "Gender";  echo "</th>";
		echo "<th>"; echo "Address";  echo "</th>";
		echo "<th>"; echo "City";  echo "</th>";
		echo "<th>"; echo "Postcode";  echo "</th>";
		echo "<th>"; echo "State";  echo "</th>";
		echo "<th>"; echo "Country";  echo "</th>";
		
	echo "</tr>";	

	while($row=mysqli_fetch_assoc($q))
	{
		echo "<tr>";
		echo "<td>"; echo $row['fname']; echo "</td>";
		echo "<td>"; echo $row['email']; echo "</td>";
		echo "<td>"; echo $row['phone']; echo "</td>";
		echo "<td>"; echo $row['gender']; echo "</td>";
		echo "<td>"; echo $row['address']; echo "</td>";
		echo "<td>"; echo $row['city']; echo "</td>";
		echo "<td>"; echo $row['postcode']; echo "</td>";
		echo "<td>"; echo $row['state']; echo "</td>";
		echo "<td>"; echo $row['country']; echo "</td>";

		echo "</tr>";
	}
echo "</table>";
	}
}
	/*if button is not pressed.*/
else
{
	$res=mysqli_query($db,"SELECT * FROM `members`;");

echo "<table class='table table-bordered table-hover' >";
	echo "<tr style='background-color: #6db6b9e6;'>";
		//Table header
		echo "<th>"; echo "Full Name";	echo "</th>";
		echo "<th>"; echo "Email";  echo "</th>";
		echo "<th>"; echo "Phone";  echo "</th>";
		echo "<th>"; echo "Gender";  echo "</th>";
		echo "<th>"; echo "Address";  echo "</th>";
		echo "<th>"; echo "City";  echo "</th>";
		echo "<th>"; echo "Postcode";  echo "</th>";
		echo "<th>"; echo "State";  echo "</th>";
		echo "<th>"; echo "Country";  echo "</th>";
	echo "</tr>";	

	while($row=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		
		echo "<td>"; echo $row['fname']; echo "</td>";
		echo "<td>"; echo $row['email']; echo "</td>";
		echo "<td>"; echo $row['phone']; echo "</td>";
		echo "<td>"; echo $row['gender']; echo "</td>";
		echo "<td>"; echo $row['address']; echo "</td>";
		echo "<td>"; echo $row['city']; echo "</td>";
		echo "<td>"; echo $row['postcode']; echo "</td>";
		echo "<td>"; echo $row['state']; echo "</td>";
		echo "<td>"; echo $row['country']; echo "</td>";
	
		

		echo "</tr>";
	}
echo "</table>";
}
?>

							<tr>
							<td><?php echo $row['fname'] ?></td>
								<td><?php echo $row['email'] ?></td>
								<td><?php echo $row['phone'] ?></td>
								<td><?php echo $row['gender'] ?></td>
								<td><?php echo $row['address'] ?></td>
								<td><?php echo $row['city'] ?></td>
								<td><?php echo $row['postcode'] ?></td>
								<td> <?php echo $row['state'] ?></td>
								<td><?php echo $row['country'] ?></td>
								<td><a href="edit_member_profile.php?hal=edit&id=<?=$data['mem_id']?>"
								 class="btn btn-warning"> Update </a><br>
								<a href="javascript:sureToApprove(<?php echo $row['mem_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							
						</table>	
						
					</div>
			
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
									
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span  class="left">&copy; <?php echo date("Y"); ?> - UUM</span>
		<span  class="right">
			Design by <a href=>UUM</a>
			
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>