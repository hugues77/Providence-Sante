<?php
//$title = "Esapce d'administration du site";
//require_once 'function/login.func.php';
//require_once 'header.php'; 
if((!isset($_SESSION['email']) ) && (!isset($_SESSION['pseudo']))){
    header('Location:login');
}
?>

<div class="row mt-5"> 
    <?php if(!isset($_SESSION['pseudo'])): ?>
        <div class="col-12 col-md-8 offset-2 form-login">
            <div class="alert alert-success"><strong>Félicitations! </strong>Un email vient d'etre envoyé! Consulter votre boite email pour valider l'inscription</div>
            <h2>Activer Mon compte </h2><br>
            <?php
            
            //sinon 
            if(isset($_POST['btn_reglage_confirm'])){
                $token = htmlspecialchars(trim($_POST['token']));
                
                if(empty($token)){
                    ?>
                    <div class="alert alert-danger">vous devriez remplir ce champs svp!</div>
                    <?php
                }else{
                    $confirm = activer_compte_user($token);

                    if($confirm){
                        token_zero();
                        ?>
                        <script>document.location.replace("/membre")</script>
                        <?php
                        //echo '<div class="alert alert-success"><b>Félicitations</b> Votre comptea été activé avec succès <a href="" class="bg-danger text-decoration-none">Créer votre mot de passe</a></div>';
                    }else{
                        echo '<div class="alert alert-danger"><b>Echec!</b> Le Token que vous envoyez n\'est plus valide!</div>';
                    }
                }
            }

            ?>
            <form action="" method="POST">
                <div class="form-outline">
                    <i class="fas fa-key trailing"></i>
                    <input type="text" id="formtoken" name="token" class="form-control form-icon-trailing" />
                    <label class="form-label" for="formtoken">Entrer votre code Unique </label>
                </div><br>
                <div class="row">
                    <button type="submit" name="btn_reglage_confirm" class="btn btn-primary btn-block">Valider</button>
                </div>
            </form>
        </div>
    <?php else: ?>
        <div class="col-12 col-md-8 offset-2 form-login">

            <h2>Paramètres de Mon compte </h2><br>
            <?php
            
            //sinon 
            if(isset($_POST['btn_reglage'])){
                $password1 = htmlspecialchars(trim($_POST['password1']));
                $password2 = htmlspecialchars(trim($_POST['password2']));
                $photo = $_FILES['fichier']['name'];
                if(empty($password1) || empty($password2) || empty($photo)){
                    ?>
                    <div class="alert alert-danger">vous devriez remplir tous les champs requis!</div>
                    <?php
                }else{
                    if($password1 != $password2){
                        ?>
                        <div class="alert alert-danger">Vos deux mot de passe ne sont pas identiques!</div>
                        <?php
                    }else{
                        //traitement 
                        $photosize = $_FILES['fichier']['size'];
                        $phototmp = $_FILES['fichier']['tmp_name'];
                        $photoerror = $_FILES['fichier']['error'];
                        $phototype = $_FILES['fichier']['type'];

                        $destination = "img/profil_users/".$photo;
                        /** checking si l'extension est bonne */
                        $extensions = ['.png','.PNG','.jpg','.JPG','.jpeg','.JPEG','.gif','.GIF'];
                        $ext = strchr($photo, '.');
                        /**on verifie l'extension du fichier se trouve dans le tableau des extensions */
                        if(!in_array($ext,$extensions)){
                            ?>
                            <div class="alert alert-danger">L'extension du fichier que vous avez envoyé n'est pas autorisée</div>
                            <?php
                        }else{
                            if($photosize > 2000000){
                                ?>
                            <div class="alert alert-danger">La taille du fichier ne doit pas depasser 2 Mo</div>
                            <?php
                            }else{
                                if($photoerror != 0){
                                    ?>
                                <div class="alert alert-danger">Echec d'envoi du fichier dans le serveur, Réesseyer</div>
                                <?php
                                }else{
                                    move_uploaded_file($phototmp,$destination);
                                    $update = send_file($password1, $photo);
                                    if($update){
                                             header('Location:/parametres');
                                            // exit();
                                        ?>
                                            <div class="alert alert-success"><b>Félicitations</b> Mise à jour a été éffectuée avec succès</div>
                                        <?php
                                    }else{
                                        ?>
                                            <div class="alert alert-danger"><b>Echec</b> votre mise à jour n'a pas pu etre enregistrer </div>
                                        <?php
                                    }
                                }
                            }
                        }
                    }
                }
            }

            ?>
            <form action="" method="POST" class="" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5 col-12 text-center">
                        <img src="img/profil_users/<?= $_SESSION['image']?>"
                            class="rounded-circle"
                            height="150" width="150" class=""
                            alt="<?= $_SESSION['nom']?>"
                            loading="lazy"
                            />
                        <br>
                        <label for="formFileLg" class="form-label"><h5>Changer ma Photo de profil</h5></label>
                        <input class="form-control form-control-md" id="formFileLg" name="fichier" type="file" /><br>
                    </div>
                    <div class="col-md-1 text-center">
                        <div class="barre-vertical"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="mb-3">Choisir mon Mot de passe</h5>
                        <div class="form-outline">
                            <i class="fas fa-key trailing"></i>
                            <input type="password" id="form1" name="password1" class="form-control form-icon-trailing" />
                            <label class="form-label" for="form1">Mot de passe</label>
                        </div><br>
                        <div class="form-outline">
                            <i class="fas fa-key trailing"></i>
                            <input type="password" id="typePassword" name="password2" class="form-control" />
                            <label class="form-label" for="typePassword">Rétaper Mot de passe</label>
                        </div>
                        <small class="text-danger text-justify">Sélectionner une photo de profil et renseigner le nouveau mot de passe en vue de valider le formulaire, sinon changer la photo de profil en renseignant l'ancien mot de passe. Merci</small>
                    </div>
                    <button type="submit" name="btn_reglage" class="btn btn-primary btn-block">Valider</button>
                </div>
            </form>
        </div>
    <?php endif; ?>
</div>



