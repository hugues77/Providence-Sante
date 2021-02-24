<?php
//$title = "S'inscrire - Providence santé";
//require_once 'functions/functions.php';
//require_once 'header.php';

if(isset($_SESSION['image'])){
    header('Location:mon-profil');
}
?> 

<div class="row container">
     
    <div class="col-md-5 form-login-admin text-right">
        <img src="http://providencesante.fr/img/doctor-register.jpg" height="560px" alt="Bonhomme Providence sante">
    </div> 
    <div class="col-md-7 form-login">
        <?php
        if(isset($_POST['btn_register'])){

            $email = htmlspecialchars(trim($_POST['email']));
            $pseudo = htmlspecialchars(trim($_POST['pseudo']));
            $membre = htmlspecialchars(trim($_POST['membre']));
            $date_naissance = htmlspecialchars(trim($_POST['date_naissance']));
            
            $aujourdhui = date('Y');
            $age_naissance = date('Y',strtotime($date_naissance));
            $age_membre = ($aujourdhui)-($age_naissance);

            $token=sha1($email.$pseudo.$membre.$date_naissance);
        
            if(empty($email) || empty($pseudo) || empty($membre) || empty($date_naissance)){
                ?>
                <div class="alert alert-danger">vous devriez remplir tous les champs requis!</div>
            <?php
            }
            else if($age_membre < 18){
                ?>
                    <div class="alert alert-danger">votre âge ne vous permets pas de s'inscrire!</div>
                <?php
            }elseif(user_exist($email,$pseudo)){
                ?>
                    <div class="alert alert-danger">Le pseudo et/ou email a été déjà assigné !</div>
                <?php
            } else{
                $succes = is_register_users($email, $pseudo, $membre, $date_naissance, $token);
                if($succes){
                    $sujet= "Inscription - Providence sante!";
                    ob_start();
                    require_once 'mail/regular/email_users.php';
                    $message = ob_get_clean();
                    $header = "MIME-Version: 1.0\r\n";
                    $header .= "Content-type: text/html; charset-utf-8\r\n";
                    $header .= 'From: ne_pas_repondre@providence.fr' . "\r\n" . 'Reply-To: p.accessante@gmail.com'  ."\r\n";
                    
                    mail($email, $sujet, $message, $header);
                    $_SESSION['email'] = $email; ?>
                    <script>document.location.replace("/parametres")</script> 
                    <?php
                    //exit();
                }else{
                    ?>
                    <div class="alert alert-danger">Problème lors de l'enregistrement ! réessayer</div>
                    <?php
                }
                
            }
        }
        ?>
        <h2>Inscription!</h2>
        <form action="" method="POST">
            <div class="form-outline">
                <i class="fas fa-envelope-open-text trailing"></i>
                <input type="email" id="form1" name="email" class="form-control form-icon-trailing" />
                <label class="form-label" for="form1">votre E-mail</label>
            </div><br>
            <div class="form-outline">
                <i class="far fa-user trailing"></i>
                <input type="text" id="form1" name="pseudo" class="form-control form-icon-trailing" />
                <label class="form-label" for="form1">votre Identifiant/Pseudo</label>
            </div><br>
            <select class="form-select" name="membre" aria-label="Default select example">
                <option value="" selected >Choisir Membre</option>
                <option value="Ambassadeur">Ambassadeur</option>
                <option value="Partenaire">Partenaire</option>
                <option value="Membre ayant un poste">Membre ayant un poste</option>
                <option value="Donateurs">Donateurs</option>
                <option value="Membres Bénévoles">Membres Bénévoles</option>
                <option value="Membre confondus">Membre confondus</option>
            </select><br>
            <div class="form-outline">
                
                <input type="date" id="typedate" name="date_naissance" class="form-control" aria-describedby="textExample1"/>
                <label class="form-label" for="typedate"></label>
            </div>
            <div id="textExample1" class="form-text text-primary">
                Ce champs correspond à votre date de naissance.
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 col-12">
                    <button type="submit" name="btn_register" class="btn btn-danger btn-block">Valider</button>
                </div>
                <div class="col-md-6 col-12">
                    <a href="/login" class="btn btn-dark btn-block">déjà Membre</a>
                </div>
            </div>
        </form>
    </div> 
    
</div>


