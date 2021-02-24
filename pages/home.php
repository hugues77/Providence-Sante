<?php
//$title = "Bienvenue - Providence santé";
//require_once 'functions/main.php';
//require_once 'header.php';

?>
<!-- entete -->
<header>
    <div class="container-fluid mt-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 form_head d-flex align-items-center">
                <div>
                    <h1 class="titre text-light ml-5 text-center">Association: Providence Santé </h1><hr>
                    
                    <div class="me-2 ms-2 align-items-center">
                        <a href="https://www.helloasso.com/associations/acces-sante/collectes/150-partenaires-pour-entrer-dans-une-nouvelle-saison/don" target="blank" class="btn btn-danger btn-cercle justify-content-center">Faire un Don</a>
                        <a href="/inscription" class="btn btn-danger btn-cercle me-2 ms-2 justify-content-center">Devenir Membre</a>
                    </div>
                </div>
            </div>
            <!-- ici votre slogan  -->
            <div class="col-12  col-md-6">
                <h2 class="slogan mb-4 text-danger"><i class="fas fa-quote-left guillemet mb-4 mr-2 ml-2"></i>la santé pour tous et partout <i class="fas fa-quote-right guillemet"></i></h2>
            </div>
        </div>
    </div>
</header>

<!-- début section A propos de accès santé -->
<div class="container">
    <h2 class="titre mb-3 mt-0 text-center">A propos</h2>
    <p class="text-center ">Providence Santé est une association à but non lucratif, engagées sur de nombreux fronts de lutte, notamment l’accessibilité de tous à la santé physique, mental et social. Notre objectif principal est d’apporter des soins médicaux gratuits aux personnes en grande difficulté à l’échelle internationale.</p>
    <div class="row text-justify">
        <?php $partage = valeur_partage();
              $humain = valeur_humain();
              $equite = valeur_equite(); ?>
        <div class="col-6  col-md-4"><h3 class="text-center text-danger titre"><i class="fas fa-balance-scale fa-2x mb-2 mt-3"></i><br><?=$equite->nom?></h3><?=$equite->description?> <a class="lire btn-equite" href="#equite"></a></div>
        <div class="col-6  col-md-4"><h3 class="text-center text-danger titre"><i class="fas fa-share-square fa-2x mb-2 mt-3"></i><br><?=$partage->nom?></h3><?=$partage->description?><a class="lire btn-partage"  href="#partage"></a></div>
        <div class="col-12 col-md-4"><h3 class="text-center text-danger titre"><i class="fas fa-user-check fa-2x mb-2 mt-3"></i><br><?=$humain->nom?> </h3><?=$humain->description?> <a class="lire btn-humain"  href="#humain"></a></div>

    </div>
</div>
<!-- fin section A propos de accès santé -->


<!-- debut section Actualités -->
<div class="container-fluid mt-3">
    <div class="titre  mt-2 mb-2 bg-danger"><h2 class="pt-1 pb-2 text-center">Actualités</h2></div>
    <div id="carouselExampleControls" class="carousel slide"   data-mdb-ride="carousel">
      <div class="carousel-inner">
        <?php $carroussels = carrou();
        //foreach($carroussels as $carrou):
        ?>
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-8">
              <img
              src="img/carrou/acs4.png"
              class="d-block w-100" style="height: 330px"
              alt="..."
              />
            </div>
            <div class="col-md-4 bg-dark justify-content-center align-items-center">
                <div class="text-light text-justify">
                  <h2 class="titre diapo_titre">Gala Charité 2019</h2>
                  <p class="ms-3 me-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In saepe modi quas esse atque culpa aliquid rem impedit! Voluptatem voluptates sit in aut sint eligendi eveniet ab magnam! Dolorem, eos.  
                  </p>
                  <div class="text-right mr-4 "><a href="register.php" class="btn btn-outline-primary text-capitalize font-weight-bold rounded waves-effect"><i class="fas fa-plus-circle"></i> Découvrir</a></div>
                </div> 
            </div>
          </div>
        </div>
        <?php foreach($carroussels as $carrou): ?>
        <div class="carousel-item">
            <div class="row">
              <div class="col-md-8">
                <img
                src="img/carrou/<?=$carrou->image?>"
                class="d-block w-100" style="height: 330px"
                alt="..."
                />
              </div>
              <div class="col-md-4 bg-dark justify-content-center align-items-center">
                  <div class="text-light text-justify">
                    <h2 class="titre diapo_titre"><?=$carrou->nom?></h2>
                    <p class="ms-3 me-2"><?=$carrou->description?>  
                    </p>
                    <div class="text-right mr-4 "><a href="register.php" class="btn btn-outline-primary text-capitalize font-weight-bold rounded waves-effect"><i class="fas fa-plus-circle"></i> Découvrir</a></div>
                  </div> 
              </div>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleControls"
        role="button"
        data-mdb-slide="prev"
        >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleControls"
        role="button"
        data-mdb-slide="next"
        >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
</div>
<!-- fin section Actualités -->

<!-- debut section équipe Acces sante -->
<div class="container-fluid mt-2">
    <div class="team">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-5 mt-5">

          <h3 class="mt-4 ms-4 titre text-dark text-justify">Providence santé a amélioré la qualité des soins dispensés aux patients <br>
          Devenez ce que vous pouvez devenir.</h3>
          <div class="col-12 col-md-11 text-left">
            <div class="row">
              <div class="col-12 col-md-6 ms-3">   
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full fa-xs mt-1 text-danger text-right" ></i> Ambassadeurs</h5></a>
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full fa-xs mt-1 text-danger text-right" ></i> Partenaire</h5></a>
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full fa-xs mt-1 text-danger text-right" ></i> Membre ayant un poste</h5></a>
              </div>
              <div class="col-12 col-md-6 ms-3">   
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full  fa-xs mt-1 text-danger text-right" ></i> Donateurs</h5></a>
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full  fa-xs mt-1 text-danger text-right" ></i> Membres Bénévoles</h5></a>
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full  fa-xs mt-1 text-danger text-right" ></i> Membre confondus</h5></a>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <div class="d-grid gap-2 d-md-block text-center">
        <a href="/login" class="btn btn-danger btn-rond" type="button">Se connecter</a>
        <a href="/inscription" class="btn btn-light btn-rond ms-2" type="button">Inscrivez-vous</a>
      </div>
    </div>
</div>

<!-- fin  section équipe Acces sante -->

<!-- debut section temoignages -->
<div class="container titre">
    <h2 class="h2-responsive font-weight-bold mt-3 text-center">Témoignages</h2>
    <!-- Section: Magazine v.3 -->
    <?php $temoignages = temoignages(); ?>
  <section class="magazine-section my-5">

    <!-- Grid row -->
    <div class="row">
      <?php foreach($temoignages as $temoignage): ?>
        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">

          <!-- Featured news -->
          <div class="single-news mb-3">

            <!-- Image -->
            <div class="view overlay rounded z-depth-2 mb-4">
              <img class="img-fluid" src="img/temoignage/<?=$temoignage->image?>"  alt="<?=$temoignage->nom?>">
            </div>

            <!-- Grid row -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-2 col-md-2">

                <!-- Badge -->
                <a href="#!"><span class="badge bg-primary"><img src="img/<?=$temoignage->drapeau?>" width="20px" alt="<?=$temoignage->pays?>"><?=$temoignage->pays?></span></a>
              </div>
              <div class="col-10 col-md-10">
                  <a href="#!"><h4 class="font-weight-bold ms-3 titre"><?=$temoignage->nom?></h4></a>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Title -->
            <div class="">
              <div class="col-11  pl-0 mb-0">
                <a class="font-weight-bold text-center titre"><i class="fas fa-quote-left mr-2 ml-2"></i> <?=$temoignage->titre?></a>
              </div>
            </div>

          </div>
          
          <!-- debut text temoignages -->
          <p class="text-justify font-weight-normal"><?=$temoignage->description?>.</p>
          <!-- fin text temoignages -->

        </div>
        <!-- Grid column -->
      <?php endforeach; ?>

    </div>
    <!-- Grid row -->

  </section>
   <!-- Section: Magazine v.3 -->
</div>
<!-- fin section temoignages -->

<!--  section photos -->
<?php require_once 'photos.php'; ?>
<!-- fin section photos -->

<!-- début footer -->
<?php //require_once 'footer.php'; ?>


