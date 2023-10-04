<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
</head>
<body>  
    <?php
    require '../layout/connect.php';
    $sql= 'SELECT COUNT(*) AS dem FROM users';
    $users =$pdo->query($sql);;
    $user = $users->fetchAll();

    $sql= 'SELECT COUNT(*) AS dem FROM tacgia';
    $authors =$pdo->query($sql);;
    $author = $authors->fetchAll();

    $sql= 'SELECT COUNT(*) AS dem FROM theloai';
    $categorys =$pdo->query($sql);;
    $category = $categorys->fetchAll();
    
    $sql= 'SELECT COUNT(*) AS dem FROM baiviet';
    $posts =$pdo->query($sql);;
    $post = $posts->fetchAll();


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
                                <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                                <a class="nav-link" href="#">Trang ngoài </a>
                                <a class="nav-link" href="#">Thể loại</a>
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
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary fw-normal">Người dùng</h5>
                        <h1 class="card-subtitle display-4 fw-normal"><?= $user['dem'] ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary fw-normal">Thể loại</h5>
                        <h1 class="card-subtitle display-4 fw-normal"><?= $category['dem'] ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary fw-normal">Tác giả</h5>
                        <h1 class="card-subtitle display-4 fw-normal"><?= $author['dem'] ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                         <h5 class="card-title text-primary fw-normal">Bài viết</h5>
                        <h1 class="card-subtitle display-4 fw-normal"><?= $post['dem'] ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>