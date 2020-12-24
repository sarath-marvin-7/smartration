<?php

require('../connect1.php');
$a= $_GET['id'];

$sql = "select * from confirmed_users where SmartCardID=$a";
$res=$db->query($sql);

$row=$res->fetch_assoc();

$sql2 = "insert into Picked_packages values('{$row['SmartCardID']}','{$row['Name']}','{$row['Month']}','{$row['father_name']}','{$row['mother_name']}','{$row['dob']}','{$row['caste']}','{$row['religion']}','{$row['nationality']}','{$row['No_of_familymembers']}','{$row['address']}','{$row['mobile']}','{$row['email']}','{$row['rice']}','{$row['wheat']}','{$row['sugar']}','{$row['splitgrams']}','{$row['blackgrams']}','{$row['bengalgrams']}','{$row['cookingoil']}','{$row['kerosene']}')";

$db->query($sql2); 


$sql3 = "delete from confirmed_users where SmartCardID='$a'";
$db->query($sql3);

if($sql2 == True){
        echo "<script>";
        echo "alert('Package Picked');window.location=('http://localhost:80/SmartRation/Shipper/Shipper_Homepage.php')";
        echo "</script>";
    }

?>