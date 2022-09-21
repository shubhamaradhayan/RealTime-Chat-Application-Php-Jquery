<?php
include("./connection.php");
error_reporting(0);


$room_id = uniqid();

if (isset($_POST['CreateRoom'])) {

    $query = " INSERT INTO `rooms` ( `room_id`, `time`) VALUES ( '$room_id', current_timestamp());";
 

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo '<script language="javascript">';
        echo 'alert("Your room has created, And Your Room ID is :'.$room_id.'");window.location ="chat.php?room_id='.$room_id.'";';
        // echo "window.location ='google.com';";
        // echo 'header("Location:chat.html?room_id=' .$room_id.'");';
        // echo 'window.location="http://localhost/globalchat/chat.html?room_id='.$room_id.'";';
        // header("Location:chat.html?room_id=' .$room_id.'");
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("data not inserted ");';
        echo '</script>';
    }

}

if (isset($_POST['JoinRoom'])) {
    $join_room = $_POST['JoinId'];

    
    $query = "SELECT * FROM `rooms` WHERE room_id='$join_room' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
  header("Location:chat.php?room_id=$join_room");

}else{
  echo '<script language="javascript">';
  echo 'alert("Your room does not exist. please confirm your room id and try again");window.location ="index.html";';
  echo '</script>';
}



}





?>
