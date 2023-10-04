CREATE DATABASE CSE485_0923_TH1B
USE CSE485_0923_TH1B

SELECT * FROM tacgia
SELECT * FROM baiviet
SELECT *FROM theloai

//Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT baiviet.tieude, baiviet.ten_bhat
FROM baiviet
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai = 'tru tinh';

//Liệt kê các bài viết của tác giả “Nhacvietplus”
SELECT baiviet.tieude, baiviet.ten_bhat
FROM baiviet
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = 'Nhacvietplus';



// Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
SELECT ma_tloai, ten_tloai
FROM theloai
WHERE ma_tloai NOT IN (SELECT DISTINCT ma_tloai FROM baiviet);


//Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên
thể loại, ngày viết
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet 
JOIN tacgia  ON baiviet.ma_tgia = tacgia.ma_tgia
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

SELECT ten_bhat,ma_tloai, tomtat, noidung, hinhanh 
FROM baiviet 
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;


// Tìm thể loại có số bài viết nhiều nhất
SELECT theloai.ma_tloai, theloai.ten_tloai, COUNT(baiviet.ma_bviet) AS so_baiviet
FROM theloai 
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ma_tloai, theloai.ten_tloai
ORDER BY so_baiviet DESC
LIMIT 1;
// Liệt kê 2 tác giả có số bài viết nhiều nhất

SELECT tacgia.ma_tgia, tacgia.ten_tgia, COUNT(baiviet.ma_bviet) AS so_baiviet
FROM tacgia
JOIN baiviet  ON tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY tacgia.ma_tgia, tacgia.ten_tgia
ORDER BY so_baiviet DESC
LIMIT 2;
// Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”,
“em”
SELECT *
FROM baiviet
WHERE tieude LIKE '%yeu%' OR tieude LIKE '%thuong%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%';

//Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ
“yêu”, “thương”, “anh”, “em” 
SELECT *
FROM baiviet
WHERE tieude LIKE '%yeu%' OR tieude LIKE '%thuong%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%'
   OR ten_bhat LIKE '%yeu%' OR ten_bhat LIKE '%thuong%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';
//Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên
thể loại và tên tác giả
CREATE VIEW vw_Music AS
SELECT baiviet.ma_bviet, baiviet.tieude, theloai.ten_tloai, tacgia.ten_tgia
FROM baiviet
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;
SELECT*FROM vw_Music


//Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách
Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi
// Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo
// Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng
Đăng nhập/Quản trị trang web
CREATE TABLE users (
  id INT unsigned PRIMARY KEY AUTO_INCREMENT,
  username text unique NOT NULL,
  pass text  NOT NULL
  );
  
DROP TABLE users

insert into users (username, pass) values
('Sallie', 'Janauschek'),
('Cari', 'Coilsgfhgfgj'),
('Mee', 'Jana'),
('Warde', 'Archer'),
('Cicely', 'Cleve'),
('Chryste', 'Bloan'),
('Bartie', 'Antill'),
('Mae', 'Tayt'),
('Clementius', 'Southway'),
('Fulton', 'Beardsley'),
('Eberhard', 'Roswarne'),
('Jesus', 'Deane'),
('Amalle', 'Stanyard'),
('Cam', 'Eyden'),
('Minny', 'McKie'),
('Annamarie', 'Denslow'),
('Ramonda', 'Semmence'),
('Gustie', 'Choldcroft'),
('Hakeem', 'Donaway'),
('Charisse', 'Greenhaugh'),
('Hermine', 'Ricards'),
('Willie', 'Gealle'),
('Queenie', 'Jarmain'),
('Hayyim', 'Shovel'),
('Adeline', 'Farden'),
('Blondie', 'Freyn'),
('Tiffie', 'Snell'),
('Dore', 'Queste'),
('Jacquenetta', 'Cockin'),
('Noami', 'Gogerty'),
('Cheryl', 'Damrel'),
('Gwynne', 'Scrimgeour'),
('Joshua', 'Le-Good'),
('Adena', 'Korba'),
('Kristien', 'Figures'),
('Connor', 'Westgarth'),
('Perl', 'Joscelyne'),
('Joice', 'Testro'),
('Adore', 'Longmore'),
('Paola', 'Bifield'),
('Brenna', 'Birch'),
('Ambrosius', 'Siddons'),
('Ted', 'Dight'),
('Gwennie', 'Stanett'),
('Jon', 'Bussen'),
('Darice', 'Woolfoot'),
('Ema', 'Spalding'),
('Deena', 'Reddin'),
('Eadith', 'Pomroy'),
('Georgianna', 'Fifoot');
SELECT * FROM users

SELECT COUNT(*) AS dem FROM users
SELECT COUNT(*) AS dem FROM tacgia
SELECT COUNT(*) AS dem FROM theloai
SELECT COUNT(*) AS dem FROM baiviet