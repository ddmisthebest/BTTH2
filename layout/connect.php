<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=cse485_0923_th1b", "root", "1234");
} catch (PDOException $e) {
  die("Lỗi kết nối: " . $e->getMessage());
}