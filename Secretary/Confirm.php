<?php
/*require('connect.php');
$a=$_GET['id'];
echo $sql="Update Register set Status='Active' where User_id=$a";
$db->query($sql);
echo "<script language='javascript'>";
echo "alert('User ID Activated');window.location='http://localhost:80/Sarath/Cloud/Owner.php'";
echo "</script>";
*/

require('../connect1.php');
$a= $_GET['id'];
$sql="select * from Unconfirmed_Users where SmartCardID=$a";
$res = $db->query($sql);

if($res->num_rows>0){
$row=$res->fetch_assoc();
    $SmartCardID = $row['SmartCardID'];
    $Name = $row['Name'];   
    $Month = $row['Month'];
    $father = $row['father_name'];
    $mother = $row['mother_name'];
    $dob = $row['dob'];
    $caste = $row['caste'];
    $religion = $row['religion'];
    $nationality = $row['nationality'];
    $familymembers = $row['No_of_familymembers'];
    $address = $row['address'];
    $mobile = $row['mobile'];
    $email = $row['email'];
    $rice = $row['rice'];
    $wheat = $row['wheat'];
    $sugar = $row['sugar'];
    $splitgrams = $row['splitgrams'];
    $blackgrams = $row['blackgrams'];
    $bengalgrams = $row['bengalgrams'];
    $cookingoil = $row['cookingoil'];
    $kerosene = $row['kerosene'];        
    
    $sql2 = "insert into Confirmed_Users values('$SmartCardID','$Name','$Month','$father','$mother','$dob','$caste','$religion','$nationality','$familymembers','$address','$mobile','$email','$rice','$wheat','$sugar','$splitgrams','$blackgrams','$bengalgrams','$cookingoil','$kerosene')";
    $db->query($sql2);
    
    $sql3= "delete from Unconfirmed_Users where SmartCardID=$a";
    $db->query($sql3);
    
    if($sql2 == True){
        echo "<script>";
        echo "alert('Confirmed Ration Details');window.location=('http://localhost:80/SmartRation/Secretary/Secretary_Confirmpage.php')";
        echo "</script>";
    }
}

?>    