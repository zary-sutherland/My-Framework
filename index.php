<?php
include('data/configure.php');
require('data/autoloader.php');
session_start();
$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : 'index';
$frontController = new FRAMEWORKNS\Frontcontroller($url);
?>