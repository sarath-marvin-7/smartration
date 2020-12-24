<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SECRETARY | VIEW ITEMS</title>
    <link rel="stylesheet" href="Secretary_View_items.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
     <div class="welcome-note">Welcome <?php session_start(); echo $_SESSION['user']; ?></div>

     <div class="logout">
     <a href="./Secretary_Confirmpage.php" class="home-link">Back</a>
     </div>
     </div>   
</body>
</html>
<?php
require('../connect1.php');
$a= $_GET['id'];
$sql="select * from Unconfirmed_Users where SmartCardID=$a";
$res = $db->query($sql);

if($res->num_rows>0){
$row=$res->fetch_assoc();
    echo "<center><h3 style=margin-top:20px;>RATION DETAILS</h3>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>SmartCardID</td>";
    echo "<td>{$row["SmartCardID"]}</td>";
    echo "</tr>";
    echo "<tr bgcolor=lightgrey>";
    echo "<td>Name</td>";
    echo "<td>{$row["Name"]}</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Month</td>";
    echo "<td>{$row["Month"]}</td>";
    echo "</tr>";
    
    echo "<tr bgcolor=lightgrey>";
    echo "<td>Rice</td>";
    echo "<td>{$row["rice"]}</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Wheat</td>";
    echo "<td>{$row["wheat"]}</td>";
    echo "</tr>";
    
    echo "<tr bgcolor=lightgrey>";
    echo "<td>Sugar</td>";
    echo "<td>{$row["sugar"]}</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Splitgrams</td>";
    echo "<td>{$row["splitgrams"]}</td>";
    echo "</tr>";
    
    echo "<tr bgcolor=lightgrey>";
    echo "<td>Blackgrams</td>";
    echo "<td>{$row["blackgrams"]}</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Bengalgrams</td>";
    echo "<td>{$row["bengalgrams"]}</td>";
    echo "</tr>";
    
    echo "<tr bgcolor=lightgrey>";
    echo "<td>CookingOil</td>";
    echo "<td>{$row["cookingoil"]}</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td>Kerosene</td>";
    echo "<td>{$row["kerosene"]}</td>";
    echo "</tr>";
    echo "</table>";
}

?>