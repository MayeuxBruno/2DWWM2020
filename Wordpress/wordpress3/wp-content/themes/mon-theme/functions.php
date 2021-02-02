<?php //register_nav_menus( array('menu-principal' => 'Menu principal') ); 
//ajouter une nouvelle zone de menu à mon thème
// s'il y a plusieurs menus à rajouter, voici le code :
function register_my_menus() {
    register_nav_menus(
    array(
    'private-menu' => __( 'Menu Privé' ),
    'footer-menu' => __( 'Menu Footer' ),
    )
    );
   }
   add_action( 'init', 'register_my_menus' );
   
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