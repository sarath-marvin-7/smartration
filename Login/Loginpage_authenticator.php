<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN | AUTHENTICATOR </title>
    <link rel="stylesheet" href="Login_style_authenticator1.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
   <div class="wrapper">
       <div class="container">
           <div class="content1">
              <h2 class="content1__title">Authenticator login</h2>
               <div class="logo-box">
                <svg class="logo__secretary">
                    <use xlink:href="../Resources/img/sprite2.svg#authentication-1"></use>
                </svg>               
                </div>    
           </div>
           <div class="content2">
              <div class="home-link">
                    <a href="../index.php" class="homepage__link">HOME</a>
                </div>
               <div class="center">
        <h2>Login</h2>
        <form action="Loginpage_authenticator.php" method="post">
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
            <!--div class="pass">Forgot Password ?</div--> 
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
    $sql = "select a_name,Username,Password from Authenticator_details where Username='$username' and Password='$pass'";
    $res=$db->query($sql);
    $row = $res->fetch_assoc();
    
    
    if($row["Username"] and $row["Password"]){
        $_SESSION['auth']=$row['a_name'];
        header("location:../Authenticator/Authenticator_Homepage.php");
    } else{
        echo "<script>";
        echo "alert('Incorrect Username / Password')";
        echo "</script>";
    }
    
}
/*
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = "select a_name,Username,Password from Authenticator_details";    
    
    $result = $db->query($sql);
    
    if($result ->num_rows > 0){
        $row = $result->fetch_assoc();
        
        $_SESSION['auth']=$row['a_name'];
                
        if($username == $row['Username'] and $pass == $row['Password']){
            
        } else {
            echo "<script>";
            echo "alert('Incorrect username / password')";
            echo "</script>";
        }
    } 
}
*/
?>