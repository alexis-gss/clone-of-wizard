<?php
if (!function_exists('getFooter')) {
    function getFooter($simple = false)
    {
        $currentYear = getdate(date("U"))['year'];
        $credits = "<p>Alexis Gousseau — © 2022 - $currentYear — Currently v1.1.1</p>";

        if ($simple) {
            return "<footer id='footer-simple' class='container border-gray-700 pt-6 text-center text-sm text-gray-500'>
                $credits
            </footer>";
        }
        $quickLinksArray = [
            [
                "link" => "https://clone-of-wizard.alexis-gousseau.com",
                "label" => "Home",
                "tooltip" => "Access the project's home page",
            ],
            [
                "link" => "https://clone-of-wizard.alexis-gousseau.com/game.php",
                "label" => "Game",
                "tooltip" => "Access the project's game page",
            ],
            [
                "link" => "https://clone-of-wizard.alexis-gousseau.com/editor.php",
                "label" => "Editor",
                "tooltip" => "Access the project's editor page",
            ],
        ];
        $aboutArray = [
            [
                "link" => "https://doc-clone-of-wizard.alexis-gousseau.com",
                "label" => "Documentation",
                "tooltip" => "Access the project's official documentation",
            ],
            [
                "link" => "https://github.com/alexis-gss/clone-of-wizard",
                "label" => "GitHub Repository",
                "tooltip" => "Access the project's official GitHub repository",
            ],
        ];

        $html = "<footer id='footer' class='relative w-full bg-gray-900 text-gray-300 py-12 px-6'>
            <div class='max-w-6xl mx-auto grid gap-10 md:gap-16 text-center md:text-left'>
                <!-- Branding -->
                <div>
                    <h2 class='text-3xl font-bold text-white mb-3'>Clone of Wizard</h2>
                    <p class='max-w-2xl mx-auto md:mx-0 text-gray-400 leading-relaxed'>
                        Designed and built by <a href='https://alexis-gousseau.com' class='text-white font-semibold rounded-md transition-colors duration-200 hover:underline hover:underline-offset-2 focus:underline focus:underline focus:underline-offset-2 focus:underline focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 focus:ring-offset-[var(--color4)]' target='_blank'>Alexis Gousseau</a>. Clone of Wizard is a platformer game with a map editor, realized with vanilla JavaScript.
                    </p>
                </div>
                <!-- Links -->
                <div class='grid grid-cols-1 md:grid-cols-2 gap-10'>
                    <!-- Quick Links -->
                    <div>
                        <h3 class='text-xl font-semibold text-white mb-4'>Quick Links</h3>
                        <ul class='space-y-2'>";
        foreach ($quickLinksArray as $value) {
            $link = $value['link'];
            $tooltip = $value['tooltip'];
            $label = $value['label'];
            $html .=  "<li>
                            <a href='$link'
                                target='_blank'
                                title='$tooltip'
                                class='rounded-md transition-colors duration-200 hover:underline hover:underline-offset-2 focus:underline focus:underline focus:underline-offset-2 focus:underline focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 focus:ring-offset-[var(--color4)]'>
                                $label
                            </a>
                        </li>";
        }
        $html .= "</ul>
                    </div>
                    <!-- About -->
                    <div>
                        <h3 class='text-xl font-semibold text-white mb-4'>About</h3>
                        <ul class='space-y-2'>";
        foreach ($aboutArray as $value) {
            $link = $value['link'];
            $tooltip = $value['tooltip'];
            $label = $value['label'];
            $html .= "<li>
                        <a href='$link'
                            target='_blank'
                            title='$tooltip'
                            class='rounded-md transition-colors duration-200 hover:underline hover:underline-offset-2 focus:underline focus:underline focus:underline-offset-2 focus:underline focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 focus:ring-offset-[var(--color4)]'>
                            $label
                        </a>
                    </li>";
        }
        $html .= "</ul>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class='border-t border-gray-700 pt-6 text-center text-sm text-gray-500'>
                    $credits
                </div>
            </div>
        </footer>";

        return $html;
    }
}