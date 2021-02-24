<?php
//require_once 'function/main-function.php';
require_once 'function/login.func.php';
require 'elements/header.php';

//$uri = $_SERVER['REQUEST_URI'];
$url = '';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}
//var_dump($uri);

 if($url ==='/admin'){
     require 'pages/login.php';
 }
 elseif($url[0] ==='/admin/dashboard'){
     require 'pages/dashboard.php';
 }
 elseif($url[0] ==='admin/logout'){
     require 'pages/logout.php';
 }
 elseif($url[0] ==='admin/mon-profil'){
     require 'pages/profil.php';
 }
 elseif($url[0] ==='admin/reglages'){
     require 'pages/reglages.php';
 }
elseif($url[0] ==='admin/modification'){
     require 'pages/modification.php';
 }
 else{
     require 'pages/error.php';
 }


 require 'elements/footer.php';