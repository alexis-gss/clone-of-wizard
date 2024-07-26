<?php
if (!function_exists('getHeading')) {
    /**
     * @param string $id    Anchor identification.
     * @param string $text  Title content.
     * @param int    $level Title level.
     */
    function getHeading($id, $text, $level = 4)
    {
        $tag = "h" . intval($level);

        $html  = '<' . $tag . ' id="' . htmlspecialchars($id) . '" class="group relative flex items-center justify-center gap-2 text-2xl font-bold mb-6 scroll-mt-24">';
        $html .= '<span>' . htmlspecialchars($text) . '</span>';
        $html .= '<button type="button" anchor="' . htmlspecialchars($id) . '"
                    class="cursor-pointer text-gray-400 rounded-md transition-colors duration-200 hover:text-[var(--color1)] focus:text-[var(--color1)] focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 focus:ring-offset-[var(--color4)]"
                    aria-label="Copy link to this section"
                    title="Copy link to this section">
                    #
                  </button>';
        $html .= '</' . $tag . '>';

        return $html;
    }
}
