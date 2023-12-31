-- TẠO CSDL
CREATE DATABASE BTTH01_CSE485;
USE BTTH01_CSE485;

CREATE TABLE tacgia (
    ma_tgia INT UNSIGNED PRIMARY KEY,
    ten_tgia VARCHAR(100) NOT NULL,
    hinh_tgia VARCHAR(100)
);

CREATE TABLE theloai (
    ma_tloai INT UNSIGNED PRIMARY KEY,
    ten_tloai VARCHAR(50) NOT NULL
);

CREATE TABLE baiviet (
    ma_bviet INT UNSIGNED PRIMARY KEY,
    tieude VARCHAR(200) NOT NULL,
    ten_bhat VARCHAR(100) NOT NULL,
    ma_tloai INT UNSIGNED NOT NULL,
    tomtat TEXT NOT NULL,
    noidung TEXT,
    ma_tgia INT UNSIGNED NOT NULL,
    ngayviet DATETIME DEFAULT CURRENT_TIMESTAMP,
    hinhanh VARCHAR(200),
    FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia),
    FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai)
);