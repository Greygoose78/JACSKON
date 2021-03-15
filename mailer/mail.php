<?php
    if (isset($_POST['envoyer'])) {
        $to       = 'jacksonfour.contact@gmail.com';
        $subject  = "Message d'un utilisateur depuis la page Contact de du site jacksonfour.com";

            $nom=$_POST['name'];
            $email=$_POST['email'];
            $telephone=$_POST['telephone'];
            $message =$_POST['message']  ;
            $headers  = 'From: pagecontact@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
            $note= "User Name: $nom <br/> email: $email <br/> Telephone: $telephone <br/><br/> Message: <p> $message</p>";
            
            if(mail($to, $subject, $note, $headers)) {
              
             ?> <script>
                alert("Message envoyé");
                document.location.href = "http://jacksonfour/";
              </script>
           <?php   } 
           
         else {
             
            ?>  
            <script>
                alert("Imposible d'envoyer votre message!!!");
                document.location.href = "http://jacksonfour/content/contact.php";
            </script>

        <?php }
             
      }
?>