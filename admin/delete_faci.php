<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM facilities_list";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Successfully Deleted\");
					window.location = (\"csvfile.php\")
				</script>";
	}
?>
