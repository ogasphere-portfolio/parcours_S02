<?php
require_once '../inc/functions.php';
require_once '../inc/bart.php'; // fichier déclarant la variable $bartPunishment

/* === Exo 5 : 3 punitions ===
 *
 * Après South Park, parlons d'un autre enfant calme, gentil et exemplaire : Bart Simpson !
 * 
 * Un peu plus haut, nous avons inclus un fichier "bart.php".
 * Analyse le contenu de ce fichier, et la variable $bartPunishment
 * 
 * A partir de cette variable,
 *   - stocke dans la variable $sentence1 la première phrase de la liste
 *   - stocke dans la variable $sentence4 la phrase à l'index 4 de la liste
 *   - stocke dans la variable $sentenceX l'avant-dernière phrase de la liste
 */

// A toi de jouer


// On stocke la premiere phrase du tableau dans $sentence1
$sentence1=$bartPunishment[1];

// On stocke la  phrase à l'index 4 du tableau dans $sentence4
$sentence4=$bartPunishment[4];



// On recupere l'index de l'avant derniere ligne
$MonIndex= count($bartPunishment)-1;

// On stocke l'avant derniere phrase du tableau dans $sentenceX
$sentenceX=$bartPunishment[$MonIndex];


// Temps pour faire l'exo5 : 8mn     Cumul : 53 mn


/*
 * Tests
 * Pas touche !
 */
check(5);
