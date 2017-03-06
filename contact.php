<?php
require 'header.php';
require 'menu.php';
?>
	<div class="col-lg-8 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
		<?php
		if (!empty($_POST)) {
		    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=6Lfh1hcUAAAAACykd8MJ1QdE4xIi8GFeJ47WPv8s&response='.$_POST['g-recaptcha-response'];
		    $response = file_get_contents($url);
		    $json = json_decode($response);
		    if ($json->success) {
		    	$option = strip_tags(htmlspecialchars($_POST['option']));
				$name = strip_tags(htmlspecialchars($_POST['name']));
				$email = strip_tags(htmlspecialchars($_POST['email']));
				$message = strip_tags(htmlspecialchars($_POST['message']));

				$to = '';
				$email_subject = "($option)";
				$email_body = "Votre Site a du succès!\n\n"."Message de la part de: $name\n\nLui répondre via: $email\n\n\n$message";
				$headers = "From: La Valse Blanche <noreply@lavalseblanche.fr>\n";
				$headers .= "Reply-To: $email";
				if ($option != "newsletter") {
					if (mail($to,$email_subject,$email_body,$headers)) {
					?>
					<br>
            		<div class="alert alert-success alert-dismissable">
                		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                		Merci pour votre message !
            		</div>
					<?php
					} else {
					?>
            		<br>
            		<div class="alert alert-danger alert-dismissable">
                		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                		<strong>Erreur !</strong> Le message n'a pas pu être envoyé
            		</div>
            		<?php
					}
				} else {
					require_once 'db-connect.php';
					$req = $pdo->prepare("INSERT INTO lvb_newsletter (email) VALUES (?)");
					$req->execute(array($_POST['email']));
					$req->closeCursor();
				?>
				<br>
            	<div class="alert alert-success alert-dismissable">
                	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                	Vous êtes maintenant inscrit à la newsletter !
            	</div>
				<?php
				}
		    } else {
			?>
        	<br>
        	<div class="alert alert-danger alert-dismissable">
            	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            	<strong>Erreur !</strong> Le Captcha n'est pas valide
        	</div>
        	<?php
		    }
		}
		?>
        <div class="carte">
            <h2 id="sous_titre">N'y allez pas par quatre chemins</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2741.296629724735!2d4.059068515595887!3d46.60114057913087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f3d0a90a3baa0d%3A0xecf4cd8fc32f246f!2s9+Rue+Jean+Jaur%C3%A8s%2C+71130+Gueugnon!5e0!3m2!1sfr!2sfr!4v1486738730115" width="600" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <br>
        <br>
        <h2 id="sous_titre">Contactez nous !</h2>
        <form id="base" class="boutvert col-lg-12" method="POST" action="contact.php">
            <legend id="lik">J'aimerais</legend>
            <select class="form-control" name="option">
               	<option value="newsletter">M'abonner à la newsletter</option>
                <option value="Poser une question">Poser une question</option>
                <option value="Être contacté(e)">Être contacté(e)</option>
                <option value="Prendre un rendez-vous">Prendre un rendez-vous</option>
                <option value="Vous épouser !">Vous épouser !</option>
            </select>
            <br>
            <input type="text" class="form-control" name="name" placeholder="Votre nom">
            <br>
            <input type="text" class="form-control" name="email" placeholder="Votre mail" required>
            <br>
            <textarea id="textarea" class="form-control" rows="8" name="message" placeholder="Tapez votre texte ici"></textarea>
            <br>
            <div class="g-recaptcha" data-theme="dark" data-sitekey="6Lfh1hcUAAAAAL-K59V8dFAdma18xQVk1eKIgAxD"></div>
            <br>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </form>
        <br>
    </div>
</div>
</div>
<?php
require 'footer.php';