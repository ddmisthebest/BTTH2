<?php
    require_once './layout/connect.php';
// Chúng ta kiểm tra xem dữ liệu đã được gửi đi hay chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ form
        $user = $_POST["username"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        
        
        // Kiểm tra xem các trường dữ liệu có được nhập hay không
        if (empty($user)  || empty($email) ||  empty($pass)) {
            echo "Vui lòng điền đầy đủ thông tin.";
        } else {
            // Kiểm tra tính hợp lệ của email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email không hợp lệ.";
            } else {
                // Chèn dữ liệu vào cơ sở dữ liệu
                $sql = "INSERT INTO users (username, email, pass) VALUES ('$user','$email','$pass')";
                
                if ($pdo->query($sql) === TRUE) {
                    echo "Đăng ký thành công!";
                } else {
                    echo "Lỗi: " . $sql . "<br>" . $pdo->error;
                }
            }
        }
    }

