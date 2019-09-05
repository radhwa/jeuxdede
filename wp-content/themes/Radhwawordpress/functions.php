<?php
// Déclarer style.css à la racine du thème
    wp_enqueue_style(
        'food_style',
        get_template_directory_uri() . '/style.css',
        true
    );

?>