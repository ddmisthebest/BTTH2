<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">

</head>
<?php 
require 'layout/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT ten_bhat,ma_tloai, tomtat, noidung, hinhanh,ten_tgia 
            FROM baiviet 
            JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia 
            WHERE ma_bviet = '$id'";
    $sings = $pdo->query($sql);
    $sing = $sings->fetch();
}
?>

<body>
    <div class="main">
        <div class="container-fluid">
            <div class="row">
            <?php include './layout/header.php'?>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="content_left">
                        <img class="object-fit-cover h-100 w-100" src="<?= $sing['hinhanh'] ?>" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content_right">
                        <h6 class="text-primary"> <?= $sing['ten_bhat'] ?></h6>
                        <h6 class="text-black">Bài hát:<span class="fw-normal"><?= $sing['ten_bhat'] ?></span></h6>
                        <h6 class="text-black">Thể loại:<span class="fw-normal"><?= $sing['ma_tloai'] ?></span></h6>
                        <h6 class="text-black">Tóm tắt:<span class="fw-normal"><?= $sing['tomtat'] ?></span></h6>
                        <h6 class="text-black">Nội dung:<span class="fw-normal"><?= $sing['noidung'] ?></span></h6>
                        <h6 class="text-black">Tác giả:<span class="fw-normal"><?= $sing['ten_tgia'] ?></span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>