CREATE TABLE theloai (
  ma_tloai INT UNSIGNED   PRIMARY KEY,
  ten_tloai VARCHAR(50) NOT NULL
);
DROP TABLE theloai

INSERT INTO theloai(ma_tloai,ten_tloai)
VALUES
(1,'tru tinh'),
(2,'nhac tre');
SELECT * FROM theloai