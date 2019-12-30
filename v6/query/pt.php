<?php
error_reporting(E_ALL);

require_once('../signin/dbconnect.php');

$result = $dbcon->query("SELECT * FROM patient_treatment");

echo "<html>";
echo "<body>";
echo "<center>";
echo "<h1>Patient Treatment</h1>";
      echo '<table border="1">';
      echo "<tr>";
        echo "<th> TREATMENT DATE </th>";
        echo "<th> TREATMENT FREQUENCY </th>";
        echo "<th> TREATMENT STATUS </th>";
        echo "<th> PATIENT ID </th>";
        echo "<th> TREATMENT ID </th>";
        echo "<th> PHYSICIAN ID </th>";
      echo "</tr>";


if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {

      echo"<tr>";
      echo '<td>'.$row["tdate"].'</td>';
      echo '<td>'.$row["tfreq"].'</td>';
      echo '<td>'.$row["tstatus"].'</td>';
      echo '<td>'.$row["pid"].'</td>';
      echo '<td>'.$row["tid"].'</td>';
      echo '<td>'.$row["phid"].'</td>';
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
