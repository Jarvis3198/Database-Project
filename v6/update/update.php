<?php
	header("Content-Type: text/html; charset=utf8");
	
	//test if submit correctly
	if (!isset($_POST["submit2"])) {
		exit("Error Execution!");
	}
	
	include("../signin/dbconnect.php");
	
	// htmlspecialchars in case for attack
	$tablename = htmlspecialchars($_POST["first"]);
	$selectedcolumn = htmlspecialchars($_POST["second"]);
	$newcolumn = htmlspecialchars($_POST["third"]);
	
	$selectedvalue = htmlspecialchars($_POST["selected"]);
	$newvalue = htmlspecialchars($_POST["newvalue"]);
	if ($tablename && $selectedcolumn && $newcolumn && $selectedvalue && $newvalue) {
		$sql = "select * from $tablename where $selectedcolumn = '$selectedvalue'";
		$result = $dbcon->query($sql);
		$row = mysqli_num_rows($result);
		if ($row) {
			$sql = "update $tablename set $newcolumn = '$newvalue' where $selectedcolumn = '$selectedvalue'";
			$result1 = $dbcon->query($sql);
			if ($result1) {
				echo "Record updated successfullly";
				echo "
					<script>
						setTimeout (function() {window.location.href = 'update.html';}, 10000);
					</script>
					";
			} else {
				echo "Error updating" . mysqli_error($dbcon); // this one should never happen
			}
		
		} else {
			echo "No such record in table '$tablename', please check again!";
			echo "
				<script>
					setTimeout (function() {window.location.href = 'update.html';}, 10000);
				</script>
				";
		}
		
		
	} else {
		echo "please input all the information required!";
		echo "
			<script>
				setTimeout (function() {window.location.href = 'update.html';}, 10000);
			</script>
			";
	}
	mysqli_close($dbcon);	
?>
	