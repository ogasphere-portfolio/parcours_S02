<?php
require_once '../inc/functions.php';
ob_start();
?>
/**
 * === Bonus 1 : ALECMONE ===
 * 
 * Un petit malin s'est amusé à découper le code dans plusieurs fichiers !
 * Et maintenant, il n'est plus possible d'acheter son caméléon fétiche sur ce site. 
 * Il faut absolument remettre de l'ordre dans ce bazar avant que nos fans s'en aperçoivent.
 * ( ˘ ³˘)♥
 * 
 * Etape 1 : 
 * Tous les fichiers ont été placés dans le répertoire "bonus1". 
 * Il va te falloir utiliser la fonction php include() ou pas, selon les fichiers.
 * 
 * Etape 2 : 
 * Maintenant, il faut les inclure dans le bon ordre !
 * Comment faire ? Et bien, il ne faut plus d'erreur php, déjà, et ce sera pas mal.
 * 
 * Etape 3 : 
 * Le rendu doit être le même qu'avant.
 * Un visuel de la page doit bien trainer quelque part...
 */


// à toi de jouer ! q(❂‿❂)p
<?php
require 'bonus1/datas/items.php';
require 'bonus1/datas/types.php';

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Bonus1</title>
  <link rel="stylesheet" href="../css/bonus1.css">
</head>
<?php
include 'bonus1/advert1.php';
?>
<main class="cam-shop">    
    <section class="cam-shop__form-new-order">
        <form action="" method="post">
            <legend class="cam-shop__form-new-order__title">
                Achète un Caméléon !
            </legend>
            <fieldset class="cam-shop__form-new-order__fieldset">
                <div>
                    <label for="customer-email">Ton email ici :</label><br>
                    <input type="email" name="customer-email" id="customer-email">
                </div>
                <div>
                    <label>Quel type de caméléon veux-tu :</label><br>
                    <?php foreach ($types as $code => $typeName) : ?>
                        <div>
                            <label for="<?=$code ?>">
                                <input type="radio" name="type" id="<?=$code ?>" value="<?=$code ?>">
                                <?=$typeName ?>
                            </label>
                        </div>
                    <?php endforeach ?>
                </div>
                <div>
                    <label for="logo-color">La couleur de ton caméléon :</label><br>
                    <input type="color" name="logo-color" id="logo-color" list="logo-color">
                </div>
                <div>
                    <input type="submit" name="form-new-order" value="COMMANDER">
                </div>
            </fiedset>
        </form>
    </section>
    <section class="cam-shop__item-list">
        <?php foreach ($items as $item) : ?>
            <figure class="cam-shop__item-list__figure">
                <img src="bonus1/images/<?=$item['img'] ?>" alt="<?=$item['name'] ?>" title="<?=$item['name'] ?>">
                <figcaption class="cam-shop__item-list__figure__name"><?=$item['name'] ?> <?=$item['price'] ?>&#x20a1;</figcaption>
                <figcaption class="cam-shop__item-list__figure__desc"><?=$item['desc'] ?></figcaption>
            </figure>
        <?php endforeach ?>
    </section>
</main>





<?php
include 'bonus1/advert2.php';


// Temps pour faire le bonus 1 : 27 mn      Cumul: 3h04


// <!-- /*
//  * Affichage
//  * Pas touche !
//  */ -->
check(12);