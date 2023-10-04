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
                <div class="add">
                <a class="btn btn-success text-white" href="add_category.php">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorys as $category) : ?>
                            <tr>
                                <th scope="row"><?= $category['ma_tloai'] ?></th>
                                <td><?= $category['ten_tloai'] ?></td>
                                <td><a href="edit_category.php?ma_tloai=<?= $category['ma_tloai'] ?>">
                                <i class="fa-solid fa-pen-to-square text-primary"></i></a>
                                </td>
                                <td>
                                    <a href="process_delete.php?ma_tloai=<?= $category['ma_tloai'] ?>"><i class="fa-solid fa-trash text-primary"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>