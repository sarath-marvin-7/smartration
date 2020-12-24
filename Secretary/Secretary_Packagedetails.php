<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SECRETARY | PACKAGE DETAILS</title>
    <link rel="stylesheet" href="Secretary_Packagedetails_style.css">
    
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
     <a href="../Homepage/Homepage.php" class="logout-link" onclick="return logout()">Logout</a>
     </div>
     </div>
     
     <!-- TABLE -->
     <div class="content">
     <table class="content__table"> 
                        <tr class="content__table--row1">
                            <td class="content__table--items">Delivered Packages</td>
                            <td class="content__arrow">&rarr;</td>
                            <td class="content__table--items">
                            <form method="post" action="Secretary_Packagedetails.php">
                            <input type="submit" name="view-delivered" value="VIEW" class="items__btns">
                            </form>
                            </td>
                        </tr>
                        <tr class="content__table--row2">
                            <td class="content__table--items">Not Delivered Packages</td>
                            <td class="content__arrow">&rarr;</td>
                            <td class="content__table--items">
                            <form method="post" action="Secretary_Packagedetails.php">
                            <input type="submit" name="view-notdelivered" value="VIEW" class="items__btns">
                            </form>
                            </td>
                        </tr>
                    </table>
    </div>
</body>
</html>


<?php

require('..\connect1.php');

if(isset($_POST['view-delivered'])){
    
    $sql = "select * from delivered_packages";
    $res = $db->query($sql);
    if($res->num_rows>0){
        echo "<center><table border=1>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>NAME</th>";
        echo "<th>Month</th>";
        echo "<th>Delivery Date</th>";
        echo "<th>Mobile</th>";
        echo "<th>Email</th>";
        echo "</tr>";
        
        while($row=$res->fetch_assoc()){
            echo "<tr>";
            echo "<td class=package_values>{$row['SmartCardID']}</td>";
            echo "<td class=package_values>{$row['Name']}</td>";
            echo "<td class=package_values>{$row['Month']}</td>";
            echo "<td class=package_values>{$row['Delivery_date']}</td>";
            echo "<td class=package_values>{$row['mobile']}</td>";
            echo "<td class=package_values>{$row['email']}</td>";
        }
        echo "</table></center>";
    }
    
}

if(isset($_POST['view-notdelivered'])){
    
    $sql = "select * from not_delivered_packages";
    $res = $db->query($sql);
    if($res->num_rows>0){
        echo "<center><table border=1>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>NAME</th>";
        echo "<th>Month</th>";
        echo "<th>Not Delivered Date</th>";
        echo "<th>Mobile</th>";
        echo "<th>Email</th>";
        echo "</tr>";
        
        while($row=$res->fetch_assoc()){
            echo "<tr>";
            echo "<td class=package_values>{$row['SmartCardID']}</td>";
            echo "<td class=package_values>{$row['Name']}</td>";
            echo "<td class=package_values>{$row['Month']}</td>";
            echo "<td class=package_values>{$row['Not_Delivered_Date']}</td>";
            echo "<td class=package_values>{$row['mobile']}</td>";
            echo "<td class=package_values>{$row['email']}</td>";
        }
        echo "</table></center>";
    }
    
}

?>