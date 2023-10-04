CREATE TABLE tacgia (
  ma_tgia INT UNSIGNED  PRIMARY KEY,
  ten_tgia VARCHAR(100) NOT NULL,
  hinh_tgia VARCHAR(100)
);
DROP TABLE tacgia

INSERT INTO tacgia (ma_tgia,ten_tgia,hinh_tgia) VALUES
(1,'Huong Lan','./img/images.jpg'),
(2,'Le Quyen','./img/le-quyen.jpg'),
(3,'Manh Quynh','./img/Manh-Quynh.jpg'),
(4,'Phi Nhung','./img/phi-nhung.jpeg'),
(5,'Quang Le','./img/quang-le.jpg'),
(6,'Hoai Lam','./img/hoai-lam.webp'),
(7,'Nhacvietplus','./img/dong-nhi.jpg'),
(8,'Son Tung','./img/Son_Tung_M-TP.png'),
(9,'Noo Phuoc Thinh','./img/Noo.jpg'),
(10,'Huong Tram','./img/huong-tram.jpg'),
(11,'Hoa Minzy','./img/hoa-minzy.jpg'),
(12,'Ha Anh Tuan','./img/ha-anh-tuan.jpg'),
(13,'Nhacvietplus','./img/hoang-thuy-linh.jpg');

SELECT * FROM tacgia