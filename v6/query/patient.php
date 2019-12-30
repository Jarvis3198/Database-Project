<?php
error_reporting(E_ALL);

require_once('../signin/dbconnect.php');

$result = $dbcon->query("SELECT * FROM patient");

echo "<html>";
echo "<body>";
echo "<center>";
echo "<h1>Patient</h1>";
      echo '<table border="1">';
      echo "<tr>";
        echo "<th> PID </th>";
        echo "<th> FIRST NAME </th>";
        echo "<th> LAST NAME </th>";
        echo "<th> GENDER </th>";
        echo "<th> BIRTHDATE </th>";
        echo "<th> RACE </th>";
        echo "<th> STATUS </th>";
      echo "</tr>";


if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {

      echo"<tr>";
      echo '<td>'.$row["pid"].'</td>';
      echo '<td>'.$row["pfname"].'</td>';
      echo '<td>'.$row["plname"].'</td>';
      echo '<td>'.$row["pgender"].'</td>';
      echo '<td>'.$row["pbd"].'</td>';
      echo '<td>'.$row["prace"].'</td>';
      echo '<td>'.$row["pstatus"].'</td>';
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
