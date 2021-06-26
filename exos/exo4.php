<?php
require_once '../inc/functions.php';
ob_start();

/* === Exo 4 : Boucle ===
 *
 * On voudrait afficher les chiffres 1, 2, 3, 4, ... jusqu'à 15
 * 
 * Mais on ne veut pas de caractères ni de sauts de ligne HTML
 * entre chaque chiffre
 * 
 * Bien sûr, on pourrait écrire directement la chaîne de caractères "123456789101112131415"
 * mais alors, on ne serait ni fainéant, ni développeur :(
 */

// A toi de boucler

for ($chiffre=1; $chiffre<=15 ; $chiffre++) { 
 echo $chiffre ;
}

// Temps pour faire l'exo4 : 10mn    Cumul : 45mn



// On supprime les espaces dans la chaine de caractéres $maChaine

/*
 * Tests
 * Pas touche !
 */
check(4);
