<?php
// Register Navigation Menus
function codeteam_register_menus() {
	register_nav_menus(array(
		'primary-menu' => __('Primary Menu', 'codeteam'),
		'footer-menu' => __('Footer Menu', 'codeteam')
	));
}
add_action('init', 'codeteam_register_menus');

// Enqueue CSS and JS
function codeteam_enqueue_scripts() {
	// Enqueue CSS
	wp_enqueue_style('codeteam-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('global-home-style', get_template_directory_uri() . '/assets/css/global.css');
	wp_enqueue_style('codeteam-home-style', get_template_directory_uri() . '/assets/css/home.css');
	wp_enqueue_style('codeteam-header-style', get_template_directory_uri() . '/assets/css/header.css');
	wp_enqueue_style('codeteam-footer-style', get_template_directory_uri() . '/assets/css/footer.css');
	wp_enqueue_style('codeteam-tipoTour-style', get_template_directory_uri() . '/assets/css/tipoTour.css');
	wp_enqueue_style('codeteam-contact-style', get_template_directory_uri() . '/assets/css/contact.css');
	wp_enqueue_style('codeteam-tour-style', get_template_directory_uri() . '/assets/css/tour.css');
	wp_enqueue_style('codeteam-about-style', get_template_directory_uri() . '/assets/css/about.css');

	// Enqueue JS
	wp_enqueue_script('codeteam-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'codeteam_enqueue_scripts');



function codeteam_remove_admin_menus() {
    remove_menu_page('edit.php'); // Eliminar pestaña de Entradas
    remove_menu_page('edit-comments.php'); // Eliminar pestaña de Comentarios
}
add_action('admin_menu', 'codeteam_remove_admin_menus');
?>