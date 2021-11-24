<?php

/**
 * Fonction permettant d'afficher les extraits des articles de la home
 *
 */
function the_homepage_categories()
{

    $homepage_posts_query = new WP_Query(
        [
            'category_name' => 'homepage', // articles dans la catégorie homepage
            'posts_per_page' => 3 // nombre de post à récupérer
        ]
    );

    if ($homepage_posts_query->have_posts()) : while ($homepage_posts_query->have_posts()) : $homepage_posts_query->the_post();

            get_template_part('template-parts/post-excerpt');

        endwhile;
    endif;
}


function alter_order_of_posts( $query ) {
    if ( $query->is_main_query() ) {
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'alter_order_of_posts' );
