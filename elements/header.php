
<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="Description" content="Votre référence pour avoir Accès à la santé gratuitement">
  <title><?php  if(isset($title)){echo($title);} else echo 'Providence santé';  ?></title>
  <!-- MDB icon -->
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
<!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
<!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css"
    rel="stylesheet"
    />
  <!-- Your custom styles (optional) --> 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_admin.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Anton|Caveat|Oswald|Seymour+One&display=swap" rel="stylesheet">

</head>
<body>

<!-- Start your project here-->  

<!--Navbar -- Menu horizontale -->

<nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color bg-dark fixed-top">
    <a class="navbar-brand" href="/"><img src="./img/hare.jpg" style="height: 40px; width:80px;"><span class="nav1 ml-2 mr-5">Providence Santé</span></a>
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ms-2">
        <a class="nav-link" href="/"><i class="fas fa-home text-danger me-2"></i>Accueil
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <?php if(!isset($_SESSION['admin'])):  ?>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-desktop text-danger me-2"></i>Présentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-history text-danger me-2"></i>Notre histoire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-sync-alt text-danger me-2"></i>Fonctionnement</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/nous-contacter"><i class="fas fa-file-signature text-danger me-2"></i>Contact</a>
      </li>
      <?php else:  ?>
      <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard"><i class="fas fa-home text-danger me-2"></i>Dashboard
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/modification"><i class="fas fa-sync-alt text-danger me-2"></i>Modification</a>
      </li>
      <?php endif; ?>
      
    </ul> 
    <!-- partie nav / reseaux social buttons  -->
    <ul class="navbar-nav mr-auto <?= $_SESSION['image'] ? 'icon-align':'icon-align-profil' ?>">
        <li class="nav-item">
          <a href="https://www.facebook.com/AccesSanteFR" class="nav-link waves-effect waves-light">
            <i class="fab fa-facebook "></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://www.instagram.com/acces_sante/?hl=fr" class="nav-link waves-effect waves-light">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="https://www.youtube.com/channel/UCEf-6BUbe2njjfs8vCFKvRg/videos" target="blank" class="nav-link waves-effect waves-light">
            <i class="fab fa-youtube"></i>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
          <i class="fab fa-linkedin"></i>
          </a>
        </li>
        
        <?php if($_SESSION['image']): ?>
            <!-- Avatar user -->
          <?php if(!$_SESSION['admin']): ?>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle d-flex align-items-center"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="img/profil_users/<?= $_SESSION['image']?>"
                class="rounded-circle"
                height="30" width="30"
                alt="<?= $_SESSION['nom']?>"
                loading="lazy"
              />
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/mon-profil">Mon profil</a></li>
              <li><a class="dropdown-item" href="/parametres">Réglages</a></li>
              <li><a class="dropdown-item" href="/logout">Deconexion</a></li>
            </ul>
          </li>
          <?php else: ?>
            <!--fin  Avatar user -->

            <!-- Avatar admin -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle d-flex align-items-center"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="/admin/img/<?= $_SESSION['image']?>"
                class="rounded-circle"
                height="30" width="30"
                alt="<?= $_SESSION['nom']?>"
                loading="lazy"
              />
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/admin/mon-profil">Mon profil</a></li>
                <li><a class="dropdown-item" href="/admin/reglages">Réglages</a></li>
                <li><a class="dropdown-item" href="/admin/logout">Déconnexion</a></li>
              </ul>
          </li>
          <?php endif  ?>
        <?php endif; ?>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

