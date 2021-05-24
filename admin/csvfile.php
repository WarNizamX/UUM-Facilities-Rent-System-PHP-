
<?php
    include "connection2.php";

if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        $find_header=0;
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $find_header++; //update counter
            //this ensures we skip the header
            if( $find_header > 1 ) {
                //the column variable corresponds with the ones in your csv file
            $sqlInsert = "INSERT into facilities_list (faci_name,faci_date,faci_time,faci_available)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "')";
            $result = mysqli_query($conn, $sqlInsert);
            
            if (!empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
        }
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Delete ?")){
				window.location.href ='delete_faci.php?id='+id;
			}
		}
	</script>
	<title>Facilities upload</title>
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

<div class="container">  
    <div class="jumbotron">
    </div>  
    <div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Facilities List
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Facilities</h2>
						<div class="right">
							<label>Search Requests</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0"> 

<form class="form-horizontal" action="" method="post" name="uploadCSV"
    enctype="multipart/form-data">
    <div class="input-row" align="center">
        <label class="col-md-4 control-label">Choose CSV File</label> <input
            type="file" name="file" id="file" accept=".csv">
        <button type="submit" id="submit" name="import"
            class="btn-submit">Import</button>
        <br />

    </div>
    <div id="labelError"></div>
</form>
</div>
<hr>
<br>
<?php
$sqlSelect = "SELECT * FROM facilities_list";
$result = mysqli_query($conn, $sqlSelect);
            
if (mysqli_num_rows($result) > 0) {
?>
<table id='userTable' style="text-align: center; ">
    <thead>
        <tr>
          	
            <th>Facility Name</th>
            <th>Facility Date</th>
            <th>Time</th>
            <th>Available</th>

        </tr>
    </thead>
    <?php
	while ($row = mysqli_fetch_array($result)) {
    ?>

    <tbody>
        <tr>
            
            <td><?php  echo $row['faci_name']; ?></td>
            <td><?php  echo $row['faci_date']; ?></td>
            <td><?php  echo $row['faci_time']; ?></td>
            <td><?php  echo $row['faci_available']; ?></td>
            
        </tr>
     <?php
     }
     ?>
    </tbody>
</table>
<?php } ?>
<script type="text/javascript">
	$(document).ready(
	function() {
		$("#frmCSVImport").on(
		"submit",
		function() {

			$("#response").attr("class", "");
			$("#response").html("");
			var fileType = ".csv";
			var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+("
					+ fileType + ")$");
			if (!regex.test($("#file").val().toLowerCase())) {
				$("#response").addClass("error");
				$("#response").addClass("display-block");
				$("#response").html(
						"Invalid File. Upload : <b>" + fileType
								+ "</b> Files.");
				return false;
			}
			return true;
		});
	});
</script>  




<!-- Pagging -->
<div class="pagging">
							<div class="left">Showing </div>
							
						</div>
						<!-- End Pagging -->
						
					</div>
                    
					<h2><a href="javascript:sureToApprove(<?php echo $row['facilities_list'];?>)" class="ico del">Delete</a><br><br><input type="submit" onclick="window.print()" value="Print Here" /></h2>
                    
					
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