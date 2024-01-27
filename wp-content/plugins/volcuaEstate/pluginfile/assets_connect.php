<?php

function estate_add_frontend_ajax_javascript_file() {
    wp_enqueue_script('frontend-ajax', plugins_url('assets/js/estate-filter-ajax.js', dirname(__FILE__)) , array('jquery'), null, true);
    wp_localize_script('frontend-ajax', 'frontend_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'estate_add_frontend_ajax_javascript_file');

function estate_enqueue_custom_css() {
    wp_enqueue_style('custom-style', plugins_url('assets/css/estate.css', dirname(__FILE__)));
}
add_action('wp_enqueue_scripts', 'estate_enqueue_custom_css');