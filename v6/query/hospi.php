<?php
error_reporting(E_ALL);

require_once('../signin/dbconnect.php');

$result = $dbcon->query("SELECT * FROM hospital");

echo "<html>";
echo "<body>";
echo "<center>";
echo "<h1>Hospitals</h1>";
      echo '<table border="1">';
      echo "<tr>";
        echo "<th> HID </th>";
        echo "<th> NAME </th>";
        echo "<th> ST ADDRESS </th>";
        echo "<th> CITY </th>";
        echo "<th> STATE </th>";
        echo "<th> ZIP </th>";
      echo "</tr>";


if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {

      echo"<tr>";
      echo '<td>'.$row["hid"].'</td>';
      echo '<td>'.$row["hname"].'</td>';
      echo '<td>'.$row["hst_address"].'</td>';
      echo '<td>'.$row["hst_city"].'</td>';
      echo '<td>'.$row["hstate"].'</td>';
      echo '<td>'.$row["hzip"].'</td>';
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
