<?php
if (!function_exists('getHead')) {
    /**
     * @param string $title       Title of the page.
     * @param string $description Description of the page.
     * @param string $cssPath     Path of the css file.
     */
    function getHead($title, $description, $cssPath)
    {
        $url = $_SERVER['REQUEST_URI'];
        return "<head>
            <title>$title - Clone of Wizard</title>

            <!-- Meta -->
            <meta charset='utf-8' />
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
            <meta http-equiv='X-UA-Compatible' content='ie=edge' />
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <meta name='description' content='$description'>
            <meta name='robots' content='index,follow'>

            <!-- Open Graph -->
            <meta property='og:title' content='$title - Clone of Wizard' />
            <meta property='og:type' content='website' />
            <meta property='og:url' content='https://clone-of-wizard.alexis-gousseau.com' />
            <meta property='og:site_name' content='Clone of Wizard' />
            <meta property='og:image' content='./assets/images/items/gemstone.png' />
            <meta property='og:description' content='$description' />

            <!-- Favicon -->
            <link rel='icon' type='image/png' sizes='36x36' href='./android-icon-36x36.png'>
            <link rel='icon' type='image/png' sizes='48x48' href='./android-icon-48x48.png'>
            <link rel='icon' type='image/png' sizes='72x72' href='./android-icon-72x72.png'>
            <link rel='icon' type='image/png' sizes='96x96' href='./android-icon-96x96.png'>
            <link rel='icon' type='image/png' sizes='144x144' href='./android-icon-144x144.png'>
            <link rel='icon' type='image/png' sizes='192x192' href='./android-icon-192x192.png'>
            <link rel='apple-touch-icon' sizes='57x57' href='./apple-icon-57x57.png'>
            <link rel='apple-touch-icon' sizes='60x60' href='./apple-icon-60x60.png'>
            <link rel='apple-touch-icon' sizes='72x72' href='./apple-icon-72x72.png'>
            <link rel='apple-touch-icon' sizes='76x76' href='./apple-icon-76x76.png'>
            <link rel='apple-touch-icon' sizes='114x114' href='./apple-icon-114x114'>
            <link rel='apple-touch-icon' sizes='120x120' href='./apple-icon-120x120'>
            <link rel='apple-touch-icon' sizes='144x144' href='./apple-icon-144x144'>
            <link rel='apple-touch-icon' sizes='152x152' href='./apple-icon-152x152'>
            <link rel='apple-touch-icon' sizes='180x180' href='./apple-icon-180x180'>
            <link rel='icon' href='./favicon.ico'>
            <link rel='icon' type='image/png' sizes='16x16' href='./favicon-16x16.png'>
            <link rel='icon' type='image/png' sizes='32x32' href='./favicon-32x32.png'>
            <link rel='icon' type='image/png' sizes='96x96' href='./favicon-96x96.png'>
            <link rel='manifest' href='./manifest'>
            <meta name='msapplication-TileColor' content='#416bc7'>
            <meta name='msapplication-TileImage' content='./mstile-144x144.png'>
            <meta name='theme-color' content='#0e1f36'>

            <!-- Others -->
            <link href='$url' rel='canonical' />
            <link rel='stylesheet' href='./css/layout.css' />
            <link rel='stylesheet' href='$cssPath' />
            <script src='https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4'></script>
        </head>";
    }
}