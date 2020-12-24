<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMART RATION | HOMEPAGE</title>
    <link rel="stylesheet" href="Homepage_style1.css">     
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300;400;600;700&family=Spectral+SC:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
   <form method="post" action="Homepage.php">
    <div class="wrapper">
        <div class="logo">
           <div class="logo__container">
           <hr class="line-left">
            <svg class="logo__crown">
                <use xlink:href="../Resources/img/sprite.svg#simple-crown-outline"></use>
            </svg>       
            <hr class="line-right">
           </div>
           <h1 class="logo__title">SMART RATION</h1>
        </div>
        <div class="content">
           <div class="welcome-note">
               <h2>Welcome</h2>
               <p class="welcome-note__para">The goal of our project is to simplify the ration process. Rather than standing in the crowd in queue for long hours, we simply deliver your monthly ration on your doorstep.</p>
           </div>
             <div class="login-container">
                  <table class="content__login-box">
                      <tr><td class="content__login-items">Secretary Login </td>
                      <td class="arrow">&rarr;</td>
                      <td class="content__login-items--links"><input type="submit" value="Click here" class="items__btns" name="secretary-login"></td>
                      </tr>
                      <tr>
                      <td class="content__login-items">Authenticator Login</td>
                      <td class="arrow">&rarr;</td>
                      <td class="content__login-items--links"><input type="submit" value="Click here" class="items__btns" name="authenticator-login"></td>
                      </tr>
                      <tr>
                      <td class="content__login-items">Shipper Login</td>
                      <td class="arrow">&rarr;</td>
                      <td class="content__login-items--links"><input type="submit" value="Click here" class="items__btns" name="shipper-login"></td>
                      </tr>
                  </table>
              </div>
           </div>
    </div>    
    </form>
</body>
</html>

<?php

if(isset($_POST['secretary-login'])){
    header("location:../Login/Loginpage_secretary.php");
}

if(isset($_POST['authenticator-login'])){
    header("location:../Login/Loginpage_authenticator.php");
}

if(isset($_POST['shipper-login'])){
    header("location:../Login/Loginpage_Shipper.php");
}

?>


























