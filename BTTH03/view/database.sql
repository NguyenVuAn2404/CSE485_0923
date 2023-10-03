Create database QuanLyBaiHat;
use QuanLyBaiHat;
Create table TheLoai{
	id INT PRIMARY KEY auto_increment,
    tentheloai varchar(255) NOT NULL
};
Create table BaiHat{
	id INT PRIMARY KEY auto_increment,
    tenBaiHat varchar(255) NOT NULL,
	caSi varchar(255) NOT NULL,
	FOREIGN KEY(id) REFERENCES TheLoai(id)
};
	