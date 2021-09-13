@extends('layouts.site.app')
@section('styles')
<title>Consultants - Consultant Directories</title>
{{--
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
--}}
<style>
   input[type=radio] {
   display:none;
   }
   .cat-label{ cursor:pointer;}
   input[type="radio"]:checked+label{ color:#2667f8; }
   #consultants p{ margin-bottom:10px;}
   .show_hide{ margin-bottom:50px; display:block}
   table.dataTable.no-footer {
   border-bottom: 0px;
   padding-bottom: 20px;
   }
   #example .even {
   background-color: #aabbcc
   }
   #example .odd {
   background-color: #aabbcc
   }
   div#example_info {
   font-size: 16px;
   }
   span.ellipsis {
   position: relative;
   padding: 18px 16px;
   margin-left: -1px;
   line-height: 1.42857143;
   color: #337ab7;
   text-decoration: none;
   background-color: #fff;
   border: 1px solid #ddd;
   }
   a.paginate_button {
   position: relative;
   padding: 18px 16px;
   margin-left: -1px;
   line-height: 1.42857143;
   color: #337ab7;
   text-decoration: none;
   background-color: #fff;
   border: 1px solid #ddd;
   }
   a.paginate_button:hover,
   a.paginate_button:focus,
   a.paginate_button:active,
   a.paginate_button.current
   {
   z-index: 3;
   color: #fff;
   cursor: default;
   background-color: #337ab7;
   border-color: #337ab7;
   }
   .dataTables_wrapper .dataTables_paginate {
   float: right;
   text-align: right;
   padding-top: 30px;
   }
   /* .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
   .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
   .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active
   {
   display:none;
   } */
   section#opp-search {
      padding-top: 25px;
    background: white;
    padding-bottom: 25px;
}
header-title p {

    font-size: 16px;
}
.form-input{
   border: 2px solid #00449b;

    border-radius: 20px 0px 0px 20px;
    outline: none;
}
#showMessage .modal-footer{
    border-top: 1px solid #e9ecef;
}
#showMessage .modal-header{
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
    min-height: auto;
}
/* .header-title h1 {

    font-size: 60px;
} */
@media only screen and (max-width: 768px){
    .search-bar .btn{ display:block}
}
/* .summary {
  font-size: 14px;
  line-height: 1.5;
}

.summary p.collapse[aria-expanded="false"] {
    height: 55px !important;
    overflow: hidden;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.summary p.collapsing {
    min-height: 55px !important;
}

.summary a.collapsed:after  {
    content: 'Show More';
}

.summary a:not(.collapsed):after {
    content: 'Show Less';
} */

#hire-page{
   background:url({{asset('site/images/bg-lines.png')}}), linear-gradient(to right,rgb(169 169 167),rgb(232 232 232),rgb(156 142 142 / 2%),rgb(169 168 168 / 20%));
padding:40px 0px 0px 0px;
height: 550px;
text-align:left
}@media only screen and (max-width: 600px){

   #hire-page{height:auto;}
   }
.more {display: none;}
.header-title h1 {
    color: #00449b;
    font-size: 44px;
    /* text-align: left; */
    margin-top: 100px;
    line-height: 1.2;
}
.search_oppotunities.search_consultants.btn{
   padding: 20px 20px;
                     border-radius: 0px 20px 20px 0px;
   }
@media only screen and (max-width: 767px){
   #hire-page img{
width: 100%;
   }
   #hire-page{
      padding-bottom: 30px;
      text-align: center
   }
   .cpt{
      margin-bottom:10px;
   }
   .form-input{
      border-radius: 0px;
   }
   .search_oppotunities.search_consultants.btn{
      border-radius: 0px;
   }
   .header-title .btn-default{
      /* margin:auto; */
   }
   .header-title h1 {
    color: #00449b;
    font-size: 30px;
    margin-top: 00px;
    line-height: 1.2;
}
.search-bar h3{
   font-size:24px!important;
   text-align: center
}

}
.slick-slide {
  height: auto;
}

</style>
@endsection
@section('content')
<section id="hire-page">
   <div class="container">
      <div class="row">
         <div class="col-md-7 header-title">

            <h1 class="text-uppercase">Elevate Your Business With Professional Advice &nbsp;</h1>
            {{-- <p>Unlock Your Full Business Potential With Powerful And Professional Consulting Advice</p> --}}
            @if(Auth::user() != null && Auth::user()->hasRole('consultant'))
                <button type="button" class="btn btn-default mr-20" data-toggle="modal" data-target="#showMessage">Post a Project<i class="fa fa-long-arrow-alt-right"></i></a>
             @else
            <a class="btn btn-default mr-20" href="{{url('register')}}">Post a Project<i class="fa fa-long-arrow-alt-right"></i></a>
            @endif

         </div>
         <div class="col-md-5">
        <svg class="animated" id="freepik_stories-consulting" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><style>svg#freepik_stories-consulting:not(.animated) .animable {opacity: 0;}svg#freepik_stories-consulting.animated #freepik--Shadow--inject-91 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomIn;animation-delay: 0s;}svg#freepik_stories-consulting.animated #freepik--character-2--inject-91 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideUp;animation-delay: 0s;}svg#freepik_stories-consulting.animated #freepik--text-balloon--inject-91 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideRight,3s Infinite  linear floating;animation-delay: 0s,1s;}svg#freepik_stories-consulting.animated #freepik--character-1--inject-91 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomOut;animation-delay: 0s;}svg#freepik_stories-consulting.animated #freepik--Table--inject-91 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomOut;animation-delay: 0s;}            @keyframes zoomIn {                0% {                    opacity: 0;                    transform: scale(0.5);                }                100% {                    opacity: 1;                    transform: scale(1);                }            }                    @keyframes slideUp {                0% {                    opacity: 0;                    transform: translateY(30px);                }                100% {                    opacity: 1;                    transform: inherit;                }            }                    @keyframes slideRight {                0% {                    opacity: 0;                    transform: translateX(30px);                }                100% {                    opacity: 1;                    transform: translateX(0);                }            }                    @keyframes floating {                0% {                    opacity: 1;                    transform: translateY(0px);                }                50% {                    transform: translateY(-10px);                }                100% {                    opacity: 1;                    transform: translateY(0px);                }            }                    @keyframes zoomOut {                0% {                    opacity: 0;                    transform: scale(1.5);                }                100% {                    opacity: 1;                    transform: scale(1);                }            }        </style><g id="freepik--Shadow--inject-91" class="animable" style="transform-origin: 250px 415.69px;"><ellipse id="freepik--path--inject-91" cx="250" cy="415.69" rx="193.89" ry="11.32" style="fill: rgb(245, 245, 245); transform-origin: 250px 415.69px;" class="animable"></ellipse></g><g id="freepik--character-2--inject-91" class="animable" style="transform-origin: 345.649px 287.12px;"><path d="M430.35,362.91l5.08-80.86a52.16,52.16,0,0,0-52.06-55.43h0a52.16,52.16,0,0,0-52.07,49.22L326,370.28H422.5A7.87,7.87,0,0,0,430.35,362.91Z" style="fill: rgb(145, 191, 32); transform-origin: 380.766px 298.45px;" id="el5ehbtg4wxmq" class="animable"></path><g id="elnkpgmuw1m7"><path d="M430.53,360l4.9-77.93a52.16,52.16,0,0,0-52.06-55.43h0a52.16,52.16,0,0,0-52.07,49.22L326,370.28h93.59A11,11,0,0,0,430.53,360Z" style="opacity: 0.1; transform-origin: 380.766px 298.46px;" class="animable"></path></g><path d="M414.69,370.28l5.54-88.23a52.17,52.17,0,0,0-52.06-55.43h0a52.15,52.15,0,0,0-52.07,49.22l-5.33,94.44Z" style="fill: rgb(145, 191, 32); transform-origin: 365.551px 298.45px;" id="elxjkgto3vqjp" class="animable"></path><path d="M416.35,385.47h1.33a1.51,1.51,0,0,0,1.42-1.35l2-13.83H413l2,13.83A1.52,1.52,0,0,0,416.35,385.47Z" style="fill: rgb(145, 191, 32); transform-origin: 417.05px 377.88px;" id="elon19dtpuaxn" class="animable"></path><g id="elyb5wevsd2b"><path d="M416.35,385.47h1.33a1.51,1.51,0,0,0,1.42-1.35l2-13.83H413l2,13.83A1.52,1.52,0,0,0,416.35,385.47Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 417.05px 377.88px;" class="animable"></path></g><path d="M285.7,385.47h1.2a1.44,1.44,0,0,0,1.29-1.35L290,370.29h-7.36l1.79,13.83A1.44,1.44,0,0,0,285.7,385.47Z" style="fill: rgb(145, 191, 32); transform-origin: 286.32px 377.88px;" id="elx9y60i6f2o" class="animable"></path><g id="el98hzaqbtn4"><path d="M285.7,385.47h1.2a1.44,1.44,0,0,0,1.29-1.35L290,370.29h-7.36l1.79,13.83A1.44,1.44,0,0,0,285.7,385.47Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 286.32px 377.88px;" class="animable"></path></g><path d="M323.31,385.47h1.21a1.44,1.44,0,0,0,1.29-1.35l1.78-13.83h-7.35L322,384.12A1.44,1.44,0,0,0,323.31,385.47Z" style="fill: rgb(145, 191, 32); transform-origin: 323.915px 377.88px;" id="elyb0kbxvksrk" class="animable"></path><g id="el87ruui77uvs"><path d="M323.31,385.47h1.21a1.44,1.44,0,0,0,1.29-1.35l1.78-13.83h-7.35L322,384.12A1.44,1.44,0,0,0,323.31,385.47Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 323.915px 377.88px;" class="animable"></path></g><path d="M375.85,385.47h1.33a1.53,1.53,0,0,0,1.43-1.35l2-13.83h-8.11l2,13.83A1.51,1.51,0,0,0,375.85,385.47Z" style="fill: rgb(145, 191, 32); transform-origin: 376.555px 377.88px;" id="elz9k6sjzojej" class="animable"></path><g id="el41efpihz788"><path d="M375.85,385.47h1.33a1.53,1.53,0,0,0,1.43-1.35l2-13.83h-8.11l2,13.83A1.51,1.51,0,0,0,375.85,385.47Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 376.555px 377.88px;" class="animable"></path></g><path d="M331.82,337H296.26l-2.35-34.28-.51-7.36h0l-.23-3.39a22.55,22.55,0,0,0-.35-2.65c0-.19-.08-.4-.12-.59a2,2,0,0,0-.11-.42,20.51,20.51,0,0,0-5.41-9.21,17.46,17.46,0,0,0-11.11-5h33.45c.36,0,.73,0,1.1,0a17.35,17.35,0,0,1,12.11,5,20.53,20.53,0,0,1,5.42,9.21,2,2,0,0,1,.11.42,22.57,22.57,0,0,1,.47,3.24l.23,3.39h0Z" style="fill: rgb(145, 191, 32); transform-origin: 303.945px 305.55px;" id="elfug1jyj6b3j" class="animable"></path><g id="el2tccmoasiso"><path d="M331.82,337H296.26l-2.35-34.28-.51-7.36h0l-.23-3.39a22.55,22.55,0,0,0-.35-2.65c0-.19-.08-.4-.12-.59a2,2,0,0,0-.11-.42,20.51,20.51,0,0,0-5.41-9.21,17.46,17.46,0,0,0-11.11-5h33.45c.36,0,.73,0,1.1,0a17.35,17.35,0,0,1,12.11,5,20.53,20.53,0,0,1,5.42,9.21,2,2,0,0,1,.11.42,22.57,22.57,0,0,1,.47,3.24l.23,3.39h0Z" style="opacity: 0.1; transform-origin: 303.945px 305.55px;" class="animable"></path></g><g id="elji7p158uohb"><g style="opacity: 0.1; transform-origin: 370.285px 327.83px;" class="animable"><path d="M360,318.7h14.28c3.48,0,6.29,2.2,6.29,4.91v8.44c0,2.72-2.81,4.91-6.29,4.91H360Z" id="elyrc7stsroy" class="animable" style="transform-origin: 370.285px 327.83px;"></path></g></g><g id="elkip1r9izo6e"><rect x="296.26" y="318.7" width="73.74" height="18.27" rx="5.42" style="fill: rgb(145, 191, 32); transform-origin: 333.13px 327.835px; transform: rotate(180deg);" class="animable"></rect></g><path d="M450,294.27a20.26,20.26,0,0,1-16.81,20L429.54,363c-.32,4.14-3.33,7.31-6.93,7.31H383.39c3.6,0,6.6-3.17,6.92-7.31l2-26L394,314.24a20.18,20.18,0,0,0,14.53-10.66,11,11,0,0,0,.53-1.09,20,20,0,0,0,1.74-8.22,20.81,20.81,0,0,0-.42-4.13c-.11-.54-.25-1.08-.4-1.61a20.55,20.55,0,0,0-3.36-6.59h0A20.31,20.31,0,0,0,390.55,274h39.22a19.9,19.9,0,0,1,9.05,2.14,20.11,20.11,0,0,1,7,5.77h0A20.21,20.21,0,0,1,450,294.27Z" style="fill: rgb(145, 191, 32); transform-origin: 416.695px 322.155px;" id="el5debcfv0n1p" class="animable"></path><g id="elhrjnee3lg"><path d="M450,294.27a20.26,20.26,0,0,1-16.81,20L429.54,363c-.32,4.14-3.33,7.31-6.93,7.31H383.39c3.6,0,6.6-3.17,6.92-7.31l2-26L394,314.24a20.18,20.18,0,0,0,14.53-10.66,11,11,0,0,0,.53-1.09,20,20,0,0,0,1.74-8.22,20.81,20.81,0,0,0-.42-4.13c-.11-.54-.25-1.08-.4-1.61a20.55,20.55,0,0,0-3.36-6.59h0A20.31,20.31,0,0,0,390.55,274h39.22a19.9,19.9,0,0,1,9.05,2.14,20.11,20.11,0,0,1,7,5.77h0A20.21,20.21,0,0,1,450,294.27Z" style="opacity: 0.1; transform-origin: 416.695px 322.155px;" class="animable"></path></g><path d="M410.81,294.28c0,10-6.59,18.33-15.24,20L392.23,363c-.29,4.14-3,7.32-6.28,7.32H281.21c-3.26,0-6-3.18-6.28-7.32l-3.35-48.81c-8.48-1.78-14.89-10-14.89-19.88a21.56,21.56,0,0,1,3.39-11.71,19,19,0,0,1,6.77-6.41,16.75,16.75,0,0,1,8.21-2.15,17.44,17.44,0,0,1,12.12,5,20.48,20.48,0,0,1,5.41,9.2,2.18,2.18,0,0,1,.11.44,22,22,0,0,1,.47,3.23l.24,3.39h0L296.26,337H370.9l3.09-45c.44-6.36,3.54-11.66,7.84-14.17a17,17,0,0,1,9.51-3.69,10,10,0,0,1,1.1-.05,16.63,16.63,0,0,1,8,2,1.55,1.55,0,0,1,.22.12,18.84,18.84,0,0,1,6.36,5.77h0A21.63,21.63,0,0,1,410.81,294.28Z" style="fill: rgb(145, 191, 32); transform-origin: 333.75px 322.18px;" id="el8p0n85q0np3" class="animable"></path><g id="el12iocuylfwub"><path d="M369.17,370.29h-88c-3.26,0-6-3.18-6.28-7.32l-3.35-48.81c-8.48-1.78-14.89-10-14.89-19.88a21.56,21.56,0,0,1,3.39-11.71,19,19,0,0,1,6.77-6.41,16.75,16.75,0,0,1,8.21-2.15,17.44,17.44,0,0,1,12.12,5,20.48,20.48,0,0,1,5.41,9.2,2.18,2.18,0,0,1,.11.44,22,22,0,0,1,.47,3.23l.24,3.39h0L296.26,337H370.9Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 313.775px 322.15px;" class="animable"></path></g><path d="M357.76,231.72c-1.74,1-3.33,1.83-5,2.68s-3.31,1.63-5,2.41c-3.36,1.53-6.76,3-10.26,4.27a112.83,112.83,0,0,1-10.76,3.4,68.84,68.84,0,0,1-11.56,2.07l-.83.08-.39,0c-3.53-.41-6.66-1-9.8-1.7s-6.25-1.39-9.33-2.18-6.14-1.6-9.2-2.48-6.09-1.79-9.12-2.82l1.39-6.94c6.29.4,12.57,1,18.79,1.65l9.29.93c3.06.3,6.19.56,8.93.66l-1.21,0a67.13,67.13,0,0,0,9.26-2.34c3.13-1,6.26-2.14,9.39-3.48s6.23-2.72,9.31-4.19c1.58-.72,3.11-1.48,4.61-2.23s3.1-1.55,4.47-2.26Z" style="fill: rgb(38, 50, 56); transform-origin: 317.135px 232.94px;" id="elu100psmlw9" class="animable"></path><g id="elypzmz36guee"><path d="M357.76,231.72c-1.74,1-3.33,1.83-5,2.68s-3.31,1.63-5,2.41c-3.36,1.53-6.76,3-10.26,4.27a112.83,112.83,0,0,1-10.76,3.4,68.84,68.84,0,0,1-11.56,2.07l-.83.08-.39,0c-3.53-.41-6.66-1-9.8-1.7s-6.25-1.39-9.33-2.18-6.14-1.6-9.2-2.48-6.09-1.79-9.12-2.82l1.39-6.94c6.29.4,12.57,1,18.79,1.65l9.29.93c3.06.3,6.19.56,8.93.66l-1.21,0a67.13,67.13,0,0,0,9.26-2.34c3.13-1,6.26-2.14,9.39-3.48s6.23-2.72,9.31-4.19c1.58-.72,3.11-1.48,4.61-2.23s3.1-1.55,4.47-2.26Z" style="opacity: 0.1; transform-origin: 317.135px 232.94px;" class="animable"></path></g><path d="M276.63,226.7a17.09,17.09,0,0,0-4.84-2.36l-2.59,10.11,7.76,3.26.88-1.08A6.89,6.89,0,0,0,276.63,226.7Z" style="fill: rgb(255, 195, 189); transform-origin: 274.311px 231.025px;" id="el2vnvyyevo06" class="animable"></path><polygon points="269.2 234.45 271.79 224.34 264.55 220.39 262.37 227.51 269.2 234.45" style="fill: rgb(255, 195, 189); transform-origin: 267.08px 227.42px;" id="eltqvak3m7gzi" class="animable"></polygon><g id="ellyw0xqzu48"><path d="M333.41,242h.28l.12,0c3.82-.41,15.05-2.3,23.17-10.31-1.21-2.34-2.87-4.15-4.9-4.56C346.48,226.07,339.62,230.08,333.41,242Z" style="opacity: 0.2; isolation: isolate; transform-origin: 345.195px 234.483px;" class="animable"></path></g><path d="M340,294.27c9.58-25.87,3.28-49.66,4.48-62.83a15,15,0,0,1,12.14-13.38c6.54-1.26,14.63-2.68,22.34-3.72a15.08,15.08,0,0,1,17.14,15.18c-.67,39-13.17,64.75-13.17,64.75l-20.2-.09Z" style="fill: rgb(145, 191, 32); transform-origin: 368.051px 254.234px;" id="elcog2f0y8nr9" class="animable"></path><g id="elzvt5bi65zrn"><path d="M340,294.27c9.58-25.87,3.28-49.66,4.48-62.83a15,15,0,0,1,12.14-13.38c6.54-1.26,14.63-2.68,22.34-3.72a15.08,15.08,0,0,1,17.14,15.18c-.67,39-13.17,64.75-13.17,64.75l-20.2-.09Z" style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 368.051px 254.234px;" class="animable"></path></g><g id="freepik--character-2--inject-102--inject-91" class="animable" style="transform-origin: 313.08px 347.88px;"><polygon points="263.36 382.54 260.8 399.37 268.93 399.37 274.27 382.54 263.36 382.54" style="fill: rgb(255, 195, 189); transform-origin: 267.535px 390.955px;" id="elip93c7a1cy" class="animable"></polygon><path d="M259.76,395.62l10.87-.26a.61.61,0,0,1,.68.6l0,8a1.83,1.83,0,0,1-1.79,1.63c-3.78,0-5.58-.14-10.36,0a122.2,122.2,0,0,1-15.22-1c-3.87-.66-2.82-4.29-1.07-4.35,7.9-.29,12.32-1.94,15.16-4A2.92,2.92,0,0,1,259.76,395.62Z" style="fill: rgb(38, 50, 56); transform-origin: 256.304px 400.473px;" id="elp7g77abua7k" class="animable"></path><g id="els9yndtd0xfl"><polygon points="262.33 389.29 263.36 382.54 274.27 382.54 271.65 390.96 262.33 389.29" style="opacity: 0.2; transform-origin: 268.3px 386.75px;" class="animable"></polygon></g><path d="M335,288.21s-66.15.66-67.18,21.61c-1.46,30.12-6.55,76-6.55,76l12.47,3.43s17.8-45.53,18.49-69.06c18.61-3.7,66.44,0,72.06-12.22a32.72,32.72,0,0,0,2.12-19.8Z" style="fill: rgb(145, 191, 32); transform-origin: 314.174px 338.71px;" id="elzrtmr18n798" class="animable"></path><g id="elbfwrs3yttuu"><path d="M335,288.21s-66.15.66-67.18,21.61c-1.46,30.12-6.55,76-6.55,76l12.47,3.43s17.8-45.53,18.49-69.06c18.61-3.7,66.44,0,72.06-12.22a32.72,32.72,0,0,0,2.12-19.8Z" style="opacity: 0.6; transform-origin: 314.174px 338.71px;" class="animable"></path></g><polygon points="321.56 389.05 325.97 400.47 334.89 400.47 331.82 388.46 321.56 389.05" style="fill: rgb(255, 195, 189); transform-origin: 328.225px 394.465px;" id="elkovwv9sqzea" class="animable"></polygon><g id="elnhyw98keddo"><polygon points="332.65 391.7 330.92 382.91 319.65 384.31 322.54 391.95 332.65 391.7" style="opacity: 0.2; transform-origin: 326.15px 387.43px;" class="animable"></polygon></g><path d="M323.55,396.69h11.39a.7.7,0,0,1,.75.64h0l.55,8.53a1.76,1.76,0,0,1-1.77,1.72c-4-.07-5.86-.29-10.87-.29-3.07,0-9.29.3-13.54.3s-4.13-4-2.34-4.31c8.1-1.62,11.23-3.85,14.08-6A3,3,0,0,1,323.55,396.69Z" style="fill: rgb(38, 50, 56); transform-origin: 321.393px 402.139px;" id="elfl3p918iuwh" class="animable"></path><path d="M352.79,288.21s-60,4.07-58.52,25c1.61,22.92,25.64,76.07,25.64,76.07H332S324,341.06,320.32,317.7c16.92,0,56.13,2.55,61.77-9.7a32.79,32.79,0,0,0,2.1-19.8Z" style="fill: rgb(145, 191, 32); transform-origin: 339.553px 338.74px;" id="elwpnf8bwkc5" class="animable"></path><g id="el5wa7u6pu4ot"><path d="M352.79,288.21s-60,4.07-58.52,25c1.61,22.92,25.64,76.07,25.64,76.07H332S324,341.06,320.32,317.7c16.92,0,56.13,2.55,61.77-9.7a32.79,32.79,0,0,0,2.1-19.8Z" style="opacity: 0.5; transform-origin: 339.553px 338.74px;" class="animable"></path></g></g><path d="M361.88,203.42c1.38,5.34,1.81,12-5.65,14.75-2.07,3.3-3.08,6.78,4.89,5.54a24.54,24.54,0,0,0,16.09-9.1c-4.77-4.18-3.9-17-2.69-24.23Z" style="fill: rgb(255, 195, 189); transform-origin: 365.986px 207.173px;" id="el75wtl4x0hzx" class="animable"></path><path d="M361,213.14c-6.85,1.17-12.48,6.47-15.5,12.72s-3.75,13.37-3.69,20.32.85,13.87.66,20.81c-.21,8-2.14,13.67-4.9,21.21,0,1.79,2.71,2.8,5,3.27,4.78-10.43,7.92-20.41,7.59-31.87-.25-8.32-.36-17.8,1-26s11.17-18.91,10.7-20.39Z" style="fill: rgb(38, 50, 56); transform-origin: 349.723px 252.305px;" id="elg25kscrqd1e" class="animable"></path><g id="el4itjviufnhg"><path d="M367.7,207.34a6.65,6.65,0,0,1-5.06,1.22,23,23,0,0,0-.28-3.88l8.28-6.8a18.73,18.73,0,0,1,.35,2.68A7.59,7.59,0,0,1,367.7,207.34Z" style="opacity: 0.3; isolation: isolate; transform-origin: 366.684px 203.265px;" class="animable"></path></g><path d="M355.32,171.84c-8.75,4.95-8.84,18.94-6.14,27a12.12,12.12,0,0,0,21.23,3.56c4.28-5.41,3.66-10.87,3.45-20.27S364.08,166.9,355.32,171.84Z" style="fill: rgb(255, 195, 189); transform-origin: 360.819px 188.643px;" id="elfhmsyeln428" class="animable"></path><g id="ely9eg1nex3v"><path d="M358.14,197c-2.82,1.21-5.91,2.78-8.76,2.44a12.11,12.11,0,0,0,21,3C373.91,198,375,195,374,186.92,368.52,193.34,364.17,194.4,358.14,197Z" style="opacity: 0.2; isolation: isolate; transform-origin: 361.867px 197.092px;" class="animable"></path></g><path d="M366.6,175a8,8,0,0,0,.89,9.57c.79.83,1.76,1.47,2.52,2.32a6.84,6.84,0,0,1,1.72,4.86,5,5,0,0,1,4.75-4.23q-1.78,5.51-3.56,11a15.22,15.22,0,0,0,8.68-12C382.36,179.42,373.6,164.21,366.6,175Z" style="fill: rgb(38, 50, 56); transform-origin: 373.53px 184.885px;" id="el8khlgaz0jrb" class="animable"></path><path d="M346.18,175.49a6.13,6.13,0,0,0-1.39,2.61,2.42,2.42,0,0,0,1,2.58,3.65,3.65,0,0,0,2.38.12l8-1.39c4.58-.8,9.16-1.59,13.68-2.68,2-.48,4.31-1.25,5.11-3.17,2.59-6.25-8.47-7.06-12.17-6.89C356.49,167,350.12,170.62,346.18,175.49Z" style="fill: rgb(38, 50, 56); transform-origin: 360.035px 173.797px;" id="el4o241j14c9y" class="animable"></path><path d="M375.28,185.92c-2.62.59-3.74,4.36-3.67,6.78,0,2.75,2,4.54,4.32,2.88a8.47,8.47,0,0,0,3.28-5.28C379.68,187.71,377.91,185.33,375.28,185.92Z" style="fill: rgb(255, 195, 189); transform-origin: 375.446px 191.024px;" id="elplxa4y2mjk" class="animable"></path><path d="M356.77,195.47a3.25,3.25,0,0,1-2.73.41c1-2.26.88-1.75,1.19-5.59Z" style="fill: rgb(237, 132, 126); transform-origin: 355.405px 193.153px;" id="elew2ll9zrykr" class="animable"></path><path d="M361.38,183c-.75-.84-2.8-1.16-3.91-1h0a.44.44,0,0,1-.49-.36.48.48,0,0,1,.38-.53c1.4-.21,3.73.21,4.68,1.26h0a.45.45,0,0,1,0,.63.53.53,0,0,1-.2.13A.44.44,0,0,1,361.38,183Z" style="fill: rgb(38, 50, 56); transform-origin: 359.572px 182.103px;" id="elr3r4plqj54l" class="animable"></path><path d="M348.44,184.87h0a.44.44,0,0,1-.12-.6,4.65,4.65,0,0,1,3.43-2.35h0a.41.41,0,0,1,.42.41.47.47,0,0,1-.43.49,3.77,3.77,0,0,0-2.7,1.89.45.45,0,0,1-.36.23A.35.35,0,0,1,348.44,184.87Z" style="fill: rgb(38, 50, 56); transform-origin: 350.21px 183.43px;" id="el56s1xiybkmi" class="animable"></path><path d="M356,199.54a37.77,37.77,0,0,1,2.65,3.84l.62-.26c2.82-1.22,3.62-2.92,3.66-4.43a6.42,6.42,0,0,0-1.07-3.37c-1,1.73-3.53,3.11-4.91,3.78C356.36,199.39,356,199.54,356,199.54Z" style="fill: rgb(46, 53, 58); transform-origin: 359.465px 199.35px;" id="elhmk19oewko" class="animable"></path><path d="M356.93,199.1l.41.56a.84.84,0,0,0,1,.27c2.08-1,3.46-2,4-3.13a.81.81,0,0,0,0-.68,6.32,6.32,0,0,0-.46-.8C360.83,197.05,358.31,198.43,356.93,199.1Z" style="fill: rgb(255, 255, 255); transform-origin: 359.672px 197.658px;" id="el2fhty911p9a" class="animable"></path><path d="M359.25,203.12c2.82-1.22,3.62-2.92,3.66-4.43a8.19,8.19,0,0,0-2.79,2.11A4,4,0,0,0,359.25,203.12Z" style="fill: rgb(222, 87, 83); transform-origin: 361.08px 200.905px;" id="el5i73rp7t9zx" class="animable"></path><path d="M351.65,188c-.49.09-.76.79-.62,1.54s.67,1.29,1.16,1.19.76-.78.62-1.53S352.14,188,351.65,188Z" style="fill: rgb(38, 50, 56); transform-origin: 351.92px 189.371px;" id="elwxapcry7wy" class="animable"></path><path d="M360.23,186.62c-.49.09-.76.78-.62,1.54s.67,1.29,1.16,1.19.76-.79.62-1.54S360.72,186.53,360.23,186.62Z" style="fill: rgb(38, 50, 56); transform-origin: 360.5px 187.986px;" id="el0s6q3svl9cf" class="animable"></path><g id="el3nfvnaejffz"><polygon points="347.87 192.06 354.18 190.64 354.29 193.32 348.42 194.72 347.87 192.06" style="fill: rgb(255, 255, 255); opacity: 0.9; transform-origin: 351.08px 192.68px;" class="animable"></polygon></g><g id="elthsm7sq632e"><g style="opacity: 0.8; transform-origin: 360.525px 190.39px;" class="animable"><g id="el21leqb1rejr"><polygon points="356.1 190.22 356.85 192.68 364.95 190.94 364.47 188.1 356.1 190.22" style="fill: rgb(255, 255, 255); opacity: 0.9; transform-origin: 360.525px 190.39px;" class="animable"></polygon></g></g></g><polygon points="354.22 191.63 354.18 190.64 356.1 190.22 356.38 191.15 354.22 191.63" style="fill: rgb(38, 50, 56); transform-origin: 355.28px 190.925px;" id="elu6vaiji1gz" class="animable"></polygon><path d="M351.92,293.12s11.39,4.41,14,5.27a32.69,32.69,0,0,0,9.37,2.15,11.5,11.5,0,0,0,8.87-3.31c2.72-2.9,3.57-7.3,4.28-11.43q3.12-18.19,6.26-36.38c1-6,3.63-15,3.41-18.39-.41-6.3-4.42-13.74-14.63-17.83-4-1.59-7.89-1-11.23,3-2,2.38-7.82,8.12-9.25,18.23-1.14,8.1-2.92,18.59-2.81,26.82C360.32,272.07,356,285.71,351.92,293.12Z" style="fill: rgb(38, 50, 56); transform-origin: 375.022px 256.474px;" id="eljiw13jvxp5j" class="animable"></path><path d="M397.55,227.7c1.16,10.54-4.67,37.11-5.79,38.71-4.78,15.41-17.91,7.1-19.81,6.39-3.31-1.22-6.68-3.61-9.83-5.2-6.11-3-11.9-5.48-17.58-9.25l3.2-6.32c6.23,2.12,23.86,6.68,26.77,7.39,1.26.33,6.17,2.9,6.12-.49.69-1.13,1.65-23.14,3.76-30.92a6.56,6.56,0,0,1,1.23-2.39l.19-.24a6.74,6.74,0,0,1,11.74,2.32Z" style="fill: rgb(38, 50, 56); transform-origin: 371.121px 249.257px;" id="el8opo6ejtdwu" class="animable"></path><g id="el09gxzibejjet"><path d="M397.55,227.7c1.16,10.54-4.67,37.11-5.79,38.71-4.78,15.41-17.91,7.1-19.81,6.39-3.31-1.22-6.68-3.61-9.83-5.2-6.11-3-11.9-5.48-17.58-9.25l3.2-6.32c6.23,2.12,23.86,6.68,26.77,7.39,1.26.33,6.17,2.9,6.12-.49.69-1.13,1.65-23.14,3.76-30.92a6.56,6.56,0,0,1,1.23-2.39l.19-.24a6.74,6.74,0,0,1,11.74,2.32Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 371.121px 249.257px;" class="animable"></path></g><polygon points="345.24 267.5 315.64 267.5 312.26 228.88 341.86 228.88 345.24 267.5" style="fill: rgb(38, 50, 56); transform-origin: 328.75px 248.19px;" id="elee3b6hn0cdu" class="animable"></polygon><g id="el2gxfa4ue3sc"><polygon points="345.24 267.5 315.64 267.5 312.26 228.88 341.86 228.88 345.24 267.5" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 328.75px 248.19px;" class="animable"></polygon></g><polygon points="344.19 267.31 314.59 267.31 311.21 228.69 340.81 228.69 344.19 267.31" style="fill: rgb(145, 191, 32); transform-origin: 327.7px 248px;" id="eldmyw2xzajg" class="animable"></polygon><g id="elk7dgtlu6axr"><polygon points="344.19 267.31 314.59 267.31 311.21 228.69 340.81 228.69 344.19 267.31" style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 327.7px 248px;" class="animable"></polygon></g><polygon points="332.45 231.1 320 231.1 319.58 226.27 332.02 226.27 332.45 231.1" style="fill: rgb(145, 191, 32); transform-origin: 326.015px 228.685px;" id="eltd4m30org8" class="animable"></polygon><polygon points="319.58 226.27 320.8 225.85 333.69 225.85 333.87 227.9 332.91 229.01 332.85 230.69 332.45 231.1 332.02 226.27 319.58 226.27" style="fill: rgb(145, 191, 32); transform-origin: 326.725px 228.475px;" id="eliin7fbycjo" class="animable"></polygon><g id="eliqi43vqo1kt"><polygon points="319.58 226.27 320.8 225.85 333.69 225.85 333.87 227.9 332.91 229.01 332.85 230.69 332.45 231.1 332.02 226.27 319.58 226.27" style="opacity: 0.5; transform-origin: 326.725px 228.475px;" class="animable"></polygon></g><path d="M350.1,254.12l.67,3.61c-1.6,4.17-10.77,3.07-10.77,3.07l0-10.67,8.09,1.88A2.7,2.7,0,0,1,350.1,254.12Z" style="fill: rgb(255, 195, 189); transform-origin: 345.385px 255.531px;" id="eldxjezrpxaet" class="animable"></path><polygon points="339.98 250.13 340.02 260.82 331.9 261.02 330.04 251.62 339.98 250.13" style="fill: rgb(255, 195, 189); transform-origin: 335.03px 255.575px;" id="elfpop6q8cgj" class="animable"></polygon><path d="M370.9,337l3.09-45c.44-6.36,3.54-11.66,7.84-14.17a17,17,0,0,1,9.51-3.69,10,10,0,0,1,1.1-.05,16.63,16.63,0,0,1,8,2,1.55,1.55,0,0,1,.22.12,18.84,18.84,0,0,1,6.36,5.77h0a21.63,21.63,0,0,1,3.8,12.34c0,10-6.59,18.33-15.24,20L392.23,363c-.29,4.14-3,7.32-6.28,7.32H369.17Z" style="fill: rgb(145, 191, 32); transform-origin: 389.995px 322.205px;" id="elx7jmxrviqch" class="animable"></path><g id="eldu3vh31izzw"><path d="M370.9,337l3.09-45c.44-6.36,3.54-11.66,7.84-14.17a17,17,0,0,1,9.51-3.69,10,10,0,0,1,1.1-.05,16.63,16.63,0,0,1,8,2,1.55,1.55,0,0,1,.22.12,18.84,18.84,0,0,1,6.36,5.77h0a21.63,21.63,0,0,1,3.8,12.34c0,10-6.59,18.33-15.24,20L392.23,363c-.29,4.14-3,7.32-6.28,7.32H369.17Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 389.995px 322.205px;" class="animable"></path></g></g><g id="freepik--text-balloon--inject-91" class="animable animator-active" style="transform-origin: 178.65px 148.07px;"><path d="M218.3,127.6v41.81a4,4,0,0,1-4,4H171.48l-15.3,11.83a2.92,2.92,0,0,1-4.68-2.34v-9.49h-2.39a4,4,0,0,1-4-4V127.59a3.94,3.94,0,0,1,4-3.92h65.26A3.93,3.93,0,0,1,218.3,127.6Z" style="fill: none; stroke: rgb(145, 191, 32); stroke-miterlimit: 10; transform-origin: 181.705px 154.75px;" id="eluvg13j7m3b" class="animable"></path><rect x="170.03" y="117.78" width="8.17" height="1" style="fill: rgb(145, 191, 32); transform-origin: 174.115px 118.28px;" id="elqcfz63hqz3" class="animable"></rect><path d="M140,129.56h-1v-4.93a6.87,6.87,0,0,1,6.87-6.86h18.23v1H145.85a5.88,5.88,0,0,0-5.87,5.86Z" style="fill: rgb(145, 191, 32); transform-origin: 151.55px 123.665px;" id="el7ls4277y71" class="animable"></path><path d="M197.77,154.3a3.15,3.15,0,0,1-3.16-3.38v0c1.07-12.19,10.73-13.31,11.94-27.17.35-4-1.11-5.5-3.9-5.5s-4.51,1.51-4.86,5.5l-.2,2.28a4.13,4.13,0,0,1-4.12,3.77h0a4.13,4.13,0,0,1-4.11-4.49l.09-1c.78-8.92,5.61-14,14.14-14s12.46,5.1,11.68,14C214,138.76,203.45,141,202.55,151.19a.76.76,0,0,1,0,.15,3.18,3.18,0,0,1-3.16,3Zm4.33,8.48v0a4.2,4.2,0,0,1-4.19,3.84h0a4.2,4.2,0,0,1-4.19-4.57v0a4.2,4.2,0,0,1,4.2-3.84h0A4.21,4.21,0,0,1,202.1,162.78Z" style="fill: rgb(145, 191, 32); transform-origin: 202.356px 138.465px;" id="elhyq7bw2xv6" class="animable"></path><path d="M186.5,144.51h-23a2,2,0,1,1,0-4h23a2,2,0,0,1,0,4Z" style="fill: rgb(145, 191, 32); transform-origin: 175px 142.51px;" id="elnldkjlx7uyj" class="animable"></path><path d="M183.32,152.43H163.54a2,2,0,0,1,0-4h19.78a2,2,0,0,1,0,4Z" style="fill: rgb(145, 191, 32); transform-origin: 173.43px 150.43px;" id="elujrdyah7clk" class="animable"></path><path d="M180.14,160.34h-16.6a2,2,0,0,1,0-4h16.6a2,2,0,0,1,0,4Z" style="fill: rgb(145, 191, 32); transform-origin: 171.84px 158.34px;" id="el7oa43r4z9j3" class="animable"></path></g><g id="freepik--character-1--inject-91" class="animable" style="transform-origin: 142.18px 292.349px;"><path d="M133.08,323.51H118.47c-3.56,0-6.44,2.25-6.44,5v8.64c0,2.78,2.88,5,6.44,5h14.61Z" style="fill: rgb(145, 191, 32); transform-origin: 122.555px 332.83px;" id="elesyvczlcq5d" class="animable"></path><path d="M65.18,364.2,60.1,283.34a52.15,52.15,0,0,1,52.05-55.42h0a52.16,52.16,0,0,1,52.08,49.22l5.32,94.44H73A7.87,7.87,0,0,1,65.18,364.2Z" style="fill: rgb(145, 191, 32); transform-origin: 114.774px 299.75px;" id="elb6kogtizy5j" class="animable"></path><g id="elgwv39m66yr6"><path d="M65,361.27,60.1,283.34a52.15,52.15,0,0,1,52.05-55.42h0a52.16,52.16,0,0,1,52.08,49.22l5.32,94.44H76A11,11,0,0,1,65,361.27Z" style="opacity: 0.1; transform-origin: 114.774px 299.75px;" class="animable"></path></g><path d="M80.84,371.58,75.3,283.34a52.15,52.15,0,0,1,52.06-55.42h0a52.16,52.16,0,0,1,52.07,49.22l5.33,94.44Z" style="fill: rgb(145, 191, 32); transform-origin: 129.978px 299.75px;" id="elyou47lh0cz7" class="animable"></path><path d="M79.18,386.77H77.85a1.54,1.54,0,0,1-1.43-1.36l-2-13.83h8.11l-2,13.83A1.52,1.52,0,0,1,79.18,386.77Z" style="fill: rgb(145, 191, 32); transform-origin: 78.475px 379.175px;" id="elyxm2s4xwa9m" class="animable"></path><g id="eli8jge8zu3gp"><path d="M79.18,386.77H77.85a1.54,1.54,0,0,1-1.43-1.36l-2-13.83h8.11l-2,13.83A1.52,1.52,0,0,1,79.18,386.77Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 78.475px 379.175px;" class="animable"></path></g><path d="M209.83,386.77h-1.21a1.45,1.45,0,0,1-1.29-1.36l-1.78-13.83h7.35l-1.78,13.83A1.45,1.45,0,0,1,209.83,386.77Z" style="fill: rgb(145, 191, 32); transform-origin: 209.225px 379.175px;" id="elxn7erry5y1" class="animable"></path><g id="elivyn3o6jrvo"><path d="M209.83,386.77h-1.21a1.45,1.45,0,0,1-1.29-1.36l-1.78-13.83h7.35l-1.78,13.83A1.45,1.45,0,0,1,209.83,386.77Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 209.225px 379.175px;" class="animable"></path></g><path d="M172.22,386.77H171a1.45,1.45,0,0,1-1.29-1.36l-1.79-13.83h7.36l-1.78,13.83A1.46,1.46,0,0,1,172.22,386.77Z" style="fill: rgb(145, 191, 32); transform-origin: 171.6px 379.175px;" id="elmc9t0rq2137" class="animable"></path><g id="elnpc7acbpb89"><path d="M172.22,386.77H171a1.45,1.45,0,0,1-1.29-1.36l-1.79-13.83h7.36l-1.78,13.83A1.46,1.46,0,0,1,172.22,386.77Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 171.6px 379.175px;" class="animable"></path></g><path d="M119.68,386.77h-1.33a1.53,1.53,0,0,1-1.43-1.36l-2-13.83h8.11l-2,13.83A1.52,1.52,0,0,1,119.68,386.77Z" style="fill: rgb(145, 191, 32); transform-origin: 118.975px 379.175px;" id="elxqupcs3zmbo" class="animable"></path><g id="ely2375f2bmoa"><path d="M119.68,386.77h-1.33a1.53,1.53,0,0,1-1.43-1.36l-2-13.83h8.11l-2,13.83A1.52,1.52,0,0,1,119.68,386.77Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 118.975px 379.175px;" class="animable"></path></g><path d="M163.71,338.25h35.56L201.62,304l.5-7.36h0l.24-3.39a22.84,22.84,0,0,1,.34-2.65c0-.19.09-.39.13-.58a2.09,2.09,0,0,1,.11-.43,20.48,20.48,0,0,1,5.41-9.2,17.45,17.45,0,0,1,11.1-5H186c-.37,0-.73,0-1.1,0a17.4,17.4,0,0,0-12.12,5,20.48,20.48,0,0,0-5.41,9.2,2.09,2.09,0,0,0-.11.43,22.43,22.43,0,0,0-.47,3.23l-.23,3.39h0Z" style="fill: rgb(145, 191, 32); transform-origin: 191.58px 306.82px;" id="elvro9qkg54zc" class="animable"></path><g id="elmq88yusjpn"><path d="M163.71,338.25h35.56L201.62,304l.5-7.36h0l.24-3.39a22.84,22.84,0,0,1,.34-2.65c0-.19.09-.39.13-.58a2.09,2.09,0,0,1,.11-.43,20.48,20.48,0,0,1,5.41-9.2,17.45,17.45,0,0,1,11.1-5H186c-.37,0-.73,0-1.1,0a17.4,17.4,0,0,0-12.12,5,20.48,20.48,0,0,0-5.41,9.2,2.09,2.09,0,0,0-.11.43,22.43,22.43,0,0,0-.47,3.23l-.23,3.39h0Z" style="opacity: 0.1; transform-origin: 191.58px 306.82px;" class="animable"></path></g><g id="elzf59v4c017s"><g style="opacity: 0.1; transform-origin: 125.245px 329.135px;" class="animable"><path d="M135.53,320H121.24c-3.47,0-6.28,2.2-6.28,4.91v8.45c0,2.71,2.81,4.91,6.28,4.91h14.29Z" id="el7gm2q5kkhng" class="animable" style="transform-origin: 125.245px 329.135px;"></path></g></g><rect x="125.52" y="319.99" width="73.74" height="18.27" rx="5.42" style="fill: rgb(145, 191, 32); transform-origin: 162.39px 329.125px;" id="elihx4nkw9bid" class="animable"></rect><path d="M45.5,295.57a20.26,20.26,0,0,0,16.81,20L66,364.26c.32,4.14,3.32,7.32,6.92,7.32h39.23c-3.6,0-6.6-3.18-6.92-7.32l-2-26-1.72-22.71A20.25,20.25,0,0,1,87,304.88c-.19-.36-.36-.73-.52-1.1a19.91,19.91,0,0,1-1.75-8.21,20.19,20.19,0,0,1,.43-4.14c.11-.54.25-1.08.39-1.6a20.72,20.72,0,0,1,3.37-6.6h0a20.33,20.33,0,0,1,7-5.77,20.08,20.08,0,0,1,9-2.14H65.76a20.16,20.16,0,0,0-6,.91,20.21,20.21,0,0,0-10.07,7h0A20.21,20.21,0,0,0,45.5,295.57Z" style="fill: rgb(145, 191, 32); transform-origin: 78.825px 323.45px;" id="el4s9vc0ywa3m" class="animable"></path><g id="el84ybjc923n9"><path d="M45.5,295.57a20.26,20.26,0,0,0,16.81,20L66,364.26c.32,4.14,3.32,7.32,6.92,7.32h39.23c-3.6,0-6.6-3.18-6.92-7.32l-2-26-1.72-22.71A20.25,20.25,0,0,1,87,304.88c-.19-.36-.36-.73-.52-1.1a19.91,19.91,0,0,1-1.75-8.21,20.19,20.19,0,0,1,.43-4.14c.11-.54.25-1.08.39-1.6a20.72,20.72,0,0,1,3.37-6.6h0a20.33,20.33,0,0,1,7-5.77,20.08,20.08,0,0,1,9-2.14H65.76a20.16,20.16,0,0,0-6,.91,20.21,20.21,0,0,0-10.07,7h0A20.21,20.21,0,0,0,45.5,295.57Z" style="opacity: 0.1; transform-origin: 78.825px 323.45px;" class="animable"></path></g><path d="M84.72,295.57c0,10,6.59,18.34,15.24,20l3.34,48.73c.29,4.15,3,7.32,6.28,7.32H214.32c3.26,0,6-3.17,6.28-7.32l3.35-48.8c8.47-1.78,14.88-10,14.88-19.89a21.56,21.56,0,0,0-3.38-11.71,19.06,19.06,0,0,0-6.78-6.41,16.84,16.84,0,0,0-8.2-2.14,17.38,17.38,0,0,0-12.12,5,20.53,20.53,0,0,0-5.42,9.2,3,3,0,0,0-.1.43,21.12,21.12,0,0,0-.47,3.23l-.24,3.39h0l-2.85,41.64H124.63l-3.09-45c-.45-6.36-3.54-11.66-7.84-14.17a17.14,17.14,0,0,0-9.51-3.69c-.37,0-.73,0-1.1,0a16.63,16.63,0,0,0-8,2,1.2,1.2,0,0,0-.23.11,19.13,19.13,0,0,0-6.36,5.77h0A21.56,21.56,0,0,0,84.72,295.57Z" style="fill: rgb(145, 191, 32); transform-origin: 161.775px 323.485px;" id="el7lvo68y25i2" class="animable"></path><g id="elg4q15o323w"><path d="M126.35,371.58h88c3.26,0,6-3.17,6.28-7.32l3.35-48.8c8.47-1.78,14.88-10,14.88-19.89a21.56,21.56,0,0,0-3.38-11.71,19.06,19.06,0,0,0-6.78-6.41,16.84,16.84,0,0,0-8.2-2.14,17.38,17.38,0,0,0-12.12,5,20.53,20.53,0,0,0-5.42,9.2,3,3,0,0,0-.1.43,21.12,21.12,0,0,0-.47,3.23l-.24,3.39h0l-2.85,41.64H124.63Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 181.745px 323.445px;" class="animable"></path></g><polygon points="153.13 388.79 161.66 391.15 169.32 371.1 160.79 368.74 153.13 388.79" style="fill: rgb(255, 195, 189); transform-origin: 161.225px 379.945px;" id="eljul3vzm4tnp" class="animable"></polygon><path d="M165.48,388.49a4.45,4.45,0,0,0-2.73-1.66L154,385.12a.81.81,0,0,0-1,.54l-2.71,8a1.75,1.75,0,0,0,1.07,2.24l.06,0c3.24,1.28,5.43.84,10.49,1.82,3.13.6,9.68,2.68,14.06,2.5s4.37-4.51,2.53-4.83C172,394.39,167,390.47,165.48,388.49Z" style="fill: rgb(38, 50, 56); transform-origin: 164.927px 392.659px;" id="elckf3g029rf6" class="animable"></path><g id="el29unsqmk5y2"><g style="opacity: 0.2; transform-origin: 163.08px 375.095px;" class="animable"><polygon points="169.32 371.11 165.37 381.45 156.84 379.07 160.78 368.74 169.32 371.11" id="elhszvlu70yp" class="animable" style="transform-origin: 163.08px 375.095px;"></polygon></g></g><path d="M140.85,295s51.36-.28,49.76,16.92c-1.08,11.62-6.66,23.83-11,35.62-6.31,17.09-11.78,32-11.78,32l-11.7-4.05s10.51-49.42,17.59-54.48H130.29c-14.37,0-20.58-15.78-6.59-34.18C132.25,286.86,140.85,295,140.85,295Z" style="fill: rgb(145, 191, 32); transform-origin: 153.241px 333.185px;" id="elcev71gf40br" class="animable"></path><g id="elci2gkqwgvx6"><path d="M140.85,295s51.36-.28,49.76,16.92c.79,10.69-22.79,67.6-22.79,67.6l-11.7-4.05s10.51-49.42,17.59-54.48H130.29c-14.37,0-20.58-15.78-6.59-34.18C132.25,286.86,140.85,295,140.85,295Z" style="opacity: 0.6; transform-origin: 153.241px 333.165px;" class="animable"></path></g><path d="M177.07,263.77c-6.32,5.77-18.73-7.89-20.73-9.51-4.28-3.5-16.86-15.24-16.2-19.32,2-12,21.68,5,27.37,16.72Z" style="fill: rgb(38, 50, 56); transform-origin: 158.592px 248.01px;" id="el7eu0ogefw8k" class="animable"></path><path d="M121.76,227.66c-3.17.67-6.6-.47-8.83,1.88s-3.16,5.65-3.48,8.87a59,59,0,0,0,.7,13.46q1,8.13,2.09,16.25a48.32,48.32,0,0,1-.51,13.37v0a2.15,2.15,0,0,0,1.22,2.33s24.59.84,31.74.57c3.8-.14,1.19-10.14,2.36-16,.26-1.3,2.8-6.64,3.18-8,1.76-6.45.59-10.89-1-17.37-1.19-4.71-1.68-11.5-4.08-12C140.83,230.13,130.58,225.78,121.76,227.66Z" style="fill: rgb(145, 191, 32); transform-origin: 130.222px 255.818px;" id="el03zlprhhx5pv" class="animable"></path><g id="ellm9syia20sf"><path d="M121.76,227.66c-3.17.67-6.6-.47-8.83,1.88s-3.16,5.65-3.48,8.87a59,59,0,0,0,.7,13.46q1,8.13,2.09,16.25a48.32,48.32,0,0,1-.51,13.37v0a2.15,2.15,0,0,0,1.22,2.33s24.59.84,31.74.57c3.8-.14,1.19-10.14,2.36-16,.26-1.3,2.8-6.64,3.18-8,1.76-6.45.59-10.89-1-17.37-1.19-4.71-1.68-11.5-4.08-12C140.83,230.13,130.58,225.78,121.76,227.66Z" style="fill: rgb(255, 255, 255); opacity: 0.8; transform-origin: 130.222px 255.818px;" class="animable"></path></g><path d="M118.25,232.28c-.33-.5-9-7.78-10.55.63-2.19,11.71,2.34,23.23,2.34,23.23s1,12.67,4.72,13.94,7.18,1.58,8.42-.59a12.87,12.87,0,0,0,1.24-5.41S124,241,118.25,232.28Z" style="fill: rgb(38, 50, 56); transform-origin: 115.761px 249.978px;" id="elviskgde2t5" class="animable"></path><path d="M124.24,211.59c.89,5.39,1.64,15.24-2.21,18.71,0,0,9.41,4.93,15.59,13.53a8.15,8.15,0,0,0,2.86-9.1,7.94,7.94,0,0,0-4-4.78c-3.65-2-3.3-5.78-2.3-9.32Z" style="fill: rgb(232, 191, 191); transform-origin: 131.463px 227.71px;" id="elukaz2lw6joc" class="animable"></path><g id="el9kd8vc309n6"><path d="M125.47,220.74l3.51,1.35a11.51,11.51,0,0,0,4.72.76h0a7.52,7.52,0,0,0,0,3.34,6.74,6.74,0,0,1-7-2.24A11.59,11.59,0,0,1,125.47,220.74Z" style="opacity: 0.2; isolation: isolate; transform-origin: 129.585px 223.584px;" class="animable"></path></g><polygon points="212.6 371.55 222.16 371.55 212.15 347.58 205.67 358.58 212.6 371.55" style="fill: rgb(255, 195, 189); transform-origin: 213.915px 359.565px;" id="el1ggxtd2qked" class="animable"></polygon><path d="M221.37,369.28l-11.21-2.55a.79.79,0,0,0-.94.51l-3.13,8.62a1.72,1.72,0,0,0,1.18,2.13l0,0c3.93.82,5.86,1,10.79,2.13,3,.69,10.72,2.71,14.91,3.66s5.29-3.15,3.62-3.93c-7.48-3.46-11.53-6.77-13.7-9.59A2.7,2.7,0,0,0,221.37,369.28Z" style="fill: rgb(38, 50, 56); transform-origin: 221.68px 375.314px;" id="elouptfknhteo" class="animable"></path><g id="el11x6s2f4mxb"><g style="opacity: 0.2; transform-origin: 211.04px 355.085px;" class="animable"><polygon points="212.15 347.58 216.41 357.79 207.81 362.59 205.67 358.59 212.15 347.58" id="elfoerzfgewo6" class="animable" style="transform-origin: 211.04px 355.085px;"></polygon></g></g><path d="M111.54,283.93l-1,3.26c-.13.25.16.51.58.53l37,1.12c.34,0,.61-.14.64-.35l.43-3.28c0-.22-.26-.42-.61-.44l-36.4-1.1A.67.67,0,0,0,111.54,283.93Z" style="fill: rgb(38, 50, 56); transform-origin: 129.849px 286.251px;" id="elxvt8cpx31gh" class="animable"></path><path d="M157.82,310.68c-12.17,5.19-25.37,10.37-32.55,10.37-14.38,0-27.15-10.38-13.54-34,8.56,0,23.43.24,23.43.24s28-8,48.38-5.64A23,23,0,0,1,203.43,300c5.16,26,13.11,54.12,13.11,54.12l-10.23,7S190.36,327.59,181.18,301C176.32,302.53,167.39,306.6,157.82,310.68Z" style="fill: rgb(145, 191, 32); transform-origin: 161.237px 321.167px;" id="el8lr4q30s29k" class="animable"></path><g id="elhduthq5z9dm"><path d="M203.43,300a23,23,0,0,0-19.89-18.37c-20.34-2.32-48.38,5.64-48.38,5.64s-14.87-.27-23.43-.24c-13.83,23.52-.84,34,13.54,34,7.18,0,20.38-5.18,32.55-10.37,9.57-4.08,18.5-8.15,23.36-9.71,9.18,26.62,25.13,60.16,25.13,60.16l10.23-7S208.59,326,203.43,300Z" style="opacity: 0.5; transform-origin: 161.189px 321.158px;" class="animable"></path></g><path d="M190.61,312a95.68,95.68,0,0,1-1.5,9.95c-.05-.11-.09-.21-.13-.32s0-.05,0-.08a1.79,1.79,0,0,0-.13-.32c-2.72-6.76-5.38-13.69-7.63-20.22l.07,0h0C187.11,303.48,191.08,307,190.61,312Z" style="fill: rgb(145, 191, 32); transform-origin: 185.934px 311.48px;" id="el43oly0lf4q1" class="animable"></path><g id="el0h2ku0e8qlji"><path d="M190.61,312a95.68,95.68,0,0,1-1.5,9.95c-.05-.11-.09-.21-.13-.32s0-.05,0-.08a1.79,1.79,0,0,0-.13-.32c-2.72-6.76-5.38-13.69-7.63-20.22l.07,0h0C187.11,303.48,191.08,307,190.61,312Z" style="opacity: 0.6; transform-origin: 185.934px 311.48px;" class="animable"></path></g><path d="M117.68,206.41c3,8.45,4.1,12.09,9.72,15.26,8.47,4.78,18.17-.78,17.75-10-.38-8.25-5.23-20.69-14.63-21.69a12.23,12.23,0,0,0-12.84,16.39Z" style="fill: rgb(232, 191, 191); transform-origin: 131.043px 206.662px;" id="elpl6dg097vba" class="animable"></path><path d="M132.87,205.31c.21.73.74,1.16,1.2,1s.64-.8.46-1.51-.73-1.16-1.2-1S132.67,204.61,132.87,205.31Z" style="fill: rgb(38, 50, 56); transform-origin: 133.695px 205.055px;" id="elddkfpc10q94" class="animable"></path><path d="M140.72,202.83c.21.74.74,1.17,1.2,1s.64-.8.46-1.51-.74-1.16-1.19-1S140.52,202.14,140.72,202.83Z" style="fill: rgb(38, 50, 56); transform-origin: 141.547px 202.577px;" id="elj1pbeb6kd4a" class="animable"></path><path d="M141,201.43l1.54-1S142.05,202,141,201.43Z" style="fill: rgb(38, 50, 56); transform-origin: 141.77px 200.992px;" id="elm6e5362dgd" class="animable"></path><path d="M137.91,204.43a19.51,19.51,0,0,0,3.78,3.76,3.1,3.1,0,0,1-2.37,1.15Z" style="fill: rgb(237, 132, 126); transform-origin: 139.8px 206.885px;" id="elj5u52hmg93j" class="animable"></path><path d="M112.16,212a25.41,25.41,0,0,1,1.39,4.71,6.53,6.53,0,0,1-5.55,6.8,6.27,6.27,0,0,0,7.23-3.27A8.53,8.53,0,0,1,111,224.9a9.07,9.07,0,0,0,7.25-3.49c-.47,1.22-1,2.43-1.42,3.65a15.67,15.67,0,0,0,5.65-5.92c.53-1,.93-2.3.23-3.18s-1.81-.82-2.83-.84-2.25-.26-2.62-1.21.31-1.9,1.05-2.55,1.63-1.25,1.9-2.2a4.14,4.14,0,0,0-.14-2.06q-.69-2.76-1.36-5.53a5.74,5.74,0,0,0-.69-1.85c-2-3-4.23,1.4-5,2.89A13.11,13.11,0,0,0,112.16,212Z" style="fill: rgb(38, 50, 56); transform-origin: 115.542px 211.878px;" id="elg1hq7uw329q" class="animable"></path><path d="M117.09,214.69a7.06,7.06,0,0,0,4.64,2.69c2.45.3,3.31-2,2.33-4.09-.89-1.92-3.23-4.37-5.54-3.72S115.71,212.85,117.09,214.69Z" style="fill: rgb(232, 191, 191); transform-origin: 120.392px 213.435px;" id="elrdin7cerpwj" class="animable"></path><path d="M133,199.27a.47.47,0,0,1-.37.38c-2,.38-3.16,2.79-3.16,2.81a.46.46,0,0,1-.6.23.45.45,0,0,1-.22-.59c.09-.09,1.33-2.86,3.81-3.34a.46.46,0,0,1,.52.36A.26.26,0,0,1,133,199.27Z" style="fill: rgb(38, 50, 56); transform-origin: 130.807px 200.741px;" id="el71tdifmwgzw" class="animable"></path><path d="M138.34,197.27a.49.49,0,0,0-.38.1c-.11.12-.48.33-.27.44,1.22.62,2.91,1.64,4.21,1.43.22,0,.74-.23.63-.39a.64.64,0,0,0-.6-.19c-1,.14-2.41-.83-3.37-1.33A.9.9,0,0,0,138.34,197.27Z" style="fill: rgb(38, 50, 56); transform-origin: 140.086px 198.266px;" id="elcp5odgfw9ll" class="animable"></path><path d="M133.14,203.9l1.55-1S134.2,204.49,133.14,203.9Z" style="fill: rgb(38, 50, 56); transform-origin: 133.915px 203.466px;" id="elo2rt4zl1kwn" class="animable"></path><path d="M133,186.28c-3.41-.62-3.85-.85-7.31-.63A17.26,17.26,0,0,0,116,189a15.8,15.8,0,0,0-5.29,8.46,24.45,24.45,0,0,0-.26,10.08,6.56,6.56,0,0,0,1.94,4.22,25.65,25.65,0,0,1,.91-5.31,8.64,8.64,0,0,1,3-4.41,4.69,4.69,0,0,0,1.6-1.42,5.83,5.83,0,0,0,.36-1.82,5.62,5.62,0,0,1,2.34-3.43,19.19,19.19,0,0,1,3.77-1.94c4.21-1.81,8.8-2.85,12.68-5.29A18.37,18.37,0,0,0,133,186.28Z" style="fill: rgb(38, 50, 56); transform-origin: 123.548px 198.664px;" id="ela7uz2221oym" class="animable"></path><path d="M115.55,199.66a6.62,6.62,0,0,0,3.57,2.23c1.66.38,5.81.28,6.06-.15s-1.23-5.09-2.91-5.37a11.34,11.34,0,0,0,4.06,2.52,13.26,13.26,0,0,0,5.2,0c.88-.2-1.09-3.84-2.52-4.88,4.31.9,8.87,1.93,12,5s4.48,7.93,4.32,12.46a6.2,6.2,0,0,0,2.31-4.92,18.37,18.37,0,0,1-1.27,14.27c4.58-3.76,6.29-10.33,5.09-16.13s-5-10.85-9.61-14.56c-4-3.17-8.76-5.54-13.83-5.66C121.37,184.27,109.05,191.83,115.55,199.66Z" style="fill: rgb(38, 50, 56); transform-origin: 132.772px 202.643px;" id="eltorbo8l0pgo" class="animable"></path><path d="M120.94,226.4c0-.33.08-.77.12-1.23a4.28,4.28,0,0,0-3.48-4.56h0a1.77,1.77,0,0,1-1.36-1.16c-.77-2.24-1.07-2.92-1.81-5.12-2-.49-4.41.26-6.5.48a18.22,18.22,0,0,0-.12,7.64,3.43,3.43,0,0,0,.64,1.56,27.27,27.27,0,0,0,6.24,3.84C116.47,228.4,119,226.57,120.94,226.4Z" style="fill: rgb(232, 191, 191); transform-origin: 114.259px 221.06px;" id="el53d96mntwps" class="animable"></path><path d="M114.88,227.9s-5.51,35.55.17,41c3.33,3.18,6.21,1.42,8-.57a7.1,7.1,0,0,0,1.74-5.48l-3.87-36.42S117.12,224.18,114.88,227.9Z" style="fill: rgb(232, 191, 191); transform-origin: 118.657px 248.201px;" id="elrlro9d43ms" class="animable"></path><path d="M174.08,260a15.1,15.1,0,0,0,4.66-7.48,14.59,14.59,0,0,0,.2-3.1c-.05-6.44-1.87-18.25-1.87-18.25l-5.23-1.73s-1.63,9-2,13.92c-.07,1-.18,2.11-.3,3.32-.23,2.2-.51,4.62-.76,6.63Z" style="fill: rgb(232, 191, 191); transform-origin: 173.867px 244.72px;" id="ela02vo45ov5r" class="animable"></path><path d="M177.07,263.77c1.61-1.47,1.88-3.25,2.71-7,.79-3.58-.1-8-.84-7.33a.72.72,0,0,0-.2.31c-1.27,3-6.21.37-7.61-1.13a10.21,10.21,0,0,1-1.58-1.92,1.61,1.61,0,0,1,0-1.82c-1.52-.63-2.74,5.35-2,6.82l.38,1.11a15.47,15.47,0,0,0,2.74,4.94l2.75,3.31Z" style="fill: rgb(38, 50, 56); transform-origin: 173.708px 254.302px;" id="elpoh4koodq" class="animable"></path><path d="M171.7,230.19l-.62-9.14a37.14,37.14,0,0,0,5,1.95c2.54.87,6-.66,5.2,1a69.5,69.5,0,0,1-4.26,7.16Z" style="fill: rgb(232, 191, 191); transform-origin: 176.239px 226.105px;" id="elbe2hc24npyb" class="animable"></path><path d="M171.08,221.05,175,211.9l5.12,3.13c1.41,3.06,1.24,9,1.24,9S174.24,224.31,171.08,221.05Z" style="fill: rgb(232, 191, 191); transform-origin: 176.223px 217.968px;" id="elj3nqg2gjf4" class="animable"></path><path d="M137.31,214c.13.65.6,1.11,1,1s.65-.69.51-1.34-.6-1.11-1-1S137.17,213.39,137.31,214Z" style="fill: rgb(38, 50, 56); transform-origin: 138.065px 213.83px;" id="elhehhoqvn0mm" class="animable"></path><path d="M124.63,338.25l-3.09-45c-.45-6.36-3.54-11.66-7.84-14.17a17.14,17.14,0,0,0-9.51-3.69c-.37,0-.73,0-1.1,0a16.63,16.63,0,0,0-8,2,1.2,1.2,0,0,0-.23.11,19.13,19.13,0,0,0-6.36,5.77h0a21.56,21.56,0,0,0-3.8,12.34c0,10,6.59,18.34,15.24,20l3.34,48.73c.29,4.15,3,7.32,6.28,7.32h16.77Z" style="fill: rgb(145, 191, 32); transform-origin: 105.515px 323.525px;" id="el0xrkjvx4fie" class="animable"></path><g id="elka35z4j1ytl"><path d="M124.63,338.25l-3.09-45c-.45-6.36-3.54-11.66-7.84-14.17a17.14,17.14,0,0,0-9.51-3.69c-.37,0-.73,0-1.1,0a16.63,16.63,0,0,0-8,2,1.2,1.2,0,0,0-.23.11,19.13,19.13,0,0,0-6.36,5.77h0a21.56,21.56,0,0,0-3.8,12.34c0,10,6.59,18.34,15.24,20l3.34,48.73c.29,4.15,3,7.32,6.28,7.32h16.77Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 105.515px 323.525px;" class="animable"></path></g></g><g id="freepik--Table--inject-91" class="animable" style="transform-origin: 249.495px 358.51px;"><ellipse cx="244.16" cy="411.89" rx="33.54" ry="8.58" style="fill: rgb(38, 50, 56); transform-origin: 244.16px 411.89px;" id="elfhxjqlyfayj" class="animable"></ellipse><g id="elxmtep5q5gen"><ellipse cx="244.16" cy="410.46" rx="33.54" ry="7.15" style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 244.16px 410.46px;" class="animable"></ellipse></g><polygon points="246.93 410.45 241.39 410.45 234.99 341.43 253.33 341.43 246.93 410.45" style="fill: rgb(38, 50, 56); transform-origin: 244.16px 375.94px;" id="elxljfpfbsvm" class="animable"></polygon><path d="M253.33,341.43c0,2-4.1,3.64-9.17,3.64s-9.17-1.63-9.17-3.64,4.11-3.64,9.17-3.64S253.33,339.42,253.33,341.43Z" style="fill: rgb(38, 50, 56); transform-origin: 244.16px 341.43px;" id="elp6zwbmzwwr8" class="animable"></path><g id="eldjyzqazbz7r"><path d="M253.33,341.43c0,2-4.1,3.64-9.17,3.64s-9.17-1.63-9.17-3.64,4.11-3.64,9.17-3.64S253.33,339.42,253.33,341.43Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 244.16px 341.43px;" class="animable"></path></g><g id="el97qrflpnhg"><path d="M132,342.51a3.1,3.1,0,0,1,1.07-2.16c7.75,7.8,56.92,13.81,116.42,13.81s108.67-6,116.43-13.81a3.1,3.1,0,0,1,1.07,2.16c0,8.81-52.61,16-117.5,16S132,351.32,132,342.51Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 249.495px 349.43px;" class="animable"></path></g><g id="el8g66u8ukjpo"><path d="M133.11,344.5c7.75-7.8,56.92-13.8,116.42-13.8s108.67,6,116.43,13.8c-7.76,7.8-56.93,13.81-116.43,13.81S140.86,352.3,133.11,344.5Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 249.535px 344.505px;" class="animable"></path></g><g id="ely3ujw5fulgb"><path d="M132,342.2c0-8.82,52.6-16,117.49-16s117.5,7.14,117.5,16a3.06,3.06,0,0,1-1.07,2.15c-7.76-7.8-56.93-13.8-116.43-13.8s-108.67,6-116.42,13.8A3.06,3.06,0,0,1,132,342.2Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 249.495px 335.275px;" class="animable"></path></g><path d="M294.85,334.43l-49.16-.93a1,1,0,0,1-.89-1.12h0a1,1,0,0,1,.94-1.08l49.16.93a1,1,0,0,1,.9,1.12h0A1,1,0,0,1,294.85,334.43Z" style="fill: rgb(38, 50, 56); transform-origin: 270.3px 332.865px;" id="el2kb8b2dex2y" class="animable"></path><g id="elft8z0147065"><path d="M294.85,334.43l-49.16-.93a1,1,0,0,1-.89-1.12h0a1,1,0,0,1,.94-1.08l49.16.93a1,1,0,0,1,.9,1.12h0A1,1,0,0,1,294.85,334.43Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 270.3px 332.865px;" class="animable"></path></g><path d="M318.72,330.84l-23.5,3.55a1,1,0,0,1-1-.95h0a1.1,1.1,0,0,1,.81-1.23l23.5-3.55a1,1,0,0,1,1,.95h0A1.1,1.1,0,0,1,318.72,330.84Z" style="fill: rgb(38, 50, 56); transform-origin: 306.875px 331.525px;" id="el7vnmwdlphi9" class="animable"></path><polygon points="318.51 328.66 268.83 328.66 245.74 331.3 293.56 332.2 318.51 328.66" style="fill: rgb(38, 50, 56); transform-origin: 282.125px 330.43px;" id="elbc9m70s185k" class="animable"></polygon><g id="el5br55hr90n9"><polygon points="318.51 328.66 268.83 328.66 245.74 331.3 293.56 332.2 318.51 328.66" style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 282.125px 330.43px;" class="animable"></polygon></g><g id="el1k6if47amw1"><path d="M318.72,330.84l-23.5,3.55a1,1,0,0,1-1-.95h0a1.1,1.1,0,0,1,.81-1.23l23.5-3.55a1,1,0,0,1,1,.95h0A1.1,1.1,0,0,1,318.72,330.84Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 306.875px 331.525px;" class="animable"></path></g><path d="M293.56,332.2l-45.84-.86a3.56,3.56,0,0,1-3.11-3.56l-1.38-27.68c-.1-1.93,1.15-3.48,2.76-3.45l45.84.87a3.54,3.54,0,0,1,3.11,3.56l1.39,27.67C296.42,330.68,295.18,332.23,293.56,332.2Z" style="fill: rgb(145, 191, 32); transform-origin: 269.779px 314.425px;" id="elryvlrhb71g7" class="animable"></path><g id="el1z66l4kbsq5"><path d="M293.56,332.2l-45.84-.86a3.56,3.56,0,0,1-3.11-3.56l-1.38-27.68c-.1-1.93,1.15-3.48,2.76-3.45l45.84.87a3.54,3.54,0,0,1,3.11,3.56l1.39,27.67C296.42,330.68,295.18,332.23,293.56,332.2Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 269.779px 314.425px;" class="animable"></path></g><path d="M292.22,332.06l-45.84-.87a3.56,3.56,0,0,1-3.12-3.56L241.88,300c-.1-1.93,1.15-3.48,2.77-3.45l45.83.86a3.56,3.56,0,0,1,3.12,3.56L295,328.61C295.08,330.54,293.83,332.09,292.22,332.06Z" style="fill: rgb(145, 191, 32); transform-origin: 268.439px 314.305px;" id="eltclt388ulr" class="animable"></path><g id="el2zcwhk94pim"><path d="M292.22,332.06l-45.84-.87a3.56,3.56,0,0,1-3.12-3.56L241.88,300c-.1-1.93,1.15-3.48,2.77-3.45l45.83.86a3.56,3.56,0,0,1,3.12,3.56L295,328.61C295.08,330.54,293.83,332.09,292.22,332.06Z" style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 268.439px 314.305px;" class="animable"></path></g><path d="M262.36,313.83a5.41,5.41,0,0,0,5.29,4.86,4.39,4.39,0,0,0,4.44-4.86A5.43,5.43,0,0,0,266.8,309,4.39,4.39,0,0,0,262.36,313.83Z" style="fill: rgb(255, 255, 255); transform-origin: 267.227px 313.845px;" id="elke9e5ma7o57" class="animable"></path></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg>
         </div>
      </div>
   </div>
</section>

<section id="opp-search" class="lazy">
   <div class="linkup-off-white search-bar pin-top" style="top: 0px;">
      <div class="container">
         <div class="col-lg-10 m-auto">
            <form id="search_employee" method="GET" action="" style="margin:0">
               <div class="row">
                  <div class="col-sm-5 cpt">
                     <h3 class="text-blue font-m-medium text-uppercase" style="font-size: 28px">Search Consultants</h3>
                  </div>
                  <div class="col-sm-6 cpt p-0">
                     <div class="relative-pos keyword-desktop-container">
                        <input class="form-input search-bar__keyword" type="text" id="keyword" name="keyword"
                           placeholder="Search" value="" autocomplete="off">
                     </div>
                     {{-- <label class="search-bar__label" for="keyword">Job Title</label> --}}
                  </div>
                  {{-- <div class="col-lg-4">
                     <div class="relative-pos location-desktop-container">
                        <input class="form-input" name="Location" id="location"
                           placeholder="Location" value="">
                     </div>
                     {{-- <label class="search-bar__label" for="location">State, Country</label>
                  </div> --}}
                  <div class="col-sm-1 cpt p-0">
                     <a class="search_oppotunities search_consultants btn btn-primary no-margin" data-value="1" type="button" style=""><i class="fa fa-search text-white" aria-hidden="true"></i></a>
                  </div>

               </div>
            </form>
            <div class="divder-green col-5 mt-5 mx-auto border-radius-30"></div>
         </div>

      </div>
   </div>
</section>
<section id="team-slider" class="mb-5 pb-5">
   <div class="container-fluid ">
       <div class="row px-5">
           <div class="center slider">
               <div class="consultant-item">
                   <img src="{{ asset('/site/images/bret.jpg')}}" class="img-thumbnail">
                   <h3 class="consultant-info">Brett Walker</h3>
                   <p class="consultant-des">MR</p>

               </div>
               <div class="consultant-item">
                   <img src="{{ asset('/site/images/angelina.jpeg')}}" class="img-thumbnail">
                   <h3 class="consultant-info">Angelica Phillips</h3>
                   <p class="consultant-des">PRECLINICAL CONSULTANT</p>

               </div>
               <div class="consultant-item">
                   <img src="{{ asset('/site/images/david.jpg')}}" class="img-thumbnail">
                   <h3 class="consultant-info">David Craig</h3>
                   <p class="consultant-des">PRESIDENT</p>

               </div>
               <div class="consultant-item">
                   <img src="{{ asset('/site/images/jon.jpg')}}" class="img-thumbnail">
                   <h3 class="consultant-info">Jon Schram</h3>
                   <p class="consultant-des">BROKER</p>

               </div>
               <div class="consultant-item">

                   <img src="{{ asset('/site/images/sam.jpg')}}" class="img-thumbnail">
                   <h3 class="consultant-info">Sam Mprovati</h3>
                   <p class="consultant-des">SENIOR MANAGER</p>


               </div>
               <div class="consultant-item">
                   <img src="{{ asset('/site/images/miko.jpg')}}" class="img-thumbnail">
                   <h3 class="consultant-info">Mico Yuk</h3>
                   <p class="consultant-des">CEO</p>

               </div>
           </div>


       </div>
   </div>
   <div class="divder-green pos-divder"></div>
</section>
<section id="hire-profile-section">
   <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="cons-cats">
                <h2> Top Consultants</h2>
            </div>
          </div>
         <div class="col-md-3 side-bar">
            <div class="cons-cats">
                <h3>Filter By Categories</h3>
             </div>
             <hr style="border-top: 1px solid #c7bfbf;">
            <div class="cons-cats">
               {{-- <h4><b>Category</b></h4> --}}
               <div class="cat-filter">
                  <input type="radio" id="all"  value="0" name="category" checked>
                  <label  for="all">All Categories</label>
               </div>
               @foreach($categories as $cat)
               <div class="cat-filter">
                  <input @isset($_GET['cat'])  @if(($_GET['cat'])==$cat->id) checked @endif @endisset type="radio" id="{{$cat->name}}" value="{{$cat->id}}" name="category">
                  <label class="cat-label"  for="{{$cat->name}}">{{$cat->name}}</label>
               </div>
               @endforeach
            </div>
            {{--
            <div class="m-b-20 filter-dropdown">
               <h4><b>Location</b></h4>
               <div class="input-field">
                  <input class="form-input" name="location" id="location"
                     placeholder="location" value="">
               </div>
            </div>
            --}}
            <hr style="border-top: 1px solid #c7bfbf;">
            <div class="cons-cats">
                <h4><b>Hourly Rate</b></h4>
                <div class="m-b-20 filter-dropdown">
                <div class="input-field">
                    <div class="select-wrapper form-select__email url-select">
                        <select class="form-select__email url-select initialized" name="rate" id="rate">
                            <option selected="" value="0">Any hourly rate</option>
                            <option value="0-100">$100 and below</option>
                            <option value="100-300">$100 - $300</option>
                            <option value="300-500">$300 - $500</option>
                            <option value="500-100000">$500 & above</option>
                        </select>
                    </div>
                </div>
                </div>
            </div>
         </div>
         <div class="col-md-9 ">
            {{--
            <div class="search-container">
               <form method="GET" action="" style="margin:0">
                  <div class="row">
                     <div class="col-lg-10">
                        <div class="relative-pos keyword-desktop-container">
                           <input class="form-input search-bar__keyword" type="text" id="keyword" name="keyword"
                              placeholder="Search" value="" autocomplete="off">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <a class="search_consultants  btn btn-primary no-margin" data-value="1"
                           type="button">Search</a>
                     </div>
                  </div>
               </form>
            </div>
            --}}
            <div id="cons-data">

               @include('site.pages.paginate_consultants')
            </div>
         </div>
      </div>
   </div>
</section>
<!-- The Modal -->
<div class="modal" id="showMessage">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-1">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Alert</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>Please Sign Up as an "Employer" to post a project/ Hire a consultant</p>
         <div class="d-block header-title">
            <a class="btn btn-default mr-20 mb-0" href="{{url('employer_redirect')}}">Signup<i class="fa fa-long-arrow-alt-right"></i></a>
         </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
{{-- <section id="hire-cta">
   <h1>So what are you waiting for?</h1>
   <br>
   <p>Post a project today and get bids from talented freelancers.</p>
   <a href="{{url('register')}}"  class="btn btn-default">Post a Project </a>
</section> --}}
@endsection
@section('scripts')
{{-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
   $('#example').DataTable({

       "bLengthChange" : false,
       "searching": false,
       "info": false,
       "pagingType": "simple",
       "pageLength": 10,
       "language": {
   "paginate": {
     "previous": "Prev"
   }
   },
       stripeClasses: [],

   });
   } );
</script> --}}


<script>
   function getdataajax(){
       var keyword = $("#keyword").val();
   var location = $("#location").val();
   var rate = $("#rate").val();
   var category = $("input[name='category']:checked").val();
   console.log(category);

   var page = $(this).attr("data-value")

   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       }
   });

   $.ajax({
       url: '{{ route('get.consultants') }}',
       method: 'POST',
       data: {
           "_token": "{{ csrf_token() }}",
           keyword: keyword,
           location: location,
           rate: rate,
           category: category,

           page: page,


       },
       // dataType: 'json',

       success: function (data) {


           var total_pages = 1;

           $('#cons-data').html(data);
           $('html, body').animate({
            scrollTop: $("#opp-search").offset().top
            }, 'slow');
           show_hide_more()




       }
   });

   }


</script>
<script>
   $(document).ready(function () {
       show_hide_more()
       $(document).ajaxStart(function () {
           $("#preloader").css("display", "block");

       });
       $(document).ajaxComplete(function () {
           $("#preloader").css("display", "none");

       });
       $(document).on("click", ".search_consultants", function () {

       getdataajax();
       });
       $("input[name='category']").change(function () {

           getdataajax();
       });
       $("#rate").on("change", function () {

           getdataajax();
           });
           $("#location").on("change", function () {

           getdataajax();
           });
           $("#search_employee").submit(function( event ){
            event.preventDefault();
            getdataajax();
            });
   });

</script>
<script>
   $(document).ready(function(){

    $(document).on('click', '.pagination a', function(event){
     event.preventDefault();
     var page = $(this).attr('href').split('page=')[1];
     fetch_data(page);
    });

    function fetch_data(page)
    {
     $.ajax({
      url:"/employers/fetch_consultants?page="+page,
      success:function(data)
      {
       $('#cons-data').html(data);
       $('html, body').animate({
       scrollTop: $("#opp-search").offset().top
   }, 'slow');
   show_hide_more()
      }
     });
    }

   });
</script>
{{-- <script>
   $(document).on("click", ".paginate_button ",  function() {
   $('html, body').animate({
       scrollTop: $(".dataTables_wrapper").offset().top
   }, 'slow');
   });
</script> --}}
<script>
   function show_hide_more(){
       $(".full-desc").hide();
       $(".show_hide").on("click", function (e) {
   e.preventDefault();
   var id = $(this).attr('data-id');
           console.log(id);
           var txt = $(".full-desc[data-id='"+id+"']").is(':visible') ? 'Show More' : 'Show Less';
           $(this).text(txt);


           $(".half-desc[data-id='"+id+"']").slideToggle(200);
           $(".full-desc[data-id='"+id+"']").slideToggle(200);
       });}

</script>
<script>
   function myFunction(id) {
     var dots = document.getElementById("dots");

     var moreText = document.getElementById("more");
     var btnText = document.getElementById("myBtn");


     if (!$("#dots-"+id).is(':visible')) {
      //  dots.style.display = "inline";
      //  btnText.innerHTML = "Read more";

       $("#dots-"+id).attr("style", "display:inline")
       $("#btn-"+id).html('Read more');
       $("#more-"+id).slideToggle(200);

      //  moreText.style.display = "none";
     } else {
      //  dots.style.display = "none";
      //  btnText.innerHTML = "Read less";

       $("#dots-"+id).attr("style", "display:none")
       $("#btn-"+id).html('Read Less');
       $("#more-"+id).slideToggle(200);
      //  moreText.style.display = "inline";

     }
   }
   </script>
@endsection
