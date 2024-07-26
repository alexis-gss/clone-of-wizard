<?php
include "./partials/head.php";
include "./partials/heading.php";
include "./partials/footer.php";
?>

<!DOCTYPE html>
<html lang="en">

<?= getHead(
    "Home",
    "Website of the platformer game named Clone of Wizard.",
    "./css/website.css",
) ?>

<body>
    <!-- ANIMATIONS -->
    <div class="fixed w-full h-full overflow-hidden">
        <div class="relative w-full h-full">
            <div class="sprites-set z-2">
                <?php for ($i = 8; $i >= 1; $i--) { ?>
                    <img class="w-[6rem] h-auto" src="./assets/images/sprites/sprite-<?= $i ?>.png" />
                <?php } ?>
            </div>
            <div class="sprites-set sprites-set-2 z-3">
                <?php foreach ([5, 8, 4, 1, 7, 3, 6, 2] as $value) { ?>
                    <img class="w-[6rem] h-auto" src="./assets/images/sprites/sprite-<?= $value ?>.png" />
                <?php } ?>
            </div>
            <div class="sprites-set sprites-set-3 z-1">
                <?php for ($i = 1; $i <= 8; $i++) { ?>
                    <img class="w-[6rem] h-auto" src="./assets/images/sprites/sprite-<?= $i ?>.png" />
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container relative flex flex-col justify-between items-center w-full min-h-full mx-auto px-4 z-4">
        <!-- HEADER -->
        <section class="flex flex-col justify-center items-center min-h-screen">
            <div class="max-w-[80rem] relative overflow-hidden">
                <div class="logo">
                    <img src="../assets/images/logo.png" />
                </div>
                <div class="logo-animate absolute top-0 start-0">
                    <img src="../assets/images/logo.png" />
                </div>
                <a href="game.php" target="_blank"
                    class="delayed-show absolute bottom-0 sm:bottom-[2rem] md:bottom-[4rem] lg:bottom-[6rem] xl:bottom-[10rem] left-1/2 -translate-x-1/2 transition-all duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 px-4 py-2">
                    PLAY
                </a>
            </div>
        </section>

        <!-- CONCEPT -->
        <section id="concept" class="flex flex-col justify-center items-center max-w-5xl min-h-screen mx-auto px-4">
            <?= getHeading("concept", "Concept") ?>
            <p class="leading-7 [&:not(:first-child)]:mt-6">
                Play as a wizard with special powers, lost in a mysterious forest...
            </p>
            <p class="leading-7 [&:not(:first-child)]:mt-6">
                Clone of Wizard is a platform game in which you must complete
                40 levels. Each level is unique with increasing difficulty. In order to complete them,
                you will be given several powers during the game:
            </p>
            <ul class="ml-6 list-disc [&>li]:mt-2">
                <li>
                    the ability to create a motionless clone of your wizard
                    <img class="inline w-10" src="./assets/images/items/clone.png" />
                    , which will allow you to clear the way by making a pillar disappear,
                </li>
                <li>
                    a gem <img class="inline w-10" src="./assets/images/items/gemstone.png" />
                    that, once taken, will reduce weightlessness for a period of 6 seconds,
                </li>
                <li>
                    an extra life <img class="inline w-10" src="./assets/images/items/heart.png" />
                    , allowing you to come back to life when you fail a level (single use),
                </li>
                <li>
                    and finally a fireball spell <img class="inline w-10" src="./assets/images/items/fireball.png" />
                    , which once cast, will clear the way of any obstructive pieces of earth.
                </li>
            </ul>

            <p class="leading-7 [&:not(:first-child)]:mt-6">
                Once you have completed the last level, your total time for completing all 40 levels will be
                displayed (I challenge you to beat my record of 6 minutes and 28 seconds).
            </p>
            <p class="leading-7 [&:not(:first-child)]:mt-6">
                Two game modes are available: you can try to achieve your best time in normal mode, or create
                your own level in the map editor to test it out.
            </p>
            <p class="leading-7 [&:not(:first-child)]:mt-6">Have fun 😁</p>
        </section>

        <!-- SCREENSHOTS -->
        <section id="screenshots" class="flex flex-col justify-center items-center max-w-5xl min-h-screen mx-auto px-4">
            <?= getHeading("screenshots", "Screenshots") ?>
            <!-- Slider container -->
            <div class="relative overflow-hidden rounded-lg shadow-md">
                <!-- Wrapper -->
                <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                    <img src="../assets/images/screenshots/screenshot-1.jpg" class="w-full flex-shrink-0" />
                    <img src="../assets/images/screenshots/screenshot-2.jpg" class="w-full flex-shrink-0" />
                    <img src="../assets/images/screenshots/screenshot-3.jpg" class="w-full flex-shrink-0" />
                    <img src="../assets/images/screenshots/screenshot-4.jpg" class="w-full flex-shrink-0" />
                    <img src="../assets/images/screenshots/screenshot-5.jpg" class="w-full flex-shrink-0" />
                </div>
            </div>
            <!-- Controls -->
            <div class="relative flex justify-center items-center gap-x-4 w-full mt-4">
                <button id="prev" class="transition-all duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 cursor-pointer w-[2rem] h-[2rem]">
                    ‹
                </button>
                <!-- Dots navigation -->
                <div id="dots" class="flex justify-center space-x-2"></div>
                <button id="next" class="transition-all duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 cursor-pointer w-[2rem] h-[2rem]">
                    ›
                </button>
            </div>
        </section>

        <!-- SPRITES -->
        <section id="sprites" class="flex flex-col justify-center items-center max-w-5xl min-h-screen mx-auto px-4">
            <?= getHeading("sprites", "Sprites") ?>
            <img class="rounded-lg shadow-md" src="./assets/images/sprites/sprite-presentation.png" />
        </section>
    </div>

    <?= getFooter() ?>
    <script src="./js/website.js" async></script>
</body>

</html>