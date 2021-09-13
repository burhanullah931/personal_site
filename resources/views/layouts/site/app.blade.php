<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('/site/images/favicon.ico')}}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="PersonalSite" />
    <meta property="og:description" content="PersonalSite provides special value to such professionals who want to fully focus on their core competence, without the added stress of web development. PersonalSite is a platform that directly assists applicants in curating a competitive professional persona online." />
    <meta property="og:type" content="WebPage" />
    <meta property="og:image" content="{{asset('site/images/logo.png')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="{{asset('/site/css/bootstrap-theme.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('/site/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('/site/css/bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/site/css/style.css?ver=1.2224')}}">
    <link rel="stylesheet" href="{{asset('/site/css/style_new.css')}}">
    <link rel="stylesheet" href="{{asset('/site/css/sales_page.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/animated.css')}}">
    <script src='https://www.google.com/recaptcha/api.js'></script>


    <link rel="stylesheet" type="text/css" href="{{asset('/site/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/site/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}">
    <link rel="stylesheet" href="{{asset('/site/css/media.css?ver=1.1')}}">
    <link rel="stylesheet" href="{{asset('/site/css/fonts.css')}}" />
    <link rel="stylesheet" href="{{asset('site/assets/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('site/assets/owl.carousel.min.css')}}" />

    <link rel="stylesheet" href="{{asset('site/css/custom-animation.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" /> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('site/slider/slick-theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('site/slider/slick.css')}}" />
    @yield('styles')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171381595-1"></script>
    <script src="//code.tidio.co/8qxxjzseu8gx9m0qq5hjleoqpomszoba.js" async></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171381595-1');
</script>
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0096/3363.js" async="async"></script>
    @if(Route::is('site.branding'))
        <!-- MailMunch for PersonalSite Grow Consultancy -->
<!-- Paste this code right before the </head> tag on every page of your site. -->
<script src="//a.mailmunch.co/app/v1/site.js" id="mailmunch-script" data-mailmunch-site-id="914253" async="async"></script>

    @endif
</head>
{{-- @php
$maintaince = \App\Maintenance::orderBy('created_at', 'desc')->first(); @endphp
@if($maintaince->active)
<div class="alert alert-warning alert-dismissible maintainance-alert text-center">

    <div class="main-message">
    <button type="button" class="close" data-dismiss="alert">&times;</button>

  {{$maintaince->message}}
  </div>
</div>
@endif --}}

<body>
    @yield('hurryup')

    <!-- **********************************HEADER******************************** -->
    @include('layouts.site.includes.new_navbar')
    {{-- <section id="header">
        <div class="container">
            <div class="row" >

                <div class="top-bar">
                    <div class="col-md-10 text-right phn-no">
                        <h3><span class="header-icons"><i class="fa fa-envelope"></i></span>  support@personalsite.com</h3>
                    </div>

                    <div class="col-md-2 get-started-btn">
                    <div class="header-social-icons header-icons">
                        <span><a target="_blank" href="https://www.facebook.com/personalsiteofficial/"><i class="fab fa-facebook-f"></i></a></span>
                        <span><a target="_blank" href="https://twitter.com/PersonlSite"><i class="fab fa-twitter"></i></a></span>
                        <span><a target="_blank" href="https://www.instagram.com/personalsiteofficial/"><i class="fab fa-instagram"></i></a></span>
                        <span><a target="_blank" href="https://www.linkedin.com/company/personalsite/"><i class="fab fa-linkedin-in"></i></a></span>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        @include('layouts.site.includes.navbar')
    </section> --}}

    {{-- Content --}}
    @yield('content')
    {{-- footer --}}
    @include('layouts.site.includes.footer')
    {{-- core scripts --}}
    <script src="{{asset('/site/js/jquery-3.4.1.js')}}"></script>
    <script src="{{ asset('site/js/owl.carousel.min.js') }}" type="text/javascript" charset="utf-8"></script>

    <script  src="{{asset('/ps/asset/js/jstars.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/site/js/bootstrap-filestyle.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    {{-- <script src="{{asset('/site/js/bootstrap.min.js')}}"></script> --}}
    <script src="{{asset('/site/plugin/parsley.js')}}"></script>
    <script src="{{asset('/site/js/lazy.min.js')}}"></script>
    <script src="{{asset('/site/js/lazy.plugins.min.js')}}"></script>
    <script src="{{asset('/site/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('site/js/wow.min.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('site/js/waypoint.js')}}" type="text/javascript" charset="utf-8"></script>
    <script>
        new WOW().init();
    </script>

    <script>
        $('#call_back').validate();
         $(document).ready(function() {
     $(".center").slick({
    autoplay: true,
    autoplaySpeed: 3000,
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
$('#call_back').validate();
});
    </script>
    <script>
        $(document).ready(function() {

 $(".header-slider").slick({
     autoplay: true,
     autoplaySpeed: 3000,
     infinite: true,
     pauseOnHover: true,
     centerMode: false,
     arrows: false,
     slidesToShow: 1,

 });
 });
     </script>
     <script>
        $(document).ready(function(){
            $("#submit-button").click(function(e){
                e.preventDefault();
                $("#search_form").submit(); // Submit the form
            });
        });
        </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12101847;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12101847/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
<script type="text/javascript" src="{{asset('site/slider/slick.min.js')}}"></script>


    {{-- scripts --}}
    @yield('scripts')
    <script>
        $(function() {
            $('.lazy').lazy();
        });


    </script>
    <script type="text/javascript">
        $(document).ready(function(){

            $(".fa-search").click(function(){
                $(".search, .input").toggleClass("active");
                $("input[type='text']").focus();
            });

        });
    </script>
    <script>
    $(".js-example-tags").select2({
  tags: true,
  maximumSelectionLength:12,
  minimumInputLength:1
});
</script>
    <script>
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
        </script>
    <script>
            $('#profilepic').filestyle({
                    input : false,
                    buttonName : 'btn-primary'
                });
    </script>
    <script>
            $('#resume').filestyle({
                    input : false,
                    buttonName : 'btn-primary'
                });
    </script>
    <script>
            $('#projectpic').filestyle({
                    input : false,
                    buttonName : 'btn-primary'
                });
    </script>
    <script>
  $('#reg-form').parsley();
</script>

@if(Session::pull('newuser'))

<script>

   setTimeout(function(){
       $('#messagepop').modal('show');
   }, 1000);</script>

@endif
</body>
</html>
