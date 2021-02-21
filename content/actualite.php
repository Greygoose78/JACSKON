<?php include "../partials/header.php" ?>
<?php include "../partials/sidebar.php" ?>

<div class="container p-5">
    <h1 class="text-center text-white section-heading text-uppercase text-white mb-1 mt-5">Articles concernant Michael Jackson</h1>
    <p class="section-subheading text-muted text-center mb-5">Cliquer sur l'actualité de votre choix pour la consulter.</p>
    <div class="list-group">
    <?php
            $news = file_get_contents("../json/news.json");
            $newsDecode = json_decode($news, true);
            foreach ($newsDecode as $key => $value) {
  
                echo '
                <a class="btn rounded-0 newspaper" style="background-color:transparent; margin:20px;" href="'.$value['lien'].'" target="blank_" class=" list-group-item list-group-item-action flex-column align-items-start">
                        <div class="card">
                            <h3 class="text-dark lead text-uppercase text-white p-2 font-weight-bold">'.$value['titre'].'</h3>
                                <blockquote class="text-dark p-2">
                                    <cite>
                                        Source: '.$value['source'].'
                                    </cite>
                                    <img data-aos="' . $value['image'] . '" class="img-fluid img-responsive border border-light rounded" width="800" src="../img/' . $value['image'] . '">
                                </blockquote>
                               
                            <div class="media">
                            
                                <div class="lead p-4 text-justify">
                                    <p>'.$value['resume'].'</p>
                                </div>
                            </div>
                        </div>
                    </a>
                ';  
            }
            ?>
    </div>
</div>







<?php include "../partials/footer.php" ?>