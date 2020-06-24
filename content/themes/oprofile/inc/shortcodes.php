<?php

// Test with shortcodes
function pink_my_word($atts) {

    $param = shortcode_atts([
        'texte' => 'my word'
    ], $atts);

    return '<h1 style="font-size: 1.7em; color: #F0F;">'. $param['texte'] . '</h1>';
}

add_shortcode('word', 'pink_my_word');

function message($atts, $content=null) {

    return '<p style="font-weight=:bold; color:lime">' . $content . '</p>';
}

add_shortcode( 'message', 'message');