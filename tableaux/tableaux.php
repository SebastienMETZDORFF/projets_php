<?php
/* Utilisation d'un tableau numéroté */
$recipes = ['Cassoulet', 'Couscous', 'Escalope milanaise', 'Salade César'];

echo $recipes[1] . '<br />'; // Cela affichera : Couscous

/* Utilisation d'un tableau associatif */
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true
];

echo $recipe['title'] . '<br />'; // Cela affichera : Cassoulet

/*
 * Affiche :
 * [title] vaut Cassoulet
 * [recipe] vaut Etape 1 : des flageolets, Etape 2 : ...
 * [author] vaut john.doe@exemple.com
 * [enabled] vaut 1
 */
foreach ($recipe as $key => $value) {
    echo '[' . $key . '] vaut ' .$value . '<br />';
}

if (array_key_exists('title', $recipe)) {
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe)) {
    echo 'La clé "commentaires" se trouve dans la recette !';
}
