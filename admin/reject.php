<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE members SET mem_status = 'Reject' WHERE mem_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Request has Successfully been Reject';
	?>
		<meta content="4; mem_requests.php" http-equiv="refresh" />
	<?php
	}
?>
