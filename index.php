<?php
$title       = "Site";
$description = "Website of the platformer game named Clone of Wizard";
$cssPath     = "./css/website.css";
$jsPath      = "./js/website.js";
include "./partials/head.php";
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!-- LOADER -->
    <section class="loader">
        <img src="./data/items/gemstone.png" alt="Loading image." />
        <h2>Loading...</h2>
    </section>

    <section class="sectionFond"></section>

    <!-- ANIMATIONS -->
    <section class="sectionAnimation">
        <div class="set">
            <?php for ($i = 8; $i >= 1; $i--) { ?>
                <div>
                    <img class="sectionAnimationImage" src="./data/sprites/sprite-<?= $i ?>.png" />
                </div>
            <?php } ?>
        </div>
        <div class="set set2">
            <?php foreach ([5, 8, 4, 1, 7, 3, 6, 2] as $value) { ?>
                <div>
                    <img class="sectionAnimationImage" src="./data/sprites/sprite-<?= $value ?>.png" />
                </div>
            <?php } ?>
        </div>
        <div class="set set3">
            <?php for ($i = 1; $i <= 8; $i++) { ?>
                <div>
                    <img class="sectionAnimationImage" src="./data/sprites/sprite-<?= $i ?>.png" />
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- NAVIGATION -->
    <nav class="navOrdinateur">
        <ul class="ulOrdinateur">
            <li class="liOrdinateur">
                <a href="#concept">Concept</a>
            </li>
            <li class="liOrdinateur">
                <a href="#screenshots">Screenshots</a>
            </li>
            <li class="liOrdinateur">
                <a href="#sprites">Sprites</a>
            </li>
            <li class="liOrdinateur">
                <a class="btnJouer" href="./game.php" target="_blank">PLAY</a>
            </li>
        </ul>
    </nav>
    <a class="btnMenu">MENU</a>
    <a class="btnMenuActivated">X</a>
    <div class="filtre"></div>
    <nav class="navTelephone">
        <ul class="ulTelephone">
            <li class="liTelephone">
                <a href="#concept">Concept</a>
            </li>
            <li class="liTelephone">
                <a href="#screenshots">Screenshots</a>
            </li>
            <li class="liTelephone">
                <a href="#sprites">Sprites</a>
            </li>
            <li class="liTelephone">
                <a class="btnJouer" href="./game.php" target="_blank">PLAY</a>
            </li>
        </ul>
    </nav>

    <!-- HEADER -->
    <section class="sectionHeader">
        <div class="logo"></div>
        <div class="logo2"></div>
        <h1>Clone of Wizard by Alexis Gousseau</h1>
        <?php include "./icons/arrow.php"; ?>
    </section>

    <!-- CONCEPT -->
    <section class="sectionConcept" id="concept">
        <h2>Concept</h2>
        <h3>
            Incarnez un sorcier aux pouvoirs spécifiques, perdu dans une mytérieuse forêt...
        </h3>
        <p>
            Clone of Wizard est un jeu de plateforme dans lequel vous allez devoir réussir
            40 niveaux. Chaque niveau est unique avec une difficulté progressive.
        </p>
        <ul>
            Afin de les terminer, plusieurs pouvoirs vous seront donné au cours du jeu :
            <li>- la capacité de créer un clone immobile de votre sorcier, qui vous permettra
                de libérer le passage en faisant disparaître un pilier,</li>
            <li>- une gemme qui une fois prise, réduira l'apesanteur pendant une
                durée de 6s,</li>
            <li>- une extra life, vous permettant de revenir à la vie lorsque vous échouez dans
                un niveau (à usage unique),</li>
            <li>- et enfin un sort de boule de feu, qui une fois lancé, vous libèrera le passage
                des morceaux de terre trop encombrants.</li>
        </ul>
        <p>Une fois le dernier niveau complété, votre temps total pour réussir ces 40
            niveaux sera affiché (je vous défie de battre mon record qui est de 06min et 28sec 😁).
        </p>
        <p>
            Deux modes de jeu sont disponibles, la possibilité de réaliser votre meilleur temps
            dans le mode normal, ou de créer votre propre niveau dans l'éditeur de carte afin
            de le tester.
        </p>
        <p>Amusez-vous bien !</p>
    </section>

    <!-- SCREENSHOTS -->
    <section class="sectionScreenshots" id="screenshots">
        <h2>Screenshots</h2>
        <div id="contentContainer">
            <main class="wrapper">
                <div class="wrapper__content"></div>
                <div class="wrapper__content"></div>
                <div class="wrapper__content"></div>
                <div class="wrapper__content"></div>
                <div class="wrapper__content"></div>
            </main>
        </div>
        <div class="navLinks">
            <ul class="navLinks__ul">
                <li class="navLinks__itemLinks" data-pos="0px"></li>
                <li class="navLinks__itemLinks" data-pos="-100%"></li>
                <li class="navLinks__itemLinks" data-pos="-200%"></li>
                <li class="navLinks__itemLinks" data-pos="-300%"></li>
                <li class="navLinks__itemLinks" data-pos="-400%"></li>
            </ul>
        </div>
    </section>

    <!-- SPRITES -->
    <section class="sectionGalerie" id="sprites">
        <h2>Sprites gallery</h2>
        <img class="imgSprite" src="./data/sprites/sprite-presentation.png" />
    </section>

    <?php include "./partials/footer.php"; ?>

    <script src="<?= $jsPath ?>" async></script>
</body>

</html>