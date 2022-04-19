$(document).ready(function(){
    $(".site-navigation .dropdown").hover(
        function () {
            $(this).addClass("show");
            $(this).find(".dropdown-menu").addClass("show");
        },
        function () {
            $(this).removeClass("show");
            $(this).find(".dropdown-menu").removeClass("show");
        }
    );

    $(".sidenav-Menu .dropright").hover(
        function () {
            $(this).addClass("show");
            $(this).find(".dropdown-menu").addClass("show");
        },
        function () {
            $(this).removeClass("show");
            $(this).find(".dropdown-menu").removeClass("show");
        }
    );

    $(".mobiletopNav .dropright").hover(
        function () {
            $(this).addClass("show");
            $(this).find(".dropdown-menu").addClass("show");
        },
        function () {
            $(this).removeClass("show");
            $(this).find(".dropdown-menu").removeClass("show");
        }
    );


    
    $(".searchBar-mb [data-toggle=search-form]").click(function(event) {
        event.preventDefault();
        $(".togglesearch").addClass("open");
        $("input[type='text']").focus();
    });
    $(".search-close").click(function() {
        $(".togglesearch").removeClass("open");
        
    });
    
    
});

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});


var isClosed = false;
$(document).ready(function(){
    
    var trigger = $('.hamburger'),
        bodyTrigger = $('.humburger-body-open'),
        overlay = $('.overlay'),
        body = $('body,#page-content-wrapper');
        

        
        trigger.click(function () {
            hamburger_cross();
        });
        

        

        function hamburger_cross() {
            
            if (isClosed == true) {          
                trigger.removeClass('is-open');
                $('#wrapper').removeClass('toggled');
                trigger.addClass('is-closed');
                body.removeClass('humburger-body-open')
                isClosed = false;
            } 
            else {   
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                $('#wrapper').addClass('toggled');
                body.addClass('humburger-body-open');
                isClosed = true;
            }
        }

        $(document).mouseup(function(e) {
            
            var container = $("#sidebar-wrapper");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                
                if ( $('body').hasClass('humburger-body-open') ) {
                            $('body').removeClass('humburger-body-open');
                            $('#wrapper').removeClass('toggled');
                            $('.hamburger').removeClass('is-open');
                            $('.hamburger').addClass('is-closed');
                            isClosed = false;
                }
            }

            
        });
    
   


    /**** Testimonial slider section *****/
    

    
        var totalItems = $('.testimonial-item').length,
            currentIndex = $('div.testimonial-item.active').index() + 1,
            currentIndex_active,
            down_index;

        // $('.testimonial_num').html(''+currentIndex+'/'+totalItems+'');
        $('.testimonial_num').html(''+currentIndex+'');

        $(".next").click(function(){
            currentIndex_active = $('div.testimonial-item.active').index() + 2;
            if (totalItems >= currentIndex_active)
            {
                down_index= $('div.testimonial-item.active').index() + 2;
                //$('.testimonial_num').html(''+currentIndex_active+'/'+totalItems+'');
                $('.testimonial_num').html(''+currentIndex_active+'');
            }
        });

        $(".prev").click(function(){
            down_index=down_index-1;
            if (down_index >= 1 )
            {
                //$('.testimonial_num').html(''+down_index+'/'+totalItems+'');
                $('.testimonial_num').html(''+down_index+'');
            }
        });
        
        
    /***  Faq slider section ***/ 
    
        var totalfaqItems = $('.faq-item').length;
        var currentfaqIndex = $('div.faq-item.active').index() + 1;
        var currentfaqIndex_active;
        var downfaq_index;

        // $('.testimonial_num').html(''+currentIndex+'/'+totalItems+'');
        $('.faq_num').html(''+currentfaqIndex+'');

        $(".faq-next").click(function(){
            currentfaqIndex_active = $('div.faq-item.active').index() + 2;
            if (totalfaqItems >= currentfaqIndex_active)
            {
                downfaq_index= $('div.faq-item.active').index() + 2;
                //$('.testimonial_num').html(''+currentIndex_active+'/'+totalItems+'');
                $('.faq_num').html(''+currentfaqIndex_active+'');
            }
        });

        $(".faq-prev").click(function(){
            
            downfaq_index=downfaq_index-1;
            if (downfaq_index >= 1 ){
                //$('.testimonial_num').html(''+downfaq_index+'/'+totalItems+'');
                $('.faq_num').html(''+downfaq_index+'');
            }
        });

        $('#faqIndicators').carousel({
            interval: 2000
        });
        
        $("#faqIndicators").on('slide.bs.carousel', function (e) {
              var autofaqIndex_active = $('div.faq-item.active').index() + 2;
            $(".faq-next").click(function(e){
                    e.preventDefault();
            });
            $(".faq-prev").click(function(e){
                    e.preventDefault();
            })
              if (totalfaqItems >= autofaqIndex_active){
                autodownfaq_index= $('div.faq-item.active').index() + 2;
                $('.faq_num').html(''+autodownfaq_index+'');
              }
              
              else{
                $('.faq_num').html(''+currentfaqIndex+''); 
              }
              
        });
    
    $('#publishModal').modal('show');
    $('#draftModal').modal('show');

    
    
});


    function resizeBannerOverlays(){
        
            /** Home banner image **/
            
            $('.home-banner-resizer #banner-overlay').each(function(){
                $banner_h = $('.home-banner-resizer .banner-view').height();
                $banner_w = $('.home-banner-resizer .banner-view').width();
                
                $(this).width($banner_w);
            });
            // $('.home-banner-content').each(function(){
            //     $banner_inner_h = $('.home-banner-resizer .banner-view').height();
            //     $(this).height($banner_inner_h);
            // });
        
        /*** Organization banner content ****/
        $(".organization-banner-content").closest("#banner-overlay").each(function(){
            
            $h = $('.banner-view img').height();
            $w = $('.banner-view img').width();
            $(this).width($w).height($h);
        });
        $('.organization-banner-content').each(function(){
            $h = $('.banner-view img').height();
            $(this).height($h);
        });


       /***  Contact faq banner content ***/
        $(".threebyfour-banner-cover").closest(".threebyfour-banner-cover-overlay").each(function(){
            $h = $('.banner-view img').height();
            $w = $('.banner-view img').width();
            $(this).width($w).height($h);
        });

        $('.threebyfour-banner-cover').each(function(){
            $h = $('.banner-view img').height();
            $(this).height($h);
        });

        /**  Banner cover image **/
        $('.banner-cover,.threebyfour-banner-cover').each(function(){
            $h = $('.banner-view.smallsize-banner img, .banner-view.threebyfourth-size-banner img').height();
            $w = $('.banner-view.smallsize-banner img, .banner-view.threebyfourth-size-banner img').width();
            $(this).width($w).height($h);
        });

        $('.testimonials_overlay').each(function(){
            $h = $('.testimonial_box').height();
            $w = $('.testimonial_box').width();
            $(this).width($w).height($h);
        });

        /*** Indicators banner ***/
        
        $(".twobyfour-banner-cover-overlay").each(function(){
            let $twofourth_h = $('.twofourth-size-banner').height();
            let $twofourth_w = $('.twofourth-size-banner').width();
            $(this).width($twofourth_w).height($twofourth_h);
        });

     }

resizeBannerOverlays();
$(window).resize(function(){ 
    resizeBannerOverlays();
});
$(document).ready(function(){
    resizeBannerOverlays();
});



  
  