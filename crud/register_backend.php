<?php
include "connection.php";
$sname=$_POST["sname"];
$sclass=$_POST["sclass"];
$sphone=$_POST["sphone"];
$saddress=$_POST["saddress"];

$sql="insert into studentdata (student_name,student_class,student_phone,student_address) values('$sname','$sclass','$sphone','$saddress')";
$result=mysqli_query($conn,$sql);

header("Location:index.php");
mysqli_close($conn);
?>