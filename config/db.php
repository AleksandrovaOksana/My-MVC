<?php

return [
    'host' => 'polygon_db',
    'dbname' => 'db',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8', //utf8mb4
    'options' => [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

    ],
];