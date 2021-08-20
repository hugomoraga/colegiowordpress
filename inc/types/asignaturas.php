<?php 
// function register_post_types(){
// }
use WPC\base ;

    



function add_asignaturas() {


    $labels = [
		'name'                =>  'Asignaturas',
		'singular_name'       =>  'Asignatura',
		'menu_name'           =>  'Asignaturas'
	];
	$args = [
			'label'               =>  'Asignatura',
			'description'         =>  'Asignaturas del Curso',
			'labels'              => $labels,
			'public'              => true,
			'hierarchical'        => true,
			'show_ui'			  => true,
			'show_in_menu'        => true,
			'menu_position'		  => 10,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'supports'			  => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
			'has_archive'         => true,
			'taxonomies' 	      => [ 'asignaturas' ],
			'publicly_queryable'  => true,
            'capability_type'       => 'page',
			'menu_icon'   => 'dashicons-text-page',
			'rewrite' => [
				'slug' => 'cursos'
			]
	];
	
	register_post_type( 'page_asignaturas', $args );

	$tax_labels = array(
		'name' => 'nivel',
		'singular_name' => 'Nivel',
		'menu_name' => 'Niveles'
	); 

	// Now register the non-hierarchical taxonomy like tag

	register_taxonomy('nivel', 'page_asignaturas',
	  	array('hierarchical' => false,
			'labels' => $tax_labels,
			'show_ui' => true,
			'show_in_quick_edit' => false,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'rewrite' => array( 'slug' => 'asignaturas/nivel' ),
	));
	//initialize_terms();

	$cat_labels = array(
		'name' => 'asignatura',
		'singular_name' => 'Asignatura',
		'menu_name' => 'Categoria de la Asignatura'
	); 

	// Now register the non-hierarchical taxonomy like tag

	register_taxonomy('asignaturas', 'page_asignaturas',
	  	array('hierarchical' => false,
			'labels'         => $cat_labels,
			'show_ui'        => true,
			'show_in_rest'   => true,
			'show_admin_column' => true,
			'capability_type'=> 'page',
			'rewrite'        => array( 'slug' => 'asignaturas' ),
	));
}

add_action( 'init', 'add_asignaturas' );


?>