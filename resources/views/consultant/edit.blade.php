@extends('layouts.site.app')


@section('content')
<style>
    #requirement-page{
       background:url({{asset('site/images/bg-lines.png')}}), linear-gradient(to right,rgb(169 169 167),rgb(232 232 232),rgb(156 142 142 / 2%),rgb(169 168 168 / 20%));
padding:60px 0px 60px 0px;
   }
   .header-title h1 {
   color: #00449b;
   font-size: 56px;
   margin-top: 110px;
   text-transform: uppercase;
}
.active-status{

    position: relative;
    top: 52px;
    right: 34px;

}
#previewimage{
    width:100%;
    height: 500px;
    object-fit: contain;
}

@media only screen and (max-width: 768px){
   .header-title h1 {
   color: #00449b;
   font-size: 30px;
   margin-top: 00px;
   margin-bottom:30px;
}#requirement-page h1{
    padding:0
}


}
.img-modal {
display: block;
max-width: 100%;
}
.preview {
overflow: hidden;
width: 160px; 
height: 160px;
margin: 10px;
border: 1px solid red;
}
.modal-lg{
max-width: 1000px !important;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>

<section id="requirement-page">
   <div class="container">
    <div class="row">
        <div class="col-md-7 header-title">
            <h1>CONSULTANT PROFILE</h1>
        </div>
        <div class="col-md-5">
           <svg class="animated" id="freepik_stories-account" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><style>svg#freepik_stories-account:not(.animated) .animable {opacity: 0;}svg#freepik_stories-account.animated #freepik--background-complete--inject-35 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideLeft;animation-delay: 0s;}svg#freepik_stories-account.animated #freepik--Floor--inject-35 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideLeft;animation-delay: 0s;}svg#freepik_stories-account.animated #freepik--speech-bubble--inject-35 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedRight;animation-delay: 0s;}svg#freepik_stories-account.animated #freepik--Window--inject-35 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedLeft,3s Infinite  linear floating;animation-delay: 0s,1s;}svg#freepik_stories-account.animated #freepik--Character--inject-35 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomOut;animation-delay: 0s;}            @keyframes slideLeft {                0% {                    opacity: 0;                    transform: translateX(-30px);                }                100% {                    opacity: 1;                    transform: translateX(0);                }            }                    @keyframes lightSpeedRight {              from {                transform: translate3d(50%, 0, 0) skewX(-20deg);                opacity: 0;              }              60% {                transform: skewX(10deg);                opacity: 1;              }              80% {                transform: skewX(-2deg);              }              to {                opacity: 1;                transform: translate3d(0, 0, 0);              }            }                    @keyframes lightSpeedLeft {              from {                transform: translate3d(-50%, 0, 0) skewX(20deg);                opacity: 0;              }              60% {                transform: skewX(-10deg);                opacity: 1;              }              80% {                transform: skewX(2deg);              }              to {                opacity: 1;                transform: translate3d(0, 0, 0);              }            }                    @keyframes floating {                0% {                    opacity: 1;                    transform: translateY(0px);                }                50% {                    transform: translateY(-10px);                }                100% {                    opacity: 1;                    transform: translateY(0px);                }            }                    @keyframes zoomOut {                0% {                    opacity: 0;                    transform: scale(1.5);                }                100% {                    opacity: 1;                    transform: scale(1);                }            }        </style><g id="freepik--background-complete--inject-35" class="animable" style="transform-origin: 294.171px 241.224px;"><rect x="187.83" y="80.54" width="236.9" height="325.61" style="fill: rgb(245, 245, 245); transform-origin: 306.28px 243.345px;" id="el8j6leq7my97" class="animable"></rect><rect x="187.83" y="80.54" width="236.9" height="17.7" style="fill: rgb(224, 224, 224); transform-origin: 306.28px 89.39px;" id="elj3bbztgsxyr" class="animable"></rect><path d="M198.57,89.39A2.38,2.38,0,1,1,196.19,87,2.38,2.38,0,0,1,198.57,89.39Z" style="fill: rgb(245, 245, 245); transform-origin: 196.19px 89.38px;" id="el2tmfa5p92pa" class="animable"></path><path d="M216.4,88.88A2.38,2.38,0,1,1,214,86.49,2.38,2.38,0,0,1,216.4,88.88Z" style="fill: rgb(245, 245, 245); transform-origin: 214.02px 88.8699px;" id="elazzhlht1" class="animable"></path><path d="M207.92,88.88a2.38,2.38,0,1,1-2.38-2.39A2.38,2.38,0,0,1,207.92,88.88Z" style="fill: rgb(245, 245, 245); transform-origin: 205.54px 88.87px;" id="elhmv4fhk1zul" class="animable"></path><path d="M450.23,114.31s-9.44-3.91-15.77,18.07-7.95,34.28-7.95,34.28-1.89,4.71-5.3,2.53-8.86-9.2-13.48-6.85c-4.8,2.43-5.38,8.42-2.8,16.56s7.58,26.18,8,27.81,0,4.18-2.59,3.07-18.37-13.09-23.6-5.24,5.68,29.33,6.83,31.71.86,3.53-.21,4.38-6-3.68-10.64-6.9-10.57-6.14-13.21-1.36-.44,22.06,21.17,46.65l10.77,10.74,14.8-3.73c31.2-9.91,42-23.57,42.22-29s-6.39-6-12-5.65-12.19,1.69-12.67.42-.12-2.42,2.09-3.86,22.65-14.22,22.21-23.64-20.15-7.32-22.92-7.69-1.84-2.82-.64-4,14.81-14.05,21.22-19.69,9-11.06,6.16-15.63c-2.75-4.39-11-1.2-15.08-1.09s-3.23-4.9-3.23-4.9,4.94-11.37,10.87-33.46S450,114.24,450,114.24" style="fill: rgb(235, 235, 235); transform-origin: 415.843px 201.9px;" id="el3n00x5ffqk1" class="animable"></path><path d="M444.53,134s0,.16-.1.47-.2.78-.34,1.36c-.32,1.23-.77,3-1.36,5.24-1.18,4.55-2.94,11.12-5.15,19.22-4.42,16.21-10.7,38.56-17.73,63.21s-13.37,47-17.87,63.17l-5.31,19.17c-.63,2.25-1.12,4-1.45,5.21-.17.58-.3,1-.39,1.36l-.15.45s0-.16.09-.47.2-.78.34-1.36c.32-1.22.78-3,1.36-5.24,1.18-4.55,2.95-11.11,5.16-19.22,4.41-16.21,10.7-38.55,17.72-63.21s13.37-47,17.87-63.17L442.54,141c.62-2.25,1.11-4,1.45-5.21q.24-.87.39-1.35C444.47,134.14,444.53,134,444.53,134Z" style="fill: rgb(224, 224, 224); transform-origin: 419.605px 223.43px;" id="elq6svalhgmrs" class="animable"></path><path d="M415,172.45a4.21,4.21,0,0,1,.58.94c.35.62.82,1.52,1.4,2.65,1.14,2.25,2.63,5.41,4.22,8.92l4,9,1.23,2.73a3.84,3.84,0,0,1,.4,1,5.49,5.49,0,0,1-.58-.93c-.35-.62-.82-1.53-1.38-2.66-1.12-2.27-2.58-5.44-4.16-9l-4.07-9c-.49-1.07-.91-2-1.25-2.72A4.94,4.94,0,0,1,415,172.45Z" style="fill: rgb(224, 224, 224); transform-origin: 420.915px 185.07px;" id="el4aetgeoz2l" class="animable"></path><path d="M428.22,197.71c-.07-.13,6.3-3.5,14.21-7.53s14.38-7.2,14.45-7.07-6.3,3.5-14.21,7.53S428.28,197.84,428.22,197.71Z" style="fill: rgb(224, 224, 224); transform-origin: 442.55px 190.41px;" id="elb9fk0tjgm7c" class="animable"></path><path d="M415.72,235.08a4.87,4.87,0,0,1,1.09-.27l3-.57c2.52-.49,6-1.18,9.83-2.07s7.27-1.81,9.75-2.49l2.94-.81a5.62,5.62,0,0,1,1.1-.24,4.17,4.17,0,0,1-1,.43c-.68.25-1.67.58-2.9,1-2.46.78-5.89,1.75-9.73,2.64s-7.34,1.53-9.89,1.93c-1.28.19-2.31.33-3,.41A4.31,4.31,0,0,1,415.72,235.08Z" style="fill: rgb(224, 224, 224); transform-origin: 429.575px 231.867px;" id="elic7zfawcwq" class="animable"></path><path d="M398.7,214.88a5,5,0,0,1,.75.72c.46.48,1.11,1.19,1.91,2.08,1.59,1.77,3.76,4.24,6.14,7s4.51,5.26,6,7.09c.76.92,1.37,1.67,1.78,2.19a3.67,3.67,0,0,1,.6.85,4.46,4.46,0,0,1-.75-.72c-.46-.48-1.11-1.19-1.91-2.08-1.59-1.77-3.77-4.24-6.14-7s-4.51-5.26-6-7.09c-.76-.92-1.37-1.66-1.78-2.19A3.31,3.31,0,0,1,398.7,214.88Z" style="fill: rgb(224, 224, 224); transform-origin: 407.29px 224.845px;" id="elfslxa14djak" class="animable"></path><path d="M383.47,246.48a6.31,6.31,0,0,1,.95.93l2.46,2.65c2.05,2.26,4.86,5.4,7.94,8.9s5.85,6.67,7.83,9l2.33,2.77a6.77,6.77,0,0,1,.8,1.06,6.6,6.6,0,0,1-1-.93l-2.45-2.65c-2.05-2.26-4.86-5.41-7.94-8.9s-5.85-6.67-7.83-9l-2.33-2.77A6.52,6.52,0,0,1,383.47,246.48Z" style="fill: rgb(224, 224, 224); transform-origin: 394.625px 259.135px;" id="elg79b2e1g0ph" class="animable"></path><path d="M405.41,271a8.45,8.45,0,0,1,1.38-.38l3.77-.86c3.18-.73,7.58-1.76,12.4-3s9.15-2.51,12.29-3.43l3.71-1.09a7.74,7.74,0,0,1,1.38-.35,6.61,6.61,0,0,1-1.32.54c-.86.31-2.11.74-3.66,1.25-3.11,1-7.44,2.33-12.27,3.59s-9.25,2.24-12.46,2.88c-1.6.32-2.9.56-3.81.7A6.88,6.88,0,0,1,405.41,271Z" style="fill: rgb(224, 224, 224); transform-origin: 422.875px 266.445px;" id="el8auqoqtdbpg" class="animable"></path><path d="M126.3,77.61a11.25,11.25,0,0,1,8.78-.75,19.87,19.87,0,0,1,7.65,4.7c4.28,4,7,10.13,8.64,15.75-6.34,1.39-13-2.14-16.26-4.14-5.16-3.17-12.56-12-8.81-15.56" style="fill: rgb(235, 235, 235); transform-origin: 138.324px 86.9623px;" id="ellxg2pzl7y4l" class="animable"></path><path d="M162.45,98.44A9.58,9.58,0,0,1,157,90.52a12.73,12.73,0,0,1,3.23-9.31,5.36,5.36,0,0,1,4-2.21,4.08,4.08,0,0,1,3.38,2.42,8.32,8.32,0,0,1,.61,4.28c-.39,5-1.68,9.75-5.69,12.74" style="fill: rgb(235, 235, 235); transform-origin: 162.628px 88.72px;" id="el1tid3bpwtka" class="animable"></path><path d="M172.39,114.38s-.33-.27-.85-.84-1.27-1.4-2.15-2.46a40.43,40.43,0,0,1-5.82-9.09,20.57,20.57,0,0,1-1.88-10.6,14.48,14.48,0,0,1,.74-3.21,4.52,4.52,0,0,1,.51-1.09,25.42,25.42,0,0,0-.88,4.33,21.38,21.38,0,0,0,2,10.35,45.07,45.07,0,0,0,5.64,9.08l2,2.56A5.35,5.35,0,0,1,172.39,114.38Z" style="fill: rgb(224, 224, 224); transform-origin: 166.999px 100.735px;" id="elwlaqbxa86en" class="animable"></path><path d="M132.53,83.85a2.24,2.24,0,0,1,.45.25l1.24.8c1.07.7,2.6,1.75,4.48,3.06,3.75,2.62,8.86,6.36,14.39,10.63s10.46,8.25,14,11.16l4.16,3.47,1.12,1a1.87,1.87,0,0,1,.36.36,2,2,0,0,1-.43-.28l-1.18-.89L166.85,110c-3.59-2.84-8.55-6.77-14.07-11s-10.6-8-14.3-10.74l-4.38-3.19-1.18-.88C132.65,84,132.52,83.87,132.53,83.85Z" style="fill: rgb(224, 224, 224); transform-origin: 152.63px 99.215px;" id="elzu0va5hdo1m" class="animable"></path><path d="M160.31,107.67a22.48,22.48,0,0,0-20.52-.48c-1.62.8-3.34,2.17-3.21,4s2,2.92,3.78,3.44a19.19,19.19,0,0,0,20.26-6.55" style="fill: rgb(235, 235, 235); transform-origin: 148.597px 110.149px;" id="eldwc5urr3st6" class="animable"></path><path d="M144.64,110.05a4.65,4.65,0,0,1,1-.58,7.71,7.71,0,0,1,1.24-.57,13.55,13.55,0,0,1,1.72-.61,15.94,15.94,0,0,1,2.14-.53,23,23,0,0,1,2.51-.35,26.94,26.94,0,0,1,5.8.27,27.93,27.93,0,0,1,5.58,1.59,25.43,25.43,0,0,1,4.2,2.18,18.21,18.21,0,0,1,1.5,1,11.16,11.16,0,0,1,1.06.85,4.87,4.87,0,0,1,.84.81c-.06.09-1.31-1-3.59-2.39A28.34,28.34,0,0,0,159,108.2a27.86,27.86,0,0,0-5.67-.31,24.67,24.67,0,0,0-2.47.29,17.74,17.74,0,0,0-2.12.46C146.14,109.34,144.68,110.16,144.64,110.05Z" style="fill: rgb(224, 224, 224); transform-origin: 158.435px 110.737px;" id="elz6r34lov14h" class="animable"></path></g><g id="freepik--Floor--inject-35" class="animable" style="transform-origin: 250.415px 454.89px;"><path d="M448,454.89c0,.15-88.46.26-197.56.26S52.83,455,52.83,454.89s88.44-.26,197.57-.26S448,454.75,448,454.89Z" style="fill: rgb(38, 50, 56); transform-origin: 250.415px 454.89px;" id="elne1uarm6dk" class="animable"></path></g><g id="freepik--speech-bubble--inject-35" class="animable" style="transform-origin: 79.0624px 143.32px;"><path d="M99.92,153.43s.15.18.4.54l1.09,1.57,4.12,6a.12.12,0,0,1,0,.17.11.11,0,0,1-.07,0H93.91a.15.15,0,0,1-.15-.14.11.11,0,0,1,0-.08h0l.26.22a24.82,24.82,0,0,1-11,5.78,23.81,23.81,0,0,1-7.11.57,23.48,23.48,0,0,1-7.47-1.62,25.39,25.39,0,0,1-7-4.1A24.42,24.42,0,0,1,56,155.92a24.8,24.8,0,0,1,5.49-31.66,24.95,24.95,0,0,1,28-2.62,25,25,0,0,1,8.87,8.44,24.64,24.64,0,0,1,3.51,9.49c.06.37.11.73.16,1.09s0,.72.07,1.06c0,.7.08,1.37.06,2a23.88,23.88,0,0,1-.32,3.49,23.6,23.6,0,0,1-1.27,4.67c-.2.51-.37.91-.49,1.15a2.37,2.37,0,0,1-.2.39,2.54,2.54,0,0,1,.15-.4c.1-.27.26-.66.44-1.18a26,26,0,0,0,1.17-4.66,24,24,0,0,0,.27-3.46c0-.64-.06-1.3-.08-2,0-.34,0-.69-.08-1.05l-.17-1.08a24.44,24.44,0,0,0-39.8-15,24.71,24.71,0,0,0-8.26,14,24.44,24.44,0,0,0,2.89,17A24.11,24.11,0,0,0,61.8,162a25.1,25.1,0,0,0,6.83,4A23.12,23.12,0,0,0,76,167.67a23.68,23.68,0,0,0,7-.53,24.52,24.52,0,0,0,10.88-5.63.16.16,0,0,1,.24,0,.15.15,0,0,1,0,.2h0l-.26-.23a1.73,1.73,0,0,1,.53-.07h2.84l3,0,5.23.06-.1.19c-1.74-2.65-3.1-4.71-4-6.14l-1-1.6C100,153.61,99.92,153.43,99.92,153.43Z" style="fill: rgb(38, 50, 56); transform-origin: 79.0624px 143.32px;" id="elw217flh9t7" class="animable"></path><path d="M79.33,141.68a5.32,5.32,0,0,0,3.17-4.92,5,5,0,1,0-10,0,5.32,5.32,0,0,0,3.18,5c-7.67,1.15-7.32,9.48-7.32,9.48l18.13.09S86.93,142.82,79.33,141.68Z" style="fill: rgb(145, 191, 32); transform-origin: 77.4261px 141.545px;" id="elr88qjv1l58" class="animable"></path></g><g id="freepik--Window--inject-35" class="animable animator-active" style="transform-origin: 287.14px 214.865px;"><rect x="168.67" y="52.1" width="236.9" height="325.61" style="fill: rgb(250, 250, 250); transform-origin: 287.12px 214.905px;" id="elnxcjd3ipje" class="animable"></rect><rect x="264.1" y="217.7" width="101.64" height="16.92" style="fill: rgb(235, 235, 235); transform-origin: 314.92px 226.16px;" id="elwjk37jtz5b" class="animable"></rect><path d="M274.07,230.22a3.24,3.24,0,1,1,3.24-3.24A3.24,3.24,0,0,1,274.07,230.22Zm0-6.23a3,3,0,1,0,3,3A3,3,0,0,0,274.07,224Z" style="fill: rgb(38, 50, 56); transform-origin: 274.07px 226.98px;" id="el3j6ekcsjal" class="animable"></path><path d="M344.34,227.26c0,.14-13.5.26-30.15.26S284,227.4,284,227.26s13.5-.26,30.16-.26S344.34,227.11,344.34,227.26Z" style="fill: rgb(38, 50, 56); transform-origin: 314.17px 227.26px;" id="ellwwxux3sfq8" class="animable"></path><rect x="168.67" y="80.49" width="236.9" height="60.69" style="fill: rgb(38, 50, 56); transform-origin: 287.12px 110.835px;" id="eladi0wy4o0g9" class="animable"></rect><rect x="168.67" y="52.1" width="236.9" height="17.7" style="fill: rgb(69, 90, 100); transform-origin: 287.12px 60.95px;" id="el475faxgspdq" class="animable"></rect><circle cx="177.04" cy="60.95" r="2.38" style="fill: rgb(38, 50, 56); transform-origin: 177.04px 60.95px;" id="el02va2579pulr" class="animable"></circle><path d="M197.25,60.44a2.38,2.38,0,1,1-2.38-2.38A2.39,2.39,0,0,1,197.25,60.44Z" style="fill: rgb(38, 50, 56); transform-origin: 194.87px 60.44px;" id="el7tabebvdirj" class="animable"></path><path d="M188.77,60.44a2.38,2.38,0,1,1-2.38-2.38A2.39,2.39,0,0,1,188.77,60.44Z" style="fill: rgb(38, 50, 56); transform-origin: 186.39px 60.44px;" id="el5asypvwdh5e" class="animable"></path><rect x="168.67" y="69.8" width="236.9" height="10.69" style="fill: rgb(224, 224, 224); transform-origin: 287.12px 75.145px;" id="elp33873beh8o" class="animable"></rect><path d="M250.09,181.22c0,.14-7.93.26-17.71.26s-17.72-.12-17.72-.26,7.93-.26,17.72-.26S250.09,181.07,250.09,181.22Z" style="fill: rgb(38, 50, 56); transform-origin: 232.375px 181.22px;" id="elz91xaoyh4jr" class="animable"></path><path d="M250.09,189.53c0,.15-7.93.27-17.71.27s-17.72-.12-17.72-.27,7.93-.26,17.72-.26S250.09,189.39,250.09,189.53Z" style="fill: rgb(38, 50, 56); transform-origin: 232.375px 189.535px;" id="el2yh9x1me4bv" class="animable"></path><path d="M234.76,196.41a95.23,95.23,0,0,1-10,.26,95.23,95.23,0,0,1-10.05-.26,98.58,98.58,0,0,1,10.05-.26A98.58,98.58,0,0,1,234.76,196.41Z" style="fill: rgb(38, 50, 56); transform-origin: 224.735px 196.412px;" id="el1xwrd6rbvfd" class="animable"></path><rect x="265.11" y="151.68" width="101.08" height="26.65" style="fill: rgb(235, 235, 235); transform-origin: 315.65px 165.005px;" id="elvgaguv6t11" class="animable"></rect><path d="M279.32,191.15a5.26,5.26,0,1,1-5.25-5.25A5.25,5.25,0,0,1,279.32,191.15Z" style="fill: rgb(224, 224, 224); transform-origin: 274.06px 191.16px;" id="elsrlrzwjhog" class="animable"></path><path d="M365.74,187.38c0,.14-16.93.26-37.81.26s-37.82-.12-37.82-.26,16.93-.26,37.82-.26S365.74,187.23,365.74,187.38Z" style="fill: rgb(38, 50, 56); transform-origin: 327.925px 187.38px;" id="elkga051jkm6" class="animable"></path><path d="M329.32,194.88c0,.15-8.78.26-19.6.26s-19.61-.11-19.61-.26,8.78-.26,19.61-.26S329.32,194.74,329.32,194.88Z" style="fill: rgb(38, 50, 56); transform-origin: 309.715px 194.88px;" id="elawjdspep37" class="animable"></path><rect x="345.62" y="203.39" width="20.12" height="2.77" style="fill: rgb(145, 191, 32); transform-origin: 355.68px 204.775px;" id="elxk10uk3egg" class="animable"></rect><rect x="345.62" y="267.86" width="20.12" height="2.77" style="fill: rgb(145, 191, 32); transform-origin: 355.68px 269.245px;" id="elu6em4eh8l3d" class="animable"></rect><path d="M345.62,243.08c0,.15-17.61.26-39.34.26s-39.35-.11-39.35-.26,17.62-.26,39.35-.26S345.62,242.94,345.62,243.08Z" style="fill: rgb(38, 50, 56); transform-origin: 306.275px 243.08px;" id="el486la2yaev6" class="animable"></path><path d="M345.62,249.83c0,.15-17.61.26-39.34.26s-39.35-.11-39.35-.26,17.62-.26,39.35-.26S345.62,249.69,345.62,249.83Z" style="fill: rgb(38, 50, 56); transform-origin: 306.275px 249.83px;" id="elgn6t78eiey" class="animable"></path><path d="M345.62,256.58c0,.15-17.61.26-39.34.26s-39.35-.11-39.35-.26,17.62-.26,39.35-.26S345.62,256.44,345.62,256.58Z" style="fill: rgb(38, 50, 56); transform-origin: 306.275px 256.58px;" id="elb54crdvczjv" class="animable"></path><path d="M292.22,268.74c0,.14-5.49.26-12.27.26s-12.26-.12-12.26-.26,5.49-.27,12.26-.27S292.22,268.59,292.22,268.74Z" style="fill: rgb(38, 50, 56); transform-origin: 279.955px 268.735px;" id="el1qovvn7bqlo" class="animable"></path><rect x="264.1" y="285.77" width="101.64" height="60.86" style="fill: rgb(69, 90, 100); transform-origin: 314.92px 316.2px;" id="eldr4kx1jw15" class="animable"></rect><polygon points="264.1 346.63 306.28 319.03 319.2 328.23 345.62 310.53 365.74 326.1 365.74 346.63 264.1 346.63" style="fill: rgb(38, 50, 56); transform-origin: 314.92px 328.58px;" id="el7lrxkxz2iop" class="animable"></polygon><circle cx="322.12" cy="306.7" r="7.2" style="fill: rgb(38, 50, 56); transform-origin: 322.12px 306.7px;" id="elrrzpficlfwe" class="animable"></circle><rect x="212.55" y="211.84" width="10.59" height="10.59" style="fill: rgb(224, 224, 224); transform-origin: 217.845px 217.135px;" id="el71i0hzutr4" class="animable"></rect><rect x="225.44" y="211.84" width="10.59" height="10.59" style="fill: rgb(235, 235, 235); transform-origin: 230.735px 217.135px;" id="elx2xhn0566dn" class="animable"></rect><rect x="238.42" y="211.84" width="10.59" height="10.59" style="fill: rgb(235, 235, 235); transform-origin: 243.715px 217.135px;" id="elzw6tgjqu8g8" class="animable"></rect><rect x="212.55" y="224.49" width="10.59" height="10.59" style="fill: rgb(235, 235, 235); transform-origin: 217.845px 229.785px;" id="ellrl2i0hth5t" class="animable"></rect><rect x="225.44" y="224.49" width="10.59" height="10.59" style="fill: rgb(245, 245, 245); transform-origin: 230.735px 229.785px;" id="el13mizyfiquuq" class="animable"></rect><rect x="238.42" y="224.49" width="10.59" height="10.59" style="fill: rgb(224, 224, 224); transform-origin: 243.715px 229.785px;" id="el6edg2xlt54x" class="animable"></rect><rect x="212.55" y="237.15" width="10.59" height="10.59" style="fill: rgb(224, 224, 224); transform-origin: 217.845px 242.445px;" id="el5k28uil8al" class="animable"></rect><rect x="225.44" y="237.15" width="10.59" height="10.59" style="fill: rgb(235, 235, 235); transform-origin: 230.735px 242.445px;" id="ellxj8ecnsyb" class="animable"></rect><rect x="238.42" y="237.15" width="10.59" height="10.59" style="fill: rgb(224, 224, 224); transform-origin: 243.715px 242.445px;" id="elg8dgyhsebb" class="animable"></rect><g id="elswsm6s64ecq"><rect x="202.93" y="94.27" width="58.75" height="58.75" style="fill: rgb(145, 191, 32); transform-origin: 232.305px 123.645px; transform: rotate(-0.35deg);" class="animable"></rect></g><g id="elkftw7yywkw"><path d="M244.75,124.91a1.09,1.09,0,0,0,.09,1.53,1.08,1.08,0,0,0,1.44-1.61A1.09,1.09,0,0,0,244.75,124.91Z" style="opacity: 0.2; transform-origin: 245.559px 125.635px;" class="animable"></path></g><g id="elzd1t6ni1kr"><path d="M247.33,123.77a2.53,2.53,0,0,0-3,0c-.32.25-.44.49-.38.54s.85-.41,1.87-.4,1.76.56,1.87.43S247.65,124,247.33,123.77Z" style="opacity: 0.2; transform-origin: 245.83px 123.819px;" class="animable"></path></g><g id="el2rg9gsgeyyf"><path d="M235.26,125.28a1.09,1.09,0,0,0-1.48.37,1.07,1.07,0,0,0,.36,1.48,1.09,1.09,0,0,0,1.49-.36A1.1,1.1,0,0,0,235.26,125.28Z" style="opacity: 0.2; transform-origin: 234.7px 126.209px;" class="animable"></path></g><g id="elu6ubbeh9349"><path d="M236.22,124.74a2.44,2.44,0,0,0-1.49-.5,2.57,2.57,0,0,0-1.5.48c-.32.25-.44.48-.38.54s.85-.41,1.88-.4,1.75.55,1.87.42S236.54,125,236.22,124.74Z" style="opacity: 0.2; transform-origin: 234.736px 124.77px;" class="animable"></path></g><g id="eln3jrkp1gl"><path d="M242.42,130.06a28.18,28.18,0,0,0-2.32-5.25,28.58,28.58,0,0,0,1.78,5.45c.28.72.56,1.4.82,2.08a1.41,1.41,0,0,1,.2.76c0,.15-.23.21-.5.24a5,5,0,0,0-1.65.36,5.07,5.07,0,0,0,1.69.05,2.15,2.15,0,0,0,.46-.06.74.74,0,0,0,.46-.43,1.73,1.73,0,0,0-.16-1.11C243,131.47,242.69,130.78,242.42,130.06Z" style="opacity: 0.2; transform-origin: 241.745px 129.304px;" class="animable"></path></g><g id="el55860oiym2"><path d="M231.73,143.55s2.32,5.34,9.73,4.62v-1.92A17.25,17.25,0,0,1,231.73,143.55Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 236.595px 145.893px;" class="animable"></path></g><g id="elakpcn8h94w8"><path d="M247.77,116.11l-.1.07-.06,0a12.82,12.82,0,0,1-9.8-.21c-4-1.61-8.56-2.19-9.49-1.34s-.82,4.84-4.54,6.3c0,0,.84,7.35-2.07,7.5h0l-.06,0c-.08-1.68-.15-3.24-.15-3.24a4.86,4.86,0,0,0-.61-.14,5.27,5.27,0,0,0-2.18.07c-1.16.33-2.22,1.27-2.13,3.67.15,4,3.33,4.08,4.67,3.85l1,20.42,19.29-.12c.07-1.56,0-2.67,0-4.05l0-.74c-7.41.72-9.73-4.62-9.73-4.62a17.25,17.25,0,0,0,9.7,2.7v.1c.14,0,7.41-1.27,7.45-8.63C248.93,132.18,248.16,121.29,247.77,116.11ZM220,130.89a1,1,0,0,1-.8.16,2.31,2.31,0,0,1-1.38-2.14,3,3,0,0,1,.26-1.43,1.24,1.24,0,0,1,.89-.82.69.69,0,0,1,.5.11.59.59,0,0,1,.21.31c.05.21,0,.31-.06.3s0-.11-.07-.25a.45.45,0,0,0-.53-.22,1,1,0,0,0-.64.7,2.93,2.93,0,0,0-.2,1.28,2.18,2.18,0,0,0,1.09,1.92.9.9,0,0,0,.66,0c.14-.07.21-.15.23-.14S220.2,130.76,220,130.89ZM245,121.56c1.46-.08,2.48.64,2.35.88s-1.11.09-2.29.16-2.16.34-2.3.08S243.51,121.63,245,121.56Zm-13.64.23c0-.3,1.06-.44,2.28-.49l1.54-.08c.38,0,.64,0,.72.09s-.09.39-.51.62a4.38,4.38,0,0,1-1.7.41C232.32,122.39,231.3,122.07,231.32,121.79Zm4.31,5a1.09,1.09,0,0,1-1.49.36,1.07,1.07,0,0,1-.36-1.48,1.09,1.09,0,0,1,1.48-.37A1.1,1.1,0,0,1,235.63,126.77Zm1-1.49c-.12.13-.85-.42-1.87-.42s-1.77.53-1.88.4.06-.29.38-.54a2.57,2.57,0,0,1,1.5-.48,2.44,2.44,0,0,1,1.49.5C236.54,125,236.65,125.23,236.6,125.28Zm2.79,11.06c-1.36-.46-2-1.54-1.84-1.6s.82.72,2,1.11a16.36,16.36,0,0,0,2.26.35A2.55,2.55,0,0,1,239.39,136.34Zm4-3.08a.74.74,0,0,1-.46.43,2.15,2.15,0,0,1-.46.06,5.07,5.07,0,0,1-1.69-.05,5,5,0,0,1,1.65-.36c.27,0,.48-.09.5-.24a1.41,1.41,0,0,0-.2-.76c-.26-.68-.54-1.36-.82-2.08a28.58,28.58,0,0,1-1.78-5.45,28.18,28.18,0,0,1,2.32,5.25c.27.72.53,1.41.78,2.09A1.73,1.73,0,0,1,243.36,133.26Zm3-6.91a1.08,1.08,0,0,1-1.52.09,1.08,1.08,0,1,1,1.44-1.61A1.08,1.08,0,0,1,246.36,126.35Zm1.34-2c-.11.13-.84-.43-1.87-.43s-1.76.53-1.87.4.06-.29.38-.54a2.53,2.53,0,0,1,3,0C247.65,124,247.76,124.26,247.7,124.32Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 232.767px 133.65px;" class="animable"></path></g><g id="eligynzajzna"><path d="M219.31,130.81a2.18,2.18,0,0,1-1.09-1.92,2.93,2.93,0,0,1,.2-1.28,1,1,0,0,1,.64-.7.45.45,0,0,1,.53.22c.07.14,0,.24.07.25s.11-.09.06-.3a.59.59,0,0,0-.21-.31.69.69,0,0,0-.5-.11,1.24,1.24,0,0,0-.89.82,3,3,0,0,0-.26,1.43,2.31,2.31,0,0,0,1.38,2.14,1,1,0,0,0,.8-.16c.16-.13.18-.25.16-.26s-.09.07-.23.14A.9.9,0,0,1,219.31,130.81Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 219.03px 128.863px;" class="animable"></path></g><g id="elpevx0h64fg9"><path d="M221.15,110.47c.11-.08-.38-.84-1.4-1.15s-1.86,0-1.8.17.79.06,1.65.33S221,110.57,221.15,110.47Z" style="opacity: 0.2; transform-origin: 219.556px 109.836px;" class="animable"></path></g><g id="eljli9eo07tl"><path d="M221.93,110.7a17.27,17.27,0,0,1-.72-2.13,12.6,12.6,0,0,0-.4-2.3,3.65,3.65,0,0,0-.11,2.41,3.47,3.47,0,0,0,1.14,2.07s.07,0,.08,0S221.94,110.73,221.93,110.7Z" style="opacity: 0.2; transform-origin: 221.24px 108.51px;" class="animable"></path></g><g id="el6fxnu91i72b"><path d="M245,122.6c1.18-.07,2.17.12,2.29-.16s-.89-1-2.35-.88-2.4.88-2.24,1.12S243.83,122.65,245,122.6Z" style="opacity: 0.2; transform-origin: 244.991px 122.162px;" class="animable"></path></g><g id="elur6qaxjyhqc"><path d="M233.65,122.34a4.38,4.38,0,0,0,1.7-.41c.42-.23.59-.51.51-.62s-.34-.1-.72-.09l-1.54.08c-1.22,0-2.27.19-2.28.49S232.32,122.39,233.65,122.34Z" style="opacity: 0.2; transform-origin: 233.6px 121.78px;" class="animable"></path></g><g id="elxgfargqyq6"><path d="M237.55,134.74c-.13.06.48,1.14,1.84,1.6a2.55,2.55,0,0,0,2.43-.14,16.36,16.36,0,0,1-2.26-.35C238.37,135.46,237.67,134.65,237.55,134.74Z" style="opacity: 0.2; transform-origin: 239.676px 135.658px;" class="animable"></path></g><g id="elo2l7n1tvxb"><path d="M248.17,104a8.52,8.52,0,0,0-9.56-1.26c-1.4.75-2.59,1.89-4.1,2.37-1.81.57-3.76.08-5.65-.06s-4.1.24-5.05,1.88c-.61,1-.58,2.45-1.41,3.35a2.22,2.22,0,0,1-.47.4s0,0,0,.06,0,0-.08,0c-1.17.7-2.83.5-4.19,1a4.5,4.5,0,0,0-2.87,3.72,5.34,5.34,0,0,0,1.76,4.43,8.23,8.23,0,0,1,2,2,5.43,5.43,0,0,1,.14,3.3,5.27,5.27,0,0,1,2.18-.07,4.86,4.86,0,0,1,.61.14s.07,1.56.15,3.24l.06,0h0c2.91-.15,2.07-7.5,2.07-7.5,3.72-1.46,3.61-5.45,4.54-6.3s5.49-.27,9.49,1.34a12.82,12.82,0,0,0,9.8.21l.06,0,.1-.07L248,116l.22-.12v0a5.66,5.66,0,0,0,1.84-2.34A8.51,8.51,0,0,0,248.17,104Z" style="opacity: 0.2; transform-origin: 232.773px 115.157px;" class="animable"></path></g><path d="M405.34,52.1l.23.24-236.87,0h0l.27-.26c0,121.69,0,234.34-.05,325.61l-.22-.21,236.9.21-236.9.22h-.21v-.22c0-91.27,0-203.92-.05-325.61v-.26h.29l236.87,0h.24v.23c-.14,192.62-.23,323.53-.24,325.61" style="fill: rgb(38, 50, 56); transform-origin: 287.14px 214.865px;" id="elvekewgxphla" class="animable"></path></g><g id="freepik--Character--inject-35" class="animable" style="transform-origin: 144.905px 302.089px;"><path d="M84.86,280.11l1.29,2.75a25.77,25.77,0,0,0,2.08,4.66,7.71,7.71,0,0,0,1.57,2,11.63,11.63,0,0,0,2.55,1.86,1,1,0,0,1,0,1.85c-.86.21-3.36-.75-5.49-3s-1.8,2.63-1.72,4.42.11,7.34-.42,7.81c-.78.68-1.65,0-1.7-1.82s-.56-7.15-1.51-7.06-.35,9.2-.35,9.2.44,1.93-.65,2.08c-2,.25-1.86-9.48-1.83-10.41,0-.64-1-.58-1,.12s.78,9.07-1.21,9.36c-1.53.21,0-8-1.11-9.66s-.54,6.36-2,6.5c-.54.06-1,0-.64-4.62s3.34-17.5,3.34-17.5L85,280.24" style="fill: rgb(255, 190, 157); transform-origin: 82.7811px 291.757px;" id="ely5rnaib6zn" class="animable"></path><path d="M120.35,211.92s-28,27.33-28.66,30.87S87,285.56,87,285.56l-12.8-1.27S73,235.93,77,231s20-23.41,20-23.41Z" style="fill: rgb(255, 190, 157); transform-origin: 97.1906px 246.575px;" id="el73ltngkudw3" class="animable"></path><path d="M78.2,236.13s-.18-.1-.37-.39a2.4,2.4,0,0,1-.38-1.41,2.44,2.44,0,0,1,1-1.92,2.55,2.55,0,0,1,2.64-.27,2.07,2.07,0,0,1,1,1.07,1.82,1.82,0,0,1,0,1.36,1.44,1.44,0,0,1-2,.68,1.2,1.2,0,0,1-.5-1.38c.13-.35.34-.44.34-.42s-.12.16-.17.46A1,1,0,0,0,80.2,235a1.12,1.12,0,0,0,1.5-.57,1.36,1.36,0,0,0,0-1,1.56,1.56,0,0,0-.79-.83,2.15,2.15,0,0,0-2.21.2,2.19,2.19,0,0,0-1,1.62A3.12,3.12,0,0,0,78.2,236.13Z" style="fill: rgb(235, 153, 110); transform-origin: 79.8346px 234.011px;" id="elpe8g94l9wra" class="animable"></path><path d="M179.22,142.15c-.19.53-2.65,35.87-2.65,35.87l14.18-1.08,3.51-30.75Z" style="fill: rgb(69, 90, 100); transform-origin: 185.415px 160.085px;" id="elz1z7khb63bc" class="animable"></path><polygon points="176.57 178.02 174.66 177.47 177.4 141.62 179.45 142.21 176.57 178.02" style="fill: rgb(38, 50, 56); transform-origin: 177.055px 159.82px;" id="el4lq3xibg80q" class="animable"></polygon><circle cx="187.34" cy="150.58" r="0.83" style="fill: rgb(38, 50, 56); transform-origin: 187.34px 150.58px;" id="el0tvs93g6fnwn" class="animable"></circle><path d="M171.79,195.54l25,6.49-3.95-29.62h0l-.51-1.42-9.16-1.41,1.09-6.76a5.51,5.51,0,0,1,6.83-4.35l3,.8a7.84,7.84,0,0,1,5,4c1.73,3.4,3.43,7.12,3.27,6.8h0l13.4,36.36a13.74,13.74,0,0,1-1.48,14.65c-4.32,5.61-14.75,1.71-19.66.76l-32-7.05Z" style="fill: rgb(255, 190, 157); transform-origin: 189.919px 191.166px;" id="elec7n7nrox8t" class="animable"></path><path d="M121.91,159.44a1.6,1.6,0,0,1-.4,1.67,1.57,1.57,0,0,1-1.68.28c-1.06-.46-1.26-1.86-1.12-3s.46-2.37-.08-3.39a7.36,7.36,0,0,0-1.86-1.83,5,5,0,0,1-1.6-4.13,4.16,4.16,0,0,1,2.68-3.42c1.48-.51,3.36-.15,4.42-1.29.76-.84.74-2.13,1.32-3.11.89-1.51,2.94-1.85,4.69-1.71s3.55.6,5.24.09c1.4-.43,2.51-1.49,3.81-2.17a7.69,7.69,0,0,1,10.58,10,4.93,4.93,0,0,1-2.25,2.49" style="fill: rgb(38, 50, 56); transform-origin: 131.878px 149.031px;" id="elidawtm4eti" class="animable"></path><path d="M123.66,189.28,140.22,188c.1-1.93,0-9.41,0-9.41s6.89-1.07,7-8-1.11-22.7-1.11-22.7h0a24,24,0,0,0-24.06,3l-1,.79Z" style="fill: rgb(255, 190, 157); transform-origin: 134.139px 167.612px;" id="elxoj271kjal" class="animable"></path><path d="M144.46,159.71a1,1,0,0,1-.07-1.41,1,1,0,1,1,1.48,1.35A1,1,0,0,1,144.46,159.71Z" style="fill: rgb(38, 50, 56); transform-origin: 145.133px 158.972px;" id="el7o6brk5ojq6" class="animable"></path><path d="M146.13,158.14c-.11.12-.78-.4-1.73-.4s-1.64.48-1.74.36.05-.27.35-.5a2.42,2.42,0,0,1,1.4-.44,2.29,2.29,0,0,1,1.38.48C146.08,157.87,146.18,158.09,146.13,158.14Z" style="fill: rgb(38, 50, 56); transform-origin: 144.386px 157.659px;" id="els8z95tbehon" class="animable"></path><path d="M135.2,159a1,1,0,1,1-1.38.33A1,1,0,0,1,135.2,159Z" style="fill: rgb(38, 50, 56); transform-origin: 134.674px 159.85px;" id="elu1ju61v6zzd" class="animable"></path><path d="M135.83,159c-.11.12-.79-.4-1.74-.41s-1.63.49-1.74.37.06-.27.36-.5a2.25,2.25,0,0,1,1.39-.44,2.35,2.35,0,0,1,1.38.47C135.78,158.71,135.88,158.92,135.83,159Z" style="fill: rgb(38, 50, 56); transform-origin: 134.079px 158.519px;" id="elzpg8csujov" class="animable"></path><path d="M139.63,166.8a4.72,4.72,0,0,1,1.53-.32c.25,0,.45-.08.47-.22a1.48,1.48,0,0,0-.18-.71c-.25-.63-.49-1.26-.75-1.93a26.29,26.29,0,0,1-1.63-5.06,25.58,25.58,0,0,1,2.13,4.87c.25.67.48,1.31.71,1.95a1.57,1.57,0,0,1,.14,1,.66.66,0,0,1-.43.39,1.76,1.76,0,0,1-.42.06A4.52,4.52,0,0,1,139.63,166.8Z" style="fill: rgb(38, 50, 56); transform-origin: 140.574px 162.722px;" id="elvvc5gcw7hhe" class="animable"></path><path d="M136.55,167.85a17.25,17.25,0,0,0,4.65,1.35,2.63,2.63,0,0,1-3.09,1.05C136.05,169.49,136.55,167.85,136.55,167.85Z" style="fill: rgb(255, 255, 255); transform-origin: 138.848px 169.126px;" id="elbtblkbefw4h" class="animable"></path><path d="M140.19,178.44a16,16,0,0,1-9-2.55s2.12,5,9,4.34Z" style="fill: rgb(235, 153, 110); transform-origin: 135.69px 178.09px;" id="elk60wp33isyo" class="animable"></path><path d="M146.19,149.61s-4,2.33-9.67,0c-3.7-1.52-7.93-2.08-8.79-1.29s-.79,4.47-4.25,5.81c0,0,.77,7-2,7s-1.87-11.05-1.87-11.05l6.59-3.85,7.37-2,7.11.47,5.56,1.09Z" style="fill: rgb(38, 50, 56); transform-origin: 132.855px 152.68px;" id="elk0ccm1oyff" class="animable"></path><path d="M121.82,158.82c-.12,0-4.73-1.4-4.58,3.31s4.84,3.59,4.85,3.45S121.82,158.82,121.82,158.82Z" style="fill: rgb(255, 190, 157); transform-origin: 119.663px 162.21px;" id="elh99ceqgomfu" class="animable"></path><path d="M120.59,163.84s-.08.06-.21.13a.8.8,0,0,1-.62,0,2,2,0,0,1-1-1.79A2.79,2.79,0,0,1,119,161a.93.93,0,0,1,.59-.65.44.44,0,0,1,.5.21c.06.13,0,.23.06.23s.1-.08.06-.27a.59.59,0,0,0-.2-.29.64.64,0,0,0-.46-.11,1.15,1.15,0,0,0-.83.76,2.71,2.71,0,0,0-.24,1.32,2.13,2.13,0,0,0,1.26,2,.9.9,0,0,0,.74-.15C120.59,164,120.61,163.85,120.59,163.84Z" style="fill: rgb(235, 153, 110); transform-origin: 119.535px 162.169px;" id="ela4aouclteod" class="animable"></path><path d="M118.62,144.23c-.05-.13.73-.47,1.68-.17s1.4,1,1.29,1.09-.65-.35-1.45-.59S118.66,144.37,118.62,144.23Z" style="fill: rgb(38, 50, 56); transform-origin: 120.112px 144.551px;" id="elrvrits2oa5" class="animable"></path><path d="M121.3,141.25c.16,0,.15,1,.37,2.14s.75,2,.63,2-.89-.66-1.14-1.94A3.23,3.23,0,0,1,121.3,141.25Z" style="fill: rgb(38, 50, 56); transform-origin: 121.674px 143.32px;" id="elb03yrmu38ja" class="animable"></path><path d="M141.52,156.59c-.16-.23.72-1,2.08-1.05s2.31.62,2.18.86-1,.12-2.13.18S141.66,156.85,141.52,156.59Z" style="fill: rgb(38, 50, 56); transform-origin: 143.647px 156.127px;" id="elqqste87hqf" class="animable"></path><path d="M131,155.71c-.15-.23.72-1,2.09-1.06s2.3.62,2.17.87-1,.11-2.13.17S131.09,156,131,155.71Z" style="fill: rgb(38, 50, 56); transform-origin: 133.128px 155.247px;" id="elp0hsxh8az89" class="animable"></path><path d="M92,446.78l-1.65,6.9s-11.27,14.64-14.75,13.93c-2.28-.47.52-4.29,4.81-15.42l.9-4.59Z" style="fill: rgb(69, 90, 100); transform-origin: 83.3931px 457.208px;" id="el943jgaang8c" class="animable"></path><path d="M75.11,465.45a1.49,1.49,0,0,0,.6.57,2.08,2.08,0,0,0,2.16-.3,62,62,0,0,0,5.61-5.32c2.09-2.19,3.84-4.3,5.08-5.85L90,452.7l.39-.51a1.07,1.07,0,0,1,.15-.17l-.12.2-.36.52c-.31.46-.79,1.11-1.39,1.9a70.5,70.5,0,0,1-5,5.91A54,54,0,0,1,78,465.84a2.58,2.58,0,0,1-1.27.47,1.83,1.83,0,0,1-1-.22,1.16,1.16,0,0,1-.48-.44A.52.52,0,0,1,75.11,465.45Z" style="fill: rgb(38, 50, 56); transform-origin: 82.825px 459.167px;" id="elfagyrgbbw5" class="animable"></path><path d="M76.71,460.74a1.79,1.79,0,0,1,.93-.11,4.82,4.82,0,0,1,2.12.74A3.9,3.9,0,0,1,81.31,463a2,2,0,0,1,.24.9s-.11-.34-.37-.84a4.17,4.17,0,0,0-1.53-1.52,5.39,5.39,0,0,0-2-.77A8.58,8.58,0,0,0,76.71,460.74Z" style="fill: rgb(38, 50, 56); transform-origin: 79.13px 462.255px;" id="elr30x7h82axf" class="animable"></path><path d="M87.38,457.3a1.31,1.31,0,0,1-.13-.33A7.17,7.17,0,0,1,87,456a5.14,5.14,0,0,1,.53-3.14,4.91,4.91,0,0,1,2.28-2.22,3.94,3.94,0,0,1,.93-.28c.23,0,.36,0,.36,0a8.14,8.14,0,0,0-1.23.44A5,5,0,0,0,87.74,453a5.3,5.3,0,0,0-.57,3C87.26,456.81,87.42,457.29,87.38,457.3Z" style="fill: rgb(38, 50, 56); transform-origin: 89.022px 453.83px;" id="elv21rklq9imj" class="animable"></path><path d="M91.25,448s-.2,1-.42,2.2a7.35,7.35,0,0,1-.58,2.17s.17-1,.38-2.2A7.12,7.12,0,0,1,91.25,448Z" style="fill: rgb(38, 50, 56); transform-origin: 90.75px 450.185px;" id="el00zj2c1g8hfnb" class="animable"></path><path d="M80.18,453.17a2.63,2.63,0,0,1,1.45,0,2.52,2.52,0,0,1,1.3.62c0,.06-.59-.24-1.35-.42S80.19,453.23,80.18,453.17Z" style="fill: rgb(38, 50, 56); transform-origin: 81.555px 453.433px;" id="el8qznt310mhj" class="animable"></path><path d="M80,454.35a1.77,1.77,0,0,1,1.22-.05,1.79,1.79,0,0,1,1.07.59c0,.05-.49-.24-1.12-.39S80,454.41,80,454.35Z" style="fill: rgb(38, 50, 56); transform-origin: 81.145px 454.555px;" id="el5g1szosos0k" class="animable"></path><path d="M79.05,455.83a1.83,1.83,0,0,1,2.33.53,5.74,5.74,0,0,0-1.11-.49A5.33,5.33,0,0,0,79.05,455.83Z" style="fill: rgb(38, 50, 56); transform-origin: 80.215px 455.988px;" id="el55y1ukudcov" class="animable"></path><path d="M81,452.67s.52-.14,1.32-.45a9.78,9.78,0,0,0,1.36-.66,7.85,7.85,0,0,0,.75-.48c.23-.17.48-.41.47-.68s-.34-.41-.6-.34a1.59,1.59,0,0,0-.69.46c-.42.39-.77.76-1.06,1.08-.58.65-.9,1.08-.92,1.06a1.08,1.08,0,0,1,.19-.33,9.79,9.79,0,0,1,.62-.82,12.56,12.56,0,0,1,1-1.13,1.63,1.63,0,0,1,.78-.52.66.66,0,0,1,.85.53,1.13,1.13,0,0,1-.56.86c-.26.18-.52.34-.77.48a9.67,9.67,0,0,1-1.41.63,8.25,8.25,0,0,1-1,.27A1.44,1.44,0,0,1,81,452.67Z" style="fill: rgb(38, 50, 56); transform-origin: 83.035px 451.25px;" id="elbcsztrzm5wi" class="animable"></path><path d="M81.55,452.53s-.08-.49-.21-1.26A5.46,5.46,0,0,0,81,450a3.13,3.13,0,0,0-.42-.67c-.17-.19-.44-.36-.64-.23s-.24.43-.21.68a3.17,3.17,0,0,0,.22.76,4.5,4.5,0,0,0,.73,1.13c.53.58.93.86.91.89a1,1,0,0,1-.3-.18,4.47,4.47,0,0,1-.72-.61,4.28,4.28,0,0,1-.8-1.16,2.87,2.87,0,0,1-.24-.8.88.88,0,0,1,.3-.9.76.76,0,0,1,.9.29,2.74,2.74,0,0,1,.44.72,5,5,0,0,1,.36,1.36c.05.39.06.71.07.93A1.18,1.18,0,0,1,81.55,452.53Z" style="fill: rgb(38, 50, 56); transform-origin: 80.5516px 450.711px;" id="elekcyor4qcw8" class="animable"></path><path d="M148,450.27l0-9.2-17.22-.2-.22,13.45,1.07.08c4.75.32,24.17,1.3,27.36.37C162.62,453.74,148,450.27,148,450.27Z" style="fill: rgb(69, 90, 100); transform-origin: 145.065px 448.015px;" id="elup3zr9e6hp8" class="animable"></path><path d="M130.39,453.92l.3,0,.85.07,3.13.17c2.64.13,6.29.26,10.33.31s7.69,0,10.34,0l3.13-.09.85,0,.3,0h-1.15l-3.13,0c-2.65,0-6.3,0-10.34,0s-7.68-.17-10.33-.26l-3.13-.11-.85,0Z" style="fill: rgb(38, 50, 56); transform-origin: 145.005px 454.206px;" id="elx2rjfy1fi1n" class="animable"></path><path d="M153.59,454.69a6.85,6.85,0,0,1,.6-1.49,6.33,6.33,0,0,1,1.09-1.18,2.22,2.22,0,0,0-1.26,1.07A2.3,2.3,0,0,0,153.59,454.69Z" style="fill: rgb(38, 50, 56); transform-origin: 154.429px 453.355px;" id="elrhbwx79dt1f" class="animable"></path><path d="M148.54,452c.05,0,.3-.26.55-.65s.43-.74.38-.77-.3.26-.55.66S148.49,452,148.54,452Z" style="fill: rgb(38, 50, 56); transform-origin: 149.005px 451.289px;" id="el06o9pqh6rc35" class="animable"></path><path d="M147.16,451.29s.31-.14.61-.4.51-.51.47-.55-.31.13-.61.39S147.12,451.25,147.16,451.29Z" style="fill: rgb(38, 50, 56); transform-origin: 147.7px 450.812px;" id="elfgktmddkxd4" class="animable"></path><path d="M146.3,449.65c0,.06.4.12.89.13a2.21,2.21,0,0,0,.9-.08c0-.06-.4-.12-.89-.13A2,2,0,0,0,146.3,449.65Z" style="fill: rgb(38, 50, 56); transform-origin: 147.195px 449.673px;" id="elavtxs00jt8u" class="animable"></path><path d="M146,448.5a1.72,1.72,0,0,0,1,.31,1.68,1.68,0,0,0,1-.13,5.54,5.54,0,0,0-1-.08A5.06,5.06,0,0,0,146,448.5Z" style="fill: rgb(38, 50, 56); transform-origin: 147px 448.668px;" id="el9apyqy46d5l" class="animable"></path><path d="M149.14,450.55a3.4,3.4,0,0,0,1.11,0,7,7,0,0,0,1.18-.25,2.92,2.92,0,0,0,.68-.27.61.61,0,0,0,.28-.34.43.43,0,0,0-.16-.44,2,2,0,0,0-2.52.56,2.07,2.07,0,0,0-.37.73c-.05.19-.05.3,0,.3a3.37,3.37,0,0,1,.51-.94,2.09,2.09,0,0,1,1-.6,1.71,1.71,0,0,1,1.31.11c.18.13.11.34-.09.45a3.21,3.21,0,0,1-.63.26,7,7,0,0,1-1.14.28C149.57,450.52,149.14,450.52,149.14,450.55Z" style="fill: rgb(38, 50, 56); transform-origin: 150.771px 449.931px;" id="el35dfjg8ddp2" class="animable"></path><path d="M149.43,450.61a1.1,1.1,0,0,0,.14-.77,1.94,1.94,0,0,0-.29-.81,1.13,1.13,0,0,0-.92-.58.45.45,0,0,0-.35.51,1.3,1.3,0,0,0,.19.5,3.45,3.45,0,0,0,.51.67,1.55,1.55,0,0,0,.63.46s-.22-.2-.52-.56a3.88,3.88,0,0,1-.46-.67c-.14-.23-.24-.65,0-.7s.56.25.73.48a1.82,1.82,0,0,1,.3.72A4.44,4.44,0,0,1,149.43,450.61Z" style="fill: rgb(38, 50, 56); transform-origin: 148.797px 449.53px;" id="eltsr1rz3xmlc" class="animable"></path><path d="M130.8,449.21s.5,0,1.28.06a5.66,5.66,0,0,1,2.76,1.18,5.56,5.56,0,0,1,1.7,2.47c.26.75.27,1.24.31,1.24s0-.13,0-.35a5.22,5.22,0,0,0-1.89-3.52,5.29,5.29,0,0,0-2.88-1.17,4.66,4.66,0,0,0-1,0A1.26,1.26,0,0,0,130.8,449.21Z" style="fill: rgb(38, 50, 56); transform-origin: 133.834px 451.627px;" id="eluflypha8kf" class="animable"></path><path d="M132.68,442.07a62.51,62.51,0,0,0-.18,7.07,56.85,56.85,0,0,0,.18-7.07Z" style="fill: rgb(38, 50, 56); transform-origin: 132.594px 445.605px;" id="elnxw2ryzp4c" class="animable"></path><path d="M139.07,452.61a10,10,0,0,0,2.51.28,10.18,10.18,0,0,0,2.52-.17c0-.06-1.13,0-2.52,0S139.07,452.55,139.07,452.61Z" style="fill: rgb(38, 50, 56); transform-origin: 141.585px 452.752px;" id="elsqfalhp3xh" class="animable"></path><path d="M135.69,452.56s.09.24.2.5.17.49.23.48.09-.27,0-.57S135.73,452.52,135.69,452.56Z" style="fill: rgb(38, 50, 56); transform-origin: 135.933px 453.047px;" id="elezpm4ddq3lt" class="animable"></path><path d="M134.44,451s.07.22.24.4.35.3.4.26-.07-.22-.25-.4S134.48,450.92,134.44,451Z" style="fill: rgb(38, 50, 56); transform-origin: 134.766px 451.323px;" id="elmbvdhhb9b5" class="animable"></path><path d="M132.63,450.21c0,.06.24.06.49.15s.43.23.48.19-.1-.27-.41-.38S132.61,450.16,132.63,450.21Z" style="fill: rgb(38, 50, 56); transform-origin: 133.119px 450.339px;" id="ela5np1g3dk3u" class="animable"></path><path d="M131.34,449.85c0,.06.07.15.21.2s.28.06.3,0-.07-.14-.22-.2S131.36,449.8,131.34,449.85Z" style="fill: rgb(38, 50, 56); transform-origin: 131.596px 449.95px;" id="el4ex7nq88ia5" class="animable"></path><polyline points="159.74 267.66 151.7 446.31 124.88 446.87 129.34 297.31 99.17 448.01 73.67 448.01 107.72 267.66" style="fill: rgb(38, 50, 56); transform-origin: 116.705px 357.835px;" id="elxwuagvbpnd" class="animable"></polyline><path d="M80.09,445.43c.14,0,.2.37.13.78s-.24.72-.38.7-.2-.38-.13-.79S80,445.4,80.09,445.43Z" style="fill: rgb(69, 90, 100); transform-origin: 79.965px 446.169px;" id="eli8jf644bdvq" class="animable"></path><path d="M81.07,439.58c.14,0,.15.7,0,1.5s-.36,1.45-.5,1.42-.15-.69,0-1.5S80.93,439.56,81.07,439.58Z" style="fill: rgb(69, 90, 100); transform-origin: 80.82px 441.04px;" id="elt66yg3nx7m" class="animable"></path><path d="M82.05,433.73c.14,0,.15.7,0,1.51s-.36,1.44-.5,1.41-.15-.69,0-1.5S81.91,433.71,82.05,433.73Z" style="fill: rgb(69, 90, 100); transform-origin: 81.8px 435.19px;" id="elaw3eje1ngmj" class="animable"></path><path d="M83,427.88c.14,0,.14.7,0,1.51s-.36,1.44-.51,1.41-.14-.69,0-1.5S82.89,427.86,83,427.88Z" style="fill: rgb(69, 90, 100); transform-origin: 82.7431px 429.34px;" id="elihedmu3b8t" class="animable"></path><path d="M84,422c.14,0,.15.7,0,1.5s-.36,1.45-.5,1.42-.15-.69,0-1.5S83.88,422,84,422Z" style="fill: rgb(69, 90, 100); transform-origin: 83.75px 423.461px;" id="eltw058ve61mi" class="animable"></path><path d="M85,416.18c.14,0,.15.7,0,1.5s-.36,1.45-.5,1.42-.15-.69,0-1.5S84.87,416.15,85,416.18Z" style="fill: rgb(69, 90, 100); transform-origin: 84.75px 417.64px;" id="el9wvyoq7wwyt" class="animable"></path><path d="M86,410.33c.14,0,.15.7,0,1.5s-.36,1.45-.51,1.42-.14-.69,0-1.5S85.86,410.3,86,410.33Z" style="fill: rgb(69, 90, 100); transform-origin: 85.745px 411.79px;" id="elumoeh2kjky" class="animable"></path><path d="M87,404.48c.14,0,.15.7,0,1.51s-.36,1.44-.5,1.42-.15-.7,0-1.51S86.85,404.45,87,404.48Z" style="fill: rgb(69, 90, 100); transform-origin: 86.75px 405.945px;" id="el321er6shk9s" class="animable"></path><path d="M88,398.63c.14,0,.14.7,0,1.51s-.37,1.44-.51,1.41-.14-.69,0-1.5S87.85,398.61,88,398.63Z" style="fill: rgb(69, 90, 100); transform-origin: 87.745px 400.09px;" id="eltdeh99e52m" class="animable"></path><path d="M89,392.78c.14,0,.14.7,0,1.51s-.37,1.44-.51,1.42-.15-.7,0-1.51S88.85,392.76,89,392.78Z" style="fill: rgb(69, 90, 100); transform-origin: 88.7431px 394.245px;" id="el6vd7kpks7te" class="animable"></path><path d="M90,386.93c.15,0,.15.7,0,1.51s-.37,1.44-.51,1.42-.14-.7,0-1.51S89.85,386.91,90,386.93Z" style="fill: rgb(69, 90, 100); transform-origin: 89.7487px 388.395px;" id="el741ru7bf3fc" class="animable"></path><path d="M91,381.09c.15,0,.15.7,0,1.5S90.64,384,90.5,384s-.14-.7,0-1.51S90.86,381.06,91,381.09Z" style="fill: rgb(69, 90, 100); transform-origin: 90.7538px 382.544px;" id="elz3xoizfixgk" class="animable"></path><path d="M92,375.24c.14,0,.14.7,0,1.51s-.37,1.44-.51,1.41-.14-.7,0-1.5S91.88,375.22,92,375.24Z" style="fill: rgb(69, 90, 100); transform-origin: 91.745px 376.7px;" id="elcs86fvmu02g" class="animable"></path><path d="M93,369.4c.14,0,.14.69,0,1.5s-.37,1.44-.51,1.42-.14-.7,0-1.51S92.9,369.37,93,369.4Z" style="fill: rgb(69, 90, 100); transform-origin: 92.745px 370.86px;" id="elv77gbm09y6" class="animable"></path><path d="M94.07,363.55c.14,0,.14.7,0,1.51s-.38,1.44-.52,1.41-.14-.7,0-1.5S93.93,363.53,94.07,363.55Z" style="fill: rgb(69, 90, 100); transform-origin: 93.81px 365.01px;" id="elrxv6jyevfue" class="animable"></path><path d="M95.1,357.71c.14,0,.14.7,0,1.51s-.37,1.44-.52,1.41-.14-.7,0-1.51S95,357.68,95.1,357.71Z" style="fill: rgb(69, 90, 100); transform-origin: 94.8381px 359.17px;" id="elvk7mmnkr4bg" class="animable"></path><path d="M96.14,351.87c.14,0,.14.7,0,1.5s-.38,1.44-.52,1.42-.14-.7,0-1.51S96,351.84,96.14,351.87Z" style="fill: rgb(69, 90, 100); transform-origin: 95.88px 353.33px;" id="eli9tjoowa2j" class="animable"></path><path d="M97.19,346c.14,0,.14.7,0,1.5s-.38,1.44-.52,1.42-.14-.7,0-1.51S97.05,346,97.19,346Z" style="fill: rgb(69, 90, 100); transform-origin: 96.93px 347.46px;" id="elv1uxcr3pxmr" class="animable"></path><path d="M98.25,340.19c.14,0,.14.7,0,1.5s-.38,1.44-.52,1.42-.14-.7,0-1.51S98.11,340.16,98.25,340.19Z" style="fill: rgb(69, 90, 100); transform-origin: 97.99px 341.65px;" id="el5y3q95zw3fo" class="animable"></path><path d="M99.31,334.35c.15,0,.14.7,0,1.51s-.38,1.44-.52,1.41-.14-.7,0-1.51S99.17,334.33,99.31,334.35Z" style="fill: rgb(69, 90, 100); transform-origin: 99.0519px 335.81px;" id="elyl38zii35m" class="animable"></path><path d="M100.39,328.52c.14,0,.14.7,0,1.5s-.39,1.44-.53,1.41-.13-.7,0-1.5S100.25,328.49,100.39,328.52Z" style="fill: rgb(69, 90, 100); transform-origin: 100.127px 329.975px;" id="elp87y99ghl1" class="animable"></path><path d="M101.48,322.68c.14,0,.13.7,0,1.51s-.39,1.44-.53,1.41-.13-.7,0-1.51S101.33,322.66,101.48,322.68Z" style="fill: rgb(69, 90, 100); transform-origin: 101.215px 324.14px;" id="el7he9vhtm54v" class="animable"></path><path d="M102.57,316.85c.14,0,.13.7,0,1.51s-.39,1.43-.53,1.41-.13-.7,0-1.51S102.43,316.83,102.57,316.85Z" style="fill: rgb(69, 90, 100); transform-origin: 102.305px 318.31px;" id="el6sksg4tsk9u" class="animable"></path><path d="M103.68,311c.14,0,.13.7,0,1.51s-.4,1.43-.54,1.41-.13-.7,0-1.51S103.54,311,103.68,311Z" style="fill: rgb(69, 90, 100); transform-origin: 103.41px 312.46px;" id="el5fkdoxjvm8" class="animable"></path><path d="M104.8,305.2c.14,0,.13.7,0,1.5s-.39,1.44-.53,1.41-.13-.7,0-1.51S104.66,305.17,104.8,305.2Z" style="fill: rgb(69, 90, 100); transform-origin: 104.535px 306.655px;" id="elxrny5hxe6p" class="animable"></path><path d="M105.93,299.37c.14,0,.13.7,0,1.51s-.4,1.43-.54,1.4-.13-.7,0-1.5S105.79,299.34,105.93,299.37Z" style="fill: rgb(69, 90, 100); transform-origin: 105.66px 300.825px;" id="el6jfz5cm7dqv" class="animable"></path><path d="M107.07,293.55c.14,0,.13.7,0,1.5s-.4,1.44-.54,1.41-.13-.7,0-1.51S106.93,293.52,107.07,293.55Z" style="fill: rgb(69, 90, 100); transform-origin: 106.8px 295.005px;" id="elq0abh5sq4ci" class="animable"></path><path d="M108.23,287.73c.14,0,.13.7,0,1.51s-.41,1.43-.55,1.4-.13-.7,0-1.51S108.09,287.7,108.23,287.73Z" style="fill: rgb(69, 90, 100); transform-origin: 107.955px 289.185px;" id="elfr7nho1ojmn" class="animable"></path><path d="M109.4,281.91c.15,0,.13.71,0,1.51s-.41,1.43-.55,1.4-.13-.7,0-1.5S109.26,281.88,109.4,281.91Z" style="fill: rgb(69, 90, 100); transform-origin: 109.127px 283.365px;" id="eln96z19z0d5" class="animable"></path><path d="M110.59,276.1c.14,0,.13.7,0,1.5S110.14,279,110,279s-.12-.71,0-1.51S110.45,276.07,110.59,276.1Z" style="fill: rgb(69, 90, 100); transform-origin: 110.297px 277.549px;" id="elqsv9gjtnrh" class="animable"></path><path d="M111.5,271.72c.14,0,.19.38.1.78s-.26.71-.4.68-.19-.38-.11-.78S111.36,271.69,111.5,271.72Z" style="fill: rgb(69, 90, 100); transform-origin: 111.349px 272.45px;" id="eliiu2g8lbxx" class="animable"></path><path d="M129.51,445.41c.14,0,.24.35.22.76s-.16.74-.3.74-.24-.35-.22-.77S129.36,445.4,129.51,445.41Z" style="fill: rgb(69, 90, 100); transform-origin: 129.47px 446.16px;" id="el47zf6pze28" class="animable"></path><path d="M129.75,439.46c.15,0,.24.67.21,1.5s-.18,1.48-.32,1.47-.24-.67-.2-1.49S129.61,439.45,129.75,439.46Z" style="fill: rgb(69, 90, 100); transform-origin: 129.698px 440.945px;" id="ele1a66nah4ld" class="animable"></path><path d="M129.94,433.5c.14,0,.24.68.21,1.5s-.16,1.48-.3,1.48-.24-.67-.22-1.5S129.79,433.5,129.94,433.5Z" style="fill: rgb(69, 90, 100); transform-origin: 129.891px 434.99px;" id="elmq9enbsb0q" class="animable"></path><path d="M130.09,427.55c.14,0,.24.67.22,1.49s-.15,1.49-.3,1.49-.24-.68-.22-1.5S129.94,427.55,130.09,427.55Z" style="fill: rgb(69, 90, 100); transform-origin: 130.05px 429.04px;" id="el9bpcep0wkk9" class="animable"></path><path d="M130.23,421.59c.14,0,.24.68.22,1.5s-.15,1.49-.29,1.48-.25-.67-.23-1.49S130.08,421.59,130.23,421.59Z" style="fill: rgb(69, 90, 100); transform-origin: 130.19px 423.08px;" id="eleo96oaeztk" class="animable"></path><path d="M130.38,415.63c.15,0,.25.68.22,1.5s-.15,1.49-.3,1.48-.24-.67-.22-1.49S130.24,415.63,130.38,415.63Z" style="fill: rgb(69, 90, 100); transform-origin: 130.341px 417.12px;" id="elee4175g3yr" class="animable"></path><path d="M130.58,409.68c.14,0,.24.67.21,1.5s-.17,1.48-.32,1.47-.23-.67-.2-1.49S130.44,409.67,130.58,409.68Z" style="fill: rgb(69, 90, 100); transform-origin: 130.53px 411.165px;" id="elz7m7wibem8" class="animable"></path><path d="M130.83,403.73c.14,0,.23.67.2,1.49s-.18,1.49-.32,1.48-.24-.68-.2-1.5S130.69,403.72,130.83,403.73Z" style="fill: rgb(69, 90, 100); transform-origin: 130.768px 405.215px;" id="elfx1jf1s200j" class="animable"></path><path d="M131.06,397.77c.15,0,.24.68.21,1.5s-.18,1.48-.32,1.48-.24-.68-.2-1.5S130.92,397.77,131.06,397.77Z" style="fill: rgb(69, 90, 100); transform-origin: 131.008px 399.26px;" id="el64hrfdiwnew" class="animable"></path><path d="M131.27,391.82c.14,0,.24.67.21,1.5s-.17,1.48-.31,1.48-.24-.68-.21-1.5S131.13,391.81,131.27,391.82Z" style="fill: rgb(69, 90, 100); transform-origin: 131.22px 393.31px;" id="el9c5ll5fk2lm" class="animable"></path><path d="M131.45,385.86c.15,0,.24.67.22,1.5s-.16,1.48-.31,1.48-.24-.68-.21-1.5S131.31,385.86,131.45,385.86Z" style="fill: rgb(69, 90, 100); transform-origin: 131.409px 387.35px;" id="elh5hu0txngdb" class="animable"></path><path d="M131.61,379.91c.14,0,.24.67.22,1.49s-.15,1.49-.3,1.48-.24-.67-.22-1.49S131.46,379.9,131.61,379.91Z" style="fill: rgb(69, 90, 100); transform-origin: 131.57px 381.395px;" id="elv5t15m8rik" class="animable"></path><path d="M131.74,374c.14,0,.24.67.23,1.49s-.15,1.49-.29,1.49-.25-.67-.23-1.5S131.59,374,131.74,374Z" style="fill: rgb(69, 90, 100); transform-origin: 131.709px 375.49px;" id="elczg1h08tivt" class="animable"></path><path d="M131.84,368c.14,0,.25.68.23,1.5s-.14,1.48-.28,1.48-.25-.67-.24-1.49S131.69,368,131.84,368Z" style="fill: rgb(69, 90, 100); transform-origin: 131.811px 369.49px;" id="elgbwurdu2vni" class="animable"></path><path d="M131.91,362c.14,0,.25.67.24,1.49S132,365,131.88,365s-.26-.67-.25-1.5S131.76,362,131.91,362Z" style="fill: rgb(69, 90, 100); transform-origin: 131.89px 363.5px;" id="el51fymoja9ce" class="animable"></path><path d="M132,356.08c.14,0,.26.67.25,1.49s-.12,1.49-.27,1.49-.25-.67-.25-1.49S131.81,356.08,132,356.08Z" style="fill: rgb(69, 90, 100); transform-origin: 131.99px 357.57px;" id="elbqdl7dc3nd" class="animable"></path><path d="M132,350.13c.15,0,.26.66.26,1.48s-.12,1.49-.26,1.49-.26-.66-.26-1.49S131.82,350.13,132,350.13Z" style="fill: rgb(69, 90, 100); transform-origin: 132px 351.615px;" id="eldz2yduus1v4" class="animable"></path><path d="M132,344.17c.14,0,.26.66.26,1.49s-.11,1.49-.25,1.49-.26-.67-.27-1.49S131.8,344.17,132,344.17Z" style="fill: rgb(69, 90, 100); transform-origin: 132px 345.66px;" id="el6crz166dnuq" class="animable"></path><path d="M131.9,338.21c.14,0,.27.67.27,1.49s-.1,1.49-.24,1.49-.27-.66-.28-1.49S131.76,338.21,131.9,338.21Z" style="fill: rgb(69, 90, 100); transform-origin: 131.91px 339.7px;" id="elodjob8mcvc" class="animable"></path><path d="M131.82,332.26c.15,0,.27.66.28,1.48s-.09,1.49-.23,1.49-.27-.66-.29-1.48S131.68,332.26,131.82,332.26Z" style="fill: rgb(69, 90, 100); transform-origin: 131.839px 333.745px;" id="elzbaq6hmlgyt" class="animable"></path><path d="M131.72,326.3c.14,0,.27.66.29,1.49s-.09,1.49-.24,1.49-.27-.66-.28-1.48S131.57,326.31,131.72,326.3Z" style="fill: rgb(69, 90, 100); transform-origin: 131.751px 327.79px;" id="el2a06445jt2e" class="animable"></path><path d="M131.58,320.34c.15,0,.28.66.3,1.49s-.08,1.49-.22,1.49-.28-.66-.3-1.48S131.44,320.35,131.58,320.34Z" style="fill: rgb(69, 90, 100); transform-origin: 131.62px 321.83px;" id="elxe44dbasc3" class="animable"></path><path d="M131.37,314.38c.15,0,.29.66.32,1.48s-.06,1.5-.2,1.5-.29-.65-.32-1.48S131.23,314.39,131.37,314.38Z" style="fill: rgb(69, 90, 100); transform-origin: 131.43px 315.87px;" id="elpolokrfrndo" class="animable"></path><path d="M131,308.43c.14,0,.3.65.35,1.47s0,1.5-.16,1.51-.3-.65-.36-1.47S130.88,308.45,131,308.43Z" style="fill: rgb(69, 90, 100); transform-origin: 131.091px 309.92px;" id="elt657xy3p0pf" class="animable"></path><path d="M130.48,302.5c.14,0,.33.64.41,1.46s0,1.49-.11,1.51-.32-.64-.41-1.46S130.34,302.52,130.48,302.5Z" style="fill: rgb(69, 90, 100); transform-origin: 130.625px 303.985px;" id="elq4pkev3wt5b" class="animable"></path><path d="M129.9,298.07c.15,0,.31.3.37.71s0,.76-.15.78-.31-.3-.37-.71S129.76,298.1,129.9,298.07Z" style="fill: rgb(69, 90, 100); transform-origin: 130.011px 298.815px;" id="el17o6j8za3th" class="animable"></path><path d="M133.8,269.92a4.22,4.22,0,0,1,0,1.11c0,.7-.05,1.73-.11,3-.11,2.53-.29,6-.53,9.88-.13,1.92-.25,3.76-.36,5.44a15.82,15.82,0,0,1-.65,4.45,3.76,3.76,0,0,1-2.08,2.2,2.11,2.11,0,0,1-.82.16c-.19,0-.29,0-.29-.05a4.77,4.77,0,0,0,1-.29,3.68,3.68,0,0,0,1.81-2.15,16.39,16.39,0,0,0,.52-4.35c.1-1.69.21-3.52.32-5.44.24-3.86.48-7.35.69-9.88.1-1.26.19-2.28.26-3A5.39,5.39,0,0,1,133.8,269.92Z" style="fill: rgb(69, 90, 100); transform-origin: 131.398px 283.04px;" id="ela3vch0rscn7" class="animable"></path><path d="M131.05,272.29c0-.06.45,0,.61.61a1.12,1.12,0,0,1-.22,1,1.09,1.09,0,0,1-1.24.25,1.05,1.05,0,0,1-.18-1.92c.53-.31.9-.05.86,0s-.34,0-.65.31a.8.8,0,0,0-.27.58.64.64,0,0,0,.43.56.66.66,0,0,0,.7-.1.83.83,0,0,0,.21-.61C131.27,272.54,131,272.36,131.05,272.29Z" style="fill: rgb(69, 90, 100); transform-origin: 130.586px 273.163px;" id="elczqhimrhnhj" class="animable"></path><path d="M105.81,276.53c0-.08.87.29,2.29.49a9.82,9.82,0,0,0,9.63-4.31c.8-1.19,1.07-2.06,1.16-2a5.18,5.18,0,0,1-.85,2.23,9.46,9.46,0,0,1-10,4.47A5.24,5.24,0,0,1,105.81,276.53Z" style="fill: rgb(69, 90, 100); transform-origin: 112.35px 274.15px;" id="el5zc57b4y8q4" class="animable"></path><path d="M150.42,269.92c.08,0,.1.74.45,1.84a8,8,0,0,0,6.39,5.6c1.14.2,1.87.12,1.88.21a3.84,3.84,0,0,1-1.93.16,7.63,7.63,0,0,1-6.7-5.87A3.67,3.67,0,0,1,150.42,269.92Z" style="fill: rgb(69, 90, 100); transform-origin: 154.735px 273.853px;" id="el3dk9z8y5ihi" class="animable"></path><path d="M165.47,274l-59.12-4.09,2.05-28.24,0-15.78-5.74,8.87L84.85,219.26l19.17-25h0a30.12,30.12,0,0,1,11.66-7.55,24.29,24.29,0,0,1,7.31-1.4h0a29.32,29.32,0,0,0,17.66,0,86.69,86.69,0,0,1,16.05,3l22.38,6-7.37,27.49-13.52-4.55S165.61,268.3,165.47,274Z" style="fill: rgb(145, 191, 32); transform-origin: 131.965px 229.655px;" id="elphedalku1a8" class="animable"></path><path d="M107.86,226.81a29.1,29.1,0,0,1,4.15-6.5,15,15,0,0,1-1.85,3.39A14.69,14.69,0,0,1,107.86,226.81Z" style="fill: rgb(38, 50, 56); transform-origin: 109.935px 223.56px;" id="el00v3741m8wjs" class="animable"></path><g id="elg54vm9g3w4d"><g style="opacity: 0.6; transform-origin: 141.27px 194.61px;" class="animable"><path d="M178.27,194.61c0,.14-16.58.26-37,.26s-37-.12-37-.26,16.57-.26,37-.26S178.27,194.47,178.27,194.61Z" style="fill: rgb(255, 255, 255); transform-origin: 141.27px 194.61px;" id="ely4nngo507w" class="animable"></path></g></g><g id="elgganytn2g9c"><g style="opacity: 0.6; transform-origin: 134.745px 207.37px;" class="animable"><path d="M174.69,207.37c0,.15-17.88.26-39.94.26s-39.95-.11-39.95-.26,17.88-.26,40-.26S174.69,207.23,174.69,207.37Z" style="fill: rgb(255, 255, 255); transform-origin: 134.745px 207.37px;" id="el2rrbqk7fnlq" class="animable"></path></g></g><g id="eltilj67np9c"><g style="opacity: 0.6; transform-origin: 123.395px 221.41px;" class="animable"><path d="M159.14,221.41c0,.14-16,.26-35.74.26s-35.75-.12-35.75-.26,16-.26,35.75-.26S159.14,221.27,159.14,221.41Z" style="fill: rgb(255, 255, 255); transform-origin: 123.395px 221.41px;" id="elvwh8sfl3d5" class="animable"></path></g></g><g id="el6woe3misatc"><g style="opacity: 0.6; transform-origin: 134.71px 236.69px;" class="animable"><path d="M161,236.69c0,.14-11.77.26-26.29.26s-26.29-.12-26.29-.26,11.76-.26,26.29-.26S161,236.54,161,236.69Z" style="fill: rgb(255, 255, 255); transform-origin: 134.71px 236.69px;" id="elhe5tlyiuqnc" class="animable"></path></g></g><g id="elsg5f4pfjb6s"><g style="opacity: 0.6; transform-origin: 135.55px 252.54px;" class="animable"><path d="M162.55,252.54c0,.14-12.08.26-27,.26s-27-.12-27-.26,12.08-.26,27-.26S162.55,252.4,162.55,252.54Z" style="fill: rgb(255, 255, 255); transform-origin: 135.55px 252.54px;" id="el0w2fm8hhb7m9" class="animable"></path></g></g><g id="elkf0gntvnll8"><g style="opacity: 0.6; transform-origin: 135.785px 267.08px;" class="animable"><path d="M165,267.08c0,.14-13.08.26-29.21.26s-29.22-.12-29.22-.26,13.08-.26,29.22-.26S165,266.93,165,267.08Z" style="fill: rgb(255, 255, 255); transform-origin: 135.785px 267.08px;" id="elqfxb38pnsl" class="animable"></path></g></g></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg>
        </div>
    </div>
</div> 
</section>
<style>.select2-search__field{ min-width:200px;} </style>

<section id="register-form" class="edit-profile" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="row">

            
            <div class="col-lg-8 offset-lg-2 col-lg-offset-2 form-card">
                <h2 class="text-center">Edit your profile information</h2>
                @if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

@if (!$consultant->active)
<div class="alert alert-warning">
  <p>Your account is pending for review. <br> Update your profile with your complete inforamtion to get it approved so people can find you easily on PS</p>
</div>
@endif
                
               <div class="">
               
                <div class="">
                  
                  <!-- edit form column -->
                  <div class="col-md-12 personal-info">
                    
                    
                    
                    <form class="form-horizontal"  role="form" method="POST" action="{{ action('Consultant\ConsultantController@update',$consultant->id ) }}" enctype="multipart/form-data" data-parsley-validate="">
                        @method('PUT')
                        @csrf()
                    <div class="row">
                        <div class="text-center m-auto">
                            @if(($consultant->logo == Null) || ($consultant->logo == 'noimage.png'))
                            <img src="{{ asset('/site/images/default.png')}}" width="200px" class="avatar rounded-circle" alt="avatar">
                            @else
                            <img src="{{ asset('storage/site/images/users/consultant/'.$consultant->logo) }}" width="150px" height="150px" class="avatar rounded-circle img-main" alt="avatar">
                            @endif
                            @if($consultant->active) <i class="active-status fas fa-circle text-success"></i>
                                        @endif
                            <h6>Upload a different photo...</h6>
                            <div class="formgroup">
                            <input type="file" class="form-control @error('firstname') has-error @enderror image" style="margin:auto" name="image" 
                                data-parsley-required-message="Profile image is required."
                                data-parsley-errors-container=".errorsimageinput" >
                                <input type="hidden" name="x1" value="" />
                                <input type="hidden" name="y1" value="" />
                                <input type="hidden" name="w" value="" />
                                <input type="hidden" name="h" value="" />
                                <div class="errorsimageinput mt-20">
                         @error('logo')
                         <div class="alert alert-danger" role="alert">
                            {{$message}}
                          </div>
                         @enderror
                        </div>
                    </div>
                          </div>
                          <div class="img-info">
                            <div class="row mt-5">
                                <p><img id="previewimage" style="display:none;"/></p>
                                @if(session('path'))
                                    <img src="{{ session('path') }}" />
                                @endif
                            </div>
                          </div>
<div class="col-md-12">
                        <h2 class="profile-heading">Personal Info</h2>
                    </div>
                        <div class="col-md-6">
                            
                            <input type="text" id="fname" name="fname" placeholder="First Name" class="form-group " value="{{$consultant->first_name}}"
                            required
                    data-parsley-required-message="First name is required."
                     data-parsley-errors-container=".errorsfirstnameinput" 
                            >
                            <div class="errorsfirstnameinput">
                         @error('fname')
                         <div class="alert alert-danger" role="alert">
                            {{$message}}
                          </div>
                         @enderror
                    </div>
                        </div>
                        <div class="col-md-6">
                           
                            <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-group " value="{{$consultant->last_name}}"
                            required 
                        data-parsley-required-message="Last name is required."
                        data-parsley-errors-container=".errorslastnameinput"
                            >
                            <div class="errorslastnameinput">
                            @error('lname')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-12">
                            
                            <input type="text" id="title" name="title" placeholder="Designation" class="form-group" value="{{$consultant->job_title}}"
                            required 
                        data-parsley-required-message="Profile title is required."
                        data-parsley-errors-container=".errorstitleinput"
                            >
                            <div class="errorstitleinput">
                            @error('title')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        
                        <div class="col-md-12">
                           
                            <textarea  id="summary" name="summary" placeholder="Personal Summary" class="form-group" cols="3" rows="5"
                            required 
                        data-parsley-required-message="Summary is required."
                        data-parsley-errors-container=".errorssummaryinput"
                            >{{$consultant->summary}}</textarea>
                            <div class="errorssummaryinput">
                            @error('summary')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-12 row">
                            <h2 class="profile-heading">Compensation</h2>
                        </div>
                        
                        
                        <div class="col-md-6  " >
                            <select name="compensation" id="compensation" class="form-control" required style="box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, .25); 
                                background-color: whitesmoke;
                                border-radius: 8px; background-color:#f5f5f5; height:45px;" data-parsley-required-message="Select from below"
                                                    data-parsley-errors-container=".errorscompensationinput">
                            
                                <option value=""  disabled selected>Select </option>
                                <option @if( $consultant->compensation == 'hr' ) selected @endif value="hr">Hourly</option>
                                <option @if( $consultant->compensation == 'day' ) selected @endif value="day">Daily</option>
                                <option @if( $consultant->compensation == 'month' ) selected @endif value="month">Monthly</option>
                            
                        
    
                            </select>
                                <br>
                                <div class="errorscompensationinput">
                                @error('compensation')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                           
                            <input type="text" id="rate" name="hourly_rate" placeholder="Rate" class="form-group" value="{{$consultant->current_salary}}"
                            required 
                            data-parsley-required-message=" Rate is required."
                            data-parsley-errors-container=".errorsrateinput"
                            style="margin-top: 0px;">
                            <div class="errorsrateinput">
                            @error('hourly_rate')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                            </div>
                        </div>
                        

                        <div class="col-md-12 row">
                            <h2 class="profile-heading">Location</h2>
                        </div>

                       
                        <div class="col-md-6">
                            
                            <input type="text" id="city" name="city" placeholder="City" class="form-group" value="{{$consultant->city}}"
                            required 
                        data-parsley-required-message="City is required."
                        data-parsley-errors-container=".errorscityinput"
                            >
                            <div class="errorscityinput">
                            @error('city')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                            
                            <input type="text" id="state" name="state" placeholder="State" class="form-group" value="{{$consultant->region}}"
                            required 
                        data-parsley-required-message="State is required."
                        data-parsley-errors-container=".errorsstateinput"
                            >
                            <div class="errorsstateinput">
                            @error('state')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                            
                            <input type="text" id="country" name="country" placeholder="Country" class="form-group" value="{{$consultant->country}}"
                            required 
                        data-parsley-required-message="Country is required."
                        data-parsley-errors-container=".errorscountryinput"
                            >
                            <div class="errorscountryinput">
                            @error('country')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>


                        </div>

                        <div class="col-md-12 row">
                            <h2 class="profile-heading">Skills</h2>
                        </div>
                        <div class="col-md-12">
                           
                        <div class="form-group">
                            <select class="form-control js-example-tags"  name="skills[]" multiple="multiple" required 
                        data-parsley-required-message="Enter at least one skill."
                        data-parsley-errors-container=".errorsskillinput">
                            
                          

                            @foreach($consultant->skills as $skill)
                            <option selected="selected">{{$skill->title}}</option>
                            
                            @endforeach
                            </select>
                            <br>
                            <div class="errorsskillinput mt-20" >
                            @error('skills')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        </div>
                        <div class="col-md-12 row">
                            <h2 class="profile-heading">Website Link</h2>
                        </div>
                        <div class="col-md-12">
                            <input type="text" id="website" name="website" placeholder="https://yourwebsite.com" value="{{$consultant->website}}" class="form-group">
                        </div>

                        <div class="col-md-12 row">
                            <h2 class="profile-heading">LinkedIn Profile </h2>
                        </div>
                        <div class="col-md-12">
                            <input type="text" id="linkedin" name="linkedin" placeholder="Link" value="{{$consultant->linkedin}}" class="form-group">
                        </div>
                                       
                        <div class="col-sm-12 text-center">
                             <button class="btn btn-default submit-btn" type="submit">Update</button>
                        </div>
                    </div>
                    </form>
                  </div>
              </div>
            </div>

            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="modalLabel">Crop Image</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
    <div class="img-container">
    <div class="row">
    <div class="col-md-8">
    <img id="image" class='img-modal'  src="https://avatars0.githubusercontent.com/u/3456749">
    </div>
    <div class="col-md-4">
    <div class="preview"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-info" id="crop">Crop</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
@section('scripts')
<script  src="{{asset('/ps/asset/js/jstars.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
   <script>

var $modal = $('#modal');
var image = document.getElementById('image');
var cropper;
$("body").on("change", ".image", function(e){
var files = e.target.files;
var done = function (url) {
image.src = url;
$modal.modal('show');
};
var reader;
var file;
var url;
if (files && files.length > 0) {
file = files[0];
if (URL) {
done(URL.createObjectURL(file));
} else if (FileReader) {
reader = new FileReader();
reader.onload = function (e) {
done(reader.result);
};
reader.readAsDataURL(file);
}
}
});
$modal.on('shown.bs.modal', function () {
cropper = new Cropper(image, {
aspectRatio: 1,
viewMode: 3,
preview: '.preview'
});
}).on('hidden.bs.modal', function () {
cropper.destroy();
cropper = null;
});
$("#crop").click(function(){
canvas = cropper.getCroppedCanvas({
width: 160,
height: 160,
});
canvas.toBlob(function(blob) {
url = URL.createObjectURL(blob);
var reader = new FileReader();
reader.readAsDataURL(blob); 
reader.onloadend = function() {
var base64data = reader.result; 
 
 
$.ajax({
type: "POST",
dataType: "json",
url: "/crop-image-upload",
data: {'_token': $('meta[name="csrf-token"]').attr('content'), 'image': base64data},
success: function(data){
console.log(data);
$modal.modal('hide');
alert("Crop image successfully uploaded");
var src = "{{ asset('storage/site/images/users/consultant/') }}";
 
$('.img-main').attr('src', src+'/'+data.image);
$(".image").val(null);
}
});
}
});
})

   </script>
 

@endsection