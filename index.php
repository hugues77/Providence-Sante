<?php
session_start();
require_once 'functions/functions.php';
require_once 'admin/function/login.func.php';
require_once 'functions/main.php';
require 'elements/header.php';


//var_dump($_GET);
$url = '';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}
//var_dump($url);

if($url ===''){
    require 'pages/home.php';
}elseif($url[0] =='contact'){
    require 'pages/contact.php';
} elseif($url[0] ==='nous-contacter'){
    require 'pages/contact.php';
}
elseif($url[0] ==='login'){
    require 'pages/login.php';
}
elseif($url[0] ==='inscription'){
    require 'pages/register.php';
}
elseif($url[0] ==='parametres'){
   require 'pages/reglages.php';
}
elseif($url[0] ==='membre'){
    require 'pages/membre.php';
 }
elseif($url[0] ==='mon-profil'){
   require 'pages/profil.php';
}
elseif($url[0] ==='logout'){
   require 'pages/logout.php';
}
elseif($url[0] ==='admin' && $url[1] =='login'){
    require 'admin/pages/login.php';
}
elseif($url[0] ==='admin' && $url[1] =='dashboard'){
    require 'admin/pages/dashboard.php';
}
elseif($url[0] ==='admin' && $url[1] =='logout'){
    require 'admin/pages/logout.php';
}
elseif($url[0] ==='admin' && $url[1] =='mon-profil'){
    require 'admin/pages/profil.php';
}
elseif($url[0] ==='admin' && $url[1] =='reglages'){
    require 'admin/pages/reglages.php';
}
elseif($url[0] ==='admin' && $url[1] =='modification'){
    require 'admin/pages/modification.php';
}
else{
    require 'pages/error.php';
}


require 'elements/footer.php';