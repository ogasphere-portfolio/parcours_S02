<?php

/**
 * Pas touche ! 
 */
require_once '../inc/functions.php';

/**
 * 
 * Voilà le plan : Il va falloir coder un petit programme permettant de générer une grille de 5 numéros du loto choisis aléatoirement.
 * Les numéros sont compris entre 1 et 49 et il faudra aussi ajouter le numéro complémentaire compris entre 1 et 10 !
 * On veut obtenir ces numéros dans un tableau, par exemple : [45, 5, 1, 13, 28].
 * 
 * Il faudra stocker le résultat dans un array $grilleLoto.
 * 
 * Pour générer un nombre aléatoire, tu peux utiliser une des fonctions fournies par PHP : mt_rand()
 * 
 */

// c'est parti !

// Entrée : rien
// Sortie : le tableau de tous les numéros de la grille
function numerosLoto() {
    // préparer la variable qui contiendra la liste des nombres (vide)
    $grilleLoto = [];
    
    // tant qu'on n'a pas 5 nombres dans notre liste
    while (count($grilleLoto) <= 4) {
        # code...
     
        
        
        // on tire un nombre au hasard entre 1 et 49
        $monNombre = mt_rand(1,49);
        
        // s'il n'est pas déjà dans la liste (utiliser la fonction isAlreadyInList à coder plus bas)
        if (! isAlreadyInList($grilleLoto, $monNombre)){

            // on l'ajoute à la liste
             $grilleLoto[] = $monNombre;
        }
        
       
    // on recommence (la boucle "tant que")
    }

    // on ajoute un nombre au hasard entre 1 et 10 (numéro complémentaire)
    $grilleLoto[]=mt_rand(1,10);
    // retourner la liste
    return $grilleLoto;
    
}
 

////// Déterminer si un numéro est déjà dans la liste //////
// En entrée, on aura besoin de la liste et du nombre à rechercher
// En sortie, on retournera VRAI si le nombre est dans la liste
//                       ou FAUX si le nombre n'est pas dans la liste


function isAlreadyInList($grilleLoto, $monNombre) {

    $valeurDeRetour = false; // Initialisatuion de la valeur de retour à faux
    // pour chaque nombre dans la liste
        foreach ($grilleLoto as $key => $value) {
            
            

            // s'il y a égalité entre le nombre de la liste et le nombre qu'on veut ajouter
            if ($grilleLoto[$key] == $monNombre) {
                
                // alors le nombre est déjà dans la liste
                // (retourner ...)
                $valeurDeRetour = true;

            }
        }
        
    // Une fois la recherche dans la liste finie
    // Si on a pas trouvé le nombre
    // c'est qu'il n'est pas dans la liste
    // (retourner ...)
    return $valeurDeRetour;
}    


//Temps pour faire l'exo11 : 46 mn      Cumul 2h37



/** 
 * Tests
 * Pas touche !
 */
check(11, 'numerosLoto');
