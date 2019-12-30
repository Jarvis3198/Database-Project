<?php
error_reporting(E_ALL);

require_once('../signin/dbconnect.php');

$result = $dbcon->query("SELECT * FROM disease");

echo "<html>";
echo "<body>";
echo "<center>";
echo "<h1>Disease</h1>";
      echo '<table border="1">';
      echo "<tr>";
        echo "<th> DEID </th>";
        echo "<th> DISEASE NAME </th>";
      echo "</tr>";


if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {

      echo"<tr>";
      echo '<td>'.$row["deid"].'</td>';
      echo '<td>'.$row["dename"].'</td>';
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
