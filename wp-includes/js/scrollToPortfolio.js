jQuery(document).ready(function() {
    jQuery('.icon-download').click(function() {
        jQuery('.portfolio').ScrollTo({
            duration: 750,
            easing: 'linear'
        });
    });
    jQuery('.to-top').click(function() {
        jQuery('body').ScrollTo({
            duration: 750,
            easing: 'linear'
        });
    });
    
    jQuery('#ship-to-different-address-checkbox').click(function() {
        if(jQuery('#ship-to-different-address-checkbox').is(":checked")) {
            jQuery('.shipping_address').show();
        } else {
            jQuery('.shipping_address').hide();
        }
    });
    jQuery(document).ready(function () {
        var size_li = jQuery('.grid .row div').size();
        x=6;
        jQuery('.grid .row div:lt('+x+')').fadeIn();
        jQuery('#loadMore').click(function () {
            x= (x+6 <= size_li) ? x+6 : size_li;
            jQuery('.grid .row div:lt('+x+')').fadeIn();
            if(x == size_li) {
                jQuery('#loadMore').hide();
            }
        });
    });
});
