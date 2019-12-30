<?php
error_reporting(E_ALL);

require_once('../signin/dbconnect.php');


echo "<html>";
echo "<body>";
echo "<center>";
echo "<h1>VIEW TABLES</h1>";
      echo '<table border="1" cellpadding="10">';
        echo "<tr>";
        echo "<th> Department </th>";
        echo '<td><a href="dept.php">Click</a></td>';
        echo "</tr>";
        echo "<tr>";
        echo "<th> Disease </th>";
        echo '<td><a href="dise.php">Click</a></td>';
        echo "</tr>";
        echo "<tr>";
        echo "<th> Hospitals </th>";
        echo '<td><a href="hospi.php">Click</a></td>';
        echo "</tr>";
        echo "<tr>";
        echo "<th> Patient </th>";
        echo '<td><a href="patient.php">Click</a></td>';
        echo "</tr>";
        echo "<tr>";
        echo "<th> Physician </th>";
        echo '<td><a href="phy.php">Click</a></td>';
        echo "</tr>";
        echo "<tr>";
        echo "<th> Patient_Treatment </th>";
        echo '<td><a href="pt.php">Click</a></td>';
        echo "</tr>";
        echo "<tr>";
        echo "<th> Treatment </th>";
        echo '<td><a href="treat.php">Click</a></td>';
        echo "</tr>";
        echo "<tr>";
        echo "<th> Users </th>";
        echo '<td><a href="users.php">Click</a></td>';
        echo "</tr>";




echo "</table>";
echo "</center>";
echo "</body>";
echo "</html>";

mysqli_close($dbcon);
?>
