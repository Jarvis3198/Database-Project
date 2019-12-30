<?php
	header("Content-Type: text/html; charset=utf8");
	
	//test if submit correctly
	if (!isset($_POST["insert1"])) {
		exit("Error Execution!");
	}
	
	include("../signin/dbconnect.php");
	
	$tablename = htmlspecialchars($_POST["tablename"]);
	$record = htmlspecialchars($_POST["recordvalue"]);
	if ($tablename && $record) {
		$sql = "insert into $tablename values ($record)";
		echo "$tablename";
		echo "$record";
		$result = $dbcon->query($sql);

		if ($result) {
			echo "Record updated successfullly";
			echo "
				<script>
					setTimeout (function() {window.location.href = 'update.html';}, 10000);					</script>
				";
		} else {
				echo "Error inserting" . mysqli_error($dbcon); // disobey constraint
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