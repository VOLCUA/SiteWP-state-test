<?php
function real_estate_filter_shortcode() {
    ob_start();
    ?>
    <div id="real-estate-filter">
        <label for="min-floors-filter">Количество этажей від:</label><br>
        <input type="number" id="min-floors-filter" min="1" max="20" value="1">
        <br><br>
        <label for="max-floors-filter">Количество этажей до:</label><br>
        <input type="number" id="max-floors-filter" min="1" max="20" value="20">
        <br><br>
        <button id="filter-button">Фильтровать</button>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('real_estate_filter', 'real_estate_filter_shortcode');




