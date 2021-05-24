<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM members WHERE mem_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Users Successfully Deleted\");
					window.location = (\"csvfile.php\")
				</script>";
	}
?>
