<?php
require('../connect1.php');
$id = $_GET['id'];
$date = date("d-m-Y");

$sql = "select * from picked_packages where SmartCardID='$id'";
$res=$db->query($sql);
$row=$res->fetch_assoc();

$sql2 = "insert into Not_delivered_packages values('{$row['SmartCardID']}','{$row['Name']}','{$row['Month']}','$date','{$row['father_name']}','{$row['mother_name']}','{$row['dob']}','{$row['caste']}','{$row['religion']}','{$row['nationality']}','{$row['No_of_familymembers']}','{$row['address']}','{$row['mobile']}','{$row['email']}','{$row['rice']}','{$row['wheat']}','{$row['sugar']}','{$row['splitgrams']}','{$row['blackgrams']}','{$row['bengalgrams']}','{$row['cookingoil']}','{$row['kerosene']}')";
$db->query($sql2);

$sql3 = "delete from picked_packages where SmartCardID='$id'";
$db->query($sql3);

if(sql2 == True){
    echo "<script>";
        echo "alert('Package Not Delivered');window.location=('http://localhost:80/SmartRation/Shipper/Shipper_Deliver.php')";
        echo "</script>";
}

$mailID = $row['email'];
mail($mailID,'SMART RATION','Your Package is Not Delivered - '.$date,'From:sarathammoor973@gmail.com');

?>