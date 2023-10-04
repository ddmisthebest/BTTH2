<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
<body>
    <?php
         session_start();
        if (isset($_SESSION['isLogin'])) {
        header('location: ./admin/index.php');
        }
?>

    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <?php include'./layout/header.php' ?>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <?php
                    if (isset($_GET['error'])){
                        echo "<p>{$_GET['error']}</p>";
                    }
                
                ?>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="login-main w-25 py-3 position-relative" style="background-color: #747474;">
                        <div class="login d-flex px-2">
                            <h5 class="text-white fw-normal ">Sign In</h5>
                            <div class="info d-flex gap-3 position-absolute" style="right:20px;top: -45px">
                                <a class="d-block  p-2 h1 rounded" style="color: #FFC312;font-size: 60px;" href="#"><i class="fab fa-facebook-square"></i></a>
                                <a class="d-block  p-2 h1 rounded" style="color: #FFC312;font-size: 60px;" href="#"><i class="fab fa-google-plus-square"></i></a>
                                <a class="d-block  p-2 h1 rounded"style="color: #FFC312;font-size: 60px;" href="#"><i class="fab fa-twitter-square"></i></a>
                            </div>
                        </div>
                        <div class="form px-3 pt-3 pb-3 border-top border-bottom border-light">
                            <form class="d-flex flex-column gap-3" action="process_login.php" method="post">
                                <div class="form-group d-flex align-items-center bg-white rounded">
                                    <i class="fa-solid fa-user px-2 py-1"></i>
                                    <input style="border: none" type="text" class="form_input" id="" placeholder="username">
                                </div>
                                <div class="form-group d-flex align-items-center bg-white rounded">
                                    <i class="fa-solid fa-key px-2 py-1"></i>
                                    <input style="border: none" type="password" class="form_input" id="" placeholder="password">
                                </div>
                                <div class="form-check d-flex align-items-center gap-2">
                                    <input type="checkbox" class="form-check-input" id="Check">
                                    <label for="Check" class="text-white">Remember me</label>
                                </div>
                                <button name="sbmLogin" class="btn btn-warning text-black align-self-end px-3 py-1 border-0">Login</button>
                            
                            </form>
                        </div>
                        <div class="content d-flex flex-column align-items-center ">
                            <span>Don't have an account <a class="text-decoration-none " style="color:yellow;" href="./signup.php">Sign Up</a></span>
                            <a class="text-decoration-none"  style="color:yellow;"  href="">Forgot your password?</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
</body>
</html>