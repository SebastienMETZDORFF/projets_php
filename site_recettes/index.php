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

            <!-- On crée une session, un cookie et l'objet $loggedUser -->
            <?php include_once('create_cookie.php'); ?>

    		<!-- Inclusion de l'en-tête du site -->
        	<?php include_once('header.php'); ?>

            <!-- Inclusion du formulaire de connexion -->
            <?php include_once('login.php'); ?>

            <h1>Site de recettes !</h1>
            
            <!-- Plus facile à lire -->
            <?php foreach(get_recipes($recipes, $limit) as $recipe): ?>
                <article>
                    <h3><a href="./recipes/read.php?id=<?php echo $recipe['recipe_id']; ?>"><?php echo $recipe['title']; ?></a></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo display_author($recipe['author'], $users); ?></i>
                    <?php if(isset($loggedUser) && $recipe['author'] === $loggedUser['email']): ?>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item"><a class="link-warning" href="./recipes/update.php?id=<?php echo $recipe['recipe_id'];?>">Editer l'article</a></li>
                            <li class="list-group-item"><a class="link-warning" href="./recipes/delete.php?id=<?php echo $recipe['recipe_id'];?>">Supprimer l'article</a></li>
                        </ul>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    
        <!-- Inclusion du bas de page du site -->
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