<?php include "../partials/header.php" ?>
<?php include "../partials/sidebar.php" ?>

<div class="container p-5">
    <h1 class="text-center text-white section-heading text-uppercase text-white mb-5 mt-5">Articles concernant Michael Jackson</h1>
    <div class="list-group">
    <?php
            $news = file_get_contents("../json/news.json");
            $newsDecode = json_decode($news, true);
            foreach ($newsDecode as $key => $value) {
  
                echo '
                <a class="btn rounded-0 newspaper" style="background-color::transparent;" href="'.$value['lien'].'" target="blank_" class=" list-group-item list-group-item-action flex-column align-items-start">
                        <div class="card">
                            <h3 class="text-dark lead text-uppercase text-white p-2 font-weight-bold">'.$value['titre'].'</h3>
                                <blockquote class="text-dark p-2">
                                    <cite>
                                        Source: '.$value['source'].'
                                    </cite>
                                </blockquote>
                                
                            <div class="media">
                                <div class="lead p-2">
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

</div>






<?php include "../partials/footer.php" ?>