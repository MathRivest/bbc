jQuery(function() {

    //Accordion init
    jQuery(".m-accordion").accordion({
        oneOpenedItem   : true,
        open: 0
    });

    jQuery('#main-nav a[href*=#contact]').on('click', function(){
        jQuery('html,body').animate({scrollTop: jQuery('#main-footer').offset().top},'slow');
        return false;
    });


});//End of ready function
