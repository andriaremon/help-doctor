<?php

 $host  ='localhost';
$user ='root';
$password='';
$dbName='hospital 2'; 
  $comm=mysqli_connect($host,$user,$password,$dbName);
if(mysqli_connect_errno())
echo"connection".mysqli_connect_error();
else
echo"successfully";
?>