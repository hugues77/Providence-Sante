<?php  require_once 'functions/main.php';
$photos = gallery();
?>
<div id="mdb-lightbox-ui"></div>
<div class="row me-1 ms-1">
    <?php foreach($photos as $photo): ?>
    <!--Grid column-->
    <figure class="col-6 col-lg-2 col-md-12 mb-3">

        <!--Image-->
        <a href="img/gallery/<?=$photo->image?>" data-lightbox="mygallery" data-title="<?=$photo->description?>" data-size="800*400">
            <img src="img/gallery/<?=$photo->image?>" class="img-fluid"  alt="<?=$photo->nom?>">    
        </a>

    </figure>
    <!-- fin Grid column-->
    <?php endforeach; ?>
</div>
