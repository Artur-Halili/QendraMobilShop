CREATE TABLE qms(
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `Name` varchar(255) NOT NULL,
    `Desc` varchar (255) NOT NULL,
    `Price` varchar(11) NOT NULL,
    `Image` varchar(255) NOT NULL);


INSERT INTO `qms` (`id`, `Name`, `Desc`, `Price`,`Image` ) VALUES
(1, 'iPhone 16','iPhone 16 Purple Color', 1000, 'images/ip16.jpg'),
(2, 'iPhone 15 Pro Max', 'iPhone 15 Pro Max Natural Titanium', 900, 'images/ip15max.webp'),
(3, 'iPhone 14 Pro', 'iPhone 14 Pro Purple Color', 700, 'images/ip14pro.webp');

CREATE TABLE users (
 id int(11) NOT NULL,
    Name varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    surname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    confirm_password varchar(255) NOT NULL,
    is_admin varchar(255) NOT NULL
)

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    surname VARCHAR(100),
    product VARCHAR(100)
)