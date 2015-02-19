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
    jQuery('.menu-item-96').click(function() {
        jQuery('.contact-form').fadeIn();
        jQuery('.wpcf7-email').focus();
    });
    
    jQuery('.x').click(function() {
        parent.location.hash = '';
        jQuery('.contact-form').fadeOut();
    });
    
    if (window.location.hash.length) {
        var hash = window.location.hash;
        jQuery('.contact-form').show();
    }
    
    // jQuery(".wpcf7-form").focusout(function() {
    //     jQuery('.contact-form').fadeOut();
    // });
});
