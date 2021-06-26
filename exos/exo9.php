<?php
require_once '../inc/functions.php';

/* === Exo 9 : Paramètres d'URL ===
 *
 * Pour vérifier vos connaissances sur les paramètres d'URL,
 * on va considérer qu'on se trouve sur un site de mini-jeux 2 joueurs
 * et qu'on se trouve sur la page où le jeu a été choisi, et le nom des joueurs renseigné
 *
 * Pour pouvoir commencer le jeu, il nous faut les trois informations suivantes :
 * le nom du jeu dans une variable nommée "jeu"
 * le nom du premier joueur dans une variable nommée "premierJoueur"
 * le nom du second joueur dans une variable nommée "secondJoueur"
 * 
 * Analysez l'URL pour comprendre quelles valeurs sont attendues dans chacune de ces variables
 */


// Url : exo9.php?game=Télémagouille&player2=Véronique&player1=Mamdou&step1=ok

$jeu = $_GET['game'] ;
$premierJoueur = $_GET['player1'];
$secondJoueur = $_GET['player2'];



// temps pour faire l'exo9 : 7mn   Cumul 1h37

/*
 * Tests
 * Pas touche !
 */
check(9);
