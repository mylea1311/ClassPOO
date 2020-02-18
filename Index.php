<?php
include('Recette.php');
include('Ustensile.php');
include('Ingredient.php');
include('Appareil.php');
$ingredients = [
   $chocolat =  new Ingredients('chocolat', 250, 'gr'),
   $oeuf = new Ingredients('oeuf', 4, "unité"),
   $sucre = new Ingredients('sucre', 100, 'gr'),
   $sel = new Ingredients('sel', 1, 'gr'),

];

$ustensiles = [
   $saladier = new Ustensile("saladier", "contient", "verre"),
   $fouet = new Ustensile("fouet", "foutette", "latex"),
   $casserole = new Ustensile("casserole", "chauffe", "inox")
];

$appareils = [

   $batteur = new Appareil("batteur", "melange"),
   $frigo = new Appareil("frigo", "refroidit"),
   $gaziniere = new Appareil("gaziniere", "cuit")
];

$mousseChoco = new Recette($ingredients, $ustensiles, $appareils);
//var_dump($mousseChoco);

foreach ($mousseChoco->getIngredients() as $ingredient) {
   echo   "Vous aurez besoin de " . $ingredient->getQuantity() . ' ' . $ingredient->getMesure() . ' ' . $ingredient->getName() . '<br>';
};

foreach ($mousseChoco->getUstensiles() as $ustensile) {
   echo   "Vous aurez besoin de " . $ustensile->getName() . ' en ' . $ustensile->getMateriaux() .  '<br>';
}
