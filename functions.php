<?php

require get_theme_file_path('/includes/projectinformation-route.php');

add_action('rest_api_init','claustra_custom_rest');


//onderstaande function is een test, in theme worden geen posts gebruikt
function claustra_custom_rest(){
	register_rest_field('post','authorName',array(
		'get_callback'=>function (){return get_the_author();}
	));

}

function claustra_files() {
		wp_enqueue_script('claustra-main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL,'1.0',true);
		wp_enqueue_style('claustra_main_stylesheet', get_stylesheet_uri());
		wp_localize_script('claustra-main-js','claustraData',array(
			'root_url'=>get_site_url()
		));
}


function claustra_features(){
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menu('headerMenuLocation','Header Menu Location');
}



add_action('wp_enqueue_scripts','claustra_files');

add_action('after_setup_theme','claustra_features');





?>