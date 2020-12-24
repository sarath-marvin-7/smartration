<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SHIPPER | HOMEPAGE</title>
    <link rel="stylesheet" href="Shipper_Homepage_style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>

  <script type="text/javascript">
        function logout(){
            var x=confirm(" Are You Sure.. Do you want to Logout?");
            if(x==true)
            {
            return true;
            }
        else
            {
              return false;
            }
    }
    </script>
<body>
    
            <div class="header">
               <div class="welcome-note">Welcome <?php session_start(); echo $_SESSION['shipper'];?></div>
               <div class="logout"><a href="../index.php" onclick="return logout()" class="logout-link">Logout</a></div>
            </div>        
               
            <div class="content">
               <div class="content__title">
                   <p>Take the packages and Deliver to their Address</p>
                   <a href="./Shipper_Deliver.php" class="deliver-link">DELIVER PACKAGES</a>
               </div>
               </div>
</body>
</html>

<?php
require('../connect1.php');

$sql = "select * from confirmed_users";

$res = $db->query($sql);
if($res->num_rows>0){
    echo "<center><table border=1>";
    echo "<tr>";
    echo "<th>SMARTCARD ID</th>";
    echo "<th>NAME</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>MOBILE</th>";
    echo "<th>EMAIL</th>";
    echo "<th>TAKE PACKAGE</th>";
    echo "</tr>";
   while($row=$res->fetch_assoc()){
       echo "<tr>";
       echo "<td>{$row['SmartCardID']}</td>";
       echo "<td>{$row['Name']}</td>";
       echo "<td>{$row['address']}</td>";
       echo "<td>{$row['mobile']}</td>";
       echo "<td>{$row['email']}</td>";
       echo "<td><a href=Take_package.php?id={$row["SmartCardID"]} class=take-package>PICK</a></td>";
       echo "</tr>";
   }
    echo "</table></center>";
} else{
    echo "<center><h3 style=margin-top:50px;>No packages for Shipping</h3></center>";
}


?>


