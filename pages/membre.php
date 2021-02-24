<?php
 if(!isset($_SESSION['pseudo'])){
    ?>
    <div class="col-12 col-md-8 offset-2 form-login">
            
            <?php
            
            //sinon 
            if(isset($_POST['btn_reglage_confirm'])){
                $nom = htmlspecialchars(trim($_POST['nom']));
                $prenom = htmlspecialchars(trim($_POST['prenom']));
                
                if(empty($nom) || empty($prenom)){
                    ?>
                    <div class="alert alert-danger">vous devriez remplir ce champs svp!</div>
                    <?php
                }else{
                    $confirm = insert_membre($nom, $prenom);

                    if($confirm){
                        $_SESSION['pseudo'] = recup_pseudo_user()->pseudo;
                        $_SESSION['image'] = recup_pseudo_user()->image;
                        ?>
                        <script>document.location.replace("/parametres")</script>
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
                    <input type="text" id="formtoken" name="nom" class="form-control form-icon-trailing" />
                    <label class="form-label" for="formtoken">Entrer votre nom </label>
                </div><br>
                <div class="form-outline">
                    <i class="fas fa-key trailing"></i>
                    <input type="text" id="formtoken" name="prenom" class="form-control form-icon-trailing" />
                    <label class="form-label" for="formtoken">Entrer votre prénom </label>
                </div><br>
                <div class="row">
                    <button type="submit" name="btn_membre" class="btn btn-primary btn-block">Valider</button>
                </div>
            </form>
        </div>
    <?php
 }else{
     header('Location:/');
 }