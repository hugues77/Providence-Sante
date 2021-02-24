<?php
$title = "Connectez-vous - Providence santé";
//require_once 'functions/functions.php';
//require_once 'header.php';



if(isset($_SESSION['image'])){
    header('Location:profil.php');
}
?>

<div class="row">
    <div class="col-md-4 offset-3 form-login">
        <?php
        if(isset($_POST['btn_login'])){

            $email = htmlspecialchars(trim($_POST['email']));
            $password = htmlspecialchars(trim($_POST['password']));

            if(empty($email) || empty($password)){
                ?>
            <div class="alert alert-danger">vous devriez remplir tous les champs requis!</div>
            <?php
            }
            else if(is_login_user($email,$password) == 0){
                ?>
                <div class="alert alert-danger">vos Identifiants ne vous permets pas de se connecter; Rassayer svp</div>
                <?php
            }else{
                $info = is_connected_user($email, $password);
                 $_SESSION['nom']= $info->nom;
                 $_SESSION['pseudo']= $info->pseudo;
                 $_SESSION['image']= $info->image;
                header("Location:/mon-profil");  
            }
        }
        ?>
        <h2>Vos Identifiants</h2>
        <form action="" method="POST">
            <div class="form-outline">
                <i class="far fa-user trailing"></i>
                <input type="email" id="form1" name="email" class="form-control form-icon-trailing" />
                <label class="form-label" for="form1">votre E-mail / Identifiant</label>
            </div><br>
            <div class="form-outline">
                <i class="fas fa-key trailing"></i>
                <input type="password" id="typePassword" name="password" class="form-control" />
                <label class="form-label" for="typePassword">votre mot de passe</label>
            </div><br>
            <button type="submit" name="btn_login" class="btn btn-danger btn-block">Valider</button>
        </form>
    </div>
    <div class="col-md-4 form-login1">
        <img src="http://providencesante.fr/img/bonhomme-404.jpg" height="300px" alt="bonhomme Providence sante">
    </div>   
</div>


