<?php
include "./partials/head.php";
include "./partials/footer.php";
?>

<!DOCTYPE html>
<html lang="en">

<?= getHead(
    "Game",
    "Page of the platformer game named Clone of Wizard.",
    "./css/game.css",
) ?>

<body>
    <div class="game-wrapper relative">
        <canvas></canvas>
        <button class="btn-start cursor-pointer absolute transform end-[calc(50%+2rem)] top-[26.5rem] transition-colors duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 px-4 py-2">START</button>
        <a class="btn-editor absolute transform start-[calc(50%+2rem)] top-[26.5rem] transition-colors duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 px-4 py-2" href="./editor.php">MAP EDITOR</a>
        <a class="d-none btn-menu absolute transform start-[1rem] top-[1rem] transition-colors duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 px-4 py-2" href="./game.php">MENU</a>
        <button class="btn-sound d-none absolute transform start-[6.5rem] top-[1rem] cursor-pointer transition-colors duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 px-4 py-2">
            <svg class="volumeOn w-[1.5rem] h-[1.5rem]">
                <use class="iconUse1" href="#icon-volume-high"></use>
            </svg>
            <svg class="d-none volumeOff w-[1.5rem] h-[1.5rem]">
                <use class="d-none iconUse2" href="#icon-volume-mute"></use>
            </svg>
        </button>
        <button class="d-none btn-life absolute transform start-[10.75rem] top-[1rem] cursor-pointer transition-colors duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 px-4 py-2">EASY MODE</button>
        <span class="d-none indicateurVie"></span>
        <span class="d-none indicateurLvl">1</span>
        <p class="d-none indicateurLvldesc">LEVEL :</p>
        <span class="d-none temps">0</span>
        <span class="d-none tempsGemme">0</span>
        <span class="d-none tempsFlame">0</span>
    </div>
    <img class="d-none imgSprite" src="./assets/images/sprites/sprite-all.png" />
    <!-- BACKGROUNDS -->
    <img class="d-none fond1" src="./assets/images/backgrounds/parallax-1.png" />
    <img class="d-none fond2" src="./assets/images/backgrounds/parallax-2.png" />
    <img class="d-none fond3" src="./assets/images/backgrounds/parallax-3.png" />
    <img class="d-none fond4" src="./assets/images/backgrounds/death.png" />
    <img class="d-none fondMenu" src="./assets/images/backgrounds/menu.png" />
    <!-- NOTES -->
    <img class="d-none annotation1" src="./assets/images/notes/note-1.png" />
    <img class="d-none annotation2" src="./assets/images/notes/note-2.png" />
    <img class="d-none annotation3" src="./assets/images/notes/note-3.png" />
    <img class="d-none annotation4" src="./assets/images/notes/note-4.png" />
    <img class="d-none annotation5" src="./assets/images/notes/note-5.png" />
    <img class="d-none annotation6" src="./assets/images/notes/note-6.png" />
    <!-- ITEMS -->
    <img class="d-none coeur" src="./assets/images/items/heart.png" />
    <img class="d-none gemme" src="./assets/images/items/gemstone.png" />
    <img class="d-none fireball" src="./assets/images/items/fireball.png" />
    <!-- SOUNDS -->
    <audio src="./assets/images/sounds/fond.mp3" class="audioFond" loop></audio>
    <audio src="./assets/images/sounds/portal.mp3" class="audioPortail"></audio>
    <audio src="./assets/images/sounds/clone.mp3" class="audioClone"></audio>
    <audio src="./assets/images/sounds/extralife.mp3" class="audioExtralife"></audio>
    <audio src="./assets/images/sounds/brambles.mp3" class="audioRonces"></audio>
    <audio src="./assets/images/sounds/gemstone.mp3" class="audioGemme"></audio>
    <audio src="./assets/images/sounds/death.mp3" class="audioMort"></audio>
    <audio src="./assets/images/sounds/win.mp3" class="audioWin"></audio>
    <audio src="./assets/images/sounds/explosion.mp3" class="audioExplosion"></audio>
    <audio src="./assets/images/sounds/fireball.mp3" class="audioFireball"></audio>
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
    <?= getFooter(true) ?>
    <script src="./js/game.js" async></script>
</body>

</html>