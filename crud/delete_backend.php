<?php
include "connection.php";
$sid=$_GET["id"];

$sql="delete from studentdata where student_id=$sid";
$result=mysqli_query($conn,$sql);

header("Location:index.php");
?>