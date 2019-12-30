<?php
	header("Content-Type: text/html; charset=utf8");
	// test if submit correctly
	if (!isset($_POST["submit"])) {
		exit("Error Execution!");
	}
	
	include('dbconnect.php'); //connect to database  $dbcon
	
	// htmlspecialchars in case for attack
	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);
	
	if ($username && $password) {
		$sql = "select * from user_info where username = '$username' and passcode='$password'";
		$result = mysqli_query($dbcon, $sql);
		$rows = mysqli_num_rows($result);
		if ($rows) {
			// if succeed, jump to welcome.html
			header ("refresh:0; url = welcome.html");
			exit;
		} else {
			echo "Invalid username or password!";
			// if failed, use js jump back to login.html
			echo "
				<script>
					setTimeout (function() {window.location.href = 'login.html';}, 1000);
				</script>
				";
		} 
	} else { // if username or password is empty
		echo "Incomplete information, please check again";
		echo "
			<script>
				setTimeout (function() {window.location.href = 'login.html';}, 1000);
			</script>
		";
	}
	mysqli_close($dbcon);
?>