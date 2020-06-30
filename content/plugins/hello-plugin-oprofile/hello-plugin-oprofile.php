<?php

/*
Plugin Name: Hello World oProfile
Plugin URI: https://oclock.io
Description: Un premier plugin...
Author: Marion H
Version: 1.0
Author URI: https://oclock.io
*/

if (!defined('WPINC')) {
    die();
}

function say_hello() {
    echo '<p style="padding:3em;color:black;">Coucou les amis !</p>';
}

add_action('hookie', 'say_hello');