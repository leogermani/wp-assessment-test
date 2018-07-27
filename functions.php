<?php


if (file_exists(get_stylesheet_directory() . '/secret.php')) {

    if (!get_option('_assessment_test_setup')) {
		require_once('secret.php');
		update_option('_assessment_test_setup', 1);
	}
    

}


add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'test_script', get_stylesheet_directory_uri() . '/script.js', array('jquery') );
});
