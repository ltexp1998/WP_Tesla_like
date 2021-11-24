<?php

// on déclare un fonction qui va gérer le chargement des fichiers css et js
function tesla_like_theme_enqueue_scripts() {

    // cette fonction va s'occuper de générer et d'insérer une balise <link> qui chage une feuille de style
    wp_enqueue_style(
        'tesla_like-style', // nom du style
        get_theme_file_uri('./assets/css/style.css'), // url du fichier
        [], // dépendances (on en a pas, on gère tout avec Parcel)
        '20211123' // version
    );

    wp_enqueue_script(
        'tesla_like-script', // nom du script
        get_theme_file_uri('./assets/js/index.js'), // url du fichier
        [], // dépendances (on en a pas, on gère tout avec Parcel)
        '20211123', // version
        true // permet de charger le js avant la fermeture du body
    );

}

// on accroche la fonction tesla_like_theme_enqueue_scripts sur le hook wp_enqueue_scripts
// on peu éventuellement jouer sur la priorité (ordre d'execution des fonctions au sein d'un hook)
add_action( 'wp_enqueue_scripts', 'tesla_like_theme_enqueue_scripts', 20);
