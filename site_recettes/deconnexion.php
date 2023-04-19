<?php
session_start();
include_once('config/mysql.php');
include_once('variables.php');
session_destroy();
unset($_SESSION['LOGGED_USER']);
setcookie('LOGGED_USER');
unset($_COOKIE['LOGGED_USER']);
header('Location: ' . $rootUrl . 'index.php');
