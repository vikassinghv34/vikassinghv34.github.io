<?php
$servername="localhost";
$username="root";
$password="";
$dbname="crud_system";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    echo "error".mysqli_connect_error();
}

?>