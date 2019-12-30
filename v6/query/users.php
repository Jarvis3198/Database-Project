<?php
error_reporting(E_ALL);

require_once('../signin/dbconnect.php');

$result = $dbcon->query("SELECT * FROM users");

echo "<html>";
echo "<body>";
echo "<center>";
echo "<h1>Users</h1>";
      echo '<table border="1">';
      echo "<tr>";
        echo "<th> UID </th>";
        echo "<th> FIRST NAME </th>";
        echo "<th> LAST NAME </th>";
        echo "<th> ROLE </th>";
        echo "<th> DEPT ID </th>";
      echo "</tr>";


if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {

      echo"<tr>";
      echo '<td>'.$row["UID"].'</td>';
      echo '<td>'.$row["ufname"].'</td>';
      echo '<td>'.$row["ulname"].'</td>';
      echo '<td>'.$row["urole"].'</td>';
      echo '<td>'.$row["did"].'</td>';
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
