<?php include "../partials/header.php" ?>
<?php include "../partials/sidebar.php" ?>
<section class="page-section" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase text-white">Galerie d'image</h2>
            <h3 class="section-subheading text-muted">Quelques images concernant MJ</h3>
        </div>
        <div class="row photos p-5">

            <?php
            $imageGalerie = file_get_contents("../json/images.json");
            $imageGalerieDecode = json_decode($imageGalerie, true);
            foreach ($imageGalerieDecode as $key => $value) {
                echo '<div class="col-sm-6 col-md-4 col-lg-3 item p-2 newspaper"><a class="thumbnail fancybox" rel="ligthbox" href="../img/' . $value['value'] . '"><img data-aos="' . $value['fade'] . '" data-aos-duration="5000" class="img-fluid img-responsive border border-light  rounded" src="../img/' . $value['value'] . '"></a></div>';
            }
            ?>
    
        </div>
    </div>
</section>
<?php include "../partials/footer.php" ?>