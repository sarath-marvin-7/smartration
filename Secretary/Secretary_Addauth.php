<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SECRETARY | ADD / VIEW AUTHENTICATOR</title>
    <link rel="stylesheet" href="Secretary_Addauth_style1.css">
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
    <div class="wrapper">
        <div class="container">
            <div class="header">
             <div class="welcome-note">Welcome <?php session_start();echo $_SESSION['user'];?></div>
             <div class="logout">
             <a href="./Secretary_homepage.php" class="home-link">Home</a>
             <a href="../Homepage/Homepage.php" onclick="return logout()" class="logout-link">Logout</a>
             </div>
            </div>
            <div class="content">
                <div class="content__container">
                    <table class="content__table"> 
                        <tr class="content__table--row1">
                            <td class="content__table--items">Add Authenticator</td>
                            <td class="content__arrow">&rarr;</td>
                            <td class="content__table--items"><button class="items__btns items__btns--add">ADD</button></td>
                        </tr>
                        <tr class="content__table--row2">
                            <td class="content__table--items">View Authenticator</td>
                            <td class="content__arrow">&rarr;</td>
                            <td class="content__table--items">
                            <form method="post" action="Secretary_ViewAuth.php">
                            <input type="submit" name="view-auth" value="VIEW" class="items__btns">
                            </form>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="add-authenticator"></div>
            </div>      
        </div>
    </div>
    <script type="text/javascript" src="Secretary_Addauth.js"></script>
</body>
</html>


<?php
require('../connect1.php');

if(isset($_POST['add-auth'])){
    $name = $_POST['name'];
    $username = $name;
    $password = $name."pass";
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $dob = $_POST['dob'];
    $caste = $_POST['caste'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $qualification = $_POST['qualification'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    
    $sql = "insert into Authenticator_details(a_name,Username,Password,father_name,Mother_name,dob,caste,religion,nationality,highest_qualification,street,city,district,state,mobile,email) values('$name','$username','$password','$fathername','$mothername','$dob','$caste','$religion','$nationality','$qualification','$street','$city','$district','$state','$mobile','$email')";
    $db->query($sql);
    
    if($sql ==True){    
        echo "<script>";
        echo "alert('Authenticator Added successfully')";
        echo "</script>";
    }
}

?>
