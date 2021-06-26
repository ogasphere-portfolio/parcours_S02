<?php
require_once '../inc/functions.php';
require_once '../inc/bart2.php'; // fichier déclarant la variable $bartPunishment
ob_start();

/* === Exo 7 : 3 punitions et leur image ===
 *
 * Cette fois, on a ajouté une donnée supplémentaire dans le tableau des exos précédents : l'image de chaque punition
 * Ces images sont extraites du fameux générique de la série.
 * L'image de la 10e punition va te surprendre !
 * 
 * On va s'occuper de récupérer quelques informations du tableau, comme pour l'exo 4.
 * 
 * 1ère étape : ANALYSER !!
 *   - analyse le tableau $bartPunishment
 *   - la structure a bien changé !
 * 
 * $bartPunishment = [
    'sentence1' => 'Je ne suis pas une femme de 32 ans.',
    'picture1' => '../img/1.jpg',
    'sentence2' => 'Je ne prendrai pas de raccourcis.',
    'picture2' => '../img/2.jpg',
    'sentence3' => 'Je ne chanterai pas l\'hymne national en rotant.',
    'picture3' => '../img/3.jpg',
    'sentence4' => 'Je ne graisserai pas les barres de la cour de récré.',
    'picture4' => '../img/4.jpg',
    'sentence5' => 'Je ne ferai plus jamais rien de mal.',
    'picture5' => '../img/5.jpg',
    'sentence6' => 'Je ne suis pas un dentiste.',
    'picture6' => '../img/6.jpg',
    'sentence7' => 'Je terminerai ce que j\'ai commen...',
    'picture7' => '../img/7.jpg',
    'sentence8' => 'Les drôles de bruits ne sont pas drôles.',
    'picture8' => '../img/8.jpg',
    'sentence9' => 'Je ne gagnerai jamais d\'Emmy.',
    'picture9' => '../img/9.jpg',
    'sentence10' => 'Je déteste Les Griffin.',
    'picture10' => '../img/10.jpg',
    'sentence11' => 'La mention "non inflammable" n\'est pas un défi.',
    'picture11' => '../img/11.jpg',
    'sentence12' => 'Je n\'obéirai pas aux voix dans ma tête.',
    'picture12' => '../img/12.jpg',
    'sentence13' => 'Je suis désolé d\'avoir cassé le tableau noir.',
    'picture13' => '../img/13.jpg',
    'sentence14' => 'Je ne gaspillerai pas de craies.',
    'picture14' => '../img/14.jpg',
    'sentence15' => 'Après 25 ans, ils n\'ont pas réussi à trouver une nouvelle punition',
    'picture15' => '../img/15.jpg'
];
 * 
 * 2e étape :
 *   - A partir de cette variable,
 *      - stocke dans la variable $sentence1 la première phrase de la liste
 *      - stocke dans la variable $sentence7 la 7e phrase de la liste
 *      - stocke dans la variable $sentenceX l'avant-dernière phrase de la liste
 *      - => tu peux alors constater les changements depuis l'exo 4
 *      - stocke dans la variable $image1 l'image de la première phrase de la liste
 *      - stocke dans la variable $image7 l'image de la 7e phrase de la liste
 *      - stocke dans la variable $imageX l'image de l'avant-dernière phrase de la liste
 */

// A toi de jouer


// Initialisation de la variable $sentence qui contient la clé du tableau
$sentence='sentence1';

// On stocke la premiere phrase du tableau dans $sentence1
$sentence1=$bartPunishment[$sentence];

// On stocke la 7eme phrase du tableau dans $sentence7
$sentence='sentence7';
$sentence7=$bartPunishment[$sentence];

// On recupere l'index de l'avant derniere ligne
$MonIndex = (count($bartPunishment)/2)-1;   // $MonIndex = 14
$sentence='sentence'.$MonIndex;             // $sentence = 'sentence14'
// On stocke la 14eme phrase du tableau dans $sentenceX
$sentenceX=$bartPunishment[$sentence];



// Les images 
// Initialisation de la variable $image qui contient la clé du tableau
$image='picture1';
// On stocke la premiere phrase du tableau dans $image1
$image1=$bartPunishment[$image];

// On stocke la 7eme phrase du tableau dans $image7
$image='picture7';
$image7=$bartPunishment[$image];

// On recupere l'index de l'avant derniere ligne
$image='picture'.$MonIndex;     // $image = 'picture14'
// On stocke la 14eme' phrase du tableau dans $imageX
$imageX=$bartPunishment[$image];  



// Temps pour faire l'exo7 : 10mn     Cumul 1H08  


/*
 * Tests
 * Pas touche !
 */
check(7);
