<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $to = "contact@kevinceyland.fr";
    $subject = "Formulaire de contact Jacksonfour";
    $message = $_POST['message'];
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";
?>