<?php
$user='epiz_27494345';
$pass='70jedkyYAdp';
$db='epiz_27494345_test';
$db=new mysqli('sql205.epizy.com', $user,$pass,$db) or die("Unable to connect");
if($db->connect_errno)
{
echo $db->connect_error;
}
?> 