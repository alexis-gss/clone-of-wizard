<!DOCTYPE html>
<html lang="en">

<?php
$title       = "Site";
$description = "Website of the game Clone of Wizard";
$cssPath     = "./css/website.css";
include "./partials/head.php";
?>

<body>
    <section class="loader">
        <img src="./data/items/gemstone.png" alt="Image de chargement." />
        <h2>Chargement ...</h2>
    </section>

    <section class="sectionFond"></section>

    <section class="sectionAnimation">
        <div class="set set3">
            <?php for ($i = 1; $i <= 8; $i++) { ?>
                <div>
                    <img class="sectionAnimationImage" src="./data/sprites/sprite-<?= $i ?>.png" />
                </div>
            <?php } ?>
        </div>
        <div class="set">
            <?php for ($i = 8; $i >= 1; $i--) { ?>
                <div>
                    <img class="sectionAnimationImage" src="./data/sprites/sprite-<?= $i ?>.png" />
                </div>
            <?php } ?>
        </div>
    </section>

    <section>
        <nav class="navOrdinateur">
            <ul class="ulOrdinateur">
                <li class="liOrdinateur">
                    <a href="#video">Video Explicative</a>
                </li>
                <li class="liOrdinateur">
                    <a href="#concept">Concept</a>
                </li>
                <li class="liOrdinateur">
                    <a href="#screenshots">Screenshots</a>
                </li>
                <li class="liOrdinateur">
                    <a href="#galerie">Galerie</a>
                </li>
                <li class="liOrdinateur">
                    <a class="btnJouer" href="./game.php" target="_blank">JOUER</a>
                </li>
            </ul>
        </nav>
        <a class="btnMenu">MENU</a>
        <a class="btnMenuActivated">X</a>
        <div class="filtre"></div>
        <nav class="navTelephone">
            <ul class="ulTelephone">
                <li class="liTelephone">
                    <a href="#video">Video Explicative</a>
                </li>
                <li class="liTelephone">
                    <a href="#concept">Concept</a>
                </li>
                <li class="liTelephone">
                    <a href="#screenshots">Screenshots</a>
                </li>
                <li class="liTelephone">
                    <a href="#galerie">Galerie</a>
                </li>
                <li class="liTelephone">
                    <a class="btnJouer" href="./game.php" target="_blank">JOUER</a>
                </li>
            </ul>
        </nav>
    </section>

    <section class="sectionHeader">
        <div class="logo"></div>
        <div class="logo2"></div>
        <?php include "./icons/arrow.php"; ?>
    </section>

    <section class="sectionVideo" id="video">
        <h2>Vidéo Explicative</h2>
        <video controls>
            <source src="data/CloneOfWizard.mp4" />
        </video>
    </section>

    <section class="sectionConcept" id="concept">
        <h2>Concept</h2>
        <p>
            Dans notre jeu, vous incarnez un sorcier, aux pouvoirs
            spécifiques, perdu dans une mytérieuse forêt ...
        </p>
        <p>
            Au total, il y a plus de 40 niveaux, tous uniques, avec une
            difficulté progressive. Deux modes de jeu vous seront proposés,
            la possibilité de réaliser votre meilleur temps dans le mode
            normal ou de créer votre propre niveau dans l’éditeur de map
            pour ensuite le tester.
        </p>
        <p>
            Ce jeu a été réalisé par Lucas Bordas et Alexis Gousseau,
            travaillant à la fois sur les graphismes et sur le
            développement.
        </p>
    </section>

    <section class="sectionScreenshots" id="screenshots">
        <h2>Screenshots</h2>
        <div id="contentContainer">
            <main class="wrapper">
                <section class="wrapper__content"></section>
                <section class="wrapper__content"></section>
                <section class="wrapper__content"></section>
                <section class="wrapper__content"></section>
                <section class="wrapper__content"></section>
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

    <section class="sectionGalerie" id="galerie">
        <h2>Galerie de sprites</h2>
        <img class="imgSprite" src="./data/sprites/sprite-presentation.png" />
    </section>

    <section class="sectionAnimation">
        <div class="set set2">
            <?php foreach ([5, 8, 4, 1, 7, 3, 6, 2] as $value) { ?>
                <div>
                    <img class="sectionAnimationImage" src="./data/sprites/sprite-<?= $value ?>.png" />
                </div>
            <?php } ?>
        </div>
    </section>

    <?php include "./partials/footer.php"; ?>

    <script src="./js/website.js" async></script>

</body>

</html>