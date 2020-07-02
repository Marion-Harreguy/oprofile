<?php 

/*
Plugin Name: oRedirectTo
Plugin URI: https://oclock.io
Description: Un plugin de redirection automatique
Author: Marion H
Version: 1.0
Author URI: https://oclock.io
*/

if (!defined('WPINC')) {
    die();
}

function o_redirect() {
    // Si je m'apprête à afficher un contenu de type
    // article ou page
    // https://developer.wordpress.org/reference/functions/is_single/
    // https://developer.wordpress.org/reference/functions/is_page/
    if (is_single() || is_page()) {
        // On récupère notre custom field
        // https://developer.wordpress.org/reference/functions/get_post_meta/
         // https://developer.wordpress.org/reference/functions/get_the_id/
         $customfield = get_post_meta(get_the_ID(), 'oredirection', true);
        // echo '<pre style="color:black;">';
        // var_dump($cf);
        // echo '</pre>';

        // vérifier que $customfield ne soit pas vide
        // il y a donc une redirection à effectuer
        if(!empty($customfield)) {
            // redirection vers l'URL renseignée
            // https://developer.wordpress.org/reference/functions/wp_redirect/
            // https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP

            // Si ACF "Lien vers page ou article"
            // Transformer l'id en URL

            $customfield = get_permalink($customfield);
            wp_redirect($customfield, 301);
            exit;
        }
    }
}

add_action('template_redirect', 'o_redirect');