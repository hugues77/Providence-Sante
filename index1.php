<!-- <script>confirm('Nous rencontrons un problème de route, revenez demain tout sera pour vous à merveille');</script>-->
<?php 

session_start();
require_once 'functions/functions.php';
require_once 'functions/main.php';
require 'elements/header.php';
$url = $_SERVER['REQUEST_URI'];
//$uri = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//http://providencesante.fr/

if($url ==='/'){
    require 'pages/home.php';
}
 elseif($url ==='/nous-contacter'){
     require 'pages/contact.php';
 }
 elseif($url ==='/login'){
     require 'pages/login.php';
 }
 elseif($url ==='/inscription'){
     require 'pages/register.php';
 }
 elseif($url ==='/parametres'){
    require 'pages/reglages.php';
}
elseif($url ==='/mon-profil'){
    require 'pages/profil.php';
}
elseif($url ==='/logout'){
    require 'pages/logout.php';
}else{
    require 'pages/error.php';
}

require 'elements/footer.php';