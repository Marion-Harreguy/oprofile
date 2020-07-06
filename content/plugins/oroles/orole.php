<?php

/*
Plugin Name: oRoles
Description: Plugin permettant de gérer de nouveaux rôles utilisateurs.
Author: Marion H.
Version: 1.0
*/

// On sécurise le plugin
if (!defined('WPINC')) { die; }

class oRoles
{
    public function __construct()
    {
        add_action('init', [$this, 'oroles_add_role']);
        add_action('init', [$this, 'oroles_add_cap']);
    }

    public function oroles_add_role()
    {
        add_role(
            'oclockien',
            'oClockien',
            [
                'read' => true
            ]
        );
    }

    public function oroles_remove_role()
    {
        if (get_role('oclockien')) {
            remove_role('oclockien');
        }
    }

    public function oroles_add_cap()
    {
        $role = get_role('oclockien');

        $role->add_cap('create_posts');
        $role->add_cap('edit_posts');
    }

    public function oroles_activate()
    {
        $this->oroles_add_role();
    }

    public function oroles_deactivate()
    {
        $this->oroles_remove_role();
    }
}

$oroles = new oRoles();

// A l'activation du plugin
register_activation_hook(__FILE__, [$oroles, 'oroles_activate']);

// A la désactivation du plugin
register_deactivation_hook(__FILE__, [$oroles, 'oroles_deactivate']);