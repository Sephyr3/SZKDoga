CREATE TABLE `users`(
    `id` smallint UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(100) NOT NULL,
    `born` date DEFAULT '1970-01-01'
)DEFAULT CHARSET = UTF8;


