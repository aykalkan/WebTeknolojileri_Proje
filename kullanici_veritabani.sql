CREATE TABLE kullanici (
ogrenci_no CHAR(11) PRIMARY KEY, 
email VARCHAR(100),
sifre VARCHAR(32));


INSERT INTO kullanici (ogrenci_no, email, sifre) VALUES
('g191210031', 'g191210031@sakarya.edu.tr', '123456'),
('g191210118', 'g191210118@sakarya.edu.tr', '123456'),
('g191210080', 'g191210080@sakarya.edu.tr', '123456');