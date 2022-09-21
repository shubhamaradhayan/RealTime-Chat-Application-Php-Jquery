<?php


error_reporting(0);

$servername="localhost";
$username="root";
$password="";
$dbname="chatroom";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
    // echo "connection OK";
}
else
{
    echo "connection Failed" .mysqli_connect_error() ;
}


?>