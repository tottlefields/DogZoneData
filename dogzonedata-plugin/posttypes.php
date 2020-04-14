<?php

// Our custom post type function
function register_custom_posttypes() {
	$dog_args = array (
			'labels' => array (
					'name' => __ ( 'Dogs', 'dzd' ),
					'singular_name' => __ ( 'Dog', 'dzd' ),
					'add_new_item' => __ ( 'Add New Dog', 'dzd' ),
					'edit_item' => __ ( 'Edit Dog', 'dzd' ),
					'new_item' => __ ( 'New', 'dzd' ),
					'view_item' => __ ( 'View Dog', 'dzd' ),
					'search_items' => __ ( 'Search', 'dzd' ),
					'not_found' => __ ( 'No results found.', 'dzd' ),
					'not_found_in_trash' => __ ( 'No results found.', 'dzd' )
			),
			'public' => true,
			'show_ui' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'hierarchical' => false,
			'rewrite' => array (
					'slug' => get_option ( 'dzd_dog_slug', 'dogs' )
			),
			'supports' => array (
					'title',
					'author',
					'thumbnail',
					'custom-fields'
			),
			'has_archive' => false,
			'menu_position' => 32
	);

	register_post_type ( 'dzd_dog', $dog_args );

	register_taxonomy ( 'dog-breeds', array ( 'dzd_dog'), array (
			'hierarchical' => false,
			'label' => 'Dog Breeds',
			'singular_label' => 'Dog Breed',
			'rewrite' => true,
			'capabilities' => array (
					'assign_terms' => 'read'
			)
	) );
}
// Hooking up our function to theme setup
add_action ( 'init', 'register_custom_posttypes' );


function fontawesome_icon_dashboard() {
	echo "<style type='text/css' media='screen'>
			#adminmenu #menu-posts-dzd_dog div.wp-menu-image:before {
				font-family: Fontawesome !important;
				content: '\\f1b0';
			}";
}
function set_admin_menu_separator() {
	do_action ( 'admin_init', 29 );
}
add_action ( 'admin_head', 'fontawesome_icon_dashboard' );
add_action ( 'admin_menu', 'set_admin_menu_separator' );

function is_dzd_dog() {
	global $wp_query;
	if ($wp_query->query_vars ['post_type'] == 'dzd_dog')
		return true;
	return false;
}

// Set up admin tables for backend
add_filter ( 'manage_posts_columns', 'dzd_team_custom_columns' );
add_action ( 'manage_posts_custom_column', 'dzd_team_show_columns', 10, 2 );
function dzd_team_custom_columns($defaults) {
	global $wp_query;
	if (is_dzd_dog ()) {
		unset ( $defaults ['date'] );
		$defaults ['dog_name'] = "Dog's Name";
		$defaults ['author'] = 'Owner';
	}
	return $defaults;
}
function dzd_team_show_columns($column, $post_id) {
	switch ($column) {
		case 'dog_name' :
			echo get_post_meta ( $post_id, 'dzd_dog_name', true );
			break;
		/*
		 * case 'dog_mandate':
		 * $mandate_id = get_post_meta($post_id, 'dzd_mandate_dog', true);
		 * if (isset($mandate_id) && preg_match('/^MD/', $mandate_id)){ echo '<a href="https://manage.gocardless.com/mandates/'.$mandate_id.'" target="_blank">'.$mandate_id.'</a>' ; }
		 * else { echo $mandate_id; }
		 * break;
		 * case 'team_mandate':
		 * $mandate_id = get_post_meta($post_id, 'dzd_mandate_team', true);
		 * if (isset($mandate_id) && preg_match('/^MD/', $mandate_id)){ echo '<a href="https://manage.gocardless.com/mandates/'.$mandate_id.'" target="_blank">'.$mandate_id.'</a>' ; }
		 * else { echo $mandate_id; }
		 * break;
		 * case 'dog_status':
		 * $status = ucfirst(get_post_status($post_id));
		 * if ($status == 'Publish'){ echo 'Active'; }
		 * elseif ($status == 'Retired'){ $date = (get_post_meta($post_id, 'dzd_date_retired', true) > 0) ? '('.DateTime::createFromFormat('Ymd', get_post_meta($post_id, 'dzd_date_retired', true))->format('jS M Y').')' : ''; echo 'Retired '.$date; }
		 * else { echo $status; }
		 * break;
		 * case 'team_name':
		 * $club_id = wp_get_post_parent_id($post_id);
		 * echo get_the_title( $club_id );
		 * break;
		 * case 'team_type':
		 * $team_type = get_post_meta($post_id, 'dzd_team_type', true);
		 * echo ucfirst($team_type);
		 * break;
		 * case 'host_team':
		 * // $event_id = wp_get_post_parent_id($post_id);
		 * // $team = get_the_title( wp_get_post_parent_id($event_id));
		 * $team = get_the_title( wp_get_post_parent_id($post_id));
		 * echo $team;
		 * break;
		 * case 'parent_event':
		 * $event_id = wp_get_post_parent_id($post_id);
		 * $event = get_post_meta($event_id, 'dzd_event_title', true);
		 * $start_date = DateTime::createFromFormat('Ymd', get_post_meta( $event_id, 'dzd_event_start_date', true ));
		 * echo $event.' ('.$start_date->format('jS F Y').')';
		 * break;
		 */
	}
}


