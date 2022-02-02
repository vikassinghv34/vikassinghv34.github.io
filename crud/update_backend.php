<?php
include "connection.php";
$sid=$_POST["sid"];
$sname=$_POST["sname"];
$sphone=$_POST["sphone"];
$sclass=$_POST["sclass"];
$saddress=$_POST["saddress"];

$sql="update studentdata set student_name='$sname', student_phone='$sphone', student_class='$sclass', student_address='$saddress' where student_id=$sid";
$result=mysqli_query($conn,$sql);

// echo $sname;
header("Location:index.php");

mysqli_close($conn);
?>