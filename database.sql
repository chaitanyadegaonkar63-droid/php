CREATE DATABASE sms;
USE sms;


CREATE TABLE admin (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL
);


INSERT INTO admin (username, password) VALUES (
'admin', MD5('admin123')
);


CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
roll VARCHAR(50),
class VARCHAR(50)
);
