<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=gameryvideo', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$defaultmoviedirectory = "/movie/";
session_start();
$requireregister = false;
$config = array(
    "sitetitle" => "Gamery demo",
    "siteversion" => 1,
    "maintenance"=> false,
    "logo" => "/asset/logo_divefactory.jpg"
);
?>