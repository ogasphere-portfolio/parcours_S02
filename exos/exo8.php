<?php
require_once '../inc/functions.php';
require_once '../inc/bart2.php'; // fichier déclarant la variable $bartPunishment
ob_start();

/* === Exo 8 : Punitions en image ===
 *
 * Dans la continuité de l'exo précédent,
 * on voudrait que tu parcours tout le tableau $bartPunishment
 * afin d'afficher chaque phrase, suivie de son image associée
 * 
 * Il y a plusieurs façons d'arriver au résultat attendu.
 * On ne demande pas du code HTML étoffé.
 * Juste une balise <img> pour afficher chaque image
 * 
 * Info utile :
 *   - si dans ta boucle tu as besoin de distinguer une phrase d'une image
 *   - tu peux utiliser :
 *      - la fonction strstr (https://www.php.net/manual/fr/function.strstr)
 *      - ou la fonction substr (https://www.php.net/manual/fr/function.substr.php)
 * 
 * En cas de difficulté :
 *    - ne t'embête pas à afficher l'image
 *    - afficher l'URL de l'image nous suffira ;)
 */

// A toi de jouer







// On boucle sur le tableau $bartPunishment
foreach ($bartPunishment as $key => $value) {
    
    if (strstr($key, 'sentence')) {    // On cherche si la clé du tableau $bartPunishment contient la chaine 'sentence'
        // si la clé contient la chaine 'sentence' on renvoie une phrase
        echo $value;
    } else {
        //  Sinon on renvoie une image car si la clé du tableau $bartPunishment 
        //ne contient pas la chaine 'sentence' elle contient forcement 'picture'
        echo '<img src="'.$value.'" alt="">' ;
    }
}// Fin de la boucle


// Temps pour faire l'exo8 22 mn       Cumul : 1h30






// ------ Aide ------
// Si une chaine de caractère $string contient le mot "sentence"
// -- AVEC strstr --
// $boolean = strstr($string, "sentence");
// -- AVEC substr --
// $boolean = substr($string, 0, 8) == 'sentence';

/*
 * Tests
 * Pas touche !
 */
check(8);
