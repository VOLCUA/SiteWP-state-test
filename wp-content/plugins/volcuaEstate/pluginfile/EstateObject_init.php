<?php
// Регистрация Custom Post Type
function create_real_estate_post_type() {
    register_post_type('real_estate',
        array(
            'labels'      => array(
                'name'          => __('Объекты недвижимости'),
                'singular_name' => __('Объект недвижимости')
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'real-estate'),
            'supports'    => array('title', 'editor', 'thumbnail'),
            'menu_icon'   => 'dashicons-admin-home', // Иконка для меню
            'show_in_menu'=> true
        )
    );
}

add_action('init', 'create_real_estate_post_type');

// Регистрация Taxonomy
function create_real_estate_taxonomy() {
    register_taxonomy(
        'district',
        'real_estate',
        array(
            'labels' => array(
                'name' => __('Районы'),
                'singular_name' => __('Район')
            ),
            'hierarchical' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'district'),
            'show_in_menu' => true, // Отображать в меню
        )
    );
}

add_action('init', 'create_real_estate_taxonomy');