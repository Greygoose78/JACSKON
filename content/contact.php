<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/7549dfbde7.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <!-- <link rel="stylesheet" href="styles.css" /> -->
    <style>
    body{
      background-color: rgb(0, 0, 0);
  color: #e7edf7;
  font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
   
}
.wrapper {
  background-image: url("../img/sombreBlue.jpg");
  background-size: contain;
  display: flex;
  flex-direction: column;
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;
 
 
}
.contactContent {
text-align: center;
  display: flex;
  flex-direction: column;
  height: 650px;
}
.contactContent>p{
  font-family: 'Brush Script MT', cursive;
  font-size: 45px;
  text-shadow: 1px 1px 2px red, 0 0 1em blue, 0 0 0.2em red;
}
.middleContent {
  /* filter: blur(0.6rem); */
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-grow: 1;
  align-items: center;
}
.sectionOne {

  display: flex;
  flex-direction: column;
  justify-content: space-around;
  height: 250px;
  padding: 15px;
  

}
.sectionOne > i  {
  font-size: 25px;
  color: #e7edf7;
  
}

span{
  font-family: "Marr Sans Condensed", DINCondensed-Bold, "Roboto Condensed", "Arial Narrow", sans-serif;
}
input[type="text"], input[type="email"], input[type="tel"] {
  background-color : #c2bfbf;
  font-weight: bold;
}
#message{
   background-color : #c2bfbf;
   font-weight: bold;
}
.sectionTwo { 
  margin-top: 0.5em;
  flex-grow: 1;
  height: 300px;
  padding: 15px;
}
.foollowContent {
  display: flex;
  flex-direction: column;
  text-align: center;
  /* filter: blur(0.6rem); */
  margin: 25px;

}
.fermerI{
  color:white;

}
.foollowContent > p{
  font-family: 'Brush Script MT', cursive;
  font-size: 25px;
  margin-top: 35px;
  text-shadow: 1px 1px 2px red, 0 0 1em blue, 0 0 0.2em red;
}
input{
  font-family: 'MS Serif', 'New York', sans-serif;
  font-size: 25px;
  color: rgb(15, 16, 17);
  background: rgb(102, 99, 122);
}
textarea{
  color: rgb(16, 17, 17);
  background: rgb(102, 99, 122);
}
.fa{
  font-size: 35px;
}
.instagram {
  color: violet;
  font-size: 35px;
  
}
.btnFerme >a {
  text-decoration: none;
}



.instagram:hover{
  color: rgb(228, 4, 228);
 font-size: 36px;
  }
 
.youtube {
  color: rgb(245, 16, 16);
 font-size: 35px;
 
}
.youtube:hover{
  color: rgb(124, 3, 3);
  font-size: 36px;
 }
.twitter {
  color: rgb(8, 196, 243);
  font-size: 35px;
}
.twitter:hover{
  color: rgb(8, 100, 122);
  font-size: 36px;
 }
 .facebook{
  color: rgb(44, 62, 224);
   font-size: 35px;
}
.facebook:hover{
  color: rgb(3, 10, 70);
  font-size: 36px;
}
.socialNetwork {
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  justify-content: space-between;
  width: 30%;
  padding: 12px;

}
.footer {
  /* filter: blur(0.6rem); */
  font-size: 15px;
  margin-top: 12px;
  text-align: center;
  padding: 12px;
  font-family: 'MS Serif', 'New York', sans-serif;
}
.blurClasse{
  filter: blur(0.6rem);
}

.btnFerme{
  margin: 0 auto;
    margin-top: 15px;
  display: flex;
   padding-top:25px;
  width: 70%;
  justify-content:flex-end;
}
.fermerI{
 font-size:45px;
  transition: width 1s, height 1s, transform 1s;
}
.fermerI:hover{
  transform: rotate(90deg);
}

.button{
  align-self: flex-end;
  display: flex;
  margin-right: 30px;
}

@media screen and (max-width: 700px){

  .middleContent {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
  }
  .contactContent>p{
    
    font-size: 15px;
  }
  .sectionOne {
    display: flex;
    flex-direction: column;
        align-items: center;
  }
  .sectionOne > i  {
    font-size: 20px;
    padding: 4px;
    margin: 2px;
   
  }
 
  .socialNetwork {
   
    justify-content: space-between;
    width: 60%;
    padding: 12px;
  
  }
  .fa{
    font-size: 25px;
  }
  
.instagram:hover{

 font-size: 26px;
  }
  .facebook:hover{
    
   font-size: 26px;
    }
.youtube:hover{
   
     font-size: 26px;
   }
.twitter:hover{
    
   font-size: 26px;
    }
  .foollowContent > p{
    margin-top: 30px;
    font-size: 20px;
  }
  .footer {
    font-size: 10px;
  }
}
    </style>

    <title>Jackson Four | Contact</title>
  </head>
  <body>
    <div class="contactBody">
      <div class="wrapper">
        <div class="contactContent">
        <div class="btnFerme" >
        <a href="../index.php"  class="button"> <i class="fa fa-3x fa-times  fermerI" aria-hidden="true" id="fermerI" ></i> </a>
        
        </div> <p id="diva4">Nous Contacter</p> 
         <div class="middleContent"  id="diva1">
        
            <div class="sectionOne">
                <i class="fa fa-2x fa-phone-square iconA" aria-hidden="true"><span>  +33 07 26 25 21 </span></i>
                <i class="fa fa-2x fa-envelope iconA" aria-hidden="true"><span>  jacksonfour@gmail.com </span></i>
                <i class="fa fa-2x fa-fax iconA" aria-hidden="true"><span>  +1 13 55 77 11 </span></i>
                </div>
            <div class="sectionTwo">
              <form id="contactForm"  method="post"   >
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" name="name" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" name="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" name="telephone" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message"  name="message" rows="5" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
              
                <div id="success">
                    <input type="submit" name="envoyer" value="Send Message" class="btn btn-primary btn-xl text-uppercase" >
                  </div>
            </form> 
            
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
                  </script>
               <?php   } 
               
             else {
                 
                  ?>  
                   <script>
                  alert("Imposible d'envoyer votre message!!!");
                   </script>

                <?php }
                 
          
          }

   ?>
            </div>
          </div>
          <div class="foollowContent" id="diva2">
            <p>Sur les réseaux sociaux</p> 
      
            <div class="socialNetwork"> 
             <a href="https://www.instagram.com/aguiib/" target="_blank" > <i class="fa fa-2x fa-instagram instagram" aria-hidden="true"></i></a>
             <a href="https://www.facebook.com/aguiib/" target="_blank" > <i class="fa fa-2x fa-facebook-square facebook" aria-hidden="true"></i></a>
             <a href="https://www.youtube.com/channel/UCS0I1QaXkwbSVeVvAa13UTg/featured" target="_blank" > <i class="fa fa-2x fa-youtube youtube" aria-hidden="true"></i></a>
             <a href="https://twitter.com/login?lang=fr" target="_blank" > <i class="fa fa-2x fa-twitter twitter" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="footer" id="diva3"> Copyright &copy; JACKSON4 2021</div>
        </div>

     
      </div>
    </div>
    <script >
                                     var btnferme = document.getElementById("fermerI");
                              
                                     btnferme.addEventListener("mouseover", function( event ) {
                                      event.target.style.color = "red";
                                        var monelement = document.getElementById('diva1');
                                        monelement.classList.add('blurClasse');
                                        var monelement2 = document.getElementById('diva2');
                                        monelement2.classList.add('blurClasse');
                                        var monelement3 = document.getElementById('diva3');
                                        monelement3.classList.add('blurClasse');
                                        var monelement4 = document.getElementById('diva4');
                                        monelement4.classList.add('blurClasse');
                                     })
                                     
                                     btnferme.addEventListener("mouseleave", function( event ) {
                                      event.target.style.color = "white";
                                      var monelement = document.getElementById('diva1');
                                        monelement.classList.remove('blurClasse');
                                      var monelement2 = document.getElementById('diva2');
                                        monelement2.classList.remove('blurClasse');
                                      var monelement3 = document.getElementById('diva3');
                                        monelement3.classList.remove('blurClasse');
                                     
                                      var monelement4 = document.getElementById('diva4');
                                        monelement4.classList.remove('blurClasse');
                                     
                                     })
                                    

                                     

    </script>
  </body>
</html>
