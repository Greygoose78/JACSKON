<?php include "../partials/header.php" ?>
<?php include "../partials/sidebar.php" ?>
<section class="page-section" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase text-white">Galerie d'image</h2>
            <h3 class="section-subheading text-muted">Quelques images concernant MJ</h3>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="../img/mj-bg-11.jpg" alt="" />  
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="../img/mj-bg-7.jpg" alt="" />
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="../img/mj-bg-1.jpg" alt="" />
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="../img/mj-bg-12.jpg" alt="" />
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="../img/mj-bg-10.jpg" alt="" />
                </div>s
                <div class="carousel-item">
                    <img class="img-fluid" src="../img/mj-bg-13.jpg" alt="" />
                </div>
                <div class="carousel-item">
                <img class="img-fluid" src="../img/mj-bg-4.jpg" alt="" />
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
</section>
<?php include "../partials/footer.php" ?>