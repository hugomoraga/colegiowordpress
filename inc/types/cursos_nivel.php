<?php 
// function register_post_types(){
// }
use WPC\base ;

    



function add_cursos_nivel() {


    $labels = [
		'name'                =>  'Curso Nivel',
		'singular_name'       =>  'Curso Nivel',
		'menu_name'           =>  'Cursos Nivel'
	];
	$args = [
			'label'               =>  'Curso Nivel',
			'description'         =>  'Curso Nivel',
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
				'slug' => 'cursos/curso'
			]
	];
	
	register_post_type( 'curso_nivel', $args );

}

?>