<?php
namespace WPC;


class Liceo_1_type extends BaseType{
	function __construct(){
		parent::register_page_type('Liceo 1', 'Liceo 1');	

		register_nav_menu('nav_liceo_1', 'Menu Liceo');
	}
}

?>