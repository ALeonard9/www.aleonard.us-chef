<?php

session_start();

include 'connectToDB.php';

echo "<!DOCTYPE html>
<html lang='en'>
<head>
        <link rel='stylesheet' type='text/css' href='mystyle.css' />
        <title id='pageTitle'>LeoNine Studios</title>
<font>";



$sqlcomplete = "SELECT * FROM videogame.game WHERE GameStatus = 'Complete' order by Series ASC, SeriesNum ASC, Title ASC";
$sqlgamesum = "SELECT count(*) as Count FROM videogame.game WHERE GameStatus = 'Complete'";

if ($_SESSION['username'])
        {
                $querycomplete = $db->query($sqlcomplete);
                        #$resultsopen = $queryopen->fetch(PDO::FETCH_ASSOC);
                $querygamesum = $db->query($sqlgamesum);
                         $resultsgamesum = $querygamesum->fetch(PDO::FETCH_ASSOC);

        echo "<h1>Video game history</h1>";
        // echo "<br><button onclick=location.href='quickbet.php?type=fart'>Quick Win S</button>";
        // echo "<button onclick=location.href='quickbet.php?type=pick'>Quick Win A</button>";
        // echo "<button onclick=location.href='newbet.php'>New Bet</button>";
        echo "<br><h3>Completed Games:".$resultsgamesum['Count']."</h3>";
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<table border='2'>";
        echo "<tr><td>Title</td><td>System</td><td>Series</td><td>Rating</td></tr>";

                foreach($querycomplete as $item){
                        echo "<tr><td><a href='betdetails.php?betID=".($item['GameID']."'>".$item['Title']."</a></td><td>".$item['System']."</td><td>".$item['Series']."</td><td>".$item['Rating']."</td></tr>");
                }
        echo "</table>";

        // echo "<br><h3>History</h3>";
        // echo "<table border='2'>";
        // echo "<tr><td>Description</td><td>Amount</td><td>Status</td><td>Winner</td><td>Last Update</td></tr>";
        //         foreach($queryall as $item){
        //                 echo "<tr><td><a href='betdetails.php?betID=".($item['betID']."'>".$item['betDescription']."</a></td><td>$".abs($item['betAmount'])."</td><td>".$item['betStatus']."</td><td>".$item['betWinner']."</td><td>".substr($item['betDate'],5, 5)."</td></tr>");
        //         }
        // echo "</html>";
        #if ($_SESSION['usergroup']=='Admin')

        #if ($_SESSION['usergroup']=='User')
        }
else
        die("You must login");

echo"</font></head></html>";
?>


	
