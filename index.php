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

    $query = 'SELECT * FROM baiviet';
    $stmt = $pdo->query($query);
    // Lấy dữ liệu từ kết quả truy vấn
    $sings = $stmt->fetchAll();
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
                <div class="col-md-12">
                    <div class="slider">
                        <img src="./img/latin.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="top">
                        <span>Top bài hát yêu thích</span>
                    </div>
                </div>
                <?php foreach ($sings as $sing){?>
                    <div class="col-md-3">
                        <div class="sing">
                            <a href="detail.php?id=<?= $sing['ma_bviet'] ?>">
                                <img src="<?=$sing['hinhanh']?>" alt="">
                            </a>
                            <span><?=$sing['ten_bhat']?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    
    <?php $pdo = null;?>
</body>
</html>