<?php
include("./connection.php");
error_reporting(0);

$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];

$query = "INSERT INTO `msgs` (`id`, `msg`, `room`, `ip`, `stime`) VALUES (NULL, '$msg', '$room', '$ip', current_timestamp());";
mysqli_query($conn, $query);
// mysqli_close($conn);

?>