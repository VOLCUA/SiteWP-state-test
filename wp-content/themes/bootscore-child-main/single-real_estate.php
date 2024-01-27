<?php
/**
 * Template Post Type: post
 *
 * @version 5.3.1
 */

get_header();
?>

    <div id="content" class="site-content <?= bootscore_container_class(); ?> py-5 mt-4">
        <div id="primary" class="content-area">

            <!-- Hook to add something nice -->
            <?php bs_after_primary(); ?>

            <?php the_breadcrumb(); ?>

            <div class="row">
                <div class="<?= bootscore_main_col_class(); ?>">

                    <main id="main" class="site-main">

                        <header class="entry-header">
                            <?php the_post(); ?>
                            <?php //bootscore_category_badge(); ?>

                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <?php bootscore_post_thumbnail(); ?>

                                    <h1 class="estate-single-title"><?php the_title(); ?></h1>

                                    <p class="entry-meta">
                                        <small class="text-body-tertiary">
                                            <?php
                                            bootscore_date();
                                            bootscore_author();
                                            bootscore_comment_count();
                                            ?>
                                        </small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                    <?php
                                    $house_name = get_field('title_house');
                                    if ($house_name) {
                                        echo '<div class="col-md-12 col-6">Название дома: <br>' . $house_name . '</div>';
                                    }
                                    ?>

                                    <?php
                                    $location_coordinates = get_field('location_coordinates');
                                    if ($location_coordinates) {
                                        echo '<div class="col-md-12 col-6">Координаты местонахождения: <br>' . $location_coordinates . '</div>';
                                    }
                                    ?>

                                    <?php
                                    $number_of_floors = get_field('number_of_storeys');
                                    if ($number_of_floors) {
                                        echo '<div class="col-md-12 col-6">Количество этажей: <br>' . $number_of_floors . '</div>';
                                    }
                                    ?>

                                    <?php
                                    $building_type = get_field('type_of_construction');
                                    if ($building_type) {
                                        //print_r($building_type);
                                        echo '<div class="col-md-12 col-6">Тип строения: <br>' . $building_type['label'] . '</div>';
                                    }
                                    ?>
                                    </div>
                                </div>

                            </div>




                        </header>

                        <div class="entry-content">


                            <?php the_content(); ?>

                        </div>

                        <footer class="entry-footer clear-both">
                            <div class="mb-4">
                                <?php bootscore_tags(); ?>
                            </div>
                            <!-- TODO: add related posts -->
                            <?php comments_template(); ?>
                        </footer>

                    </main>

                </div>
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>

<?php
get_footer();
