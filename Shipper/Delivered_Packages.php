<?php
require('../connect1.php');
session_start();
/*
$text = chr(rand(65,90)).rand(1,99).chr(rand(97,122)).rand(1,99); 
$_SESSION['otp-num'] = $text;
/*mail('sarathmarvin973@gmail.com','OTP from SmartRation',$text,'From:sarathammoor973@gmail.com');

$sql2 = "insert into otp values('$text')";
$res=$db->query($sql2);

$sql = "select * from otp";
$res1=$db->query($sql);
while($row=$res1->fetch_assoc()){
    echo $row['otp_number'];
    echo "<br>";
}    
$otp_text = $row['otp_number'];
echo $otp_text;


if(isset($_POST['verify-btn'])){    
    $otp = $_POST['otp'];
    if($otp == $otp_text){
        echo "Valid OTP";
        } 
        else{
            echo "Invalid OTP";
        }   
}
*/

$id = $_GET['id'];
$date = date("d-m-Y");

$sql = "select * from picked_packages where SmartCardID='$id'";
$res=$db->query($sql);
$row=$res->fetch_assoc();

$sql2 = "insert into delivered_packages values('{$row['SmartCardID']}','{$row['Name']}','{$row['Month']}','$date','{$row['father_name']}','{$row['mother_name']}','{$row['dob']}','{$row['caste']}','{$row['religion']}','{$row['nationality']}','{$row['No_of_familymembers']}','{$row['address']}','{$row['mobile']}','{$row['email']}','{$row['rice']}','{$row['wheat']}','{$row['sugar']}','{$row['splitgrams']}','{$row['blackgrams']}','{$row['bengalgrams']}','{$row['cookingoil']}','{$row['kerosene']}')";
$db->query($sql2);

$sql3 = "delete from picked_packages where SmartCardID='$id'";
$db->query($sql3);



if(sql2 == True){
    echo "<script>";
        echo "alert('Package Delivered');window.location=('http://localhost:80/SmartRation/Shipper/Shipper_Deliver.php')";
        echo "</script>";
}



$mailID = $row['email'];
mail($mailID,'SMART RATION','Your Package is Delivered - '.$date.'                        Rice - '.$row['rice'].', Wheat - '.$row['wheat'].', Sugar - '.$row['sugar'].', Splitgrams - '.$row['splitgrams'].', Blackgrams - '.$row['blackgrams'].', Bengalgrams - '.$row['bengalgrams'].', Cookingoil - '.$row['cookingoil'].', Kerosene - '.$row['kerosene'],'From:sarathammoor973@gmail.com');

?>
