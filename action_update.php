<?php
include_once('./connect.php');
$dataCon = connectDB();


$prefix     = $_POST['prefix'];
$fristname  = $_POST['firstname'];
$lastname   = $_POST['lastname'];
$gender     = $_POST['gender'];
$idcard     = $_POST['idcard'];
$birthdate  = $_POST['birthdate'];
$mobile     = $_POST['mobile'];

$id         = $_POST['id'];

$sql = "UPDATE contact SET prefix='$prefix', frist_name='$fristname', last_name='$lastname', gender='$gender', idcard='$idcard', birthdate='$birthdate', mobile='$mobile'  WHERE id=$id";

echo $sql;
$updateQuery = mysqli_query($dataCon, $sql);
if($updateQuery){
    echo '<script>alert("แก้ไขข้อมูล สำเร็จ");window.location="index.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด เกิดขึ้น");window.location="update.php?'.$id.'";</script>';
}

?>




