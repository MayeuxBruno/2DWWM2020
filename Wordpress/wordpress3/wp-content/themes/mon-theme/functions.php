<?php 
   
// Menu de navigation spécial
register_nav_menus(array(
    'spécial' => __('Menu spécial','mon-theme')
));




add_theme_support('custom-logo'); //Gestion de l'affichage du logo

//Gestion des images mises en avant
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

//Gestion des résumés
function new_excerpt_length($length) {
    global $post;
    return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changer le lien read more
function new_excerpt_more($more) {
    global $post;
    return '… <div><a href="'. get_permalink($post->ID) . '"><div class="readMore">' . 'Read more' . '</div></a><div></div></div>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');
?>