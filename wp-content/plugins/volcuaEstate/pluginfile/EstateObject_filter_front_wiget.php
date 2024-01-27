<?php
class RealEstateFilterWidget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'real_estate_filter_widget',
            'Фильтр объектов недвижимости',
            array('description' => 'Отображает фильтр объектов недвижимости.')
        );
    }

    public function form($instance) {

    }

    public function widget($args, $instance) {
        echo do_shortcode('[real_estate_filter]');
    }
}

function register_real_estate_filter_widget() {
    register_widget('RealEstateFilterWidget');
}

add_action('widgets_init', 'register_real_estate_filter_widget');