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


	$selectedvalue = htmlspecialchars($_POST["selected"]);
	echo "$tablename, $selectedcolumn, $selectedvalue";
	if ($tablename && $selectedcolumn && $selectedvalue ) {
		$sql = "select * from $tablename where $selectedcolumn = '$selectedvalue'";
		$result = $dbcon->query($sql);
		$row = mysqli_num_rows($result);
		if ($row) {
			$sql = "delete from $tablename where $selectedcolumn = '$selectedvalue'";
			$result1 = $dbcon->query($sql);
			if ($result1) {
				echo "Record deleted successfullly";
				echo "
					<script>
						setTimeout (function() {window.location.href = 'delete.html';}, 10000);
					</script>
					";
			} else {
				echo "Error deleting" . mysqli_error($dbcon); // this one should never happen
			}

		} else {
			echo "No such record in table '$tablename', please check again!";
			echo "
				<script>
					setTimeout (function() {window.location.href = 'delete.html';}, 10000);
				</script>
				";
		}


	} else {
		echo "please input all the information required!";
		echo "
			<script>
				setTimeout (function() {window.location.href = 'delete.html';}, 10000);
			</script>
			";
	}
	mysqli_close($dbcon);
?>
