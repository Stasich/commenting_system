1. Создать директорию "commenting_system" в корневой папке сайта.
2. Создать БД c именем "future_test" и создать таблицу командами:
mysql -u user -p
drop database if exists future_test;
create database future_test character set=utf8;
use future_test;
CREATE TABLE `comments` (`id` int(11) NOT NULL AUTO_INCREMENT,  `name` varchar(20) DEFAULT NULL, `text` varchar(255) DEFAULT NULL,`time` int(11) DEFAULT NULL, PRIMARY KEY (`id`) );

3.Создать в mysql нового пользователя "future_test" c паролем "12345" и дать права на БД future_test.
CREATE USER 'future_test'@'localhost' IDENTIFIED BY '12345';
GRANT ALL PRIVILEGES ON future_test.* TO 'future_test'@'localhost';




