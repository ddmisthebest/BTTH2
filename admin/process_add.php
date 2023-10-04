<?php
if(isset($_POST['sbmThem'])){
    $ma_tloai = $_POST['ma_tloai'];
    $ten_tloai = $_POST['ten_tloai'];
}/* Bình thường thì chỉ check mã thôi, chứ tên trùng cũng soa đâu. */

require '../layout/connect.php';

$sql_check = "SELECT * FROM theloai WHERE ma_tloai = '$ma_tloai' ";
$categorys =$pdo->query($sql_check);;
$number_row = $categorys->rowCount();

/* Nếu number_row mà >0 => Có dữ liệu */
if ($number_row == 0) {
    $sql_insert = "INSERT INTO theloai (ma_tloai, ten_tloai) VALUES ('$ma_tloai', '$ten_tloai')";
    $pdo->query($sql_insert);
    header('location: category.php');
}
else{
    header("location: category.php?message=Trung ma the loai");}
$pdo = null;


    
        