<link href="css/styles.css" rel="stylesheet" />
<link href="css/styles.contact.css" rel="stylesheet" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<div class="container">
	<div class="row">
      	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">                        
       		<h2>Contact</h2>
      </div>
  </div>
  		<div class="row">
      		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
          		<form id="contact-form" class="form" action="#" method="POST" role="form">
              		<div class="form-group">
                  		<label class="form-label" for="name">Votre Nom</label>
                 		 <input type="text" class="form-control" id="name" name="name" placeholder="Votre name" tabindex="1" required>
             		 </div>   
             		 <div class="form-group">
                  		<label class="form-label" for="name">Votre Prénom</label>
                 		 <input type="text" class="form-control" id="name" name="name" placeholder="Votre prénom" tabindex="2" required>
             		 </div>                         
              <div class="form-group">
                  <label class="form-label" for="email">Votre Mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Votre Mail" tabindex="3" required>
              </div>
              <label class="form-label" for="name">Numéro de téléphone</label>
                     <input type="text" class="form-control" id="tel" name="tel" placeholder="Votre Numéro de téléphone" tabindex="4"></form>                            
              <div class="form-group">
                  <label class="form-label" for="subject">Sujet</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet du message" tabindex="5">
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="message">Message</label>
                  <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="6" required></textarea>                                 
              </div>
              <div class="text-center">
                  <button type="submit" name="valider" value="OK" class="btn btn-start-order">ENVOYER MESSAGE<M></M></button>
              </div>
          </form>

        <!--  <?php
        if(isset($_POST['valider'])){
            $name=$_POST['name'];
            $prenom=$_POST['prenom'];
            $mail=$_POST['mail'];
            $tel=$_POST['tel'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            echo 'Merci '. $name .'<br/>Bienvenue sur mon site !';
        }
        ?>-->
          <?php
          if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour=mail('kevin.podeur@outlook.fr','Envoi depuis page Contact', $_POST['message'], 'From : ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
      </div>
  </div>
</div>


