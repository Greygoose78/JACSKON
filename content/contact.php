<?php include "../partials/header.php" ?>
<?php include "../partials/sidebar.php" ?>
<section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactez-nous !</h2>
                    <h3 class="section-subheading text-muted">Pour nous contactez nous vous invitons à remplir le formulaire ci-dessous.</h3>
                </div>
                <form id="contactForm" action="../mailer/mail.php" method="POST" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Votre nom *" required="required" data-validation-required-message="Veuillez renseigner votre nom s'il vous plait." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" name="email" placeholder="Votre adresse mail *" required="required" data-validation-required-message="Veuillez renseigner votre email s'il vous plait." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" name="tel" placeholder="Votre numéro de téléphone *" required="required" data-validation-required-message="Veuillez renseigner votre  numéro de téléphone s'il vous plait." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Votre messages *" name="messages" required="required" data-validation-required-message="Veuillez renseigner votre message s'il vous plait."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-light btn-xl text-uppercase" id="sendMessageButton" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
<?php include "../partials/footer.php" ?>