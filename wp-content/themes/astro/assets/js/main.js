
jQuery(function ($) {

    'use strict';

    // ----------------------------------------------
    // Table index
    // ----------------------------------------------

    /*-----------------------------------------------
    # Preloader
    # Parallax Scrolling
    # Navigation Scroll
    # Mobile Menu
    # navigation Background Change
    # Search
    # Slider Height
    # Active mixitup
    # smoothScroll
    # Pretty Photo
    # Single Portfolio
    # Close Single Portfolio
    # Shop Item Load More
    # Timer
    # Google Map Customization
    -------------------------------------------------*/

    // ----------------------------------------------
    // # script title here
    // ----------------------------------------------
    // ----------------------------------------------
    // # Preloader
    // ----------------------------------------------
    
    (function () { 

        $(window).load(function(){         
            $('.preloader').fadeOut('slow',function(){$(this).remove();});       
        });

    }());


    // ----------------------------------------------
    // # Parallax Scrolling
    // ----------------------------------------------
    
    (function () { 

        function parallaxInit() {       
            $("#parallax-one").parallax("50%", 0.3);
            $("#happy-clients").parallax("50%", 0.3);
        }   
        parallaxInit();

    }()); 
     // ----------------------------------------------
    // # Pretty Photo
    // ----------------------------------------------

    (function () {
        $("a[data-gallery^='prettyPhoto']").prettyPhoto({
          social_tools: false
        });

    }());
   

    // ----------------------------------------------
    // # Navigation Scroll
    // ----------------------------------------------
    
   
  (function () {
   
        var lastId,
            topMenu = jQuery("#main-menu"),
            topMenuHeight = topMenu.outerHeight()+15,           
            menuItems = topMenu.find("a"),            
            scrollItems = menuItems.map(function(){
            	var item_attr = jQuery(this).attr("href");
               var item = $($(this).attr("href"));
              if (item.length) { return item; }
            });
        
       
        menuItems.click(function(e){
          var href = $(this).attr("href"),
              offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
          $('html, body').animate({scrollTop: $(this.hash).offset().top -1}, 1000);
          e.preventDefault();
        });
            
        $(window).scroll(function(){      
           var fromTop = $(this).scrollTop()+topMenuHeight;
           var cur = scrollItems.map(function(){
             if ($(this).offset().top < fromTop)
               return this;
           });
           
           cur = cur[cur.length-1];
           var id = cur && cur.length ? cur[0].id : "";
           
           if (lastId !== id) {
               lastId = id;       
               menuItems
                .parent().removeClass("active")
                .end().filter("[href=#"+id+"]").parent().addClass("active");
           }                   
        });  

    }());
    // ----------------------------------------------
    // # On Click Hide Mobile Menu  
    // ----------------------------------------------

   (function () { 
  
        $(".navbar-nav li a").on('click', function(event) {
            $(".navbar-collapse").collapse('hide');
        });

    }());   


    // ----------------------------------------------
    // # Navigation Background Change  
    // ----------------------------------------------
    
    (function () {

        $(window).scroll (function () {
            var sT = $(this).scrollTop();
            if (sT >= 600) {
                $('.main-nav').addClass('black-nav')
            }else {
                $('.main-nav').removeClass('black-nav')
            }
        })

    }());


    // ----------------------------------------------
    // # Search
    // ----------------------------------------------

    (function () {

        $('.fa-search').on('click', function() {
            $('.search').fadeIn(500, function() {
              $(this).toggleClass('search-toggle');
            });     
        });

        $('.search-close').on('click', function() {
            $('#cmsblue-search').fadeOut(500, function() {
                $(this).removeClass('search-toggle');
            }); 
        });

    }());  


    // ----------------------------------------------
    // # Slider Height
    // ----------------------------------------------
    
    (function () {

        var slideHeight = $(window).height();
        $('#main-carousel .item').css('height',slideHeight);

        $(window).resize(function(){'use strict',
            $('#main-carousel .item').css('height',slideHeight);
        });

    }());  

    

    // ----------------------------------------------
    // # smoothScroll
    // ----------------------------------------------

    (function () {

        smoothScroll.init();

    }());


    // ----------------------------------------------
    // # Timer
    // ----------------------------------------------

    (function () { 

        $('#happy-clients').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
            if (visible) {
                $(this).find('.timer').each(function () {
                    var $this = $(this);
                    $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.ceil(this.Counter));
                        }
                    });
                });
                $(this).unbind('inview');
            }
        });

    }());


    // ----------------------------------------------
    // # Shop Item Load More
    // ----------------------------------------------

 

    
    /*button like facebook*/
    (function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.async = true;
         js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=xxxxxxxxxxxxxx";
         fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    /*google plus like*/
     (function() {
         var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
         po.src = 'https://apis.google.com/js/plusone.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();
    /*button tweet like*/
    
    !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
        if(!d.getElementById(id)){
            js=d.createElement(s);
            js.id=id;
            js.src=p+'://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js,fjs);
        }
    }(document, 'script', 'twitter-wjs');
    /*likedin button like*/
    
}); // script end