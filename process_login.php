<?php
    if(isset($_POST['sbmLogin'])){
        $user = $_POST['username'];
        $pass = $_POST['pass'];
    try {
        require './layout/connect.php';
        $sql = "select * from users where username = '$user'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();
            // Lay ra mat khau
            $pass_hash = $user['pass'];
            if (password_verify($pass, $pass_hash)) {
                session_start();
                $_SESSION['isLogin'] = $user;
                header("Location:index.php");
                
            } else {
                header("Location:login.php?error=not-matched-password");
                
            }
        } else {
            header("Location:login.php?error=not-existed");
            
        }
    }catch(PDOException $e){
        $e->getMessage();
    }
}
