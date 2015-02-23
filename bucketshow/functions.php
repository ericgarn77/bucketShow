<?php 
	define('WP_DEBUG', true);
	define('TEMPPATH', get_bloginfo('stylesheet_directory'));
	define ('IMAGES', TEMPPATH."/img");
	define('WPLANG', 'fr_FR');
	define('DB_CHARSET', 'utf8');
	
	define('WOOCOMMERCE_USE_CSS', true);

	
	//Supporte les Thumbnails(image à la une)
	post_type_supports( $post_type, $supports ); 
	
	//Ajout du support pour les menus
	add_theme_support("nav-menus");
	
	if(function_exists('register_nav_menus')){
		register_nav_menus(
			array(
				'main_nav'=>'Navigation principale'
		));
	}
	

	
	
	
?>