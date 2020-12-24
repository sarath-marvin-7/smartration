<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AUTHENTICATOR | HOMEPAGE</title>
    <link rel="stylesheet" href="Authenticator_homepage_style1.css">
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
   <form method="post" action="Authenticator_homepage.php">
    <div class="wrapper">
       <div class="container">
          <div class="header">
             
             <div class="welcome-note">Welcome <?php session_start();echo $_SESSION['auth'];?></div> 
             <div class="logout"><a href="../index.php" onclick="return logout()" class="logout-link">Logout</a></div>
          </div>           
          <div class="content">
              <div class="content__left">                
                <svg class="secretary-icon">
                 <use xlink:href="../Resources/img/Sprite2.svg#authentication-1"></use>
                </svg>
                 <div class="content__left--container">
                    <table class="content__login-box">
                      <tr><td class="content__login-items">Add Ration for this month</td>
                      <td class="arrow">&rarr;</td>
                      <td class="content__login-items--links"><input type="submit" name="add-ration" class="items__btns" value="Add"></td>
                      </tr>
                      <tr>
                      <td class="content__login-items">View previous Statements</td>
                      <td class="arrow">&rarr;</td>
                      <td class="content__login-items--links"><input type="submit" name="view-ration"  value="View" class="items__btns"></td>
                      </tr>
                  </table> 
                 </div>            
              </div>
              <div class="content__right">
                  <img src="../Resources/img/authenticator.png" alt="Authenticator picture" class="authenticator__picture">
              </div>
          </div>          
       </div>
    </div>
    </form>
</body>
</html>


<?php

require('../connect1.php');

if(isset($_POST['add-ration'])){
    header("location:Authenticator_Confirm_user.php");
}

if(isset($_POST['view-ration'])){
    header("location:Authenticator_View.php");
}
?>


