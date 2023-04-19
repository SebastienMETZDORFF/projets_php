<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site de recettes - Formulaire de Contact</title>
        <link 
        	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        	rel="stylesheet" 
        	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        	crossorigin="anonymous"
        >
    </head>
    <body class="d-flex flex-column min-vh-100">
        <div class="container">
    
        	<?php include_once('header.php'); ?>
            <h1>Contactez nous</h1>
            
            <form action="submit_contact.php" method="post" enctype="multipart/form-data">
            
            	<!-- Ajout des champs email et message -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                    <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message"></textarea>
                </div>
                
                <!-- Ajout du champ d'upload -->
                <div class="mb-3">
                	<label for="screenshot" class="form-label">Votre capture d'écran</label>
                	<input type="file" class="form-control" id="screenshot" name="screenshot" />
                </div>
                
                <!-- Fin ajout du champ -->
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
            <br />
        </div>
    
        <?php include_once('footer.php'); ?>
        
        <script
  			src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  			integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  			crossorigin="anonymous"></script>
  		<script 
  			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
  			integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
  			crossorigin="anonymous"></script>
		<script 
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
			integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
			crossorigin="anonymous"></script>
    </body>
</html>
