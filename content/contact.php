<?php include "../partials/header.php" ?>
<?php include "../partials/sidebar.php" ?>
    <div class="contactBody container">
        <div class="wrapper">
            <div class="contactContent">
            <h1 class="text-center text-white mt-5 text-uppercase">On attends vos messages !</h1>
                <div class="middleContent" id="diva1">
                    <div class="sectionOne">
                        <i class="fa fa-2x fa-phone-square iconA" aria-hidden="true"><span> +33 07 26 25 21 </span></i>
                        <i class="fa fa-2x fa-envelope iconA" aria-hidden="true"><span style="font-size:20px;"> jacksonfour.contact@gmail.com</span></i>
                        <i class="fa fa-2x fa-fax iconA" aria-hidden="true"><span> +1 13 55 77 11 </span></i>
                    </div>
                    <div class="sectionTwo">
                    
                        <form id="contactForm" action="../mailer/mail.php" method="post">
                            <div class="row align-items-stretch mb-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" name="name" placeholder="Votre nom *" required="required" data-validation-required-message="Veuillez remplir votre nom s'il vous plait." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" name="email" placeholder="Votre email *" required="required" data-validation-required-message="Veuillez remplir votre adresse e-mail s'il vous plait." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group mb-md-0">
                                        <input class="form-control" id="phone" type="tel" name="telephone" placeholder="Votre numéro de téléphone *" required="required" data-validation-required-message="Veuillez remplir votre numéro de téléphone s'il vous plait." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group form-group-textarea mb-md-0">
                                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message *" required="required" data-validation-required-message="Veuillez remplir un message s'il vous plait."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group" id="success">
                                        <button type="submit" name="envoyer" class="btn btn-light btn-xl text-uppercase mb-3">Envoyer</button>
                                       
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "../partials/footer.php" ?>