<?php
namespace WPC;


class Cursos_padre_type extends BaseType{
	function __construct(){


		$extra_args = array('labels'    => array('menu_name' => 'Curso Nivel'),
							'menu_icon' => 'dashicons-groups',
							'rewrite'   => array('slug' => 'nivel'));

		parent::register_page_type('Curso Nivel',
								   'Curso Nivel',
								   $extra_args,
								   'page_curso_nivel');

	
	}
}

?>