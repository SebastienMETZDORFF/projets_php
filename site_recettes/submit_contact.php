<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site de recettes - Page d'accueil</title>
        <link 
        	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        	rel="stylesheet" 
        	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        	crossorigin="anonymous"
        >
    </head>
    <body class="d-flex flex-column min-vh-100">
        <div class="container">
        
        	<?php include_once($rootPath . '/header.php'); ?>
        	
        	<?php 
            	if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) 
            	    || !isset($_POST['message']) || empty($_POST['message'])) {
            	        
            	    echo 'Il faut un email et un message valides pour soumettre le formulaire';
            	    
            	    // Arrête l'exécution de PHP
            	    return;
            	}
            	
            	// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
            	if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
            	    
            	    // Testons si le fichier n'est pas trop gros
            	    if ($_FILES['screenshot']['size'] <= 1000000) {
            	        
            	        // Testons si l'extension est autorisée
            	        $fileInfo = pathinfo($_FILES['screenshot']['name']);
            	        $extension = $fileInfo['extension'];
            	        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            	        
            	        if (in_array($extension, $allowedExtensions)) {
            	            // On peut valider le fichier et le stocker définitivement
            	            move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' .
            	               basename($_FILES['screenshot']['name']));
            	            echo "L'envoi a bien été effectué !";
            	        }
            	    }
            	}
        	?>
        	
        	<h1>Message bien reçu !</h1>        
			<div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"><b>Email</b> : <?php echo $_POST['email']; ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo strip_tags($_POST['message']); ?></p>
                </div>
            </div>
        </div>
        
        <?php include_once($rootPath . '/footer.php'); ?>
        
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