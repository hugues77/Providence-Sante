<?php
// $title = "Tableau d'administration du site";
// require_once 'function/main-function.php';
// require_once 'header.php'; 
if(!isset($_SESSION['email'])){
    header('Location:/admin/login');
}
?>

<div class="row mt-5 ms-5 me-5 form-login-admin">
    <div class="col-md-6 form-dash">
        <div class="accordion" id="accordionExample1">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne1">
                    <button
                        class="accordion-button"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseOne1"
                        aria-expanded="true"
                        aria-controls="collapseOne1"
                        >
                        <h2>Témoignages</h2>
                    </button>
                </h2>
                <div
                    id="collapseOne1"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne1"
                    data-mdb-parent="#accordionExample1"
                        >
                    <div class="accordion-body">
                        <small class="text-danger">Ce panel vous permet d'envoyer des posts relatifs à la section Témoignages du site</small><br>
                        <?php
                        if(isset($_POST['btn_temoignage'])){
                            $nom = htmlspecialchars(trim($_POST['nom']));
                            $titre = htmlspecialchars(trim($_POST['titre']));
                            $pays = htmlspecialchars(trim($_POST['pays']));
                            $description = htmlspecialchars(trim($_POST['description']));
                            $drapeau = ($pays =='France') ? "fr.png" : "kin1.PNG";

                            $fichier = $_FILES['fichier']['name'];
                            $fichiererror = $_FILES['fichier']['error'];
                            $fichiertmp = $_FILES['fichier']['tmp_name'];
                            $fichiertype = $_FILES['fichier']['type'];
                            $fichiersize = $_FILES['fichier']['size'];

                            $extensions = ['.jpg','.JPG', '.png','.PNG', '.jpeg','.JPEG', '.gif', '.GIF'];
                            $ext = strchr($fichier, '.');
                            $nouveau_nom = $nom.$ext;
                            $destination = "../img/temoignage/".$nouveau_nom;

                            if(empty($nom) || empty($pays) || empty($titre) || empty($fichier) || empty($description)){
                                ?>
                                <div class="alert alert-danger">vous devriez remplir tous les champs requis svp!</div>
                                <?php
                            }elseif(!in_array($ext,$extensions)){
                                ?>
                                <div class="alert alert-danger">L'extension du fichier que vous  envoyez n'est pas autorisée dans le site</div>
                                <?php
                            }else if($fichiersize > 2000000){
                                ?>
                                <div class="alert alert-danger">La taille de votre fichier  est trop grand, Compressez-le si possible</div>
                                <?php

                            }else if($fichiererror != 0){
                                ?>
                                <div class="alert alert-danger">Echec lors de chargement du fichier dans le serveur, Réessayer!</div>
                                <?php
                            }else{
                                move_uploaded_file($fichiertmp, $destination);
                                $send_temoignage = temoignage($nom, $nouveau_nom, $titre, $description, $pays, $drapeau);
                                if($send_temoignage){
                                    ?>
                                    <div class="alert alert-success"><b>Félicitations ! <?=$_SESSION['nom']?>, </b>Votre fichier a été envoyé avec succès</div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="alert alert-danger"><b>Echec <?=$_SESSION['nom']?></b>,  Une erreur s'est produit lors de l'envoie du fichier</div>
                                    <?php
                                }
                            }
                            
                        }
                        ?>
                        <form action="" method="POST" class="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-outline">
                                    <input type="text"  name="nom" id="form1" class="form-control form-icon-trailing" />
                                    <label class="form-label" for="form1">Nom Complet</label>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select" name="pays" aria-label="Default select example">
                                        <option value="" selected>Choisir le pays</option>
                                        <option value="France">France</option>
                                        <option value="Congo">Congo-Kinshasa</option>
                                        <option value="Autres">Autres...</option>
                                    </select>
                                </div>
                            </div><br>
                        
                            <div class="form-outline">
                                <input type="text" name="titre" id="typePassword" class="form-control" />
                                <label class="form-label" for="typePassword">Titre du Témoignage</label>
                            </div><br>
                            <input class="form-control form-control-md" name="fichier" id="formFileLg" type="file" /><br>

                            <div class="form-outline">
                                <textarea class="form-control" name="description" id="textAreaExample" rows="6"></textarea>
                                <label class="form-label" for="textAreaExample">Message</label>
                            </div><br>
                            <!-- Default checkbox -->
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value="" name="public"
                                    id="flexCheckDefault"
                                        />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Public/Privé
                                </label>
                            </div><br>
                            <button type="submit" name="btn_temoignage" class="btn btn-primary">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                        >
                        <h2>Actualités-Providence</h2>
                    </button>
                </h2>
                <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-mdb-parent="#accordionExample"
                    >
                    <div class="accordion-body">
                        <small class="text-danger">Ce panel vous permet d'envoyer des posts relatifs à la section Carroussel & Evenement du site</small><br>
                        <?php
                        if(isset($_POST['btn_carrou'])){
                            $nom = htmlspecialchars(trim($_POST['nom']));
                            $description = htmlspecialchars(trim($_POST['description']));
                            $fichier = $_FILES['fichier']['name'];
                            $fichiersize = $_FILES['fichier']['size'];
                            $fichiertmp = $_FILES['fichier']['tmp_name'];
                            $fichiererror = $_FILES['fichier']['error'];
                            $fichiertype = $_FILES['fichier']['type'];

                            /** checking si l'extension est bonne */
                            $extensions = ['.png','.PNG','.jpg','.JPG','.jpeg','.JPEG','.gif','.GIF'];
                            $ext = strchr($fichier, '.');
                            $nouveau_nom = $nom.$ext;
                            $destination = "../img/carrou/".$nouveau_nom;

                            if(empty($nom) || empty($fichier) || empty($description)){
                                ?>
                                <div class="alert alert-danger">vous devriez remplir tous les champs requis svp!</div>
                                <?php
                            }else if(!in_array($ext, $extensions)){
                                ?>
                                <div class="alert alert-danger">L'extension du fichier que vous  envoyez n'est pas autorisée dans le site</div>
                                <?php
                            }else if($fichiersize > 2000000){
                                ?>
                                <div class="alert alert-danger">La taille de votre fichier  est trop grand, Compressez-le si possible</div>
                                <?php

                            }else if($fichiererror != 0){
                                ?>
                                <div class="alert alert-danger">Echec lors de chargement du fichier dans le serveur, Réessayer!</div>
                                <?php
                            }else{
                                move_uploaded_file($fichiertmp, $destination);
                                $send_gallery = send_carrou($nom,$nouveau_nom, $description);
                                if($send_gallery){
                                    ?>
                                    <div class="alert alert-success"><b>Félicitations ! <?=$_SESSION['nom']?>, </b>Votre Evènement a été envoyé avec succès</div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="alert alert-danger"><b>Echec <?=$_SESSION['nom']?><b>, Une erreur s'est produit lors de l'envoie du fichier</div>
                                    <?php
                                }
                            }
                        }
                        ?>
                        <form action="" method="POST" class=""  enctype="multipart/form-data">
                            <div class="form-outline">
                                <input type="text" id="form1" name="nom" class="form-control form-icon-trailing" />
                                <label class="form-label" for="form1">Titre de l'évènement</label>
                            </div><br>
                            <label for="formFileLg" class="form-label">Carroussel</label>
                            <input class="form-control form-control-lg" name="fichier" id="formFileLg" type="file" /><br>
                            <div class="form-outline">
                                <textarea class="form-control" name="description" id="textAreaExample" rows="6"></textarea>
                                <label class="form-label" for="textAreaExample">Description de l'évènement</label>
                            </div><br>
                            <!-- Default checkbox -->
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value="" name="public"
                                    id="flexCheckDefault"
                                        />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Public/Privé
                                </label>
                            </div><br>
                            <button type="submit" name="btn_carrou" class="btn btn-primary">Valider</button>
                        </form><hr class="hr-barre">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 form-dash">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button
                    class="accordion-button"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                    >
                    <h2>Gallery</h2>
                    </button>
                </h2>
                <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-mdb-parent="#accordionExample"
                        >
                    <div class="accordion-body">
                        <small class="text-danger">Ce panel vous permet d'envoyer des posts relatifs à la section Photos/gallery du site</small><br>
                        <?php
                        if(isset($_POST['btn_gallery'])){
                            $nom = htmlspecialchars(trim($_POST['nom']));
                            $description = htmlspecialchars(trim($_POST['description']));
                            $fichier = $_FILES['fichier']['name'];
                            $fichiersize = $_FILES['fichier']['size'];
                            $fichiertmp = $_FILES['fichier']['tmp_name'];
                            $fichiererror = $_FILES['fichier']['error'];
                            $fichiertype = $_FILES['fichier']['type'];

                            /** checking si l'extension est bonne */
                            $extensions = ['.png','.PNG','.jpg','.JPG','.jpeg','.JPEG','.gif','.GIF'];
                            $ext = strchr($fichier, '.');
                            $nouveau_nom = $nom.$ext;
                            $destination = "../img/gallery/".$nouveau_nom;

                            if(empty($nom) || empty($fichier) || empty($description)){
                                ?>
                                <div class="alert alert-danger">vous devriez remplir tous les champs requis svp!</div>
                                <?php
                            }else if(!in_array($ext, $extensions)){
                                ?>
                                <div class="alert alert-danger">L'extension du fichier que vous  envoyez n'est pas autorisée dans le site</div>
                                <?php
                            }else if($fichiersize > 2000000){
                                ?>
                                <div class="alert alert-danger">La taille de votre fichier  est trop grand, Compressez-le si possible</div>
                                <?php

                            }else if($fichiererror != 0){
                                ?>
                                <div class="alert alert-danger">Echec lors de chargement du fichier dans le serveur, Réessayer!</div>
                                <?php
                            }else{
                                move_uploaded_file($fichiertmp, $destination);
                                $send_gallery = send_gallery($nom,$nouveau_nom, $description);
                                if($send_gallery){
                                    ?>
                                    <div class="alert alert-success"><b>Félicitations ! <?=$_SESSION['nom']?>, </b>Votre fichier a été envoyé avec succès</div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="alert alert-danger"><b>Echec <?=$_SESSION['nom']?><b>, Une erreur s'est produit lors de l'envoie du fichier</div>
                                    <?php
                                }
                            }
                        }
                        ?>
                        <form action="" method="POST" class="" enctype="multipart/form-data">
                            <div class="form-outline">
                                <input type="text" id="form1" name="nom" class="form-control form-icon-trailing" />
                                <label class="form-label" for="form1">Nom Complet</label>
                            </div><br>
                            <label for="formFileLg" class="form-label">Photo Gallery</label>
                            <input class="form-control form-control-lg" name="fichier" id="formFileLg" type="file" /><br>
                            <div class="form-outline">
                                <textarea class="form-control" name="description" id="textAreaExample" rows="4"></textarea>
                                <label class="form-label" for="textAreaExample">Description de l'image</label>
                            </div><br>
                            <button type="submit" name="btn_gallery" class="btn btn-primary">Valider</button>
                        </form><hr class="hr-barre">
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo2">
                    <button
                        class="accordion-button collapsed"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseTwo2"
                        aria-expanded="false"
                        aria-controls="collapseTwo2"
                        >
                        <h2>Nos valeurs</h2>
                    </button>
                </h2>
                <div
                    id="collapseTwo2"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo2"
                    data-mdb-parent="#accordionExample" 
                        >
                    <div class="accordion-body">
                        <small class="text-danger">Ce panel vous permet d'envoyer des posts relatifs à la section nos Valeurs du site</small><br>
                        <?php
                            if(isset($_POST['btn_valeur'])){
                                $nom = htmlspecialchars(trim($_POST['nom']));
                                $description = htmlspecialchars(trim($_POST['description']));
                                $public = isset($_POST['public'])?'1' :'0';

                                if(empty($nom)|| empty($description)){
                                    ?>
                                    <div class="alert alert-danger">vous devriez remplir tous les champs requis svp!</div>
                                    <?php
                                }else{
                                    $success = valeur($nom, $description, $public);
                                    if($success){
                                        ?>
                                    <div class="alert alert-success"><b>Félicitations !</b> vos données sont enregistrées avec succès dans le système</div>
                                    <?php
                                    }else{
                                        ?>
                                    <div class="alert alert-danger">Echec lors de l'enregistrement dans la base de donnée!</div>
                                    <?php
                                    }
                                }
                            }
                        ?>
                        <form action="" method="POST">
                            <select class="form-select" name="nom" aria-label="Default select example">
                                <option value="" selected >Choisir une valeur</option>
                                <option value="Équité">Équité</option>
                                <option value="Partage">Partage</option>
                                <option value="Passionnément Humain">Passionnément Humain</option>
                            </select><br>
                            <div class="form-outline">
                                <textarea class="form-control" name="description" id="textAreaExample" rows="4"></textarea>
                                <label class="form-label" for="textAreaExample">Description</label>
                            </div><br>
                            <!-- Default checkbox -->
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value="" name="public"
                                    id="flexCheckDefault"
                                        />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Public/Privé
                                </label>
                            </div><br>
                            <button type="submit" name="btn_valeur" class="btn btn-primary">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




