jQuery(document).ready(function() {
    jQuery('.icon-download').click(function() {
        jQuery('.portfolio').ScrollTo({
            offsetTop: 51,
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
    
    if(jQuery('.grid .row .portfolio-post')) {
        var size_li = jQuery('.grid .row .portfolio-post').size();
        x=6;
        jQuery('.grid .row div:lt('+x+')').fadeIn();
        jQuery('#loadMore').click(function () {
            x= (x+6 <= size_li) ? x+6 : size_li;
            jQuery('.grid .row .portfolio-post:lt('+x+')').fadeIn();
            if(x == size_li) {
                jQuery('#loadMore').hide();
            }
        });
    }
    
    if(jQuery('.checkout-container-addresses')) {
        jQuery('.validate-required input').prop('required', true);
    }

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
    
    var target = jQuery('#mywork');
    var targetHeight = target.outerHeight();
        

    jQuery(document).scroll(function(e){
        var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
        if(scrollPercent >= 0){
            target.css('opacity', scrollPercent);
        }
    });
    
});
