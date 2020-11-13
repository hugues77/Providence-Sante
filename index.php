<?php
$title = "Bienvenue - Accès santé";
require_once 'header.php';
?>
<!-- entete -->
<header>
    <div class="container-fluid mt-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 form_head d-flex align-items-center">
                <div>
                    <h1 class="titre text-light ml-5 text-center">Association: Providence Santé</h1><hr>
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2 ml-2">
                            <a href="#"><button class="btn btn-danger btn-cercle">Faire un Don</button></a>
                        </div>
                        <button type="submit" class="btn btn-danger btn-cercle mb-2 ml-2">Devenir Membre</button>
                    </form>
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
        <div class="col-6  col-md-4"><h3 class="text-center text-danger titre"><i class="fas fa-balance-scale fa-2x mb-2 mt-3"></i><br>Équité</h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus eveniet nisi neque pariatur ducimus, repellendus explicabo quibusdam voluptas, amet odio aspernatur facilis sunt animi blanditiis suscipit doloribus et totam? Deleniti? <a class="lire btn-equite" href="#equite"></a></div>
        <div class="col-6  col-md-4"><h3 class="text-center text-danger titre"><i class="fas fa-share-square fa-2x mb-2 mt-3"></i><br>Partage</h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, officia id molestias nobis quod quibusdam eligendi deserunt nostrum nesciunt quo numquam? Nam labore at modi aperiam dignissimos voluptatibus praesentium voluptatum.<a class="lire btn-partage"  href="#partage">=</a></div>
        <div class="col-12 col-md-4"><h3 class="text-center text-danger titre"><i class="fas fa-user-check fa-2x mb-2 mt-3"></i><br>Passionnément Humain </h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum sequi expedita odit aliquam explicabo impedit ab temporibus, ipsam, possimus quos itaque quo rem. Dolorum reprehenderit corrupti nesciunt consequatur nulla exercitationem? <a class="lire btn-humain"  href="#humain"></a></div>
    </div>
</div>
<!-- fin section A propos de accès santé -->

<!-- debut section Actualités -->
<div class="container-fluid mt-3">
    <div class="titre  mt-2 mb-2 bg-danger"><h2 class="pt-1 pb-2 text-center">Actualités</h2></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="row">
                <div class="col-12 col-md-8">
                    <img src="img/acs2.png" style="height: 320px" class="d-block w-100" alt="...">
                </div>
                <div class="col-12 col-md-4 bg-dark justify-content-center align-items-center d-flex ">
                    <div class="text-light text-justify">
                        <h2 class="titre">Célébration 2018</h2>
                        <p class="mr-3 ml-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In saepe modi quas esse atque culpa aliquid rem impedit! Voluptatem voluptates sit in aut sint eligendi eveniet ab magnam! Dolorem, eos.  
                        </p>
                        <div class="text-right mr-4 "><button type="button" class="btn btn-outline-primary text-capitalize font-weight-bold rounded waves-effect"><i class="fas fa-plus-circle"></i> Découvrir</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
        <div class="row">
                <div class="col-12 col-md-8">
                    <img src="img/acs3.png" style="height: 320px" class="d-block w-100" alt="...">
                </div>
                <div class="col-12 col-md-4 bg-dark justify-content-center align-items-center d-flex ">
                    <div class="text-light text-justify">
                        <h2 class="titre">Gala Charité 2019</h2>
                        <p class="mr-3 ml-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In saepe modi quas esse atque culpa aliquid rem impedit! Voluptatem voluptates sit in aut sint eligendi eveniet ab magnam! Dolorem, eos.  
                        </p>
                        <div class="text-right mr-4 "><button type="button" class="btn btn-outline-primary text-capitalize font-weight-bold rounded waves-effect"><i class="fas fa-plus-circle"></i> Découvrir</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-12 col-md-8">
                    <img src="img/acs4.png" style="height: 320px" class="d-block w-100" alt="...">
                </div>
                <div class="col-12 col-md-4 bg-dark justify-content-center align-items-center d-flex ">
                    <div class="text-light text-justify">
                        <h2 class="titre">Diner Bienfaisance 2018</h2>
                        <p class="mr-3 ml-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. In saepe modi quas esse atque culpa aliquid rem impedit! Voluptatem voluptates sit in aut sint eligendi eveniet ab magnam! Dolorem, eos.  
                        </p>
                        <div class="text-right mr-4 "><button type="button" class="btn btn-outline-primary text-capitalize font-weight-bold rounded waves-effect"><i class="fas fa-plus-circle"></i> Découvrir</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
        
    </div>
</div>
<!-- fin section Actualités -->


<!-- debut section équipe Acces sante -->
<div class="container-fluid mt-2">
    <div class="team">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-5 mt-5">

          <h3 class="mt-4 ml-4 titre text-justify ">Providence santé a amélioré la qualité des soins dispensés aux patients <br>
          Devenez ce que vous pouvez devenir.</h3>
          <div class="col-12 col-md-11 text-left">
            <div class="row">
              <div class="col-12 col-md-6">   
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full fa-xs mt-1 text-danger text-right" ></i> Ambassadeurs</h5></a>
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full fa-xs mt-1 text-danger text-right" ></i> Partenaire</h5></a>
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full fa-xs mt-1 text-danger text-right" ></i> Membre ayant un poste</h5></a>
              </div>
              <div class="col-12 col-md-6">   
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full  fa-xs mt-1 text-danger text-right" ></i> Donateurs</h5></a>
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full  fa-xs mt-1 text-danger text-right" ></i> Membres Bénévoles</h5></a>
                <a class="text-light" href="#!"><h5 class="font-weight-normal titre "><i class="fas fa-square-full  fa-xs mt-1 text-danger text-right" ></i> Membre confondus</h5></a>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <div class="row">
          <div class="col-6 col-md-6 text-right mt-3"><button type="button" class="btn btn-danger btn-rond text-right ">Se Connecter</button></div>
          <div class="col-6 col-md-6 text-left mt-3"><button type="button" class="btn btn-outline-light btn-rond text-left">Inscrivez-vous</button></div>
      </div>
    </div>
</div>


<!-- fin  section équipe Acces sante -->

<!-- debut section temoignages -->
<div class="container titre">
    <h2 class="h2-responsive font-weight-bold mt-3 text-center">Ils en parles de nous!</h2>
    <!-- Section: Magazine v.3 -->
<section class="magazine-section my-5">

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">

    <!-- Featured news -->
    <div class="single-news mb-3">

      <!-- Image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <img class="img-fluid" src="img/boris.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2 col-md-2">

          <!-- Badge -->
          <a href="#!"><span class="badge pink"><img src="img/kin.jpg" width="20px" alt=""> kinshasa</span></a>
        </div>
        <div class="col-10 col-md-10">
            <a href="#!"><h4 class="font-weight-bold ml-3 titre">Handy Evangéliste</h4></a>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Title -->
      <div class="">
        <div class="col-11  pl-0 mb-0">
          <a class="font-weight-bold text-center titre"><i class="fas fa-quote-left mr-2 ml-2"></i> Je suis reconnaissant...</a>
        </div>
      </div>

    </div>
    
    <!-- debut text temoignages -->
    <p class="text-justify font-weight-normal">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore soluta distinctio amet quidem recusandae repellendus exercitationem sed quos minus eos ipsam quod iste aliquam cupiditate, placeat pariatur sapiente impedit! Placeat!Labore culpa quaerat laboriosam, sapiente voluptatibus nemo quo ratione laborum quam quis voluptatum qui deleniti, iure adipisci suscipit, error eaque. Maiores, adipisci. Sequi illum dolorum ipsam vel fugit ex dolores.</p>
    <!-- fin text temoignages -->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-md-0 mb-5">

    <!-- Featured news -->
    <div class="single-news mb-3">

      <!-- Image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <img class="img-fluid" src="img/boris.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2 col-md-2">

          <!-- Badge -->
          <a href="#!"><span class="badge deep-orange"><img src="img/kin.jpg" width="20px" alt=""> Paris</span></a>
        </div>
        <div class="col-10 col-md-10">
        <a href="#!"><h4 class="font-weight-bold ml-3 titre">Christelle Kazadi</h4></a>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Title -->
      <div class="d-flex justify-content-between">
        <div class="col-11  pl-0 mb-0">
          <a class="font-weight-bold"><i class="fas fa-quote-left mr-2 ml-2"></i> Ils m'ont sauvée la vie...</a>
        </div>
        
      </div>

    </div>
    <!-- Featured news -->

    <!-- Small news -->

    <!-- Small news -->

    <p class="text-justify font-weight-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vero nulla corrupti et ipsam nostrum optio ullam amet, maxime obcaecati cupiditate accusamus quam. Ut qui, modi illo corrupti id dolor!Itaque sequi aliquam ratione corporis, ipsum omnis aperiam iure nulla totam saepe nihil, nemo adipisci sed facilis magnam reprehenderit quaerat. Quis esse dolore fugiat culpa illo? Sapiente accusamus nisi autem.</p>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-0">

    <!-- Featured news -->
    <div class="single-news mb-3">

      <!-- Image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <img class="img-fluid" src="img/boris.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2 col-md-2">

          <!-- Badge -->
          <a href="#!"><span class="badge success-color"><img src="img/kin.jpg" width="20px" alt=""> Metz</span></a>

        </div>

        <div class="col-10 col-md-10">
        <a href="#!"><h4 class="font-weight-bold ml-2 titre">Chevervie Mungu</h4></a>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Title -->
      <div class="d-flex justify-content-between">
        <div class="col-11 text-truncate pl-
        0 mb-0">
          <a class="font-weight-bold text-center"><i class="fas fa-quote-left mr-2 ml-2"></i> Ma vie à changé, grace à vous...</a>
        </div>
      </div>

    </div>
    <!-- Featured news -->
    <p class="text-justify font-weight-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum adipisci aspernatur possimus tenetur eos cumque consectetur, ad laboriosam beatae! Blanditiis iusto vel vero? Voluptatem, placeat esse vel suscipit accusantium libero!</p>
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

</section>
<!-- Section: Magazine v.3 -->
</div>
<!-- fin section temoignages -->
<!-- début footer -->
<?php require_once 'footer.php'; ?>


