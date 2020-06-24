<?php

if(!function_exists('oprofile_customize_register')) {

    function oprofile_customize_register($wp_customize) {

        // étape 1: ajout d'un panel
        $wp_customize->add_panel(
            // identifiant unique du panel
            'oprofile_theme_panel',
            [
                // emplacement dans le customizer
                'priority' => 1,
                'title' => 'oProfile',
                'description' => 'oProfile - gestion du thème'
            ]
        );

        // étape 2: ajout d'une section de notre panel
        $wp_customize->add_section(
            // identifiant unique du panel
            'oprofile_home',
            [
                'title' => 'Accueil',
                'description' => 'oProfile - gestion de la page Accueil',
                // identifiant du panel dans lequel placer la section
                'panel' => 'oprofile_theme_panel'
            ]
        );

        $wp_customize->add_section(
            // identifiant unique du panel
            'oprofile_footer',
            [
                'title' => 'Footer',
                'description' => 'oProfile - gestion du Footer',
                // identifiant du panel dans lequel placer la section
                'panel' => 'oprofile_theme_panel'
            ]
        );

        // étape 3: ajout d'un setting et control
        // - créer le setting
        $wp_customize->add_setting(
            'oprofile_posts_count',
            [
                'default' => 6,
            ]
        ); 

        // - ajouter le control
        $wp_customize->add_control(
            'oprofile_posts_count',
            [
                //le type d'input
                'type' => 'number',
                'input_attrs' => [
                    'min' => 2,
                    'max' => 10,
                    'step' =>2
                ],
                // la section sur laquelle est rattachée le control
                'section' => 'oprofile_home',
                // label affiché dans l'UI
                'label' => 'Nombre d\'articles',
                'description' => 'Nombre d\'articles affiché sur la page d\'accueil'
            ]
        );

        $wp_customize->add_setting(
            'oprofile_footer_email',
            [
                'default' => 'marion@oprofile.io',
            ]
        ); 

        $wp_customize->add_control(
            'oprofile_footer_email',
            [
                //le type d'input
                'type' => 'email',
                // la section sur laquelle est rattachée le control
                'section' => 'oprofile_footer',
                // label affiché dans l'UI
                'label' => 'Adresse email',
                'description' => 'Adresse email affichée dans le footer'
            ]
        );

        $wp_customize->add_setting(
            'oprofile_footer_phone',
            [
                'default' => '06 06 06 06 06',
            ]
        ); 

        $wp_customize->add_control(
            'oprofile_footer_phone',
            [
                //le type d'input
                'type' => 'text',
                // la section sur laquelle est rattachée le control
                'section' => 'oprofile_footer',
                // label affiché dans l'UI
                'label' => 'Téléphone',
                'description' => 'Téléphone affiché dans le footer'
            ]
        );

        $wp_customize->add_setting(
            'oprofile_footer_adress',
            [
                'default' => '1 rue du canard 64500 Pays-Basque',
            ]
        ); 

        $wp_customize->add_control(
            'oprofile_footer_adress',
            [
                //le type d'input
                'type' => 'textarea',
                // la section sur laquelle est rattachée le control
                'section' => 'oprofile_footer',
                // label affiché dans l'UI
                'label' => 'Adresse',
                'description' => 'Adresse affichée dans le footer'
            ]
        );
    }
}

add_action('customize_register', 'oprofile_customize_register');