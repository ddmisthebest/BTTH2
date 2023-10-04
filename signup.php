
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['isLogin'])) {
  header('location: index.php');
  
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register website</title>
  <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
</head>

<body>
<?php
    if (isset($_GET['message'])) {
        echo "<p>{$_GET['message']}</p>";
    } ?>
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
            <div class="col-md-12 d-flex justify-content-center">
                <div class="login-main w-25 py-3 position-relative" style="background-color: #747474;">
                    <div class="login d-flex px-2">
                        <h5 class="text-white fw-normal ">Sign Up</h5>
                    </div>
                    <div class="form px-3 pt-3 pb-3 border-top border-bottom border-light">
                        <form class="d-flex flex-column gap-3" action="process_signup.php" method="post">
                            <div class="form-group d-flex align-items-center bg-white rounded">
                                <i class="fa-solid fa-user px-2 py-1"></i>
                                <input style="border: none" type="text" class="form_input" id="" placeholder="username">
                            </div>
                            <div class="form-group d-flex align-items-center bg-white rounded">
                                <i class="fa-solid fa-key px-2 py-1"></i>
                                <input style="border: none" type="email" class="form_input" id="" placeholder="email">
                            </div>
                            <div class="form-group d-flex align-items-center bg-white rounded">
                                <i class="fa-solid fa-key px-2 py-1"></i>
                                <input style="border: none" type="password" class="form_input" id="" placeholder="password">
                            </div>
                            
                            <a href="./index.php" class="btn btn-warning text-black align-self-end px-3 py-1 border-0">Sign Up</a>
                        
                        </form>
                    </div>
                    <div class="content d-flex flex-column align-items-center ">
                        <span>I have an account ! <a class="text-decoration-none " style="color:yellow;" href="./login.php">Sign In</a></span>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>