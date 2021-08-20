<?php

namespace WPC;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

/*
 * Des: esta clase es solo un ayudante para generar elementos,
 * la idea esque toda cosa que se quiera hacer y se pueda hacer y
 * se haga repetitiva, se puede hacer una funcion generica que resuelva
 * el caso concreto a traves de parametros 
 */

class BaseType {
	
	protected $post_name = NULL;

    public  function menu_name($menu_name){
        return $menu_name;
    }
	
	/**
	 *	params:
	 *		$singular_name: nombre en sigular si esque corresponde
	 *		$plural_name: nombre en plural si corresponde
	 *		$extra_args: diccionario con valores para remplazar los valores por defecto de args.
	 *		             por ejemplo sirve para remplazar el menu name
	 */
    public function register_page_type($singular_name, $plural_name,
									   $extra_args=array(), $page_name=NULL){
		$page_name = (!$page_name) ? 'page_' . $plural_name: $page_name;
		
		$args = array(
				'label'               =>  $plural_name,
				'description'         =>  'Páginas ' . $plural_name,
				'labels'              => [
					'name'                =>  $plural_name,
					'singular_name'       =>  $plural_name,
					'menu_name'           =>  ucwords($singular_name),
					'parent_item_colon'   =>  'Grupo',
					'view_item'           =>  'Ver ' . $singular_name,
					'add_new_item'        =>  'Agregar página',
					'add_new'             =>  'Agregar página',
					'edit_item'           =>  'Editar página ' . $singular_name,
					'update_item'         =>  'Actualizar página',
					'search_items'        =>  'Buscar página ' . $singular_name,
					'not_found'           =>  'No se ha encontrado la página de ' . $singular_name,

										],
				'public'             => true,
				'hierarchical'       => true,
				'show_ui'			 => true,
				'show_in_menu'       => true,
				'show_in_nav_menus'  => true,
				'show_in_admin_bar'  => true,
				'supports'			 => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes'],
				'has_archive'        => true,
				'publicly_queryable' => true,
				'capability_type'    => 'page',
				'menu_icon'          => 'dashicons-groups',
				'rewrite'            => ['slug' => strtolower($plural_name)]
		);
		
		if (count($extra_args)){
			$args = array_replace_recursive($args, $extra_args);
			if (array_key_exists('supports', $extra_args))
				$args['supports'] = $extra_args['supports'];
		}

		$post_type = register_post_type( $page_name, $args );
		$this->post_name = $post_type->name;
		// if soy super admin

		return $post_type;

    }
	


	// aca abajo esta la pata
	
}
