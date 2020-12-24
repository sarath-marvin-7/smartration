<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="test.php">
      
       <input type="text" name="username"><br>    
       <input type="text" name="password"><br>
        <input type="submit" name="test">
    </form>
</body>
</html>


<?php

require('../connect1.php');

if(isset($_POST['test'])){
    
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = "select Username,Password from test1 where Username='$user' and Password='$pass'";
    $res=$db->query($sql);
    $row = $res->fetch_assoc();
    
    if($row["Username"] and $row["Password"]){
        echo "Data Exists";
    } else{
        echo "Incorrect";
    }
    
    /*
    while($row=$res->fetch_assoc()){
         echo $row["Username"];
         echo $row["Password"];
    }
    */
}
    
    /*
    $sql = "select * from test1";
    $res=$db->query($sql);
    if($res->num_rows>0){
        while($row = $res->fetch_assoc()){
        echo "Username: ";
        echo "{$row["Username"]}";
        echo "<br>";    
        echo "Password: ";
        echo "{$row["Password"]}";
        echo "<br>";
        }
    } else {
        echo "Please Enter a Valid Username and pass";
    }
    */
        
    /*$sql = "select * from test1 ";
    $res = $db->query($sql);
    
    while($row = $res->fetch_assoc()){
        echo "Username: ";
        echo "{$row["Username"]}";
        echo "<br>";    
        echo "Password: ";
        echo "{$row["Password"]}";
        echo "<br>";
    }
    */







/*
$usernames = array("Authenticator", "User1", "User2");
$passswords = array("Authenticatorpass","User1pass","User2pass");

for($i=0;$i<count($usernames);$i++){
   echo $usernames[$i];
   echo $passswords[$i];
}
*/
/*
require('../connect1.php');    

$sql = "select * from Ration_items";
    $res = $db->query($sql);
    
    while($row=$res->fetch_assoc()){
       echo "{$row["SmartCardID"]}";
       echo "<br>";
       echo "{$row["Month"]}";
       echo "<br>" ;
 }
    
if(isset($_POST["test"])){
    $search = $_POST['search'];
    
    /*
    $sql1 = "select * from Ration_items";
    $res = $db->query($sql1);
    
    $row=$res->fetch_assoc();
    
    
    
    $sql = "select * from test where id='{$search}'";
    $res = $db->query($sql);
    
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            echo "{$row["id"]}";
            echo "<br>";
            echo "{$row["name"]}";
        }
    } else {
        echo "No records";
    }
    
}
    */
?>