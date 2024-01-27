<?php
function real_estate_filter_ajax_handler() {
    $district = isset($_POST['district']) ? $_POST['district'] : '';
    $min_floors = isset($_POST['min_floors']) ? $_POST['min_floors'] : '';
    $max_floors = isset($_POST['max_floors']) ? $_POST['max_floors'] : '';
    $page = isset($_POST['page']) ? $_POST['page'] : '';

    real_estate_filter_show_result(min_floors:$min_floors,max_floors:$max_floors,page: $page);
    wp_die();
}

add_action('wp_ajax_real_estate_filter', 'real_estate_filter_ajax_handler');
add_action('wp_ajax_nopriv_real_estate_filter', 'real_estate_filter_ajax_handler');
