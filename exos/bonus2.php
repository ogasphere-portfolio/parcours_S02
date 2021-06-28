<?php
require_once '../inc/functions.php';
include 'bonus2/datas/characters.php';
ob_start();


/**
 * ===== Bonus 2 : Le Comparateur de personnages ====
 * 
 * Tu as déjà vu des comparateurs d'articles, 
 * qui te permettent de voir quel est le produit qui correspond le mieux à tes besoin, 
 * mais aussi pour évaluer le meilleur rapport qualité/prix. 
 * Et bien, tu vas pouvoir faire la même chose pour comparer les personnages principaux de South Park !
 * (⊙.☉)7
 * 
 * Tu disposes de données à afficher, elles sont contenues dans le tableau $characters
 * (Tu peux les voir dans le fichier 'bonus2/datas/characters.php')
 *
 * 
 * 
 * Etape 1 : 
 * Afficher le premier personnage, sa photo et les caractéristiques contenus dans le tableau $characters 
 * Mettre en forme grâce à du HTML et du CSS (tu peux mettre ton CSS dans bonus2/css/styles.css)
 * 
 * Etape 2 :
 * Quand tu es content de toi,
 * Permets à tous les autres personnages de s'afficher aussi.
 * 
 */
?>

// A toi de jouer ! ʘ‿ʘ
<?php
require 'bonus2/datas/characters.php';

// Initialisation des variables
$long_name;
$father;
$mother;
$gender;
$age;
$hair;
$running_gag;
$catch_phrase;
$img1;
$img2;

include 'bonus2/inc/variables-etape1.php'
?>

<!-- /* Mets ton HTML ici */ -->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Bonus2</title>
        <link rel="stylesheet" href="bonus2/css/style.css">
    </head>

    <section class="etape1">

        <!-- Etape 1 -->
        <div class="etape1-graph">
            <!-- Affichage de l'image-->
            <img class="etape1-graph-image" 
                src="bonus2/images/<?= $characters['Stan']['img1'] ?>" alt="">

            <!-- Affichage du nom-->
            </strong class="etape1-graph-longName"><?= $long_name ?>
    
        </div>
        
        <div class="etape1-identity">
                 
            <p class="etape1-text">
                <!-- Affichage du descriptif-->
                <strong>Father: </strong><?= $father ?></br>
                <strong>Mother: </strong><?= $mother ?></br>
                <strong>Gender: </strong><?= $gender ?></br>
                <strong>Age: </strong><?= $age ?></br>
                <strong>Hair: </strong><?= $hair ?></br>
                <strong>Gag: </strong><?= $running_gag ?></br>
                <strong>Cath phrase: </strong><?= $catch_phrase ?></br>
        
            </p>
        </div>
    </section>


    <!-- Etape 2 -->
    <section class="etape2">

        
        <?php
        foreach ($characters as $nom => $description) {  //parcours du tableau
            // var_dump($numero);
            ?>
            <div class="post"></div>
                <div class="etape2-graph" >

                    <?php 

                    // Choix au hasard de l'image à afficher
                    $image_a_Afficher;
                    if (isset($description['img2'])) {                          // si la seconde image existe
                        $image_a_Afficher= $description['img'.mt_rand(1,2)];    // on choisit au hasard l'image a afficher
                    }else {                                                     //sinon
                        $image_a_Afficher = $description['img1'];               //on affiche la premiere image
                    }

                    ?>

                    <div class="etape2-image-container" style="background-image:url(bonus2/images/<?= $image_a_Afficher?>)";>
                        <!-- Affichage de l'image-->
                       

                        <img class="etape2-graph-image" 
                        src="bonus2/images/<?= $image_a_Afficher?>" alt="">
                    </div>
                        <!-- Affichage du nom-->
                    <div class="etape2-graph-longName">
                        <?php if (isset ($description['long_name'])){       // Controle de l'existance de $description['long_name'] ?>
                            </strong ><?= $description['long_name'] ?>
                        <?php } else {                                      // Si $description['long_name'] n'existe pas on saute une ligne ?>
                            </br> 
                        <?php
                        }    
                        ?>
                
                    
                    </div>

                    <!-- AIE AIE AIE CE CSS QUELLE GALEEEEEEEEEEERE !!!!!! -->
                    <div class="etape2-identity">
                        
                        <p class="etape2-text">
                            <!-- Affichage du descriptif-->
                            
                            <?php if (isset ($description['father'])){                           // Controle de l'existance de $description['father']?>  
                                <strong>Father: </strong><?= $description['father']  ?></br>
                            <?php } else {                                                      // Si $description['father'] n'existe pas on saute une ligne?>
                                </br>  
                            <?php
                            }    
                            ?>

                            <?php if (isset ($description['mother'])){                          // Controle de l'existance de $description['mother']?>  
                                <strong>Mother: </strong><?= $description['mother']  ?></br>
                            <?php } else {                                                      // Si $description['mother'] n'existe pas on saute une ligne?>
                                </br>   
                            <?php
                            }    
                            ?>

                            <?php if (isset ($description['gender'])){                          // Controle de l'existance de $description['gender']?>  
                            <strong>Gender: </strong><?= $description['gender']  ?></br>
                            <?php } else {                                                      // Si $description['gender'] n'existe pas on saute une ligne?>
                                </br>   
                            <?php
                            }    
                            ?>
                            <?php if (isset ($description['age'])){                             // Controle de l'existance de $description['age']?>  
                            <strong>Age: </strong><?= $description['age']  ?></br> 
                            <?php } else {                                                      // Si $description['age'] n'existe pas on saute une ligne?>
                                </br>  
                            <?php
                            }   
                            ?>

                            <?php if (isset ($description['hair'])){                            // Controle de l'existance de $description['hair'] ?>  
                            <strong>Hair: </strong><?= $description['hair']  ?></br>
                            <?php } else {                                                      // Si $description['hair'] n'existe pas on saute une ligne ?>
                                </br>   
                            <?php
                            } 
                            ?>

                            <?php if (isset ($description['running_gag'])){                     // Controle de l'existance de $description['running_gag'] ?>  
                            <strong>Gag: </strong><?= $description['running_gag']  ?></br>
                            <?php } else {                                                      // Si $description['running_gag'] n'existe pas on saute une ligne ?>
                                </br>   
                            <?php
                            }   
                            ?>
                            <?php if (isset ($description['catch_phrase'])){                    // Controle de l'existance de $description['catch_phrase'] ?>  
                            <strong>Cath phrase: </strong><?= $description['catch_phrase']  ?></br>
                            <?php } else {                                                      // Si $description['catch_phrase'] n'existe pas on saute une ligne ?>
                                </br>   
                            <?php
                            }    
                            ?>
                        </p>
                    </div>
            
                </div>
                
                
            </div>
            <?php
        } // Fin de la boucle
        ?>
    </section>


<?php

// Temps pour l'etape 1 : 40mn
// Temps pour l'etape 2 : php+html : 1h , pour le CSS je ne sais pas mais au moins 3h heures j'ai surtout eu du mal sur la mise en forme 
// Cumul : 7h40


/*
 * Affichage
 * Pas touche !
 */
check(13);