<?php

/*
Plugin Name: Hello oClock
Plugin URI: https://oclock.io
Description: Un plugin pour afficher la date et heure dans le footer de votre site...
Author: Marion H
Version: 1.0
Author URI: https://oclock.io
*/

if (!defined('WPINC')) {
    die();
}

function say_helloclock() {
    date_default_timezone_set('Europe/Paris');
    $date = date('d/m/Y');
    $heure = date('H:i:s');
    echo '<p class="helloclock"> Hello ! Nous sommes le ' . $date . ', il est déjà ' . $heure . '.</p>';
}

function style_helloclock() {
    echo '<style type="text/css">
            .helloclock {
                text-align: center;
                padding: 1em;
                color: white;
                background-color: black;
            }
        </style>';
}

add_action('wp_footer', 'say_helloclock');
add_action('wp_head', 'style_helloclock');

function helloclock_activate() {
    // activation du plugin
}

function helloclock_deactivate() {
    // désactivation du plugin
}

// Activation du plugin
register_activation_hook(__FILE__, 'helloclock_activate');

// Désactivation du plugin
register_deactivation_hook(__FILE__, 'helloclock_deactivate');