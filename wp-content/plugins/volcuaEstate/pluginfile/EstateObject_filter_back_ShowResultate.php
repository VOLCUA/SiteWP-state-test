<?php


function real_estate_filter_show_result($min_floors=1,$max_floors=20,$posts_per_page=9,$page=1)
{


    $meta_query = array(
        'relation' => 'AND', // Use 'AND' or 'OR' depending on your requirements
//        array(
//            'key' => 'district', // Replace with the actual custom field key
//            'value' => $district,
//            'compare' => '=', // Change the comparison operator as needed
//        ),
        array(
            'key' => 'number_of_storeys', // Replace with the actual custom field key
            'value' => array($min_floors, $max_floors),
            'type' => 'numeric',
            'compare' => 'BETWEEN', // Change the comparison operator as needed
        ),
    );

    $args = array(
        'post_type' => 'real_estate',
        'meta_query' => $meta_query,
        'posts_per_page' => $posts_per_page,
        'paged' => $page
    );
    $query = new WP_Query($args);

    // Output the results
    ob_start();
    if ($query->have_posts()) {
        ?>
        <div class="row">
            <div class="col-12 text-center">
                <p>Всего объектов: <?php echo $query->found_posts; ?></p>
            </div>
            <?php
            while ($query->have_posts()) {
                $query->the_post();

                //POST
                $page_url = get_permalink(get_the_ID());
                $img="";
                $thumbnail_url = get_the_post_thumbnail_url();
                if ($thumbnail_url) {
                    $img=$thumbnail_url;
                } else {
                    $img= plugins_url('assets/img/estate-default_image.jpg', dirname(__FILE__));;
                }

                //ACF FIELDS
                $house_name = get_field('title_house');
                $location_coordinates = get_field('location_coordinates');
                $number_of_floors = get_field('number_of_storeys');
                $building_type = get_field('type_of_construction');


                ?>
                <a href="<?php echo $page_url; ?>" class="estate-item col-md-4 col-12">
                    <?php

                    echo '<img class="estate-item-img" src="'.$img.'" alt="">';

                    ?>

                    <h2 class="estate-item-title"><?php the_title(); ?></h2>

                    <div class="estate-item-param row">
                        <?php
                        if ($house_name) {
                            echo '<div class="col-6 estate-item-param-house_name">Название дома: <br>' . $house_name . '</div>';
                        }
                        ?>

                        <?php
                        if ($location_coordinates) {
                            echo '<div class="col-6 estate-item-param-location_coordinates">Координаты местонахождения: <br>' . $location_coordinates . '</div>';
                        }
                        ?>

                        <?php
                        if ($number_of_floors) {
                            echo '<div class="col-6 estate-item-param-number_of_floors">Количество этажей: <br>' . $number_of_floors . '</div>';
                        }
                        ?>

                        <?php
                        if ($building_type) {
                            echo '<div class="col-6 estate-item-param-building_type">Тип строения: <br>' . $building_type['label'] . '</div>';
                        }
                        ?>
                    </div>


                </a>
                <?php
            }
            ?>
            <div class="col-12 text-center">
                <?php

                $total_pages = $query->max_num_pages;
                if ($total_pages > 1) {

                    echo '<div class="page-numbers">';
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $page) {
                            echo '<span class="page-numbers current">' . $i . '</span>';
                        } else {
                            echo '<button onclick="loadRealEstateData(' . $i . ');" class="page-numbers">' . $i . '</button>';
                        }
                    }
                    echo '</div>';
                }
                ?>

            </div>

            <style>
                .page-numbers
                {
                    margin-left:20px
                }
            </style>
        </div>


        <?php
    } else {
        echo 'No results found';
    }
    $html = ob_get_clean();

    echo $html;

}

function real_estate_show_shortcode($atts) {
    // Extract the attributes
    $atts = shortcode_atts( array(
        'min_floors' => 1,
        'max_floors' => 20,
        'posts_per_page' => 9,
    ), $atts );

    // Call the real_estate_filter_show_result function with the provided attributes
    return real_estate_filter_show_result($atts['min_floors'], $atts['max_floors'], $atts['posts_per_page']);
}
add_shortcode('real_estate_show', 'real_estate_show_shortcode');