<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM facilities WHERE fac_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Facilities Successfully Deleted\");
					window.location = (\"add_newfac.php\")
				</script>";
	}
?>
