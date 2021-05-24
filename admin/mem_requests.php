<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
			}
		}
	</script>

	<script type="text/javascript">
		function sureToReject(id){
			if(confirm("Are you sure you want to Reject this request?")){
				window.location.href ='reject.php?id='+id;
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
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Member Requests
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Member Requests</h2>
						<div class="right">
							<label>Search Requests</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<th>Member Name</th>
								<th>Member Phone</th>
								<th>Facilities Code</th>
								<th>Facilities Unit</th>
								<th>Booking Time</th>
								<th>Facilities Rent</th>
								<th>Rent Cost (RM)</th>
								<th>Status</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT members.mem_id,members.fname,members.phone,members.fac_code,members.fac_unit,
								members.book_time,
								facilities.fac_type,
								facilities.rent_cost,members.mem_status 
								FROM members JOIN facilities ON members.fac_code=facilities.fac_code";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								
								<td><h3><?php echo $row['fname'] ?></a></h3></td>
								<td><h3><?php echo $row['phone'] ?></a></h3></td>
								<td><?php echo $row['fac_code'] ?></td>
								<td><?php echo $row['fac_unit'] ?></td>
								<td><?php echo $row['book_time'] ?></td>
								<td><?php echo $row['fac_type'] ?></a></td>
								<td><?php echo $row['rent_cost'] ?></a></td>
								<td><a href="#"><?php echo $row['mem_status'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['mem_id'];?>)" class="ico del">Approve</a>
								<a href="javascript:sureToReject(<?php echo $row['mem_id'];?>)" class="ico edit">Reject</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left">Showing </div>
							
						</div>
						<!-- End Pagging -->
						
					</div>
					<h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?>UUM</span>
		<span class="right">
			Design by <a href="">UUM</a>
		</span>
	</div>
</div>
<?php include_once "includes/footer.php"; ?>
	
</body>
</html>