(function ($) {
	"use strict";

    jQuery(document).ready(function($){
        
        $(".carousel-indicators li:first-child, .carousel-inner .item:first-child, .nav-tabs li:first-child, .tab-content .tab-pane:first-child").addClass("active");
        $(".tab-content .tab-pane:first-child").addClass("in");
        $(".panel:first-child .panel-collapse").addClass("in");

        $("#nav").slicknav({
            allowParentLinks: true
        });

        $('.single-gallery-item, .carousel-image-single').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                  enabled:true
                }
            });
        });   
        
        $('.parallax-bg').parallax("50%", 0.2);


    });


}(jQuery));	