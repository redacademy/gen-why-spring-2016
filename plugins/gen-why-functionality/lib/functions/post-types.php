<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Banner Images Custom Post Type
function banner_images() {

	$labels = array(
		'name'                  => 'Banner Images',
		'singular_name'         => 'Banner Image',
		'menu_name'             => 'Banner Images',
		'name_admin_bar'        => 'Banner Image',
		'archives'              => 'Banner Image Archives',
		'parent_item_colon'     => 'Parent Banner Image:',
		'all_items'             => 'All Banner Images',
		'add_new_item'          => 'Add New Banner Image',
		'add_new'               => 'Add New',
		'new_item'              => 'New Banner Image',
		'edit_item'             => 'Edit Banner Image',
		'update_item'           => 'Update Banner Image',
		'view_item'             => 'View Banner Image',
		'search_items'          => 'Search Banner Image',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Banner Image',
		'set_featured_image'    => 'Set featured banner image',
		'remove_featured_image' => 'Remove featured banner image',
		'use_featured_image'    => 'Use as featured banner image',
		'insert_into_item'      => 'Insert into banner image',
		'uploaded_to_this_item' => 'Uploaded to this banner image',
		'items_list'            => 'Banner Images list',
		'items_list_navigation' => 'Banner Images list navigation',
		'filter_items_list'     => 'Filter banner images list',
	);
	$args = array(
		'label'                 => 'Banner Image',
		'description'           => 'Front page banner slider images',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'banner_images', $args );

}
add_action( 'init', 'banner_images', 0 );

// Review Custom Post Type
function review_cpt() {

	$labels = array(
		'name'                  => 'Reviews',
		'singular_name'         => 'Review',
		'menu_name'             => 'Reviews',
		'name_admin_bar'        => 'Review',
		'archives'              => 'Review Archives',
		'parent_item_colon'     => 'Parent Review:',
		'all_items'             => 'All Reviews',
		'add_new_item'          => 'Add New Review',
		'add_new'               => 'Add New',
		'new_item'              => 'New Review',
		'edit_item'             => 'Edit Review',
		'update_item'           => 'Update Review',
		'view_item'             => 'View Review',
		'search_items'          => 'Search Review',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into review',
		'uploaded_to_this_item' => 'Uploaded to this Review',
		'items_list'            => 'Reviews list',
		'items_list_navigation' => 'Reviews list navigation',
		'filter_items_list'     => 'Filter Reviews list',
	);
	$args = array(
		'label'                 => 'Review',
		'description'           => 'Reviews of the events Gen Why has had',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'rewrite'								 => array('slug' => 'reviews'),
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'review_cpt', $args );

}
add_action( 'init', 'review_cpt', 0 );

// Events Custom Post Type
function events_cpt() {

	$labels = array(
		'name'                  => 'Events',
		'singular_name'         => 'Event',
		'menu_name'             => 'Events',
		'name_admin_bar'        => 'Event',
		'archives'              => 'Event Archives',
		'parent_item_colon'     => 'Parent Event:',
		'all_items'             => 'All Events',
		'add_new_item'          => 'Add New Event',
		'add_new'               => 'Add New',
		'new_item'              => 'New Event',
		'edit_item'             => 'Edit Event',
		'update_item'           => 'Update Event',
		'view_item'             => 'View Event',
		'search_items'          => 'Search Event',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Event',
		'uploaded_to_this_item' => 'Uploaded to this Event',
		'items_list'            => 'Events list',
		'items_list_navigation' => 'Events list navigation',
		'filter_items_list'     => 'Filter Events list',
	);
	$args = array(
		'label'                 => 'Event',
		'description'           => 'Upcoming events',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'rewrite'								 => array('slug' => 'events'),
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'events_cpt', $args );

}
add_action( 'init', 'events_cpt', 0 );

// Projects Custom Post Type
function projects_cpt() {

	$labels = array(
		'name'                  => 'Projects',
		'singular_name'         => 'Project',
		'menu_name'             => 'Projects',
		'name_admin_bar'        => 'Project',
		'archives'              => 'Project Archives',
		'parent_item_colon'     => 'Parent Project:',
		'all_items'             => 'All Projects',
		'add_new_item'          => 'Add New Project',
		'add_new'               => 'Add New',
		'new_item'              => 'New Project',
		'edit_item'             => 'Edit Project',
		'update_item'           => 'Update Project',
		'view_item'             => 'View Project',
		'search_items'          => 'Search Project',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Project',
		'uploaded_to_this_item' => 'Uploaded to this Project',
		'items_list'            => 'Projects list',
		'items_list_navigation' => 'Projects list navigation',
		'filter_items_list'     => 'Filter Projects list',
	);
	$args = array(
		'label'                 => 'Project',
		'description'           => 'Gen Why\'s projects',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'rewrite'								 => array('slug' => 'projects'),
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'projects_cpt', $args );

}
add_action( 'init', 'projects_cpt', 0 );

// Event Cips Custom Post Type
function event_clips_cpt() {

	$labels = array(
		'name'                  => 'Event Clips',
		'singular_name'         => 'Event Clip',
		'menu_name'             => 'Event Clips',
		'name_admin_bar'        => 'Event Clips',
		'archives'              => 'Event Clip Archives',
		'parent_item_colon'     => 'Parent Event Clip:',
		'all_items'             => 'All Event Clips',
		'add_new_item'          => 'Add New Event Clip',
		'add_new'               => 'Add New',
		'new_item'              => 'New Event Clip',
		'edit_item'             => 'Edit Event Clip',
		'update_item'           => 'Update Event Clip',
		'view_item'             => 'View Event Clip',
		'search_items'          => 'Search Event Clip',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Event Clip',
		'uploaded_to_this_item' => 'Uploaded to this Event Clip',
		'items_list'            => 'Event Clips list',
		'items_list_navigation' => 'Event Clips list navigation',
		'filter_items_list'     => 'Filter Event Clips list',
	);
	$args = array(
		'label'                 => 'Event Clip',
		'description'           => 'Upload event clips',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'event_clips',
		'rewrite'								 => array('slug' => 'event-clips'),
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'event_clips', $args );

}
add_action( 'init', 'event_clips_cpt', 0 );

 // Short Videos Custom Post Type
function short_videos_cpt() {

    $labels = array(
        'name'                  => 'Short Videos',
        'singular_name'         => 'Short Video',
        'menu_name'             => 'Short Videos',
        'name_admin_bar'        => 'Short Video',
        'archives'              => 'Short Video Archives',
        'parent_item_colon'     => 'Parent Short Video:',
        'all_items'             => 'All Short Videos',
        'add_new_item'          => 'Add New Short Video',
        'add_new'               => 'Add New',
        'new_item'              => 'New Short Video',
        'edit_item'             => 'Edit Short Video',
        'update_item'           => 'Update Short Video',
        'view_item'             => 'View Short Video',
        'search_items'          => 'Search Short Video',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Short Video',
        'uploaded_to_this_item' => 'Uploaded to this Short Video',
        'items_list'            => 'Short Videos list',
        'items_list_navigation' => 'Short Videos list navigation',
        'filter_items_list'     => 'Filter Short Videos list',
    );
    $args = array(
        'label'                 => 'Short Video',
        'description'           => 'Upload short videos',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-video-alt2',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'short_videos',
				'rewrite'								 => array('slug' => 'short-videos'),
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'short_video', $args );

}
add_action( 'init', 'short_videos_cpt', 0 );
