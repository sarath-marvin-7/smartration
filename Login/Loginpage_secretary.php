<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN | SECRETARY </title>
    <link rel="stylesheet" href="Login_style_secretary.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
   <div class="wrapper">
       <div class="container">
           <div class="content1">
              <h2 class="content1__title">Secretary login</h2>
               <div class="logo-box">
                <svg class="logo__secretary">
                    <use xlink:href="../Resources/img/sprite2.svg#secretary-2"></use>
                </svg>               
                </div>    
           </div>
           <div class="content2">
                <div class="home-link">
                    <a href="../index.php" class="homepage__link">HOME</a>
                </div>
               <div class="center">
                    <h2>Login</h2>
                    <form action="loginpage_secretary.php" method="post">
                    <div class="txt_field">
                        <input type="text" name="username" required>
                        <span></span>
                        <label>Username</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="password" required>
                        <span></span>
                        <label>Password</label>
                    </div>            
                    <input type="submit" value="Login" name="login">
                    <!--a href="#" class="forgot__pass" name="forgot-pass">Forgot password?</a-->
                    </form>
               </div>
           </div>
       </div>
   </div>
</body>
</html>

<?php

require('../connect1.php');
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = "select Name,Username,Password from Secretary_details";

    $result = $db->query($sql);
    
    if($result ->num_rows > 0){
        $row = $result->fetch_assoc();
        
        $_SESSION['user']=$row["Name"]; 
        
        if($username == $row[Username] and $pass == $row[Password]){
            header("location:../Secretary/Secretary_homepage.php");
        } else{
            echo "<script>";
            echo "alert('Incorrect username / password')";
            echo "</script>";
        }
    } 
}



/*
if(isset($_POST['login'])){
    
    $sql = "insert into secretarydetails values('{$_POST['username']}','{$_POST['password']}')";
    
    $db->query($sql);
    echo "<script>";
    echo "alert('Uploaded')";
    echo "</script>";
}*/



?>






