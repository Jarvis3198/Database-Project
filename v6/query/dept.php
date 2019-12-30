<?php
error_reporting(E_ALL);


require_once('../signin/dbconnect.php');



$result = $dbcon->query("SELECT * FROM department");

echo "<html>";
echo "<body>";
echo "<center>";
echo "<h1>Department</h1>";
      echo '<table border="1">';
      echo "<tr>";
        echo "<th> DID </th>";
        echo "<th> DEPARTMENT NAME </th>";
        echo "<th> TELEPHONE NO. </th>";
        echo "<th> HID </th>";
      echo "</tr>";


if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {

      echo"<tr>";
      echo '<td>'.$row["did"].'</td>';
      echo '<td>'.$row["dname"].'</td>';
      echo '<td>'.$row["dtel"].'</td>';
      echo '<td>'.$row["hid"].'</td>';
      echo "</tr>";


    }
} else {
    echo "0\n";
}
echo "</table>";
echo "</center>";
echo "</body>";
echo "</html>";

mysqli_close($dbcon);
?>
