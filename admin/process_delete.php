<?php
require '../layout/connect.php';
if (isset($_GET['ma_tloai']))
  $ma_tloai = $_GET['ma_tloai'];

$sql = "delete from theloai where ma_tloai = '$ma_tloai'";
    $pdo->query($sql);

$pdo = null;
header('location:category.php');