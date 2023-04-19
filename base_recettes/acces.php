<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = 1';
$recipesStatement = $db->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach($recipes as $recipe):
?>
    <p><?php echo $recipe['author']; ?></p>
<?php endforeach; ?>