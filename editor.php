<?php
include "./partials/head.php";
include "./partials/footer.php";
?>

<!DOCTYPE html>
<html lang="en">

<?= getHead(
    "Map editor",
    "Editor map of the platformer game named Clone of Wizard.",
    "./css/editor.css",
) ?>

<body>
    <section class="flex flex-col justify-center items-center relative">
        <div class="flex justify-evenly items-center w-full">
            <a class="btn-menu transition-colors duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 px-4 py-2" href="./game.php">MENU</a>
            <button class="btn-reset cursor-pointer transition-colors duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 px-4 py-2">DELETE EDITED MAP</button>
            <a class="btn-tester transition-colors duration-200 rounded-md text-[var(--color2)] bg-[var(--color1)] hover:text-[var(--color1)] hover:bg-[var(--color3)] focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 px-4 py-2" href="./game.php">TEST</a>
        </div>
        <canvas class="my-6"></canvas>
        <div class="content">
            <div class="contentSelectionneur">
                <p class="mb-2">SELECT A BLOCK :</p>
                <div class="menu">
                    <div class="selecteur selecteurSprite"></div>
                    <img class="imgSprite cursor-pointer select-none" src="./assets/images/sprites/editor-sprites.png" />
                </div>
                <textarea class="resTable resTableSprite" cols="31" rows="10">
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
                </textarea>
            </div>
            <div class="contentSelectionneur">
                <p class="mb-2">ADD A COLLISION ?</p>
                <div class="menu">
                    <div class="selecteur selecteurColl"></div>
                    <img class="imgColl cursor-pointer select-none" src="./assets/images/sprites/editor-collisions.png" />
                </div>
                <textarea class="resTable resTableColl" cols="31" rows="10">
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
                </textarea>
            </div>
        </div>
    </section>
    <?= getFooter(true) ?>
    <script src="./js/editor.js" async></script>
</body>

</html>