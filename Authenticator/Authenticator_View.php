<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AUTHENTICATOR | VIEW STATEMENTS</title>
    <link rel="stylesheet" href="Authenticator_View.css">
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
             <div class="welcome-note">Welcome <?php session_start(); echo $_SESSION['auth']; ?></div>
             <div class="logout">
             <a href="./Authenticator_homepage.php" class="home-link">Home</a>
             <a href="../index.php" onclick="return logout()" class="logout-link">Logout</a>
             </div>
          </div>
        <div class="content">
            <div class="content__textbox">
                <form method="post" action="Authenticator_View.php">
                    <label for="search">Enter Month</label>
                    <input type="text" id="search" name="searchMonth" maxlength="12" class="searchID" required placeholder="  MM-YYYY"> 
                    <input type="submit" name="search-user" value="Search" class="search-btn">
                </form>
            </div>
            </div>
        
    
</body>
</html>


<?php
require('../connect1.php');

if(isset($_POST['search-user'])){
    
    $month = $_POST['searchMonth'];
    $sql = "select * from Ration_items where Month='$month'";
    $res=$db->query($sql);
    
    if($res->num_rows>0){
        
        echo "<center><table border=1>";
        echo "<tr>";
        echo "<th>SmartCardID</th>";
        echo "<th>Name</th>";
        echo "<th>Month</th>";
        echo "<th>Rice</th>";
        echo "<th>Wheat</th>";
        echo "<th>Sugar</th>";
        echo "<th>Splitgrams</th>";
        echo "<th>Blackgrams</th>";
        echo "<th>BengalGrams</th>";
        echo "<th>CookingOil</th>";
        echo "<th>Kerosene</th>";
        echo "</tr>";
        while($row=$res->fetch_assoc()){
            echo "<tr>";
            echo "<td>{$row['SmartCardID']}</td>";
            echo "<td>{$row['Name']}</td>";
            echo "<td>{$row['Month']}</td>";
            echo "<td>{$row['rice']}</td>";
            echo "<td>{$row['wheat']}</td>";
            echo "<td>{$row['sugar']}</td>";
            echo "<td>{$row['splitgrams']}</td>";
            echo "<td>{$row['blackgrams']}</td>";
            echo "<td>{$row['bengalgrams']}</td>";
            echo "<td>{$row['cookingoil']}</td>";
            echo "<td>{$row['kerosene']}</td>";
            echo "</tr>";
        }
        echo "</table></center>";
    }
    
}

?>
