<?php

session_start();

include '../connectToDB.php';

echo "<!DOCTYPE html>
<html lang='en'>
<head>
        <link rel='stylesheet' type='text/css' href='../responsive.css' />
        <title id='pageTitle'>Smash Tracker</title>
<font>";



$sqlUserRecords = "SELECT * FROM smash.userRecord order by win_percentage desc";

if ($_SESSION['username'])
        {
                $queryopen = $db->query($sqlUserRecords);
                        #$resultsopen = $queryopen->fetch(PDO::FETCH_ASSOC);
        echo "<br><h3>User Records</h3>";
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<table border='2'>";
        echo "<tr><td>Name</td><td>Wins</td><td>Total Games</td><td>Win Percentage</td></tr>";

                foreach($queryopen as $item){
                        echo "<tr><td>".($item['display_name']."</td><td>".$item['wins']."</td><td>".$item['games']."</td><td>".$item['win_percentage']."</td></tr>");
                }
        echo "</table>";

        echo "</html>";
        #if ($_SESSION['usergroup']=='Admin')

        #if ($_SESSION['usergroup']=='User')
        }
else
        die("You must login");

echo"</font></head></html>";
?>