<?php

session_start();

include 'connectToDB.php';

echo "<!DOCTYPE html>
<html lang='en'>
<head>
        <link rel='stylesheet' type='text/css' href='mystyle.css'>
<font>";



$sqlSoumsum = "SELECT SUM(betAmount) as betAmount FROM bet.history WHERE betWinner = 'Soumya'";
$sqlAdamsum = "SELECT SUM(betAmount) as betAmount FROM bet.history WHERE betWinner = 'Adam'";
$sqlopen = "SELECT * FROM bet.history WHERE betStatus = 'Open' order by betDate DESC";
$sqlall = "SELECT * FROM bet.history order by betDate DESC";

$intro= "Adam owes Soumya";

if ($_SESSION['username'])
        {
                $querySoumsum = $db->query($sqlSoumsum);
                        $resultsSoumsum = $querySoumsum->fetch(PDO::FETCH_ASSOC);
                $queryAdamsum = $db->query($sqlAdamsum);
                        $resultsAdamsum = $queryAdamsum->fetch(PDO::FETCH_ASSOC);
                        $dbbalance = $resultsSoumsum['betAmount'] - $resultsAdamsum['betAmount'];
                $queryopen = $db->query($sqlopen);
                        #$resultsopen = $queryopen->fetch(PDO::FETCH_ASSOC);
                $queryall = $db->query($sqlall);
                        #$resultsall = $queryall->fetch(PDO::FETCH_ASSOC);


        if ($dbbalance < 0)
                {
                $intro= "Soumya owes Adam";
                $dbbalance *= -1;
                }
        #echo '<pre>', print_r($queryopen), '</pre>';
        echo "<h1>".$intro.": $".$dbbalance."</h1>";
        echo "<br><button onclick=location.href='quickbet.php?type=fart'>Quick Win S</button>";
        echo "<button onclick=location.href='quickbet.php?type=pick'>Quick Win A</button>";
        echo "<button onclick=location.href='newbet.php'>New Bet</button>";
        echo "<br><h3>Open Bets</h3>";
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<table border='2'>";
        echo "<tr><td>Description</td><td>Amount</td><td>Last Update</td></tr>";

                foreach($queryopen as $item){
                        echo "<tr><td><a href='betdetails.php?betID=".($item['betID']."'>".$item['betDescription']."</a></td><td>$".abs($item['betAmount'])."</td><td>".substr($item['betDate'],5, 5)."</td></tr>");
                }
        echo "</table>";

        echo "<br><h3>History</h3>";
        echo "<table border='2'>";
        echo "<tr><td>Description</td><td>Amount</td><td>Status</td><td>Winner</td><td>Last Update</td></tr>";
                foreach($queryall as $item){
                        echo "<tr><td><a href='betdetails.php?betID=".($item['betID']."'>".$item['betDescription']."</a></td><td>$".abs($item['betAmount'])."</td><td>".$item['betStatus']."</td><td>".$item['betWinner']."</td><td>".substr($item['betDate'],5, 5)."</td></tr>");
                }
        echo "</html>";
        #if ($_SESSION['usergroup']=='Admin')

        #if ($_SESSION['usergroup']=='User')
        }
else
        die("You must login");

echo"</font></head></html>";
?>


	
