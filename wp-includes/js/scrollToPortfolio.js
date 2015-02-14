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
});
