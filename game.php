<!DOCTYPE html>
<html>

<?php
$title       = "Game";
$description = "Page of the game Clone of Wizard";
$cssPath     = "./css/game.css";
include "./partials/head.php";
?>

<body>
    <div class="game-wrapper">
        <canvas></canvas>
        <a class="btnStart">START</a>
        <a class="btnEditor" href="./editor.php">MAP EDITOR</a>
        <a class="displayNone btnMenu" href="./game.php">MENU</a>
        <button class="displayNone btnEasyMode">EASY MODE</button>
        <span class="displayNone indicateurVie"></span>
        <span class="displayNone indicateurLvl">1</span>
        <p class="displayNone indicateurLvldesc">LEVEL :</p>
        <span class="displayNone temps">0</span>
        <span class="displayNone tempsGemme">0</span>
        <span class="displayNone tempsFlame">0</span>
    </div>
    <img class="displayNone imgSprite" src="./data/sprites/sprite-all.png" />
    <!-- BACKGROUNDS -->
    <img class="displayNone fond1" src="./data/backgrounds/parallax-1.png" />
    <img class="displayNone fond2" src="./data/backgrounds/parallax-2.png" />
    <img class="displayNone fond3" src="./data/backgrounds/parallax-3.png" />
    <img class="displayNone fond4" src="./data/backgrounds/death.png" />
    <img class="displayNone fondMenu" src="./data/backgrounds/menu.png" />
    <!-- NOTES -->
    <img class="displayNone annotation1" src="./data/notes/note-1.png" />
    <img class="displayNone annotation2" src="./data/notes/note-2.png" />
    <img class="displayNone annotation3" src="./data/notes/note-3.png" />
    <img class="displayNone annotation4" src="./data/notes/note-4.png" />
    <img class="displayNone annotation5" src="./data/notes/note-5.png" />
    <img class="displayNone annotation6" src="./data/notes/note-6.png" />
    <!-- ITEMS -->
    <img class="displayNone coeur" src="./data/items/heart.png" />
    <img class="displayNone gemme" src="./data/items/gemstone.png" />
    <img class="displayNone fireball" src="./data/items/fireball.png" />
    <!-- SOUNDS -->
    <audio src="./data/sounds/fond.mp3" class="audioFond" loop></audio>
    <audio src="./data/sounds/portal.mp3" class="audioPortail"></audio>
    <audio src="./data/sounds/clone.mp3" class="audioClone"></audio>
    <audio src="./data/sounds/extralife.mp3" class="audioExtralife"></audio>
    <audio src="./data/sounds/brambles.mp3" class="audioRonces"></audio>
    <audio src="./data/sounds/gemstone.mp3" class="audioGemme"></audio>
    <audio src="./data/sounds/death.mp3" class="audioMort"></audio>
    <audio src="./data/sounds/win.mp3" class="audioWin"></audio>
    <audio src="./data/sounds/explosion.mp3" class="audioExplosion"></audio>
    <audio src="./data/sounds/fireball.mp3" class="audioFireball"></audio>
    <!-- VOLUME -->
    <svg class="displayNone volumeOn">
        <use class="iconUse1" href="#icon-volume-high"></use>
    </svg>
    <svg class="displayNone volumeOff">
        <use class="displayNone iconUse2" href="#icon-volume-mute"></use>
    </svg>
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-volume-high" viewBox="0 0 34 32">
                <path d="M27.814 28.814c-0.384 0-0.768-0.146-1.061-0.439-0.586-0.586-0.586-1.535 0-2.121 2.739-2.739 4.247-6.38 4.247-10.253s-1.508-7.514-4.247-10.253c-0.586-0.586-0.586-1.536 0-2.121s1.536-0.586 2.121 0c3.305 3.305 5.126 7.7 5.126 12.374s-1.82 9.069-5.126 12.374c-0.293 0.293-0.677 0.439-1.061 0.439zM22.485 25.985c-0.384 0-0.768-0.146-1.061-0.439-0.586-0.586-0.586-1.535 0-2.121 4.094-4.094 4.094-10.755 0-14.849-0.586-0.586-0.586-1.536 0-2.121s1.536-0.586 2.121 0c2.55 2.55 3.954 5.94 3.954 9.546s-1.404 6.996-3.954 9.546c-0.293 0.293-0.677 0.439-1.061 0.439v0zM17.157 23.157c-0.384 0-0.768-0.146-1.061-0.439-0.586-0.586-0.586-1.535 0-2.121 2.534-2.534 2.534-6.658 0-9.192-0.586-0.586-0.586-1.536 0-2.121s1.535-0.586 2.121 0c3.704 3.704 3.704 9.731 0 13.435-0.293 0.293-0.677 0.439-1.061 0.439z">
                </path>
                <path d="M13 30c-0.26 0-0.516-0.102-0.707-0.293l-7.707-7.707h-3.586c-0.552 0-1-0.448-1-1v-10c0-0.552 0.448-1 1-1h3.586l7.707-7.707c0.286-0.286 0.716-0.372 1.090-0.217s0.617 0.519 0.617 0.924v26c0 0.404-0.244 0.769-0.617 0.924-0.124 0.051-0.254 0.076-0.383 0.076z">
                </path>
            </symbol>
        </defs>
    </svg>
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-volume-mute" viewBox="0 0 32 32">
                <path d="M30 19.348v2.652h-2.652l-3.348-3.348-3.348 3.348h-2.652v-2.652l3.348-3.348-3.348-3.348v-2.652h2.652l3.348 3.348 3.348-3.348h2.652v2.652l-3.348 3.348 3.348 3.348z">
                </path>
                <path d="M13 30c-0.26 0-0.516-0.102-0.707-0.293l-7.707-7.707h-3.586c-0.552 0-1-0.448-1-1v-10c0-0.552 0.448-1 1-1h3.586l7.707-7.707c0.286-0.286 0.716-0.372 1.090-0.217s0.617 0.519 0.617 0.924v26c0 0.404-0.244 0.769-0.617 0.924-0.124 0.051-0.254 0.076-0.383 0.076z">
                </path>
            </symbol>
        </defs>
    </svg>
    <script src="./js/game.js" async></script>
</body>

</html>