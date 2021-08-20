<?php
require get_template_directory() .'/inc/admin/superadmin/controller.php';
// espacio de personalizacion de menus de sistema

function custom_admin_menu(){
	//eliminamos el menus de entradas que no se usa
	// remove_menu_page('edit.php'); //post
	// remove_menu_page('edit.php?post_type=page' );    //Pages
	// remove_menu_page('edit-comments.php' );    //tools
	// remove_menu_page('plugins.php' );    //plugins
	// remove_menu_page('themes.php' );    //thems
	// remove_menu_page('tools.php' );    //tools

	// agregamos los menus de administracion general y otros
	
	// add_menu_page( 'Custom Menu Page Title', 'Custom Menu Page', 'manage_options', 'custom.php', '', 'dashicons-welcome-widgets-menus', 90 );

	add_menu_page('administración', 'Administracion',
				  'administrator', 'admin_daemelquisco',
				  'render_super_admin', 'dashicons-welcome-widgets-menus', 10);
	
	
}

add_action('admin_menu', 'custom_admin_menu');


// function edit_default_roles(){
// 	$wp_roles = new WP_Roles();
// 	$wp_roles->remove_role("subscriber");
// 	$wp_roles->remove_role("author");
// 	$wp_roles->remove_role("contributor");
// 	$wp_roles->remove_role("editor");
// }
// add_action( 'init', 'edit_default_roles' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
		height:65px;
		width:320px;
		background-size: 320px;
		background-repeat: no-repeat;
        padding: 5px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>