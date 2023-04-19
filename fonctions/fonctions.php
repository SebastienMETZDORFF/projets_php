<?php

function isValidRecipe(array $recipe) : bool {
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }
    
    return $isEnabled;
}

// 2 exemples
$romanSalad = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade, Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => true
];

$sushis = [
    'title' => 'Sushis',
    'recipe' => 'Etape 1 : du saumon, Etape 2 : du riz ...',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => false
];

if (isValidRecipe($romanSalad)) {
    echo 'La salade Romaine est disponible.<br />'; 
} else {
    echo 'La salade Romaine n\'est pas disponible.<br />';
}

if (isValidRecipe($sushis)) {
    echo 'Les sushis sont disponibles.';
} else {
    echo 'Les sushis ne sont pas disponibles.';
}
