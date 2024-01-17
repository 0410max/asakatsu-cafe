<?php
    function setup_theme() {
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'setup_theme');

    function custom_register_blog_post_type() {
        $labels = array(
            'name'               => 'Blogs',
            'singular_name'      => 'Blog',
            'menu_name'          => 'Blogs',
            'all_items'          => 'All Blogs',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Blog',
            'edit_item'          => 'Edit Blog',
            'new_item'           => 'New Blog',
            'view_item'          => 'View Blog',
            'search_items'       => 'Search Blogs',
            'not_found'          => 'No blogs found',
            'not_found_in_trash' => 'No blogs found in Trash',
            'parent_item_colon'  => '',
            'menu_icon'          => 'dashicons-welcome-write-blog', // ダッシュアイコンアイコンのクラス名（任意）
        );
    
        $args = array(
            'labels'              => $labels,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'blog'),
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-welcome-write-blog',
            'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
            'taxonomies'          => array('category'),
        );
    
        register_post_type('blog', $args);
    }
    
    add_action('init', 'custom_register_blog_post_type');

?>