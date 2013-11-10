jQuery(function() {

    //Accordion init
    jQuery(".m-accordion").accordion({
        oneOpenedItem   : true,
        open: -1
    });

    jQuery('#main-nav a[href*=#contact]').on('click', function(){
        jQuery('html,body').animate({scrollTop: jQuery('#main-footer').offset().top},'slow');
        return false;
    });

    /*jQuery('.m-hero').hover(function(){
        jQuery('.no-opacity .bbc-logo').stop(true, false).hide();
        jQuery('.opacity .bbc-logo').stop(true, false).fadeTo(400, 0.2);
    }, function(){
        jQuery('.no-opacity .bbc-logo').stop(true, false).show();
        jQuery('.opacity .bbc-logo').stop(true, false).fadeTo(400, 1);
    });*/

    jQuery('.home-slider').cycle({
        fx: 'fade',
        timeout: 7000
    });

});//End of ready function
