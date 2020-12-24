<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AUTHENTICATOR | CONFIRM USER</title>
    <link rel="stylesheet" href="Authenticator_Confirm_user_style1.css">
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
             <a href="../Homepage/Homepage.php" onclick="return logout()" class="logout-link">Logout</a>
             </div>
          </div>
        <div class="content">
            <div class="content__textbox">
                <form method="post" action="Authenticator_Confirm_user.php">
                    <label for="search">Enter Smartcard ID</label>
                    <input type="text" id="search" name="searchID" maxlength="12" class="searchID" required>
                    <input type="submit" name="search-user" value="Search" class="search-btn">
                </form>
            </div>
            </div>
        
</body>
</html>


<?php

require('../connect1.php');

if(isset($_POST['search-user'])){
    $searchID = $_POST['searchID'];
    
    $sql = "select * from smartcard_holder where ID='{$searchID}'";
    
    $res=$db->query($sql);
   if($res->num_rows>0)
   {      
       
       echo "<div class=content-table>";
        echo "<center><table border=1>";
        $i=0;
        while($row=$res->fetch_assoc())
        {
            
        $_SESSION['smartcardID']=$row["ID"];
        $_SESSION['HolderName']=$row["name"];
        $_SESSION['father-name']=$row["father_name"];
        $_SESSION['mother-name']=$row["mother_name"];
        $_SESSION['DOB']=$row["dob"];
        $_SESSION['Caste']=$row["caste"];
        $_SESSION['Religion']=$row["Religion"];
        $_SESSION['Nationality']=$row["Nationality"];
        $_SESSION['Family-members']=$row["No_of_familymembers"];
        $_SESSION['Address']=$row["address"];
        $_SESSION['Mobile']=$row["mobile"];
        $_SESSION['Email']=$row["email"];
            
        $i++;
        echo "<tr>";
        echo "<td>Smartcard ID</td>";
        echo "<td>{$row["ID"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Name</td>";
        echo "<td>{$row["name"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Father name</td>";
        echo "<td>{$row["father_name"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Mother name</td>";
        echo "<td>{$row["mother_name"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>DOB</td>";
        echo "<td>{$row["dob"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Caste</td>";
        echo "<td>{$row["caste"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Religion</td>";
        echo "<td>{$row["Religion"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Nationality</td>";
        echo "<td>{$row["Nationality"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>No-of-Family Members</td>";
        echo "<td>{$row["No_of_familymembers"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Address</td>";
        echo "<td>{$row["address"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Mobile</td>";
        echo "<td>{$row["mobile"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Email</td>";
        echo "<td>{$row["email"]}</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td colspan=2 align=right><form method=post action=Authenticator_Confirm_user.php><input type=submit name=proceed-btn class=proceed-btn value=PROCEED></form></td>";  
        echo "</tr>";
        }
       echo "</table></center>";
       echo "</div>";
   } else{
       echo "<center style=margin-top:30px;color:red;font-size:26px;>Please Enter a Valid ID<center>";
   }
}

if(isset($_POST['proceed-btn'])){
    header("location:Authenticator_Ration_items.php");
}

?>