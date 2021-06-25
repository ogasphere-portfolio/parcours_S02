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
$note=12;
function convertNoteToLetter($note){
  
   // si la note est comprise entre 0 et 3 on renverra "F" comme valeur de retour 
  if ($note>=0 & $note<=3) {
    $noteEnLettre = "F";
  }
  
  // si la note est comprise entre 4 et 6 on renverra "E" comme valeur de retour 
  if ($note>=4 & $note<=6) {
    $noteEnLettre = "E";
  }

  // si la note est comprise entre 7 et 9 on renverra "D" comme valeur de retour 
  if ($note>=7 & $note<=9) {
    $noteEnLettre = "D";
  }

  // si la note est comprise entre 10 et 12 on renverra "C" comme valeur de retour 
  if ($note>=10 & $note<=12) {
    $noteEnLettre = "C";
  }
 
  // si la note est comprise entre 13 et 15 on renverra "B" comme valeur de retour  
  if ($note>=13 & $note<=15) {
    $noteEnLettre = "B";
  }

  // si la note est comprise entre 16 et 20 on renverra "A" comme valeur de retour 
  if ($note>=16 & $note<=20) {
    $noteEnLettre = "A";
  }
  return $noteEnLettre;
}
//Temps pour faire l'exo2 11mn    Cumul 26mn


/*
 * Tests
 * Pas touche !
 */
check(2);
