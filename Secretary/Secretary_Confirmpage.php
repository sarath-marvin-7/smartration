<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SECRETARY | CONFIRM PAGE</title>
    <link rel="stylesheet" href="Secretary_Confirmpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    
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
</head>
<body>
    <div class="header">
     <div class="welcome-note">Welcome <?php session_start(); echo $_SESSION['user']; ?></div>

     <div class="logout">
     <a href="./Secretary_homepage.php" class="home-link">Home</a>
     <a href="../index.php" class="logout-link" onclick="return logout()">Logout</a>
     </div>
     </div>
</body>
</html>

<?php
require('../connect1.php');

$sql = 'select * from Unconfirmed_Users';
$res=$db->query($sql);
if($res->num_rows>0){
    echo "<center><table border=1 id=details-table>";
    echo "<tr>";
    echo "<th>SMARTCARD ID</th>";
    echo "<th>NAME</th>";
    echo "<th>MONTH</th>";
    echo "<th>VIEW</th>";
    echo "<th>CONFIRM</th>";
    echo "</tr>";
    
    while($row=$res->fetch_assoc()){
        $SmartCardID = $row['SmartCardID'];
        $Name = $row['Name'];   
        $Month = $row['Month'];
        $father = $row['father_name'];
        $mother = $row['mother_name'];
        $dob = $row['dob'];
        $caste = $row['caste'];
        $religion = $row['religion'];
        $nationality = $row['nationality'];
        $familymembers = $row['No_of_familymembers'];
        $address = $row['address'];
        $mobile = $row['mobile'];
        $email = $row['email'];
        $rice = $row['rice'];
        $wheat = $row['wheat'];
        $sugar = $row['sugar'];
        $splitgrams = $row['splitgrams'];
        $blackgrams = $row['blackgrams'];
        $bengalgrams = $row['bengalgrams'];
        $cookingoil = $row['cookingoil'];
        $kerosene = $row['kerosene'];      
        
        
        echo "<tr>";
        echo "<td>{$row["SmartCardID"]}</td>";
        echo "<td>{$row["Name"]}</td>";
        echo "<td>{$row["Month"]}</td>";
        echo "<td><a href=Secretary_View_items.php?id={$row["SmartCardID"]} class=view-ration>View</a></td>";
        
        /*echo "<td><form method=post action=Secretary_Confirmpage.php><input type=submit name=confirm class=confirm-btn value=CONFIRM></form></td>";*/
        echo "<td><a href=Confirm.php?id={$row["SmartCardID"]} class=confirm-ration>Confirm</a></td>";  
        
        echo "</tr>";
    }
    echo "</table>";
    
} else{
    echo "<center><h3 style=margin-top:30px;>NO RECORDS</h3></center>";
}

if(isset($_POST['view-details'])){

    
}

if(isset($_POST['confirm'])){
        
}

?>



