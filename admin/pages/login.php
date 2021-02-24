<?php
//$title = "Esapce d'administration du site";
//require_once 'function/login.func.php';
//require_once 'header.php'; 
if(isset($_SESSION['email'])){
    header('Location:/admin/dashboard');
}
?>

<div class="row mt-5">
    <div class="col-md-8 offset-2 form-login">
        <?php
        if(isset($_POST['btn_login'])){

            $email = htmlspecialchars(trim($_POST['email']));
            $password = htmlspecialchars(trim($_POST['password']));

            if(empty($email) || empty($password)){
                ?>
            <div class="alert alert-danger">vous devriez remplir tous les champs requis!</div>
            <?php
            }
            else if(is_login($email,$password) == 0){
                ?>
                <div class="alert alert-danger">vos Identifiants ne vous permets pas de se connecter; Rassayer svp</div>
                <?php
            }else{
                $info = is_connected($email, $password);
                $_SESSION['nom']= $info->nom;
                $_SESSION['admin']= $info->email;
                $_SESSION['image']= $info->image;
                header("Location:/admin/dashboard");
            }
        }
        ?>
        <h2>Vos Identifiants</h2>
        <form action="" method="POST" class="">
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
            <button type="submit" name="btn_login" class="btn btn-primary">Valider</button>
        </form>
    </div>    
</div>


