<?php
require_once '../inc/functions.php';

/* === Exo 2 : Une note ? ===
 *
 * Oui, chez O'clock, on n'aime pas les notes. On préfère valider chaque notion vue en cours.
 * 
 * Mais, on n'est pas sectaire, et quand on nous demande de faire un script
 *   qui convertit une note sur 20 en note en lettre (ABCDEF)
 *   et bien on le fait !
 * 
 * Enfin, non, on le fait pas, on demande à nos apprenants de le faire ^^
 * 
 * Voici la règle (ou notre règle, car ça n'a rien d'officiel) :
 *   - A => de 16 à 20
 *   - B => de 13 à 15
 *   - C => de 10 à 12
 *   - D => de 7 à 9
 *   - E => de 4 à 6
 *   - F => de 0 à 3
 * 
 * -- A faire --
 * 
 * Ecris la fonction "convertNoteToLetter"
 *  prenant un argument : la note sur 20
 *  et retournant la note en lettre (de A à F, en majuscule)
 */



/*
 * Tests
 * Pas touche !
 */
check(2);
