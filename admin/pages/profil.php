<?php
// $title = "Esapce d'administration du site";
// require_once 'function/login.func.php';
// require_once 'header.php'; 
if(!isset($_SESSION['email'])){
    header('Location:/admin/login');
}?>

<div class="row mt-5">
    <div class="col-md-8 offset-2 form-login">
        <h2>Profil de <?= $_SESSION['nom']?></h2>
    </div>
</div>



