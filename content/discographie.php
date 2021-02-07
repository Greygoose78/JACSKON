<?php include "../partials/header.php" ?>
<?php include "../partials/sidebar.php" ?>

<section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-white">Discographie</h2>
                    <h3 class="section-subheading text-muted">Discographie de Micheal Jackson entre 1972 et 2001</h3>
                </div>
                <ul class="timeline text-white">
                    <?php
                        $discographie = file_get_contents("../json/discographie.json");
                        $discographieDecode = json_decode($discographie, true);
                        foreach ($discographieDecode as $key => $value) {
                            if($key%2==0)
                            {
                                echo '<li class="timeline-inverted">';
                            }
                            else
                            {
                                echo '<li>';
                            }
                            echo '
                            
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="../img/'.$value['cover'].'" alt="" /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>'.$value['annee'].'</h4>
                                        <h4 class="subheading">'.$value['titre'].'</h4>
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">'.$value['description'].'</p></div>
                                </div>
                            </li>
                            
                            ';
                        }
                     ?>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="../img/cover-last.jpg" alt="" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009</h4>
                                <h4 class="subheading">Rest in Peace </h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
<?php include "../partials/footer.php" ?>