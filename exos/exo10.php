<?php

/**
 * Pas touche ! 
 */
require_once '../inc/functions.php';
require_once '../inc/algo.php';

/**
 * Un peu d'algo ! 
 * 
 * Rappel : Un algorithme est une suite d'actions qu'on demandera à notre machine d'exécuter pour atteindre un objectif.
 * 
 * Objectif : 
 * Mettre au point l'algorithme d'un petit programme permettant de faire deviner un nombre à l'utilisateur. Ce nombre est fixe (ne change pas à chaque exécution de notre code PHP).
 * - L'utilisateur devra donner sa réponse par un paramètre d'URL nommé "nombre". 
 *   - Si le nombre passé est trop petit ou trop grand, on affiche un message pour guider l'utilisateur.
 *   - Si le nombre est le bon, on affiche le message de victoire.
 * 
 * Ici donc, on ne code pas ce programme, on prépare simplement notre algorithme, c'est à dire l'ensemble des actions à réaliser dans le bon ordre pour parvenir à l'objectif.
 * 
 * JE REPETE : ON NE CODE PAS CE PROGRAMME !!!!
 * 
 * Vous avez une liste d'actions possibles dans le tableau $algo. A vous de remettre ces actions dans l'ordre pour atteindre l'objectif fixé !
 * Il faudra ajouter ces actions au tableau $instructionList (à créer) pour valider l'exercice.
 * 
 * PS : on aurait pu te demander de mettre dans le bon ordre chaque action proposée, une par ligne, dans un fichier texte par exemple...
 * Mais on a pas pu résister à l'idée de te faire encore une fois pratiquer les tableaux en PHP. Comment ça, "c'est de la torture" ?
 */

/**
 * Suggestion : ça peut être intéressant de se demander quelles sont les actions possibles en affichant le contenu du tableau $algo
 */
// echo '<pre>';
// var_dump($algo);
// echo '</pre>';



// On est sympa, on te crée le tableau
$instructionList = [];
// Puis on ajoute pour toi la première "action"
$instructionList[] = $algo[8]; //"définir le nombre à 42",

// A toi d'écrire la suite...

$instructionList[] = $algo[5];  // on récupère le nombre saisi par l'utilisateur en paramètre d'URL

$instructionList[] = $algo[1]; // si le nombre saisi est plus petit que le nombre attendu

$instructionList[] = $algo[6]; // alors afficher le message : 'Le nombre saisi est trop petit 

$instructionList[] = $algo[0]; // sinon

$instructionList[] = $algo[3]; // si le nombre saisi est plus grand que le nombre attendu

$instructionList[] = $algo[4]; // alors afficher le message : 'Le nombre saisi est trop grand 

$instructionList[] = $algo[7]; // sinon

$instructionList[] = $algo[2]; // afficher le message de victoire


// Temps pour faire l'exo 10 : 14 mn     Cumul : 1h51



// $algo = [
//     "sinon",
//     "si le nombre saisi est plus petit que le nombre attendu",
//     "afficher le message de victoire",
//     "si le nombre saisi est plus grand que le nombre attendu",
//     "alors afficher le message : 'Le nombre saisi est trop grand !'",
//     "on récupère le nombre saisi par l'utilisateur en paramètre d'URL",
//     "alors afficher le message : 'Le nombre saisi est trop petit !'",
//     "sinon",
//     "définir le nombre à 42",
// ];



/*
 * Tests
 * Pas touche !
 */
check(10);