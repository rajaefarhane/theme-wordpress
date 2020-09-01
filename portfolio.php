
<?php
add_action('init','register_portfolio');
function register_portfolio() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
  		'name'                => _x( 'Books', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Books', 'Post Type Singular Name'),
    	'add_new'             => __( 'Add New','Books'),
      'add_new_item'        => __( 'Add New Books'),
      'edit_item'           => __( 'Edit Book'),
      'new_item'             =>__( 'New Book'),
      'view_item'           => __( 'View Book'),
      	'search_items'        => __( 'search Books' ),
        'not_found'           => __( 'No Books found'),
        	'not_found_in_trash'  => __( 'No books found in Trash'),
              	'parent_item_colon'  => __,
          	'parent_item_colon'  =>null,
         'menu_name'           =>'Books'

	);

	// On peut définir ici d'autres options pour notre custom post type

	$args = array(
		'label'               =>$labels,
    	'public'              => true,
      'publicly_queryable'=>true,
      	'show_ui' => true,
        	'show_in_menu' => true,
          	'query_var' => true,
            'rewrite'=>true,
            'capability_type'=>'post',
            'has-archive'=>true,
            'hierarchical'=>false,
            'menu_position'=>null,
            'support'=>array('title','editor','author','thumbnail','excerpt','comments')

	);

	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'book', $args );

}
