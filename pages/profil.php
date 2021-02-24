<?php
//$title = "Mon profil - Providence santé";
//require_once 'functions/functions.php';
//require_once 'header.php';
if(!isset($_SESSION['image'])){
    header('Location:login');
}
?>

<div class="row mt-5">
    <div class="col-md-8 offset-2 form-login">
        <h2>Profil de <?= $_SESSION['pseudo']?></h2>
    </div>
</div>









