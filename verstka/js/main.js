$(document).ready(function() {


    //menu

    $('#nav-menu li').hover(
        function() {
            $(this).children('ul').stop(false,true).fadeIn(600);
            $(this).children('a').addClass('active-dropdown');
        },
        function() {
            $(this).children('ul').stop(false,true).fadeOut(600);
            $(this).children('a').removeClass('active-dropdown');
        }
    );

    //slider

    $("#owl-demo").owlCarousel({

        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        navigationText: ["",""]


        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });


    //clients


        var owl = $("#owl-demo2");

        owl.owlCarousel({

            itemsCustom : [
                [0, 2],
                [450, 4],
                [600, 6],
                [700, 6],
                [1000, 6],
                [1200, 6],
                [1400, 6],
                [1600, 6]
            ],
            navigation : true,
            pagination: false,
            navigationText: ["",""]

        });




});

