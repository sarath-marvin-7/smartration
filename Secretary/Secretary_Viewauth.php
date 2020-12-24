<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SECRETARY | VIEW AUTHENTICATOR</title>
    <link rel="stylesheet" href="Secretary_Viewauth_style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
             <div class="welcome-note">Welcome <?php session_start();echo $_SESSION['user'];?></div>
             <div class="back">
            <a href="Secretary_Addauth.php" class="back-link">BACK</a>
             </div>
    </div>
    <h2 style="text-align:center; margin-top:50px;">AUTHENTICATOR DETAILS</h2>
</body>
</html>


<?php
require('../connect1.php');

$sql = "select * from Authenticator_details";
    $res=$db->query($sql);
    if($res->num_rows>0){
        echo "<center><table border=1>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>DOB</th>
            <th>Qualification</th>
            <th>Mobile</th>
            <th>Mail Id</th>
            </tr>";
            $i=0;
            while($row=$res->fetch_assoc())
            {
            $i++;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>{$row["a_name"]}</td>";
            echo "<td>{$row["street"]}</td>";
            echo "<td>{$row["dob"]}</td>";
            echo "<td>{$row["highest_qualification"]}</td>";
            echo "<td>{$row["mobile"]}</td>";
            echo "<td>{$row["email"]}</td>";;
            echo "</tr>";
            }
            echo "</table>";
            }
     else{
        echo "<center><b><br><br><font color=red>";
    echo "No Records";
     }

?>