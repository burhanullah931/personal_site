$(document).ready(function() {

    $(".center").slick({
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        pauseOnHover: true,
        centerMode: true,
        arrows: false,
        slidesToShow: 5,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
    
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 920,
          settings: {
            slidesToShow: 3,
    
            infinite: true,
            dots: true
          }
        },
    
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 360,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    
    });
    });


$(document).ready(function() {

    $(".header-slider").slick({
     autoplay: true,
     autoplaySpeed: 3000,
     infinite: true,
     pauseOnHover: true,
     centerMode: false,
     arrows: false,
     slidesToShow: 1,
     dots:true
    
    });
    });

    var fixmeTop = $('.sticky-top-nav').offset().top;
    $(window).scroll(function() {
        var currentScroll = $(window).scrollTop();
        if (currentScroll >= fixmeTop) {
            $('.sticky-top-nav').css({
                position: 'fixed',
                top: '0',
                left: '0',
                width:'100%',
                'z-index':'9'
            });
            $('.sticky-top-nav #brandingContainer .btn.filterbtn').css({
                'color': 'white',
                
            });
            $('.sticky-top-nav #brandingContainer .btn.filterbtn.active').css({
                'color': '#00449b',
                
            });
            $('.sticky-top-nav #brandingContainer').css({
                'background-color': '#91bf20',
                
            });
            
        } else {
            $('.sticky-top-nav').css({
                position: 'static'
            });
            $('.sticky-top-nav #brandingContainer').css({
                'background-color': 'whitesmoke',
                
            });
            $('.sticky-top-nav #brandingContainer .btn.filterbtn').css({
                'color': 'black',
                
            });
        }
    });


    $(document).ready(function(){
        $("#submit-button").click(function(e){
            e.preventDefault();
            $("#search_form").submit(); // Submit the form
        });
    });


    $(document).ready(function(){

        $(".fa-search").click(function(){
            $(".search, .input").toggleClass("active");
            $("input[type='text']").focus();
        });
    
        });

        (function($){
            $(document).ready(function(){
    
              $("#header").show();
              $(function(){
                $(window).scroll(function(){
                  if($(this).scrollTop()>50){
                    $("#header").fadeOut();
                  }
                  else{
                    $("#header").fadeIn();
                  }
                });
              });
            });
    
          }(jQuery));