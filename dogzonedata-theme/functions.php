<?php
session_start ();

/**
 * Filter Force Login to check that multisite users are members of the site they are trying to access.
 *
 * @return bool
 */
function my_forcelogin_multisite_members_only() { return false; }
add_filter( 'v_forcelogin_multisite_members_only', 'my_forcelogin_multisite_members_only' );



function mytheme_enqueue_scripts() {
	wp_deregister_script ( 'jquery' );
	wp_register_script ( 'jquery', ("//code.jquery.com/jquery-3.4.1.min.js"), false, '3.4.1', true );
	wp_enqueue_script ( 'jquery' );
	
	
	// Bootstrap JS
	wp_register_script ( 'popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '', '1.16.0', true);
	wp_register_script ( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery','popper-js'), '4.4.1', true );
	wp_enqueue_script ( 'bootstrap-js' );
	
	// BS DatePicker
	wp_register_script ( 'datepicker-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js', array ('jquery', 'bootstrap-js' ), '1.9.0', true );
	wp_enqueue_script ( 'datepicker-js' );
	
	// Font AWesome v5
	wp_register_script ( 'font-awesome-js', ("https://kit.fontawesome.com/237e51052f.js"), false, '5.0.0', true );
	wp_enqueue_script ( 'font-awesome-js' );
}

?>