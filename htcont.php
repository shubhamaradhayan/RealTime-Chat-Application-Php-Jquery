<?php
// include("./connection.php");
// error_reporting(0);

// $room = $_POST['room'];

// // $query = "SELECT * FROM `msgs` WHERE room = '6320e3bc345ef' ";
// // $data = mysqli_query($conn, $query);
// // // $result = mysqli_num_rows($data);
// // // $row = mysqli_fetch_array($result);
// // $result = mysqli_fetch_array($data);

// // echo $result['msg'];
// // echo $result['id']; 

// // echo '<script language="javascript">';
// // echo 'alert("'.$room.'");';
// // echo '</script>';

// $sql = "SELECT * FROM `msgs` WHERE room='63217b145dad2'";
// $res = "";
// $result = mysqli_query($conn, $sql);
// $total = mysqli_num_rows($data);
// {
// //     echo 'hello';
// //     echo '<script language="javascript">';
// // echo 'alert("'.$room.'");';
// // echo '</script>';
    
//     while ($row = mysqli_fetch_array($result))
//     {
//         $res = $res . '<div class="container">';
//         $res = $res . $row['ip'];
//         $res = $res . "<p>" .$row['msg'];
//         $res = $res . '</p> <span class="time-right">'.$row['stime'].'</span></div>' ;

//     }
// }


?>

<?php

include("./connection.php");
error_reporting(0);

$res ="";
$query = "SELECT msg, stime, ip FROM `msgs` WHERE room='63217b145dad2' ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0){

}
while($result = mysqli_fetch_assoc($data)){
  
    $res = $res . '<div class="card shadow-lg p-3 mb-5 bg-primary rounded " >';
    $res = $res . $result['ip'];
    $res = $res . "<p>" .$result['msg'];
    $res = $res . '</p> <span class="time-right">'.$result['stime'].'</span></div>' ;

}
echo $res ;    



?>
