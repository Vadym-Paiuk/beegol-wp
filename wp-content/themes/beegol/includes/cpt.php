<?php
    add_action('init', 'create_post_type');
    
    function create_post_type(){
        
        register_post_type('location', [
            'taxonomies' => [], // post related taxonomies
            'label' => null,
            'labels' => [
                'name' => 'Locations', // name for the post type.
                'singular_name' => 'Location', // name for single post of that type.
                'add_new' => 'Add Locations', // to add a new post.
                'add_new_item' => 'Adding Locations', // title for a newly created post in the admin panel.
                'edit_item' => 'Edit Locations', // for editing post type.
                'new_item' => 'New Locations', // new post's text.
                'view_item' => 'See Locations', // for viewing this post type.
                'search_items' => 'Search Locations', // search for these post types.
                'not_found' => 'Not Found', // if search has not found anything.
                'parent_item_colon' => '', // for parents (for hierarchical post types).
                'menu_name' => 'Locations', // menu name.
            ],
            'description' => '',
            'public' => true,
            'publicly_queryable'  => false, // depends on public
            //'exclude_from_search' => null, // depends on public
            //'show_ui'             => null, // depends on public
            //'show_in_nav_menus'   => null, // depends on public
            'show_in_menu' => null, // whether to in admin panel menu
            //'show_in_admin_bar'   => null, // depends on show_in_menu.
            'show_in_rest' => true, // Add to REST API. WP 4.7.
            'rest_base' => null, // $post_type. WP 4.7.
            'menu_position' => null,
            'menu_icon' => 'dashicons-admin-site',
            //'capability_type'   => 'post',
            //'capabilities'      => 'post', // Array of additional rights for this post type.
            //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
            'hierarchical' => false,
            // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
            'supports' => ['title', 'excerpt'],
            'has_archive' => false,
            'rewrite' => false,
            'query_var' => true,
        ]);
    }