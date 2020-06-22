<?php 

if (!function_exists('oprofile_enqueue')) {

    function oprofile_enqueue() {

        wp_enqueue_style(
            'main-style',
            get_theme_file_uri('public/css/style.css'),
            [],
            '20200622'
        );
        wp_enqueue_script(
            'app',
            get_theme_file_uri('public/js/app.js'),
            [],
            '20200622',
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'oprofile_enqueue' );

if (!function_exists('oprofile_setup')) {

    function oprofile_setup() {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'main-menu' => 'Menu burger de navigation'
        ]);

    }
}

add_action('after_setup_theme', 'oprofile_setup');

add_action('after-set-up-theme', 'oprofile_setup');