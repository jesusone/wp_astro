// ----------------------------------------------
// # Google Map Customization
// ----------------------------------------------
jQuery(function($) {
    "use strict";
    // ----------------------------------------------
    // # Active mixitup
    // ----------------------------------------------
    (function () {
        jQuery("#portfolio_filter").mixitup({
            effects: ['fade','rotateZ'],
            easing: 'snap'
        }); 

    }());
    // ----------------------------------------------
    // # Single Portfolio
    // ----------------------------------------------

    (function () {
        jQuery('#portfolio_filter').on('click','.overlay a',function(event){
            event.preventDefault();
            
            var link = $(this).data('single_url');
           
            var full_url = '#portfolio-details',
                parts = full_url.split("#"),
                trgt = parts[1],
                target_top = $("#"+trgt).offset().top;
                  //console.log(link);
            $('html, body').animate({scrollTop:target_top}, 1000);
            $('#single-portfolio').slideUp(1000, function(){
                $(this).load(link,function(){
                    $(this).slideDown(1000);
                });
            });
        });

    }());



    // ----------------------------------------------
    // # Close Single Portfolio
    // ----------------------------------------------

    (function () { 

        $('#portfolio-details').on('click','.item-close',function(){
            var full_url = '#portfolio_filter',
                parts = full_url.split("#"),
                trgt = parts[1],
                target_offset = $("#"+trgt).offset(),
                target_top = target_offset.top;
            $("#single-portfolio").slideUp(1000);
        });

    }());


});