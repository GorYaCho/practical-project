<?php

return [
    'host' => 'localhost',
    'dbname' => 'test',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4', // utf8mb4
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ],
];

//INSERT INTO `posts` (`id`, `title`, `slug`, `excerpt`, `content`) VALUES ('1', 'Title 1', 'title-1', '<p>Maiores expectinarium nostrum', '<p> Lorem ipsum dolor sit\r\n'), ('2', 'Title 2', 'title-2', '<p>Maiores expectinarium nostrum', '<p> Lorem ipsum dolor sit\r\n'), ('3', 'Title 3', 'title-3', '<p>Maiores expectinarium nostrum', '<p> Lorem ipsum dolor sit\r\n'), ('4', 'Title 4', 'title-4', '<p>Maiores expectinarium nostrum', '<p> Lorem ipsum dolor sit\r\n'), ('5', 'Title 5', 'title-5', '<p>Maiores expectinarium nostrum', '<p> Lorem ipsum dolor sit\r\n');