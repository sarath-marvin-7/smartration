<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SHIPPER | DELIVER PAGE</title>
    <link rel="stylesheet" href="Shipper_Deliver_style2.css">
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
               <div class="welcome-note">Welcome <?php session_start(); echo $_SESSION['shipper']?></div>
               
               <div class="logout">
               <a href="./Shipper_Homepage.php" class="back-link">
               Back</a>
               <a href="../index.php" onclick="return logout()" class="logout-link">
               Logout</a>
               </div>
            </div>        
            
            <!--div class="content">
                <table class="container__table">
                    <tr class="container__table--heading-row">
                        <th class="container__table--headings">NAME</th>
                        <th class="container__table--headings">ADDRESS</th>
                        <th class="container__table--headings">MOBILE</th>
                        <th class="container__table--headings">EMAIL</th>
                        <th class="container__table--headings">DELIVERED</th>
                        <th class="container__table--headings">NOT DELIVERED</th>
                    </tr>
                    <tr class="container__table--row">
                        <td class="container__table--items">USER</td>
                        <td class="container__table--items">No 20, Big Street, MBT Road, Ranipet</td>
                        <td class="container__table--items">6363636363</td>
                        <td class="container__table--items">user@gmail.com</td>
                        
                        <td class="container__table--items">
                        <form action="#popup-delivered" method="post" id="delivered-form">
                            <input type="submit" value="DELIVERED" class="delivered-btn">
                        </form>
                        </td>
                        <td class="container__table--items">
                        <form action="#popup-notdelivered" method="post" id="not-delivered-form">
                            <input type="submit" value="NOT DELIVERED" class="notdelivered-btn">
                        </form>
                        </td>
                    </tr>     
                </table>
            </div-->
            
            <!--------------POPUP---------------->
            <div class="popup"  id="popup-delivered">
               <form method="post" action="Shipper_Deliver.php">
                <div class="popup__content">
                   <a href="#delivered-form" class="popup__close">&times;</a>
                    <p class="popup__content--title">CONFIRM DELIVERY</p>
                    <div class="popup__container">
                        <label for="otp-txt" class="popup__content--label">Enter OTP sent to the Recipient</label>
                    <input type="text" id="otp-txt" name="otp" class="otp-txt" maxlength="6" required><br>
                    <div class="content__verify-btn">
                        <input type="submit" name="verify-btn" value="VERIFY" class="popup__content--verify">
                    </div>                
                    </div>
                </div>
                </form>
            </div>        
            
            <div class="popup-not"  id="popup-notdelivered">
               <form method="post" action="#">
                <div class="popup-not__content">
                   <a href="#not-delivered-form" class="popup__close">&times;</a>
                    <p class="popup-not__content--title">CANNOT DELIVER</p>
                    <div class="popup-not__container">
                        <label for="otp-txt" class="popup-not__content--label">Specify the Reason </label>
                    <input type="text" id="otp-txt" class="not-otp-txt" required><br>
                    <div class="not-content__verify-btn">
                        <input type="submit" name="submit-btn" value="SUBMIT" class="popup-not__content--submit">
                    </div>                
                    </div>
                </div>
               </form>
            </div>        
        </div>
    </div>
</body>
</html>

<?php

require('../connect1.php');
$sql = "select * from Picked_packages";

$res=$db->query($sql);

if($res->num_rows>0){
    
    echo "<center><table border=1>";
    echo "<tr>";
    echo "<th>NAME</th>";
    echo "<th>ADDRESS</th>";
    echo "<th>MOBILE</th>";
    echo "<th>EMAIL</th>";
    echo "<th>DELIVERED</th>";
    echo "<th>NOTDELIVERED</th>";
    echo "</tr>";
    
    while($row=$res->fetch_assoc()){
        echo "<tr>";
        echo "<td>{$row['Name']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['mobile']}</td>";
        echo "<td>{$row['email']}</td>";
        /*echo "<td><form action=#popup-delivered method=post id=delivered-form><input type=submit value=DELIVERED name=deliver-btn class=delivered-btn></form></td>";*/
        echo "<td><a href=Delivered_Packages.php?id={$row["SmartCardID"]} class=delivered-link>DELIVERED</a></td>";   
        
        echo "<td><form action=#popup-notdelivered method=post id=not-delivered-form><input type=submit value=NOTDELIVERED name=notdeliver-btn class=notdelivered-btn></form></td>";
    }
    echo "</table></center>";
}
        
/*Delivered_package
require('../connect1.php');

$a= $_GET['id'];

$text = chr(rand(65,90)).rand(1,99).chr(rand(97,122)).rand(1,99); 
$_SESSION['otp-num'] = $text;
mail('sarathmarvin973@gmail.com','OTP from SmartRation',$text,'From:sarathammoor973@gmail.com');         */          
                   

if(isset($_POST['verify-btn'])){    
    $otp = $_POST['otp'];
    $otp_text = $_SESSION['otp-num'];
            
    if($otp == $otp_text){
            echo "<script>";
            echo "alert('Package Delivered');window.location=('http://localhost:80/SmartRation/Shipper/Shipper_Deliver.php')";
            echo "</script>";
        } else{
            echo "Invalid OTP";
        }
}                                      

?>    


