/*jslint browser: true*/
/*global , jQuery , document, window */

//APIKEY: 88508155628429f2fa72e40e2331b0fa

(function ($, document, window) {

    $(document).ready(function () {

        // Cloning main navigation for mobile menu
        $(".mobile-navigation").append($(".main-navigation .menu").clone());

        // Mobile menu toggle 
        $(".menu-toggle").click(function () {
            $(".mobile-navigation").slideToggle();
        });
//        $(".search-form button").click(function () {
            //            $(this).toggleClass("active");
            //            var $parent = $(this).parent(".search-form");
            //
            //            $parent.find("input").toggleClass("active").focus();
            //        });

        $(".slider").flexslider({
            controlNav: false,
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
        });
        if ($(".map").length) {
            $('.map').gmap3({
                    map: {
                        options: {
                            maxZoom: 14
                        }
                    },
                    marker: {
                        address: "40 Sibley St, Detroit",
                    }
                },
                "autofit");
        }
    });

    $(window).load(function () {

    });

})(jQuery, document, window);
