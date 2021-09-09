<?php 
// function register_post_types(){
// }
use WPC\base ;

    



function add_libros() {


    $labels = [
		'name'                =>  'Libros',
		'singular_name'       =>  'Libro',
		'menu_name'           =>  'Libros',
		'add_new'			  =>   'Agregar Libro'
	];
	$args = [
			'label'               =>  'Libros',
			'description'         =>  'Biblioteca de Libros',
			'labels'              => $labels,
			'public'              => true,
			'hierarchical'        => true,
			'show_ui'			  => true,
			'show_in_menu'        => true,
			'menu_position'		  => 10,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'supports'			  => ['title', 'thumbnail'],
			'has_archive'         => true,
			'taxonomies' 	      => [ 'categorias' ],
			'publicly_queryable'  => true,
            'capability_type'       => 'post',
			'menu_icon'   => 'dashicons-text-page',
			'rewrite' => [
				'slug' => 'libros'
			]
	];
	
	register_post_type( 'libros_post', $args );

	$tax_labels = array(
		'name' => 'categorias',
		'singular_name' => 'categoria',
		'menu_name' => 'Categorias'
	); 

	// Now register the non-hierarchical taxonomy like tag

	register_taxonomy('categorias', 'libros_post',
	  	array('hierarchical' => false,
			'labels' => $tax_labels,
			'show_ui' => true,
			'show_in_quick_edit' => false,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'rewrite' => array( 'slug' => 'categoria' ),
	));
	//initialize_terms();
}

add_action( 'init', 'add_libros' );


?>