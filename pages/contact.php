
<div class="ms-5 me-5 row  titre-contact">
    <?php
    /** traitement envoie message */
        if(isset($_POST['btn_contact'])){
            $nom = htmlspecialchars(trim($_POST['nom']));
            $email = htmlspecialchars(trim($_POST['email']));
            $message = htmlspecialchars(trim($_POST['message']));
            $destinateur = "p.accessante@gmail.com";
            $objet = htmlspecialchars(trim($_POST['objet']));
            $header="MIME-Version:1.0\r\n";
            $header.='From:"Providence Sante"<contact@providencesante.fr>'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfert-Encoding:8bit';

            ob_start();
            require_once 'mail/regular/email.php';
            $description = ob_get_clean();
            if(empty($nom) || empty($email) || empty($message)){
                ?>
                <div class="alert alert-danger">Vous devriez remplir tous les champs requis svp</div>
            <?php
            }else{
                mail($destinateur,$objet, $description,$header);
                ?>
            <div class="alert alert-success"><b>Felicitations</b> Votre message a été envoyé à l'équipe <b>Providence santé</b></div>
            <?php
            }
        }
        ?>
    <div class="col-md-5 ">
        <h2 class=""></h2>
        <div class="text-justify">
            <h6>Siège social: 47, Avenue Aristide Briand <br> 93320 Les Pavillons sous Bois</h6>
            <h6>France</h6>
            <h6>E-mail: p.accessante@gmail.com</h6>
            <h6>Tél (France) : +33 7 58 88 61 41</h6>
            <h6>Tél (RD congo) : +243 990 643 460</h6>
        </div><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2134.089349603125!2d2.4941244150894786!3d48.908361705141765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6130de2e67ea5%3A0xbe89ad36d6e09404!2s47%20Avenue%20Aristide%20Briand%2C%2093320%20Les%20Pavillons-sous-Bois!5e1!3m2!1sfr!2sfr!4v1611671376987!5m2!1sfr!2sfr" 
            width="500" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
    </div>
    <div class="col-md-7">
        <h2 class="">Nous contacter !</h2>
        <form action="" method="POST" class="">

            <div class="form-outline">
                <input type="text"  name="nom" id="form1" class="form-control form-icon-trailing" />
                <label class="form-label" for="form1">Nom Complet</label>
            </div>
            <br>
        
            <div class="row">
                <div class="col-md-8">
                    <div class="form-outline">
                        <input type="email" name="email" id="typePassword" class="form-control" />
                        <label class="form-label" for="typePassword">E-mail</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                        <input type="text" name="objet" id="typePassword" class="form-control" />
                        <label class="form-label" for="typePassword">Objet du Message</label>
                    </div>
                </div>
            </div><br>
            
            <div class="form-outline">
                <textarea class="form-control" name="message" id="textAreaExample" rows="6"></textarea>
                <label class="form-label" for="textAreaExample">Message</label>
            </div><br>
            <button type="submit" name="btn_contact" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>