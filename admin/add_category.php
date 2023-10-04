<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/all.min.css">
</head>
<body>
<?php 
    require'../layout/connect.php';
    $sql = 'select * from theloai';
    $categorys = $pdo->query($sql);;
     ?>
     <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 pb-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Administration</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav me-auto mb-2">
                                <a class="nav-link " aria-current="page" href="#">Trang chủ</a>
                                <a class="nav-link" href="#">Trang ngoài </a>
                                <a class="nav-link active" href="#">Thể loại</a>
                                <a class="nav-link " href="#">Tác giả</a>
                                <a class="nav-link " href="#">Bài viết</a>
                            </div>
                        </div>
                     </div>
                </nav>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="add_category">
                    <form action="process_add.php" class="d-flex flex-column" action="process_add.php" method="post">
                        <h4 class="text-center text-uppercase fw-bold pb-2">Thêm mới thể loại</h4>
                        <div class="form_group d-flex rounded border">
                            <!-- Ở chỗ process_add, có check mã thể loại trùng với mã cũ ở DB. Nhưng mà ở đây lfam gì có input mã thể loại đâu :D  -->
                            <span class="bg-light py-2 px-3" style="width:130px">Mã thể loại</span>
                            <input type="text" name="ma_tloai" id="ma_tloai" class="form_input border-0 w-100" >
                        </div>
                        <div class="form_group d-flex rounded border">
                            <!-- Ở chỗ process_add, có check mã thể loại trùng với mã cũ ở DB. Nhưng mà ở đây lfam gì có input mã thể loại đâu :D  -->
                            <span class="bg-light py-2 px-3" style="width:130px">Tên thể loại</span>
                            <input type="text" name="ten_tloai" id="ten_tloai" class="form_input border-0 w-100" >
                        </div>
                        <div class="button align-self-end pt-3">
                            <button type="submit" class="btn btn-success text-white" name="sbmThem">Thêm</button>
                            <button type="submit" class="btn btn-warning text-white" name="sbmBack">Quay lại</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>