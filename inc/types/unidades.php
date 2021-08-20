<?php
namespace WPC;


class Unidades_post extends BaseType{
	function __construct(){
        // regstramos elemento
        $labels = array(
            'name'                => 'Unidades',
            'singular_name'       => 'unidad',
            'menu_name'           => 'Unidades',
            'all_items'           => 'Todas las unidades',
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', ),
            'taxonomies'          => array( 'asignaturas' ),
            'public'              => true
        );
        register_post_type( 'unidades', $args );
        
        // registramos taxonomias
        $args = array(
            'labels'        => array(
                'name'          => 'Asignaturas',
                'singular_name' => 'Asignatura',
                ),
            'show_admin_column' => true,
            'hierarchical'  => true,
            'public'        => true,
        );
        register_taxonomy( 'asignaturas_unidades', array( 'unidades' ), $args );


        $args = array(
            'labels'        => array(
                'name'          => 'Secciones',
                'singular_name' => 'Seccion',
                ),
            'show_admin_column' => true,
            'hierarchical'  => true,
            'public'        => true,
        );
        register_taxonomy( 'secciones_unidades', array( 'unidades' ), $args );
    }
}

