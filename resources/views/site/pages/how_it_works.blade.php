@extends('layouts.site.app')
@section('styles')
<title>How It Works - Consultant Directories</title>
@endsection
@section('content')
<style>.nav-tabs {
   border-bottom: none;
   margin: auto;
   display: inline-block;
   border-radius: 30px;
   }
   .nav-tabs li{
      /* margin:auto */
      display: inline-block
   }
   .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
   color: #555;
   cursor: default;
   color: white;
   /* border: 1px solid #ddd; */
   border-bottom-color: transparent;
   }
   .nav-tabs>li>a:hover{
   color:black !important;
   }
   .nav-tabs.nav>li>a{ padding:7px 15px;
   color: #fff;
   margin: 0;
   }
   .custom{
   color: #fff;
   font-size: 36px;
   font-family: Poppins;
   font-weight: 500;
   line-height: 70px;
   margin-top: 30px;
   }

    .accordion{
        border-bottom: 1px solid gray;
        padding-bottom: 10px;
    }
    .answer{
        color: #6c6d6f;
        margin-top: 20px;
        line-height: 28px;
        font-family: Poppins;
        font-weight: 500;
        font-size: 16px;
        }
    .panel-heading {
        padding-left: 0;
        padding-bottom: 30px;
        padding-top: 30px;
        }
    .h3style{
        color: #000;
        margin-top: 30px;
        font-family: Poppins;
        font-weight: 500;
        font-size: 20px;
        }
    .h3style,.h3style:hover{
        text-decoration: none !important;
        }
    .h3style:before {
        content: '';
        transition: all .3s;
        font-family: Arial,sans-serif;
        margin-right: .20em;
        margin-left: -1.3em;
        width: .5em;
        height: .5em;
        display: inline-block;
        box-shadow: 0.15em 0.15em 0 #b1b7c3;
        -webkit-transform: translateY(-.35em) rotate(-45deg);
        -ms-transform: translateY(-.35em) rotate(-45deg);
        transform: translateY(-.35em) rotate(-45deg);
        -webkit-transform-origin: bottom right;
        -ms-transform-origin: bottom right;
        transform-origin: bottom right;
        }
    .h3style[aria-expanded="true"]:before{
        -webkit-transform: translateY(-.35em) rotate(45deg);
        -ms-transform: translateY(-.35em) rotate(45deg);
        transform: translateY(-.35em) rotate(45deg);
        }
    .SectionFeature-heading{
         font-size: 32px;
         font-family: Poppins;
         font-weight: 700;
         color: #000;

        }
        @media only screen and (max-width: 600px){
         .nav-tabs>li{float:none}
         #how-it-works{height:auto;}
}
.panel-group {
    margin-bottom: 20px;
    padding: 0px 20px;
}
#how-it-works{

   background:url({{asset('site/images/bg-lines.png')}}), linear-gradient(to right,rgb(169 169 167),rgb(232 232 232),rgb(156 142 142 / 2%),rgb(169 168 168 / 20%));
padding:60px 0px 60px 0px;
height: 550px;
}
@media only screen and (max-width: 600px){
       
         #how-it-works{height:auto;}
}
.header-title h1 {
    color: #00449b;
    font-size: 52px;
    font-family: Poppins;
    font-weight: 600;
    line-height: 70px;
    margin-top: 0px;
}
@media only screen and (max-width: 767px){
   #how-it-works img{
width: 100%;
   }
}
.btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show>.btn-light.dropdown-toggle{
   color:#212529!important;
}
</style>
<section id="how-it-works">
   <div class="container">
      <div class="row">
         <div class="col-md-4 m-auto">
          <svg class="animated" id="freepik_stories-working-remotely" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><style>svg#freepik_stories-working-remotely:not(.animated) .animable {opacity: 0;}svg#freepik_stories-working-remotely.animated #freepik--background-simple--inject-38 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideDown;animation-delay: 0s;}svg#freepik_stories-working-remotely.animated #freepik--Files--inject-38 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomIn,3s Infinite  linear floating;animation-delay: 0s,1s;}svg#freepik_stories-working-remotely.animated #freepik--Window--inject-38 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedRight,3s Infinite  linear floating;animation-delay: 0s,1s;}svg#freepik_stories-working-remotely.animated #freepik--character-2--inject-38 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedLeft;animation-delay: 0s;}svg#freepik_stories-working-remotely.animated #freepik--Cat--inject-38 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomOut;animation-delay: 0s;}svg#freepik_stories-working-remotely.animated #freepik--Mug--inject-38 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) fadeIn;animation-delay: 0s;}svg#freepik_stories-working-remotely.animated #freepik--Plants--inject-38 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideLeft;animation-delay: 0s;}svg#freepik_stories-working-remotely.animated #freepik--Clock--inject-38 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedRight;animation-delay: 0s;}svg#freepik_stories-working-remotely.animated #freepik--character-1--inject-38 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomOut;animation-delay: 0s;}            @keyframes slideDown {                0% {                    opacity: 0;                    transform: translateY(-30px);                }                100% {                    opacity: 1;                    transform: translateY(0);                }            }                    @keyframes zoomIn {                0% {                    opacity: 0;                    transform: scale(0.5);                }                100% {                    opacity: 1;                    transform: scale(1);                }            }                    @keyframes floating {                0% {                    opacity: 1;                    transform: translateY(0px);                }                50% {                    transform: translateY(-10px);                }                100% {                    opacity: 1;                    transform: translateY(0px);                }            }                    @keyframes lightSpeedRight {              from {                transform: translate3d(50%, 0, 0) skewX(-20deg);                opacity: 0;              }              60% {                transform: skewX(10deg);                opacity: 1;              }              80% {                transform: skewX(-2deg);              }              to {                opacity: 1;                transform: translate3d(0, 0, 0);              }            }                    @keyframes lightSpeedLeft {              from {                transform: translate3d(-50%, 0, 0) skewX(20deg);                opacity: 0;              }              60% {                transform: skewX(-10deg);                opacity: 1;              }              80% {                transform: skewX(2deg);              }              to {                opacity: 1;                transform: translate3d(0, 0, 0);              }            }                    @keyframes zoomOut {                0% {                    opacity: 0;                    transform: scale(1.5);                }                100% {                    opacity: 1;                    transform: scale(1);                }            }                    @keyframes fadeIn {                0% {                    opacity: 0;                }                100% {                    opacity: 1;                }            }                    @keyframes slideLeft {                0% {                    opacity: 0;                    transform: translateX(-30px);                }                100% {                    opacity: 1;                    transform: translateX(0);                }            }        .animator-hidden { display: none; }</style><g id="freepik--background-simple--inject-38" class="animable" style="transform-origin: 260.614px 243.395px;"><path d="M37.62,176.94S56.87,95.58,132.73,56s166.33-22.74,240-11.1,120.53,68,115.52,135.61-64.42,74-109.78,141.79-47.71,93-120.78,124.16-166.91-20.11-203-111S37.62,176.94,37.62,176.94Z" style="fill: rgb(145, 191, 32); transform-origin: 260.614px 243.395px;" id="ell6h8vr7za" class="animable"></path><g id="elrehpw9mxhz"><path d="M37.62,176.94S56.87,95.58,132.73,56s166.33-22.74,240-11.1,120.53,68,115.52,135.61-64.42,74-109.78,141.79-47.71,93-120.78,124.16-166.91-20.11-203-111S37.62,176.94,37.62,176.94Z" style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 260.614px 243.395px;" class="animable"></path></g></g><g id="freepik--Files--inject-38" class="animable" style="transform-origin: 252.633px 248.384px;"><line x1="105" y1="123" x2="471" y2="465" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-miterlimit: 10; transform-origin: 288px 294px;" id="elg4h7j4zh9dc" class="animable"></line><path d="M153.37,78A24.94,24.94,0,0,0,115,52.69,33.65,33.65,0,0,0,50.2,65.49c0,.41,0,.82,0,1.24a21.9,21.9,0,0,0,3,42.77v.23H152.3A15.87,15.87,0,0,0,153.37,78Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 101.484px 70.7533px;" id="eli4asitzwia" class="animable"></path><line x1="228.76" y1="177.82" x2="228.76" y2="176.32" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 228.76px 177.07px;" id="elicsu7759r0g" class="animable"></line><line x1="228.76" y1="173.36" x2="228.76" y2="68.03" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-dasharray: 2.96688, 2.96688; transform-origin: 228.76px 120.695px;" id="elgh13qr2cob" class="animable"></line><polyline points="228.76 66.55 228.76 65.05 227.26 65.05" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 228.01px 65.8px;" id="el8vioemxeagh" class="animable"></polyline><line x1="224.24" y1="65.05" x2="165.25" y2="65.05" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-dasharray: 3.02491, 3.02491; transform-origin: 194.745px 65.05px;" id="el52h90rc7cj3" class="animable"></line><line x1="163.74" y1="65.05" x2="162.24" y2="65.05" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 162.99px 65.05px;" id="eljtf457o6df" class="animable"></line><polygon points="233.75 176.37 228.76 185 223.78 176.37 233.75 176.37" style="fill: rgb(38, 50, 56); transform-origin: 228.765px 180.685px;" id="elwpooi8mw97l" class="animable"></polygon><polygon points="246.74 138.41 209.58 138.41 209.58 86.8 235.92 86.8 246.74 97.53 246.74 138.41" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 228.16px 112.605px;" id="elszbssm81c2m" class="animable"></polygon><polygon points="235.92 86.8 235.92 97.34 246.74 97.34 235.92 86.8" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.33px 92.07px;" id="el9wtfugtdcw" class="animable"></polygon><line x1="215.32" y1="104.17" x2="240.99" y2="104.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 228.155px 104.17px;" id="el7do0ha2r0ks" class="animable"></line><line x1="215.32" y1="111.17" x2="240.99" y2="111.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 228.155px 111.17px;" id="elestov6ry1ld" class="animable"></line><line x1="215.32" y1="118.17" x2="240.99" y2="118.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 228.155px 118.17px;" id="el4bqiwbdcdmk" class="animable"></line><line x1="215.32" y1="125.17" x2="240.99" y2="125.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 228.155px 125.17px;" id="elot6ojtoo2np" class="animable"></line><polygon points="174.98 88.46 137.82 88.46 137.82 36.85 164.16 36.85 174.98 47.58 174.98 88.46" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 156.4px 62.655px;" id="elaonfu1ny2w8" class="animable"></polygon><polygon points="164.16 36.85 164.16 47.39 174.98 47.39 164.16 36.85" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 169.57px 42.12px;" id="elug7osky867o" class="animable"></polygon><line x1="143.56" y1="54.22" x2="169.23" y2="54.22" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 156.395px 54.22px;" id="elaa2q4cklik" class="animable"></line><line x1="143.56" y1="61.22" x2="169.23" y2="61.22" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 156.395px 61.22px;" id="el332m27itedh" class="animable"></line><line x1="143.56" y1="68.22" x2="169.23" y2="68.22" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 156.395px 68.22px;" id="el3rv820lbszc" class="animable"></line><line x1="143.56" y1="75.22" x2="169.23" y2="75.22" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 156.395px 75.22px;" id="elhoaiz54ot8u" class="animable"></line><line x1="82.4" y1="416" x2="82.4" y2="131.14" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-dasharray: 3, 3; transform-origin: 82.4px 273.57px;" id="el0cq19zp3kdib" class="animable"></line><polygon points="87.38 132.6 82.4 123.96 77.41 132.6 87.38 132.6" style="fill: rgb(38, 50, 56); transform-origin: 82.395px 128.28px;" id="elgt6072dnjsk" class="animable"></polygon><polygon points="101.52 368.58 64.37 368.58 64.37 316.97 90.7 316.97 101.52 327.7 101.52 368.58" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 342.775px;" id="el8wmzce96cn" class="animable"></polygon><polygon points="90.7 316.97 90.7 327.51 101.52 327.51 90.7 316.97" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 96.11px 322.24px;" id="el5ylskl6m9xj" class="animable"></polygon><line x1="70.11" y1="334.34" x2="95.78" y2="334.34" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 334.34px;" id="el1m2pppi3oph" class="animable"></line><line x1="70.11" y1="341.34" x2="95.78" y2="341.34" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 341.34px;" id="elvflxpcxaxv" class="animable"></line><line x1="70.11" y1="348.34" x2="95.78" y2="348.34" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 348.34px;" id="el5lki8a46ltq" class="animable"></line><line x1="70.11" y1="355.34" x2="95.78" y2="355.34" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 355.34px;" id="el0inmo0yt7zlv" class="animable"></line><polygon points="101.52 231.58 64.37 231.58 64.37 179.97 90.7 179.97 101.52 190.7 101.52 231.58" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 205.775px;" id="elobbhzhu6u8" class="animable"></polygon><polygon points="90.7 179.97 90.7 190.51 101.52 190.51 90.7 179.97" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 96.11px 185.24px;" id="elb8pac9egrrp" class="animable"></polygon><line x1="70.11" y1="197.34" x2="95.78" y2="197.34" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 197.34px;" id="elqq693xphx4" class="animable"></line><line x1="70.11" y1="204.34" x2="95.78" y2="204.34" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 204.34px;" id="el9j25763vvz5" class="animable"></line><line x1="70.11" y1="211.34" x2="95.78" y2="211.34" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 211.34px;" id="el8re8mbpzw7h" class="animable"></line><line x1="70.11" y1="218.34" x2="95.78" y2="218.34" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 82.945px 218.34px;" id="eln1iavw0ebma" class="animable"></line></g><g id="freepik--Window--inject-38" class="animable" style="transform-origin: 394.635px 96.985px;"><polygon points="392.54 24.36 318.27 24.36 317.29 34.57 392.54 34.57 392.54 24.36" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 29.465px;" id="eljhfbb7nvew" class="animable"></polygon><polygon points="392.54 34.57 318.27 34.57 317.29 44.78 392.54 44.78 392.54 34.57" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 39.675px;" id="elekx7k09peqc" class="animable"></polygon><polygon points="392.54 44.78 318.27 44.78 317.29 54.99 392.54 54.99 392.54 44.78" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 49.885px;" id="el9w9wwtm6xk" class="animable"></polygon><polygon points="392.54 54.99 318.27 54.99 317.29 65.2 392.54 65.2 392.54 54.99" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 60.095px;" id="el0wb2gemgdxz" class="animable"></polygon><polygon points="392.54 65.2 318.27 65.2 317.29 75.41 392.54 75.41 392.54 65.2" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 70.305px;" id="elca35mowuac5" class="animable"></polygon><polygon points="392.54 75.41 318.27 75.41 317.29 85.62 392.54 85.62 392.54 75.41" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 80.515px;" id="eljt3hizddin" class="animable"></polygon><polygon points="392.54 85.62 318.27 85.62 317.29 95.83 392.54 95.83 392.54 85.62" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 90.725px;" id="elf84ryq9jbdq" class="animable"></polygon><polygon points="392.54 95.83 318.27 95.83 317.29 106.04 392.54 106.04 392.54 95.83" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 100.935px;" id="el8ok8uqw2g0s" class="animable"></polygon><polygon points="392.54 106.04 318.27 106.04 317.29 116.25 392.54 116.25 392.54 106.04" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 111.145px;" id="elh1w0dcw6y57" class="animable"></polygon><polygon points="392.54 116.25 318.27 116.25 317.29 126.46 392.54 126.46 392.54 116.25" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 121.355px;" id="el0ncpl3nl8kw" class="animable"></polygon><polygon points="392.54 126.46 318.27 126.46 317.29 136.67 392.54 136.67 392.54 126.46" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 131.565px;" id="ellpkp8byn8ja" class="animable"></polygon><polygon points="392.54 136.67 318.27 136.67 317.29 146.88 392.54 146.88 392.54 136.67" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 141.775px;" id="elkpys0diwwg" class="animable"></polygon><polygon points="392.54 146.88 318.27 146.88 317.29 157.1 392.54 157.1 392.54 146.88" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 151.99px;" id="elwwq54ijyayo" class="animable"></polygon><polygon points="392.54 157.1 318.27 157.1 317.29 167.31 392.54 167.31 392.54 157.1" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 162.205px;" id="eleuxcqapuhza" class="animable"></polygon><polygon points="392.54 167.31 318.27 167.31 317.29 177.52 392.54 177.52 392.54 167.31" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 354.915px 172.415px;" id="elzs253aevnt" class="animable"></polygon><polygon points="468.89 24.36 394.62 24.36 393.63 34.57 468.89 34.57 468.89 24.36" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 29.465px;" id="elcx74jw35ej" class="animable"></polygon><polygon points="468.89 34.57 394.62 34.57 393.63 44.78 468.89 44.78 468.89 34.57" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 39.675px;" id="el1182xtbnc8t" class="animable"></polygon><polygon points="468.89 44.78 394.62 44.78 393.63 54.99 468.89 54.99 468.89 44.78" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 49.885px;" id="elm222uhtduk" class="animable"></polygon><polygon points="468.89 54.99 394.62 54.99 393.63 65.2 468.89 65.2 468.89 54.99" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 60.095px;" id="elv8gfpd01pkn" class="animable"></polygon><polygon points="468.89 65.2 394.62 65.2 393.63 75.41 468.89 75.41 468.89 65.2" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 70.305px;" id="elgtpwn0igv8u" class="animable"></polygon><polygon points="468.89 75.41 394.62 75.41 393.63 85.62 468.89 85.62 468.89 75.41" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 80.515px;" id="elzxrjeeuigi" class="animable"></polygon><polygon points="468.89 85.62 394.62 85.62 393.63 95.83 468.89 95.83 468.89 85.62" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 90.725px;" id="elkz23po3dfq" class="animable"></polygon><polygon points="468.89 95.83 394.62 95.83 393.63 106.04 468.89 106.04 468.89 95.83" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 100.935px;" id="elwja47ei8a79" class="animable"></polygon><polygon points="468.89 106.04 394.62 106.04 393.63 116.25 468.89 116.25 468.89 106.04" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 111.145px;" id="elf3yjqo5xn39" class="animable"></polygon><polygon points="468.89 116.25 394.62 116.25 393.63 126.46 468.89 126.46 468.89 116.25" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 121.355px;" id="ell3a0ofrmplc" class="animable"></polygon><polygon points="468.89 126.46 394.62 126.46 393.63 136.67 468.89 136.67 468.89 126.46" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 131.565px;" id="el1udaejixlvn" class="animable"></polygon><polygon points="468.89 136.67 394.62 136.67 393.63 146.88 468.89 146.88 468.89 136.67" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 141.775px;" id="elbqd1xs7h9" class="animable"></polygon><polygon points="468.89 146.88 394.62 146.88 393.63 157.1 468.89 157.1 468.89 146.88" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 151.99px;" id="elxw284vh0r6" class="animable"></polygon><polygon points="468.89 157.1 394.62 157.1 393.63 167.31 468.89 167.31 468.89 157.1" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 162.205px;" id="elp94dwgmtq1n" class="animable"></polygon><polygon points="468.89 167.31 394.62 167.31 393.63 177.52 468.89 177.52 468.89 167.31" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 431.26px 172.415px;" id="el3lihduccst6" class="animable"></polygon><rect x="315.55" y="16.45" width="157.05" height="7.7" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 394.075px 20.3px;" id="el6frshrxls86" class="animable"></rect><line x1="472.61" y1="24.15" x2="472.61" y2="159.81" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 472.61px 91.98px;" id="elzz3yuwipl0l" class="animable"></line><line x1="470.89" y1="24.37" x2="470.89" y2="117.44" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 470.89px 70.905px;" id="el20e46txl8it" class="animable"></line><rect x="471.61" y="159.51" width="2.11" height="3.46" style="fill: rgb(38, 50, 56); stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 472.665px 161.24px;" id="elk1ayungix9" class="animable"></rect><rect x="469.7" y="116.7" width="2.11" height="3.46" style="fill: rgb(38, 50, 56); stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 470.755px 118.43px;" id="el1ixlem3hopa" class="animable"></rect></g><g id="freepik--character-2--inject-38" class="animable" style="transform-origin: 329.955px 158.796px;"><path d="M292.86,157.09S266.1,167.25,262,171s-27.77,79.95-27.77,79.95h165S387,199.77,384,182.49s-16.26-21-23-22.36S292.86,157.09,292.86,157.09Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 316.73px 204.02px;" id="ely2ntc77swil" class="animable"></path><polygon points="337.92 171.54 334.38 250.92 362.99 250.92 351.49 164.59 337.92 171.54" style="fill: rgb(145, 191, 32); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 348.685px 207.755px;" id="eld2xpwsg647m" class="animable"></polygon><path d="M295.14,150.43s-4.42,6.49-3.54,8.56,10.92,17.7,20.95,19.47,22.71-3.84,29.5-8,15.63-7.37,17.1-8.26-3.83-8-6.19-9.14-5.31-3-5.31-3-3.24-4.13-3.83-5-.89-2.36-1.77-3.54a3.94,3.94,0,0,0-2.95-1.77c-1.48-.29-3.54,7.08-12.39,8.56s-30.39,2.36-30.39,2.36Z" style="fill: rgb(145, 191, 32); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 325.444px 159.269px;" id="elkuneaizrb6" class="animable"></path><path d="M322.58,178.46s17.11-8.56,19.17-15.34,2.07-18,2.07-18" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 333.2px 161.79px;" id="elwzchlu8ii9o" class="animable"></path><path d="M335.56,171.08s7.37-3.24,9.73-7.67,2.36-13.27,2.36-13.27" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 341.605px 160.61px;" id="eltlijff9wg2d" class="animable"></path><path d="M285.65,113.76c-.32,1.2,6.59,35.46,11.54,44.12s15.25,13.6,21.44,10.72c7.16-3.35,15.05-9.92,18.47-17.21.63-1.35,4.12-15.94,3.38-16.19,0,0,4.95,1.65,7-7.42s3.71-14.43,1.24-19.38S332.24,91.91,319.45,94,287.71,105.93,285.65,113.76Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 317.798px 131.586px;" id="elluk59io7b7b" class="animable"></path><path d="M319.87,103s-18.14,14-30.51,15.26S277,113.76,277,113.76s-16.08,4.54-14.43-7.83S289,83.66,289,83.66s-8.66-2.47-4.54-7,19.79-9.49,30.1-8.25,14.84,3.71,14.84,3.71-2.89-7.42,3.3-5S344.19,81.6,344.19,81.6s10.72.83,11.55,3.71S349.55,89,349.55,89s6.6,12.37,3.3,19.38-10.31,9.07-10.72,10.31,1.24,5.77-2.06,4.12-4.54-8.66-4.54-8.66-4.94-4.94-5.36-7-.82-4.53-.82-4.53-2.89,8.66-9.48,9.89S319.87,103,319.87,103Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 309.13px 94.9011px;" id="elr5wfxk5bxgr" class="animable"></path><path d="M305,132.73s-8.24,18.14-3.71,18.55,8.66-4.54,8.66-4.54" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 304.94px 142.017px;" id="el46lkzp8qujm" class="animable"></path><path d="M305.44,154.17s5.36,5.77,15.25-2.07" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 313.065px 154.158px;" id="elaxdsqdty7fh" class="animable"></path><path d="M316.24,136.35s1,3.73,8.47,3.05" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 320.475px 137.916px;" id="eleyf3gv1tlyk" class="animable"></path><path d="M300.65,135.67s-2.37,3.05-5.08,3.05" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 298.11px 137.195px;" id="elb8vfhuj6ww9" class="animable"></path><path d="M332.38,127s-19.11-.41-21.17.42-2.47,5.77-1.24,9.07,4.13,7.83,11.55,7.83,11.13-3.71,13.6-10.72S332.38,127,332.38,127Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 322.532px 135.609px;" id="elbuzgtpr212p" class="animable"></path><path d="M285.22,127s14.71-.41,16.3.42,1.9,5.77,1,9.07-3.18,7.83-8.89,7.83-8.57-3.71-10.47-10.72S285.22,127,285.22,127Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 292.831px 135.609px;" id="el9bvv8r8xf5c" class="animable"></path><line x1="336.02" y1="129.33" x2="342.3" y2="121.03" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 339.16px 125.18px;" id="eliko24irvma" class="animable"></line><line x1="311.21" y1="127.37" x2="301.42" y2="127.37" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 306.315px 127.37px;" id="elg8hh3m9ct6b" class="animable"></line><line x1="308.7" y1="131.35" x2="302.63" y2="131.35" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.665px 131.35px;" id="elq4nrg8i23lp" class="animable"></line><line x1="283" y1="128.92" x2="287.66" y2="125.89" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 285.33px 127.405px;" id="el492lps6azlj" class="animable"></line><path d="M320.81,134.36c0,1.54-.73,2.8-1.63,2.8s-1.62-1.26-1.62-2.8.73-2.8,1.62-2.8S320.81,132.81,320.81,134.36Z" style="fill: rgb(38, 50, 56); transform-origin: 319.185px 134.36px;" id="el2vo0vge5hbh" class="animable"></path><path d="M299.27,133.18c0,1.55-.72,2.8-1.62,2.8s-1.62-1.25-1.62-2.8.73-2.8,1.62-2.8S299.27,131.63,299.27,133.18Z" style="fill: rgb(38, 50, 56); transform-origin: 297.65px 133.18px;" id="eldxn9ybhtm3p" class="animable"></path><path d="M291.6,123.59s5.9-2.36,8.85-.59" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 296.025px 122.966px;" id="el4s1ucy90b0f" class="animable"></path><path d="M314,123.3a16.39,16.39,0,0,1,12.1,1.18" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 320.05px 123.565px;" id="el0tvzy0ke1m0n" class="animable"></path><path d="M219.75,241.05a18.36,18.36,0,0,0-14.91-2c-8.13,2.37-12.19,9.49-12.19,11.86h34.21A14.85,14.85,0,0,0,219.75,241.05Z" style="fill: gray; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 209.755px 244.6px;" id="elzpuhxgp1ks" class="animable"></path><path d="M198.74,232.92s-4.4,6.44-4.4,8.81-2.37,4.74,1,5.76,5.42-10.84,5.42-12.19S198.74,232.92,198.74,232.92Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 197.145px 240.236px;" id="elr8uerumtde" class="animable"></path><path d="M204.84,232.58s-4.74-1-6.1.34-3.72,13.22-3.38,14.57,3.72,1.69,4.74.34S204.84,232.58,204.84,232.58Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 200.083px 240.455px;" id="elicgbr2wzxtr" class="animable"></path><path d="M225.17,238s-14.23-5.09-17.28-7.12-4.74,2-5.76,4.41-3.39,10.84-3.39,13.21,3.73,3.38,4.41.67,6.1-11.51,6.1-11.51l7.11,2.71s.68,1-2.37,3.05-7.45,6.43-6.1,7.11,5.42.34,6.78-1,8.46-3.05,8.46-3.05,6.44,4.07,7.8,4.41,9.82-1.36,9.82-1.36-9.49-8.13-10.84-9.14A29.12,29.12,0,0,0,225.17,238Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 219.745px 240.631px;" id="eldxdaah3u0ds" class="animable"></path><path d="M353.5,232.74h-7.11c-3.05,0-9.15-2-9.49,1.35s6.78,5.42,10.16,5.42,5.42-1.35,9.49.68,6.44,3.39,6.44,3.39l-4.75-7.46Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 349.939px 237.864px;" id="elovgte5ycv7n" class="animable"></path><path d="M381.62,250.35s-6.44-13.89-9.49-18.29-21-7.79-23-7.79-7.12,11.18-6.44,13.89,2-.34,3-2,4.74-6.43,4.74-6.43,5.76,9.48,8.13,14.56,7.12,5.76,9.83,6.44S381.62,250.35,381.62,250.35Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 362.124px 237.614px;" id="elj2trtj87xmg" class="animable"></path><path d="M365,230s-6.44-8.47-9.83-7.12-8.8,17.62-9.48,19.65,3.39.68,4.06-1,6.78-10.5,6.78-10.5l5.42,3.39" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 355.307px 233.142px;" id="elq9abqmmut4g" class="animable"></path><path d="M369.76,230s-6.77-5.76-9.15-5.09-10.84,17.28-9.48,18,4.06-.68,5.42-2.71,4.06-6.78,4.06-6.78l5.09,3.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 360.371px 233.979px;" id="el2f9bfcf2u0s" class="animable"></path><path d="M373.07,234.66s-3.31-6.67-5.68-5.65-10.5,13.55-8.13,13.55,9.49-7.45,9.49-7.45-.68,5.76,0,8.8" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 365.951px 236.407px;" id="el58r5maeiczk" class="animable"></path><g id="elt6uhndx31cs"><rect x="274.69" y="248.17" width="88.89" height="2.75" style="fill: gray; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 319.135px 249.545px; transform: rotate(180deg);" class="animable"></rect></g><polygon points="209.79 190.35 299.07 190.35 317.16 250.92 227.88 250.92 209.79 190.35" style="fill: gray; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 263.475px 220.635px;" id="eloqb8g52z62" class="animable"></polygon><line x1="172.24" y1="250.92" x2="487.67" y2="250.92" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 329.955px 250.92px;" id="el12jw18klnetc" class="animable"></line></g><g id="freepik--Cat--inject-38" class="animable animator-hidden" style="transform-origin: 430.368px 201.465px;"><path d="M412,218.41s1.47,15.63.59,20.65-3.25,5.6-3.84,8,3.84,2.07,6.49,1.77,5.6-13,8.85-28.61" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 416.393px 233.724px;" id="el2eh4qyrikwl" class="animable"></path><path d="M435.53,246.87s-6.72.79-6.92,2.57,1.18,3.16,6.32,3.36,18.38-.39,20.56-1.58-4.94-3-9.29-3.56S435.53,246.87,435.53,246.87Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 442.243px 249.854px;" id="elye8qr1tq3w" class="animable"></path><path d="M407.24,184.78s-7.08,5.31-7.67,17.41S409,223.42,414,225.49s11.21,4.13,13,5.6,2.22,10,4.72,13.87c3.81,5.87,14.16,8.26,27.14,6.78s13.23-15.74,14.45-25.37C474.75,215,468,196,459.74,191s-21.53-3.54-25.66-4.43a17,17,0,0,1-7.38-4.13A17.05,17.05,0,0,0,407.24,184.78Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 436.525px 216.29px;" id="elvopvtpcizf" class="animable"></path><path d="M429.34,182c1.09,3.5-3.33,8-9.86,10s-12.71.84-13.8-2.66,3.32-8,9.86-10S428.25,178.48,429.34,182Z" style="fill: rgb(145, 191, 32); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 417.51px 185.668px;" id="elkoa7n917tv" class="animable"></path><path d="M416.89,195.72a3.52,3.52,0,1,1-4.4-2.32A3.53,3.53,0,0,1,416.89,195.72Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 413.528px 196.765px;" id="elwca3s3pstyk" class="animable"></path><path d="M420.22,216.64s0,14.75-.59,20.94-1.77,7.67-3.54,8.85-2.07,3.25.59,4.13,6.19-.29,7.07-1.47,6.79-16.82,10.92-30.09" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 424.696px 233.754px;" id="eldinhdd9dzkk" class="animable"></path><path d="M471.89,239.16s7.91,4.91,5.55,11.7-28.32,8.26-47.79,8.26-39.82-1.48-38-8,15.93-2.06,29.79-1.18,43.59,1.13,46.32-2.65A36.67,36.67,0,0,0,471.89,239.16Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 434.708px 249.14px;" id="elfqoc3xrjg1i" class="animable"></path><path d="M382.86,159.23a47.63,47.63,0,0,0,4.33,6.68,16.07,16.07,0,0,0,3.27,3.19s3.85-6.27,2.51-8.92S382.86,159.23,382.86,159.23Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 388.057px 163.897px;" id="elu7fqwodvubc" class="animable"></path><path d="M425.54,143.81a18.57,18.57,0,0,1,1.28,6.82c0,4-.85,5.6-.85,5.6l-7.53-3.38S423.22,144.84,425.54,143.81Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 422.63px 150.02px;" id="elldpqxuwnppp" class="animable"></path><path d="M391.65,162.38s-5.12,10.17-1.47,16.67,12,8.76,15.63,9.2,9.7,1.94,15.14-3.07,6.18-5.34,6.18-5.34,7.88-8.18,6.49-17S420.56,152,420.56,152l5-8.19s-7.11,2.44-9.38,4a46.71,46.71,0,0,1-4.39,2.59,25.69,25.69,0,0,0-9.08,1.54,53.8,53.8,0,0,0-9.08,5.33s-11.36.78-10.75,2S391.65,162.38,391.65,162.38Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 408.32px 166.307px;" id="el3ws71x11ppc" class="animable"></path><path d="M406.75,177.88a8.19,8.19,0,0,0,4.29-.77c2.11-1.07,1.25-2.27-.06-2.37a7.75,7.75,0,0,0-4,1.27C406,176.62,405.74,177.12,406.75,177.88Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 409.211px 176.327px;" id="el1v3zepx7bse" class="animable"></path><path d="M407.07,172.59s-4,1.12-4.33,3.44,2.29,3.88,3.9,2.57a5.73,5.73,0,0,0,1.95-2.94s4.09,2.29,5.86.77,2.31-3.67.74-4.77S407.07,172.59,407.07,172.59Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 409.415px 175.205px;" id="elcvy3faoww8f" class="animable"></path><path d="M410.1,171.82s-3.33.67-3.68,1.22,1,2.78,2.28,2.27a3.48,3.48,0,0,0,1.81-2.43A1,1,0,0,0,410.1,171.82Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 408.451px 173.603px;" id="el702yk10y4u7" class="animable"></path><path d="M401.4,168.94c.76,1.51.74,3.06-.06,3.45s-2-.5-2.8-2-.74-3.06,0-3.45S400.64,167.43,401.4,168.94Z" style="fill: rgb(38, 50, 56); transform-origin: 399.959px 169.665px;" id="el9vw9np49j9q" class="animable"></path><path d="M413.49,165.4c.68,1.55.57,3.09-.24,3.45s-2-.62-2.7-2.17-.57-3.09.24-3.44S412.81,163.85,413.49,165.4Z" style="fill: rgb(38, 50, 56); transform-origin: 412.016px 166.046px;" id="el7hwekmhox95" class="animable"></path></g><g id="freepik--Mug--inject-38" class="animable" style="transform-origin: 312.626px 437.46px;"><path d="M324.66,470.89a20.5,20.5,0,0,1-7.24-1.72,2.5,2.5,0,1,1,2-4.6c2.31,1,5.27,1.58,6.07,1.24,1.45-1.63,3.7-11.53.8-16.25a2.31,2.31,0,0,0-1.66-1.3c-1.65-.22-4.09,1.47-4.95,2.28a2.5,2.5,0,0,1-3.41-3.66c.46-.43,4.61-4.18,9-3.58a7.24,7.24,0,0,1,5.25,3.64c4.27,6.94,1.34,20.17-1.93,22.79A6.23,6.23,0,0,1,324.66,470.89Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 324.064px 457.066px;" id="elxy7d8e649p" class="animable"></path><rect x="292.6" y="441.25" width="27.63" height="36.67" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 306.415px 459.585px;" id="eljujzjje327" class="animable"></rect><path d="M295.11,439.24s0-3.05,5.59-6.1,8.66-7.64,5.6-16.29-2.54-14.76,3.57-19.85" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 302.49px 418.12px;" id="elrpbn5savhe" class="animable"></path><path d="M296.38,406.69c.28-3.72,1.95-6.86,5.34-9.69" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 299.05px 401.845px;" id="elz3m5efyc2j" class="animable"></path><path d="M298.16,416.85a37,37,0,0,1-1.35-4.72" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 297.485px 414.49px;" id="elj2x2muovz9n" class="animable"></path><path d="M317.84,419.83a24,24,0,0,0-.85-3c-.16-.47-.32-.93-.46-1.38" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 317.185px 417.64px;" id="elm5oqkvkarfl" class="animable"></path><path d="M305.79,439.24s0-3.05,5.6-6.1c3.68-2,6.25-4.67,6.73-8.7" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 311.955px 431.84px;" id="el4opfndtkc1o" class="animable"></path></g><g id="freepik--Plants--inject-38" class="animable" style="transform-origin: 378.135px 439.095px;"><path d="M367.47,434s-3.1-3.94-6.47-5.62-10.4-3.1-10.4-3.1,6.18-1.4,11-.28,8.16,5.91,8.16,5.91-1.41-2-3.38-7.88-2-18.55-2-18.55a40,40,0,0,1,7,11.81,58.73,58.73,0,0,1,2.81,12.09s-.56-9.84,1.13-15.46,6.46-12.65,6.46-12.65.28,12.36-1.68,19.11-2.82,9.84-2.82,9.84a24.26,24.26,0,0,1,5.91-9.28c4.21-3.93,14.33-7.31,14.33-7.31s-4.78,8.72-7.87,11.53-6.18,5.9-6.18,5.9a16.33,16.33,0,0,1,9.27-2.53c5.91,0,12.93,3.94,12.93,3.94s-20.51-.28-24.45,3.09Z" style="fill: rgb(145, 191, 32); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 378.135px 417.415px;" id="elwe2cxwooko8" class="animable"></path><line x1="371.28" y1="432.48" x2="367.82" y2="430.09" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 369.55px 431.285px;" id="elu4iwp0fvm4j" class="animable"></line><line x1="375.01" y1="434.35" x2="370.22" y2="421.56" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 372.615px 427.955px;" id="elf983af0bcm7" class="animable"></line><line x1="374.48" y1="435.95" x2="377.68" y2="417.3" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 376.08px 426.625px;" id="elryfpu16xk08" class="animable"></line><line x1="375.01" y1="434.35" x2="384.07" y2="423.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 379.54px 428.755px;" id="elqd3jxs80ja" class="animable"></line><line x1="373.24" y1="433.2" x2="386.47" y2="429.82" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 379.855px 431.51px;" id="eldmfuih8bik" class="animable"></line><path d="M391.05,477.92H363l-1.27-10.19a95.45,95.45,0,0,1-.13-22.41l1.4-12.45h28.1l1.38,12.18a94.74,94.74,0,0,1-.1,22.39Z" style="fill: rgb(38, 50, 56); transform-origin: 377.049px 455.395px;" id="eli9iql4v43oq" class="animable"></path><polyline points="392.91 458.78 388.7 433.2 383.07 477.33 373.24 433.2 367.33 477.9 362.95 432.87" style="fill: rgb(38, 50, 56); stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 377.93px 455.385px;" id="elgoqnmyp2th" class="animable"></polyline><path d="M391.05,477.92H363l-1.27-10.19a95.45,95.45,0,0,1-.13-22.41l1.4-12.45h28.1l1.38,12.18a94.74,94.74,0,0,1-.1,22.39Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 377.049px 455.395px;" id="elco2zszib1pw" class="animable"></path></g><g id="freepik--Clock--inject-38" class="animable" style="transform-origin: 132.46px 268px;"><circle cx="132.46" cy="268" r="36.5" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 132.46px 268px;" id="el13thfs954a89" class="animable"></circle><circle cx="132.46" cy="268" r="29.2" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 132.46px 268px;" id="el8mjelkl4alk" class="animable"></circle><path d="M127.91,268a4.55,4.55,0,1,0,4.55-4.54A4.55,4.55,0,0,0,127.91,268Z" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 132.46px 268.01px;" id="el4ltesspam3n" class="animable"></path><line x1="132.46" y1="272.54" x2="132.46" y2="289.75" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 132.46px 281.145px;" id="ely1qwaobeec" class="animable"></line><line x1="137" y1="268" x2="147.69" y2="268" style="fill: none; stroke: rgb(178, 178, 178); stroke-miterlimit: 10; transform-origin: 142.345px 268px;" id="eltm9tlnizbu" class="animable"></line></g><g id="freepik--character-1--inject-38" class="animable" style="transform-origin: 224.515px 368.237px;"><line x1="437" y1="477.92" x2="12.03" y2="477.92" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 224.515px 477.92px;" id="elvh45i894o5" class="animable"></line><path d="M207.65,349s-2.67,18.3,0,21.74,8.77,6.1,17.54,8.77,14.49-3.06,22.87,6.48,15.26,33.93,19.83,41.56S277.81,447,279,455.81s-2.67,13.72-10.3,14.87-21-17.54-22.49-20.21S237.39,439,237.39,439s-4.2,30.89-4.2,32.41.38,6.48.38,6.48H123.76s8.39-45.75,10.67-61.77,1.15-26.69,10.3-32.41,17.54-4.19,23.64-6.1,9.91-3.43,10.3-6.86.38-19.45.38-19.45Z" style="fill: rgb(145, 191, 32); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 201.486px 413.445px;" id="el262kbjj1q6u" class="animable"></path><polyline points="127.72 459.88 77.5 473.1 81.47 477.94 138.74 477.94" style="fill: rgb(145, 191, 32); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 108.12px 468.91px;" id="elcdgau4cvbvm" class="animable"></polyline><path d="M71.1,468.05a18.34,18.34,0,0,0-14.9-2c-8.13,2.37-12.2,9.49-12.2,11.86H78.22A14.84,14.84,0,0,0,71.1,468.05Z" style="fill: gray; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 61.11px 471.6px;" id="el91y2gq0v2p8" class="animable"></path><path d="M50.1,459.92s-4.41,6.44-4.41,8.81-2.37,4.74,1,5.76,5.42-10.84,5.42-12.19S50.1,459.92,50.1,459.92Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 48.4952px 467.236px;" id="elbp9am9ud6r" class="animable"></path><path d="M56.2,459.59s-4.75-1-6.1.33-3.73,13.22-3.39,14.57,3.73,1.69,4.74.34S56.2,459.59,56.2,459.59Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 51.4386px 467.459px;" id="elktz966ptue" class="animable"></path><path d="M90.76,469.8l-8-.91a13.24,13.24,0,0,0-1.48-1.51A28.72,28.72,0,0,0,76.52,465s-14.23-5.09-17.28-7.12-4.74,2-5.75,4.41-3.39,10.84-3.39,13.21,3.72,3.38,4.4.67,6.1-11.51,6.1-11.51l7.11,2.71s.68,1-2.37,3.05-7.45,6.43-6.1,7.11,5.42.34,6.78-1,8.47-3,8.47-3,6.44,4.07,7.79,4.41a15.63,15.63,0,0,0,2.64.16h8.26A8.71,8.71,0,0,0,90.76,469.8Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 71.7603px 467.716px;" id="elk760dl36u5n" class="animable"></path><path d="M66.21,469.8s3-3.42,5.43-3.83" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 68.925px 467.885px;" id="eldyeshddro1r" class="animable"></path><path d="M263,442.11a97.93,97.93,0,0,1,10.63,4.15c4.93,2.33,6.75,8,6,15.05s-5.71,12.46-13,10.38-11.16-8-11.42-12.72S252.84,443.66,263,442.11Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 267.324px 457.125px;" id="elu9iqmo4lqfm" class="animable"></path><path d="M185.91,401.66c-17.16-.61-28.29-11.18-34.94-20.86,6.69-2.24,12.72-1.7,17.4-3.16,6.1-1.91,9.91-3.43,10.3-6.86s.38-19.45.38-19.45l28.6-2.29s-2.67,18.3,0,21.74,8.77,6.1,17.54,8.77c3.84,1.16,7.09.72,10.25.66C230.29,385.83,212.61,402.61,185.91,401.66Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.205px 375.369px;" id="el0vuh38xi69f" class="animable"></path><path d="M179,362.79a39.42,39.42,0,0,0,7.1,5.45c4.58,2.58,12.42.29,14.71-2.57,1.12-1.4,3.43-4.16,5.9-7.48.35-4.83,1-9.15,1-9.15l-28.6,2.29S179.05,357.34,179,362.79Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.355px 359.202px;" id="elv03h1fz816" class="animable"></path><path d="M266.34,408.63s-15.57,20.5-17.13,29.07S242.72,467,242.72,467s-15.05,6.49-24.65,6.75-26.21-1.3-26.21-1.3S202.5,445,206.65,431.21s5.19-21.54,5.19-21.54,23.62,3.11,37.11,0L269.19,405Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 230.525px 439.39px;" id="elq3z69ojqq6" class="animable"></path><path d="M265.6,451.61s-1.9-24-4.19-24.78-16-2.67-19.83-1.91-5,2.29-1.9,3.05,8.38,1.53,10.67,1.91a68.55,68.55,0,0,1,7.63,2.29s-8.39,1.14-11.82,1.14-11.44,3.43-11.82,5a3.59,3.59,0,0,0,.38,2.67,4.39,4.39,0,0,0,.06,2.39c.38,1.53,9.47.77,11.76,1.15S253.4,446,253.4,446s-13.34-.76-13.34,1.91,5.71,2.28,8,2.28a15.38,15.38,0,0,1,7.63,3.05c1.14,1.15.76,7.13,4.19,8.28a18.18,18.18,0,0,0,4.58,1.14" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 249.917px 443.702px;" id="elm34ugqx6ctn" class="animable"></path><path d="M234.72,440.94s15.25-3.44,22.88.38" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 246.16px 440.419px;" id="elbo6mor1bu1p" class="animable"></path><path d="M152,420.35s-6.1,21.35-4.95,29,4.57,16.39,4.95,17.54-1.34,10.19-1.34,10.19" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 149.48px 448.715px;" id="el2l63rf4uhwp" class="animable"></path><path d="M139.43,302.14c3.43-3.43,0-5.34.38-9.15s4.19-5.72,6.1-6.48,1.14-2.67,1.53-6.87,4.95-5.72,8-6.86,1.15-3,2.67-6.1,9.92-2.29,9.92-2.29,1.9-3.43,4.19-3.43,3.81,3.05,6.86.38,5.72-3.81,9.92-2.29a30.32,30.32,0,0,0,4.17,1.32,30,30,0,0,0,4.18-1.32c4.19-1.52,6.86-.38,9.91,2.29s4.58-.38,6.87-.38,4.19,3.43,4.19,3.43,8.39-.76,9.92,2.29-.39,4.95,2.66,6.1,7.63,2.67,8,6.86-.38,6.1,1.53,6.87,5.72,2.66,6.1,6.48-3,5.72.38,9.15,6.86,6.1,3.81,8.39-6.1,3.05-5.72,6.48,4.2,7.63,1.15,9.53-6.1,1.91-6.1,5.34,1.14,8.39-2.29,9.15-8.39,0-8.39,2.29-.38,6.48-5.72,5.72-7.24-2.29-8.39.76-3.81,5-6.86,4.58-7.25-.76-9.92,1.52a9.25,9.25,0,0,1-4.54,1.88v.13c-.26,0-.52,0-.78,0s-.52,0-.78,0v-.13a9.33,9.33,0,0,1-4.54-1.88c-2.67-2.28-6.86-1.9-9.91-1.52s-5.72-1.53-6.86-4.58-3.05-1.52-8.39-.76-5.72-3.43-5.72-5.72-5-1.52-8.39-2.29-2.29-5.72-2.29-9.15-3-3.43-6.1-5.34.76-6.1,1.14-9.53-2.67-4.19-5.72-6.48S136,305.57,139.43,302.14Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.158px 308.14px;" id="elfm4c3rjooia" class="animable"></path><path d="M170,323.21s-4.34-6.51-6.95-3.47-1.73,10.85,1.74,14.76,7.37,2.6,7.37,2.6" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 166.848px 328.121px;" id="elr8tg8jd7psh" class="animable"></path><path d="M216.41,322.88s5.07-6,7.3-2.64.45,11-3.45,14.45-7.63,1.73-7.63,1.73" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 218.658px 328.033px;" id="el7ip004i9a35" class="animable"></path><path d="M214.6,307.48a6.91,6.91,0,0,1-5.72,1.71,17.77,17.77,0,0,1-5.43-1.71s-3.43,2.29-6,1.43-5.44-1.72-5.44-1.72a8.85,8.85,0,0,1-6.29,1.15c-4-.58-5.15-1.43-5.15-1.43s-2.29,2-4.57,2a33.6,33.6,0,0,1-4.29-.29,5.71,5.71,0,0,1-2,.57h-2s-.85,17.16,2,29.46,14,21.45,18.59,24,12.43.29,14.72-2.57,9.59-11.44,13-18.88,4.58-29.17,4.58-30.6S216,310.91,214.6,307.48Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 194.096px 335.335px;" id="el91apu5ypqie" class="animable"></path><path d="M198.46,317.49a2.09,2.09,0,0,0-1.27,2c.1,3.24.58,10.94,2.83,12.29,2.86,1.71,16.21,3,19.45.85,1.71-1.14,5.43-11.15,4-14S209.9,312.79,198.46,317.49Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 210.49px 324.395px;" id="elqq3ypabteoo" class="animable"></path><path d="M189.63,317.49a2.09,2.09,0,0,1,1.27,2c-.1,3.24-.58,10.94-2.83,12.29-2.86,1.71-16.21,3-19.45.85-1.71-1.14-5.43-11.15-4-14S178.19,312.79,189.63,317.49Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 177.601px 324.395px;" id="eliwbaizw3bcb" class="animable"></path><path d="M198.46,317.49s-5.3-1.15-8.74.57" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 194.09px 317.587px;" id="el9p4wftonyci" class="animable"></path><line x1="196.59" y1="320.92" x2="191.15" y2="320.92" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.87px 320.92px;" id="elha065jf774p" class="animable"></line><ellipse cx="205.17" cy="325.21" rx="1.72" ry="3.15" style="fill: rgb(38, 50, 56); transform-origin: 205.17px 325.21px;" id="ely1cqqj2xfjf" class="animable"></ellipse><ellipse cx="185.72" cy="325.21" rx="1.72" ry="3.15" style="fill: rgb(38, 50, 56); transform-origin: 185.72px 325.21px;" id="elmif51oduy6" class="animable"></ellipse><path d="M196,327.21s-.29,4,1.14,5.43,3.14,2.58,1.14,4-3.71,2.57-6.57,0" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 195.451px 332.688px;" id="elxq9wadqoj4p" class="animable"></path><path d="M201.16,342.65s-7.15,3.44-13.44-1.14" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 194.44px 342.7px;" id="elgzp6zcr40uj" class="animable"></path><path d="M210.6,318.92a8.44,8.44,0,0,0-8-1.15" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 206.6px 318.08px;" id="el3kwqcao75u4" class="animable"></path><path d="M187.15,318.63s-6.58-3.43-10.3,2" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 182px 319.096px;" id="el8804cjcwt5a" class="animable"></path><polyline points="210.89 373.25 188.58 428.16 175.42 375.54" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.155px 400.705px;" id="elf9qdmea1j9e" class="animable"></polyline><path d="M185.72,430.74a3.15,3.15,0,1,0,3.15-3.15A3.15,3.15,0,0,0,185.72,430.74Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 188.87px 430.74px;" id="elyh2l1d109m" class="animable"></path><g id="elqt3e4whmcqm"><rect x="117.79" y="475.25" width="86.18" height="2.67" style="fill: gray; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 160.88px 476.585px; transform: rotate(180deg);" class="animable"></rect></g><polygon points="54.88 419.2 141.43 419.2 158.97 477.92 72.42 477.92 54.88 419.2" style="fill: gray; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 106.925px 448.56px;" id="elohnmpz8bqmp" class="animable"></polygon></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg>
         </div>
         <div class="col-md-12 header-title">
            {{--
            <h1 class="text-uppercase">How It Works
            </h1>
            --}}
            <ul class="nav nav-tabs custom">
               <li class="active"><a data-toggle="tab" href="#opp" data-img="{{asset('site/images/work.png')}}" class="btn_img btn btn-light btn-work btn-lg">I want to Work</a></li>

               <li  ><a data-toggle="tab" href="#hire" data-img="{{asset('site/images/consultants-page.png')}}" class="btn_img btn btn-light btn-hire btn-lg">I want to Hire</a></li>
            </ul>
            <p></p>
         </div>
      </div>
   </div>
</section>
<div class="tab-content">
   <div id="hire" class="tab-pane  ">
      <section class="section-feature mt-5" id="section-feature" >
         <div class="container">
            <div class="row">

               <h2 class="SectionFeature-heading pl-4">How can we help? </h2>
               <p class="text-center SectionFeature-body">Are you ready to take your business to the next level? Select the industry you are in to find an experienced, trusted, and professional consultant. Stop struggling and second-guessing and find someone who can help you. </p>
            </div>
         </div>
      </section>
      <section class="section-feature mt-5" id="section-feature" >
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <h2 class="SectionFeature-heading">What Can You Expect? </h2>
                  <p class="SectionFeature-body">
                     Experience expert advice in every industry. We understand the importance of finding a proven professional who knows your industry inside and out. Let these experts put you on the fast track for success by providing incredible advice on the number one consulting platform - PersonalSite!
                  </p>
                  <a href="{{url('register')}}"  class="btn btn-default mt-3 mb-3">Post a Project  <i class="fa fa-long-arrow-alt-right"></i></a>
               </div>
               <div class="col-lg-6">
                  <img class="section-feature-image" width="100%" src="{{ asset('/site/images/project.png')}}" alt="Illustration of freelancer around the world.">
               </div>
            </div>
         </div>
      </section>
      <section class="feature-icons-sections" id="feature-icons-sections" >
         <div class="container">
            <div class="SectionFeature-content SectionFeature-content--center">
               <div class="Grid Grid--horizontalCenter">
                  <div class="col-lg-10 m-auto">
                     <h2 class="text-center">
                        PersonalSite has become a reliable leader in the consulting industry after serving countless businesses worldwide. PersonalSite empowers business leaders to find and hire the best consultant for their projects. Enjoy massive talent with over 100 consulting firms and over 10,000 independent consultants to choose from. Quickly and easily send out offers and select the best candidate for the job.
                     </h2>
                     <div class="row">
                        <div class="col-lg-4">
                           <figure class="PageHowItWorks-feature-figure">
                              <div class="PageHowItWorks-feature-imgContainer">
                                 <img class="section-figure-icon" src="{{ asset('/site/images/feature-jobs.svg')}}" alt="Small jobs, large jobs, anything in between">
                              </div>
                              <figcaption class="PageHowItWorks-feature-caption">
                                 Small jobs, large jobs, <br>anything in between
                              </figcaption>
                           </figure>
                        </div>
                        <div class="col-lg-4">
                           <figure class="PageHowItWorks-feature-figure">
                              <div class="PageHowItWorks-feature-imgContainer">
                                 <img class="section-figure-icon" src="https://www.f-cdn.com/assets/img/how-it-works/features/feature-type-638ff46b.svg" alt="Jobs that are on fixed price, or hourly terms">
                              </div>
                              <figcaption class="PageHowItWorks-feature-caption">
                                 Jobs that are on fixed price,<br> or hourly terms
                              </figcaption>
                           </figure>
                        </div>
                        <div class="col-lg-4">
                           <figure class="PageHowItWorks-feature-figure">
                              <div class="PageHowItWorks-feature-imgContainer">
                                 <img class="section-figure-icon" src="https://www.f-cdn.com/assets/img/how-it-works/features/feature-requirements-7741d45d.svg" alt="Work that requires specific skill sets, costs, or scheduling requirements.">
                              </div>
                              <figcaption class="PageHowItWorks-feature-caption">
                                 Work that requires specific <br>skill sets, costs, or <br>scheduling requirements.
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="hire-cta">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <img class="SectionFeature-figure-image PageHowItWorks-image" width="100%" src="{{ asset('/site/images/post-project.png')}}" alt="How does it work?">
               </div>
               <div class="col-lg-6 text-left">
                  <h2 class="mb-4">How does it work?</h2>
                  <ol class="PageHowItWorks-howTo-list">
                     <li class="PageHowItWorks-howTo-item">
                        <div class="PageHowItWorks-howTo-content">
                           <span class="PageHowItWorks-howTo-title">Post a project</span>
                           <div class="PageHowItWorks-howTo-desc">
                              Posting a project is free and straightforward. Receive offers from qualified consultants on our site or browse the talent and send out offers as needed.
                           </div>
                        </div>
                     </li>
                     <li class="PageHowItWorks-howTo-item">
                        <div class="PageHowItWorks-howTo-content">
                           <span class="PageHowItWorks-howTo-title">Choose the perfect Consultant</span>
                           <ul class="PageHowItWorks-howTo-desc PageHowItWorks-howTo-subList">
                              <li>Browse consultant profiles</li>
                              <li>Compare and select the best one</li>
                              <li>Connect via PersonalSite/LinkedIn</li>
                              <li>Select The Consultant For Your Project </li>
                           </ul>
                        </div>
                     </li>
                     <li class="PageHowItWorks-howTo-item">
                        <div class="PageHowItWorks-howTo-content">
                           <span class="PageHowItWorks-howTo-title">Pay with your terms</span>
                           <div class="PageHowItWorks-howTo-desc">
                              Pay off-platform under your terms and conditions for maximum convenience.
                           </div>
                        </div>
                     </li>
                  </ol>
                  <a href="{{url('register')}}"  class="btn btn-default">Post a Project  <i class="fa fa-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
      </section>
      @isset($faqs)
      <section id="faq-questions">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2 class="SectionFeature-heading" > FAQs</h2>

               </div>
               <div class="col-md-12">
               <div class="panel-group" id="accordion">
               @php
                    $count=0;
                  @endphp
                  @foreach($faqs as $faq)

                        @if($faq->type == 'hire')
                        @php
                            $count++;
                        @endphp
                 <div class="accordion" >
                   <div class="panel-heading">
                     <h4 class="panel-title">
                       <a class="h3style" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}">
                        {{$faq->question}} </a>
                     </h4>
                   </div>
                   <div id="collapse{{$faq->id}}" class="panel-collapse collapse @if($count == 1)  in @endif">
                     <div class="answer">
                        {{$faq->answer}}
                     </div>
                   </div>
                 </div>
                 @endif
                 @endforeach

             </div>
               </div>
            </div>


         </div>
         </section>
         @endisset
         <div class="container-fluid container-fluid-p">
            <div class="row">
                 <div class="col-md-12 text-right">
                      <img src="{{asset('site/images/flower.png')}}" class="img-fluid">
                 </div>
          </div>
      </div>
      {{-- <section id="hire-cta">
         <h1>So what are you waiting for?</h1>
         <br>
         <p>Post a project today and get bids from talented freelancers.</p>
         <a href="{{url('register')}}"  class="btn btn-default">Post a Project </a>
      </section> --}}
   </div>
   <div id="opp" class="tab-pane in active ">
      <section class="section-feature lazy mb-5" id="section-feature">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 mt-5">
                  <h2 class="SectionFeature-heading">What Can I Expect At PersonalSite? </h2>
                  <p class="SectionFeature-body">
                     With thousands of businesses coming to PersonalSite, you will have tremendous opportunities and a wide range of gigs available. Build a powerful profile that attracts top-tier clients and send out requests to get found and get paid!
                  </p>
                  <p class="SectionFeature-body"> PersonalSite is here to help consultants like you find work that you love! Sign Up today to see the projects that are available right now! </p>
                  <a href="/register" class="btn btn-default mt-3 mb-3">Sign Up Now <i class="fa fa-long-arrow-alt-right"></i></a>
               </div>
               <div class="col-lg-6 mt-5">
                  <img class="section-feature-image" width="100%"
                     src="{{ asset('/site/images/jobs.png') }}">
               </div>
            </div>
         </div>
      </section>
      <section class="feature-icons-sections lazy" id="feature-icons-sections">
         <div class="container">
            <div class="SectionFeature-content SectionFeature-content--center">
               <div class="Grid Grid--horizontalCenter">
                  <div class="col-lg-10 m-auto">
                     <h2 class="text-center">
                        Advanced Job Search To Help Find Projects That Suit You
                     </h2>
                     <div class="row">
                        <div class="col-lg-3">
                           <figure class="PageHowItWorks-feature-figure">
                              <div class="PageHowItWorks-feature-imgContainer">
                                 <img class="section-figure-icon"
                                    src="{{ asset('/site/images/feature-jobs.svg') }}"
                                    alt="Small jobs, large jobs, anything in between">
                              </div>
                              <figcaption class="PageHowItWorks-feature-caption">
                                 Small jobs, large jobs, <br>anything in between
                              </figcaption>
                           </figure>
                        </div>
                        <div class="col-lg-3">
                           <figure class="PageHowItWorks-feature-figure">
                              <div class="PageHowItWorks-feature-imgContainer">
                                 <img class="section-figure-icon"
                                    src="https://www.f-cdn.com/assets/img/how-it-works/features/feature-type-638ff46b.svg"
                                    alt="Jobs that are on fixed price, or hourly terms">
                              </div>
                              <figcaption class="PageHowItWorks-feature-caption">
                                 Fixed price or hourly projects
                              </figcaption>
                           </figure>
                        </div>
                        <div class="col-lg-3">
                           <figure class="PageHowItWorks-feature-figure">
                              <div class="PageHowItWorks-feature-imgContainer">
                                 <img class="section-figure-icon"
                                    src="{{ asset('/site/images/feature-locale.svg') }}"
                                    alt="Jobs that are on fixed price, or hourly terms">
                              </div>
                              <figcaption class="PageHowItWorks-feature-caption">
                                 International and local jobs
                              </figcaption>
                           </figure>
                        </div>
                        <div class="col-lg-3">
                           <figure class="PageHowItWorks-feature-figure">
                              <div class="PageHowItWorks-feature-imgContainer">
                                 <img class="section-figure-icon"
                                    src="https://www.f-cdn.com/assets/img/how-it-works/features/feature-requirements-7741d45d.svg"
                                    alt="Work that requires specific skill sets, costs, or scheduling requirements.">
                              </div>
                              <figcaption class="PageHowItWorks-feature-caption">
                                 Specific skills, price,<br> and schedule requirements
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="how-it-works-opp" class="lazy" >
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <img class="SectionFeature-figure-image PageHowItWorks-image" width="100%"
                     src="{{ asset('/site/images/how-to-opp.png') }}" alt="How does it work?">
               </div>
               <div class="col-lg-6 text-left">
                  <h2>How do I get started?</h2>
                  <ol class="PageHowItWorks-howTo-list">
                     <li class="PageHowItWorks-howTo-item">
                        <div class="PageHowItWorks-howTo-content">
                           <span class="PageHowItWorks-howTo-title">Complete your profile</span>
                           <ul class="PageHowItWorks-howTo-desc PageHowItWorks-howTo-subList">
                              <li>Select your skills and expertise</li>
                              <li>Upload a professional profile photo</li>
                           </ul>
                        </div>
                     </li>
                     <li class="PageHowItWorks-howTo-item">
                        <div class="PageHowItWorks-howTo-content">
                           <span class="PageHowItWorks-howTo-title">Browse jobs that suit your skills, expertise,
                           price, and schedule</span>
                           <div class="PageHowItWorks-howTo-desc">
                              There are jobs available for all skill levels, whether you are new to consulting or an industry expert.
                              Utilize advanced search features and alerts to let you know when relevant jobs are available.
                           </div>
                        </div>
                     </li>
                     <li class="PageHowItWorks-howTo-item">
                        <div class="PageHowItWorks-howTo-content">
                           <span class="PageHowItWorks-howTo-title">Create And Send Powerful Job Applications </span>
                           <div class="PageHowItWorks-howTo-desc">
                              Showcase how you can help a client by providing custom insight, valuable information, and past experience.
                              Create a new application for each job to show you are willing to put in the effort and read their job opportunity.
                           </div>
                        </div>
                     </li>
                     <li class="PageHowItWorks-howTo-item">
                        <div class="PageHowItWorks-howTo-content">
                           <span class="PageHowItWorks-howTo-title">Get awarded and earn</span>
                           <div class="PageHowItWorks-howTo-desc">
                              Get hired for the job and follow the agreed requirements, and get paid for your vital services.
                           </div>
                        </div>
                     </li>
                  </ol>
                  <a href="/register" class="btn btn-default">Get Started <i class="fa fa-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
      </section>
      @isset($faqs)
      <section id="faq-questions">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2 class="SectionFeature-heading"> FAQs</h2>

               </div>
            </div>
             <div class="panel-group" id="accordion">
             @php
                    $count=0;
                  @endphp
                  @foreach($faqs as $faq)

                        @if($faq->type == 'work')
                        @php
                            $count++;
                        @endphp
                 <div class="accordion" >
                   <div class="panel-heading">
                     <h4 class="panel-title">
                       <a class="h3style" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}">
                        {{$faq->question}} </a>
                     </h4>
                   </div>
                   <div id="collapse{{$faq->id}}" class="panel-collapse collapse @if($count == 1)  in @endif">
                     <div class="answer">
                        {{$faq->answer}}
                     </div>
                   </div>
                 </div>
                 @endif
                 @endforeach




             </div>

         </div>
         </section>
         @endisset
         <div class="container-fluid container-fluid-p">
            <div class="row">
                 <div class="col-md-12 text-right">
                      <img src="{{asset('site/images/flower.png')}}" class="img-fluid">
                 </div>
          </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')
<script>
   $('.h3style').click( function(e) {
     $('.collapse').collapse('hide');
     });
    $('body').on('click', '.btn_img', function(){
        var img  = $(this).attr('data-img');
        $('.main_img').attr('src', img);
    });
</script>
@endsection
