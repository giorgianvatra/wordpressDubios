<?php


	function ana_post_types() {
		//bedroom post type
		$bedroomLabels = array(
		'name'               => "Bedroom",
        'singular_name'      => 'Bedroom',
        'add_new'            => 'Add New Custom Bedroom Article',
        'add_new_item'       => 'Add New Custom Bedroom Article',
        'edit_item'          => 'Edit Custom Bedroom Article',
        'new_item'           => 'New Custom Bedroom Article',
        'all_items'          => 'All Custom Bedroom Archieve',
        'view_item'          => 'View Custom Bedroom Article',
        'search_items'       => 'Search Custom Bedroom Article',
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster',
		
		);

		 $bedroomArgs = array(
        'labels'            => $bedroomLabels,
        'supports'          => array('title', 'editor', 'thumbnail'), 
        'description'       => 'Holds our custom bedroom article post specific data',
        'public'            => true,
        'menu_position'     => 5,
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
		'menu_icon' => 'dashicons-category',
    );

		register_post_type('bedroom', $bedroomArgs);


        //bathroom post type
		$bathroomLabels = array(
		'name'               => "Bathroom",
        'singular_name'      => 'Bathroom',
        'add_new'            => 'Add New Custom Bathroom Article',
        'add_new_item'       => 'Add New Custom Bathroom Article',
        'edit_item'          => 'Edit Custom Bathroom Article',
        'new_item'           => 'New Custom Bathroom Article',
        'all_items'          => 'All Custom Bathroom Archieve',
        'view_item'          => 'View Custom Bathroom Article',
        'search_items'       => 'Search Custom Bathroom Article',
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster',
		
		);

		 $bathroomArgs = array(
        'labels'            => $bathroomLabels,
        'supports'          => array('title', 'editor', 'thumbnail'), 
        'description'       => 'Holds our custom bathroom article post specific data',
        'public'            => true,
        'menu_position'     => 5,
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
		'menu_icon' => 'dashicons-category',
    );

		register_post_type('bathroom', $bathroomArgs);

	}

    add_action('init', 'ana_post_types'); 
?> 