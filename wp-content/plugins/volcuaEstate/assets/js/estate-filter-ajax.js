var currentPage = 1;

function loadRealEstateData(page) {
    var minFloors = jQuery('#min-floors-filter').val();
    var maxFloors = jQuery('#max-floors-filter').val();

    jQuery.ajax({
        url: frontend_ajax_object.ajaxurl,
        type: 'POST',
        data: {
            action: 'real_estate_filter',
            min_floors: minFloors,
            max_floors: maxFloors,
            page: page
        },
        success: function(response) {
            if(document.getElementsByClassName('home-page-list').length > 0) {
                document.getElementsByClassName('home-page-list')[0].innerHTML = response;
            }
            else {
                jQuery('#main').html(response);
            }
        }
    });
}

jQuery(document).ready(function() {
    jQuery('#filter-button').on('click', function() {
        loadRealEstateData(1); // Always start from the first page when filtering
    });

    window.changePage = function(page) {
        currentPage = page;
        alert("page: " + page);
        loadRealEstateData(page);
    }

    if(jQuery('.home-page-list').length > 0) {
        loadRealEstateData(1);
    }
});