<?php
//add_theme_support('title-tag');

function montheme_supports() {
  add_theme_support('title-tag');
}

    // Chargement des styles et des scripts Bootstrap sur WordPress
    function test_register_assets() {
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [ 'popper'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap');

    }

    add_action('wp_enqueue_scripts', 'test_register_assets');
    add_action('wp_enqueue_scripts', 'test_register_assets');




function montheme_document_title_parts($title) {
  unset($title['tagline']);
  return $title;
}
// On ajoute une sidebar


function register_my_menu() {
register_nav_menu('header-menu',__( 'Header Menu' ));
}


//menu portfolio
//ajouter une nouvelle zone de menu à mon thème
function register_my_menup() {
  register_nav_menu('portfolio-menu',__( 'Menu portfolio' ));
}
add_action( 'init', 'register_my_menup' );


function themename_custom_header_setup() {
$args = array(
'default-image' => get_template_directory_uri() . '/screenshot.png',
'width' => 2000,
'height' => 500,
'flex-width' => true,
'flex-height' => true,
);
add_theme_support( 'custom-header', $args );
}


add_action( 'after_setup_theme', 'themename_custom_header_setup' );

add_action( 'init', 'register_my_menu' );
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'test_register_assets');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_theme_support('post-thumbnails');
register_sidebar( array(
'id' => 'home-sidebar',
'name' => 'Home page',
) );



//pour afficher portfolio
function capitaine_register_post_types() {

    // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Réalisation',
        'add_new_item' => 'Ajouter Réalisation',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'hierarchical'=>false,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 6,
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'capitaine_register_post_types' ); // Le hook init lance la fonction

?>
