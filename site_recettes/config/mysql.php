<?php

const MYSQL_HOST = 'localhost';
const MYSQL_NAME = 'we_love_food';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '';

try {
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;charset=utf8', MYSQL_HOST, MYSQL_NAME),
        MYSQL_USER,
        MYSQL_PASSWORD
    );

    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}