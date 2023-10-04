CREATE TABLE baiviet (
  ma_bviet INT UNSIGNED  PRIMARY KEY,
  tieude VARCHAR(200) NOT NULL,
  ten_bhat VARCHAR(100) NOT NULL,
  ma_tloai INT UNSIGNED NOT NULL,
  tomtat TEXT NOT NULL,
  noidung TEXT,
  ma_tgia INT UNSIGNED NOT NULL,
  ngayviet DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  hinhanh VARCHAR(200),
  FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai),
  FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia)
);
DROP TABLE baiviet
INSERT INTO baiviet (ma_bviet,tieude,ten_bhat,ma_tloai,tomtat,noidung,ma_tgia,hinhanh)
VALUES
(1,'Bài hát Cây,lá và gió','Cây,lá và gió',2,'Tom tat Cay,la va gio','Noi dung Cay,la va gio',13,'./img/chuyen-tinh.jpg'),
(2,'Bai hat Cuoc song men thuong','Cuoc song men thuong',2,'Tom tat Cuoc song men thuong','Noi dung Cuoc song men thuong',2,'./img/cuoc-song.jpg'),
(3,'Bai hat Long me','Long me',1,'Tom tat Long me','Noi dung Long me',7,'./img/long-me.jpg'),
(4,'Bai hat Phoi pha','Phôi pha',1,'Tom tat Phoi pha','Noi dung Phoi pha',3,'./img/phoi-pha.jpg'),
(5,'Bai hat Noi tinh yeu bat dau','Noi tinh yeu bat dau',1,'Tom tat Noi tinh yeu bat dau','Noi dung Noi tinh yeu bat dau',8,'./img/tinh-yeu.jpg');
SELECT * FROM baiviet