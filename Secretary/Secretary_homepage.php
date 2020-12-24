<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SECRETARY | HOMEPAGE</title>
    <link rel="stylesheet" href="Secretary_homepage_style.css">
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
   <form method="post" action="Secretary_homepage.php">
    <div class="wrapper">
       <div class="container">
          <div class="header">
             <div class="welcome-note">Welcome <?php session_start();echo $_SESSION['user'];?></div>
             <div class="logout"><a href="../Homepage/Homepage.php" onclick="return logout()" class="logout-link">Logout</a></div>
          </div>           
          <div class="content">
              <div class="content__left">                
                <svg class="secretary-icon">
                 <use xlink:href="../Resources/img/Sprite2.svg#secretary-2"></use>
                </svg>
                 <div class="content__left--container">
                     <table class="content__login-box">
                      <tr><td class="content__login-items">Confirm ration items</td>
                      <td class="arrow">&rarr;</td>
                      <td class="content__login-items--links"><input type="submit" class="items__btns" value="Confirm" name="Confirm"></td>
                      </tr>
                      <tr>
                      <td class="content__login-items">Add / view authenticators</td>
                      <td class="arrow">&rarr;</td>
                      <td class="content__login-items--links"><input type="submit" class="items__btns" value="Add / View" name="Addauth"></td>
                      </tr>
                      <tr>
                      <td class="content__login-items">add / view shippers</td>
                      <td class="arrow">&rarr;</td>
                      <td class="content__login-items--links"><input type="submit" class="items__btns" value="Add / View" name="Addship"></td>
                      </tr>
                      <tr>
                      <td class="content__login-items">PACKAGE DETAILS</td>
                      <td class="arrow">&rarr;</td>
                      <td class="content__login-items--links"><input type="submit" class="items__btns" value="View Details" name="package"></td>
                      </tr>
                  </table>
                 </div>            
              </div>
              <div class="content__right">
                  <img src="../Resources/img/secretary.png" alt="Secreatary picture" class="secretary__picture">
              </div>
          </div>          
       </div>
        
        
    </div>
    </form>
</body>
</html>



<?php

/*session_start();
unset($_SESSION['user']);
session_destroy();
*/

if(isset($_POST['Confirm'])){
    header("location:../Secretary/Secretary_Confirmpage.php");
}

if(isset($_POST['Addauth'])){
    header("location:../Secretary/Secretary_Addauth.php");
}

if(isset($_POST['Addship'])){
    header("location:../Secretary/Secretary_Addshipper.php");
}

if(isset($_POST['package'])){
    header("location:../Secretary/Secretary_Packagedetails.php");
}
?>
