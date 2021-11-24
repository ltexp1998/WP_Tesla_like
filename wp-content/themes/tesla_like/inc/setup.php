<?php

// fonction qui me permet de "setuper" mon thème
function tesla_like_theme_setup() {
    // typiquement, on met là dedans des fonctions add_theme_support

    // on délègue à WordPress la gestion de la balise <title>
    add_theme_support('title-tag');

    // on "active" les images mises en avant
    add_theme_support('post-thumbnails');

}

// on greffe la fonction sur un hook
add_action('after_setup_theme', 'tesla_like_theme_setup');
