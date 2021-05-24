<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM members WHERE mem_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Request has Successfully been Deleted';
	?>
		<meta content="4; mem_requests.php" http-equiv="refresh" />
	<?php
	}
?>
