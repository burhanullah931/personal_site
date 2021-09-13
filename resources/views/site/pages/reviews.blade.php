@extends('layouts.site.app')
@section('styles')
<title>PersonalSite - Reviews</title>
@endsection
@section('content')
<style> @media only screen and (max-width: 991px){

    
.header-title .btn-default {
   margin: auto;
    display: table;
    margin-top: 50px;
  
}}
.btn.filterbtn {
    
    padding-left: 25px;
    padding-right: 25px;}
    #brandingContainer {
    background-color: whitesmoke;;
    margin-bottom: 40px;
}
#brandingContainer .btn.filterbtn{
   color:black;}
   #testomonial-page{
      
    background:url({{asset('/ps/asset/images/bg-lines.png')}}), linear-gradient(to right,rgb(169 169 167),rgb(232 232 232),rgb(156 142 142 / 2%),rgb(169 168 168 / 6%));
padding:100px 0px 100px 0px;
height: 550px;
   }
   @media only screen and (max-width: 600px){
       
      #testomonial-page{height:auto;}
   }
   .header-title h1 {
    color: #00449b;
    margin-top: 100px;
    font-size: 41px;
    margin-bottom: 0;
    text-transform: uppercase;

}
.header-title h2 {
    color: #00449b;
    margin-top: 10px;
    font-size: 60px;
    font-weight: 700;
}
.header-title p {
  color: #00449b;
    font-size: 22px;
    font-weight: 500;
    margin-top: 0;
    
}
#testomonial-page .header-img img{
   margin-top:0;
}
#testomonial-page .header-title h1{
   margin-top: 0
}
#clients .client-block{
   background-color: #fff;
    padding-top: 20px;
} 
#clients .client-block{
   height: 420px;
}
#clients {
    padding: 70px 0;
    background-color: whitesmoke;
}
#clients-testi{
   background-color: white;
}
.carousel-inner p{
   color:#000;
}
@media only screen and (max-width: 767px){
   .header-title h1{
        font-size: 38px!important;
    line-height: 1.4;
    margin-top:0px!important;
    margin-bottom: 30px;
    text-align: center!important;

    }
    .header-title h2 {
      font-size: 32px!important;
    text-align: center;
    line-height: 1.4;
    margin-top: 0;
    }
    .header-title .btn-default{
      margin: auto;
    display: table;
    margin-top: 30px;
    }
    #testomonial-page .header-title{
      padding-left: 15px;
    padding-right: 15px;
    }
    #testomonial-page .header-title .btn-default{
      margin-bottom: 50px;

    }
    
}
@keyframes float {
	0% {
		/* box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6); */
		transform: translatey(0px);
	}
	50% {
		/* box-shadow: 0 25px 15px 0px rgba(0,0,0,0.2); */
		transform: translatey(-20px);
	}
	100% {
		/* box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6); */
		transform: translatey(0px);
	}
}
.header-img{
   animation: float 3s ease-in-out;
}
.heart-img
   {
	
	overflow: hidden;
	
	transform: translatey(0px);
	animation: float 6s ease-in-out infinite;
	

}
@media screen and (min-width:556px){
   .modal-dialog {
    max-width: 1000px!important;
    margin: 1.75rem auto;
    width: 100%!important;
}
}
   </style>
   <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="https://use.fontawesome.com/5ac93d4ca8.js"></script>

<section id="testomonial-page">
   <div class="container">
      <div class="row">
         <div class="col-md-7 header-title">
            <h1 class="text-left">Trusted By Top Executives</h1>
            <span style="color:white;"></span>
            <p>Read LinkedIn verified reviews from our happy clients.</p>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                </div>
            @endif
            <a class="btn btn-default text-white" data-toggle="modal" data-target="#myModal">WRITE A REVIEW</a>
         </div>
         <div class="col-md-5 header-img text-center">
            <img src="{{asset('/ps/asset/images/heart_red.png')}}" class="img-responsive center-block heart-img">
            <div class="jstars checked" data-value="4"></div>
         </div>
        
      </div>
   </div>
</section>
<section id="branding-menu"  class="sticky-top-nav">
  

   <div id="brandingContainer">
       <div class="container">
      <a class="btn filterbtn" href="{{route('site.branding')}}">Personal Branding</a>
      <a class="btn filterbtn" href="{{route('site.casestudies')}}">Case Studies</a>
      <a class="btn filterbtn active" href="{{route('site.reviews')}}">Reviews</a>
      <a class="btn filterbtn" href="{{route('site.faqs')}}">FAQs</a>
    
   </div>
   </div>
</section>
<section id="clients-testi">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div id="Carousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
               <!-- Carousel items -->
               <div class="carousel-inner">
                  @php
                  $count=0;
                  @endphp
                  @isset($testimonials)
                  @foreach ($testimonials as $review)
                  @php
                  $count++;
                  @endphp
                  <!--.item-->
                  <div class="carousel-item @if($count==1)active @endif ">
                     <div class="row  ">
                        <div class="col-md-5 text-center">
                           <img src="{{asset('/storage/reviews/'.$review->profile_pic)}}" style="width:">
                           <h4>{{$review->name}}</h4>
                           <p class="designation">{{$review->designation}}</p>
                           @if($review->linkedin)
                           <a href="{{$review->linkedin}}" target="_blank">
                           <i
                              class="fab fa-linkedin fa-2x" style="color: #2081fa;"></i>
                           </a> @endif
                        </div>
                        <div class="col-md-6 quote">
                           <i class="fas fa-quote-left"></i>
                           <h6>
                              <p>
                                 <span style="\&quot;color:" rgb(153,="" 153,="" 153);="" font-family:=""
                                 poppins;="" font-size:="" 14px;="" text-align:=""
                                 justify;\"="">{{$review->review}}</span>
                              </p>
                              <i
                                 class="fas fa-quote-right"></i>
                           </h6>
                           <div class="text-center rating-star">
                            @if($review->rating)
                            <div class="jstars checked" data-value="{{$review->rating}}">
                            </div>
                            @endif
                           </div>
                        </div>
                        <div class="col-md-1"></div>
                     </div>
                     <!--.row-->
                  </div>
                  <!--.item-->
                  @endforeach
                  @endisset
               </div>
               <!--.carousel-inner-->
               
               <a data-slide="next" href="#Carousel" class="right carousel-control text-center">›</a>
               <a data-slide="prev" href="#Carousel" class="right carousel-control text-center mx-2">‹</a>
            </div>
            <!--.Carousel-->
         </div>
      </div>
   </div>
   <!--.container-->
</section>
<section id="clients">
   <div class="container">
      <div class="">
         <div id="reviews-all" class="row">
            @include('site.pages.reviews_paginate')

         </div>
      </div>
      
   </div>
</section>
<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog modal-xl">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header text-center">
            <button type="button" class="close position-absolute" style="right: 42px;" data-dismiss="modal">&times;</button>
            <h1 class="w-100 mt-5">TELL US YOUR OPINION ABOUT  <a href="{{route('site.home')}}" class="modal-title" style="font-size: 25px; color:#00449b!important;"><strong >PersonalSite.com</strong> </a></h1>
         </div>
         <div class="modal-body">
            <div class="model-form">
               <form id="slideForm" action="{{route('reviews.form')}}" method="POST" autocomplete="off"  enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                  <div class="col-md-12 my_rating d-block mx-auto">

                     <h3>My Rating</h3>
                      
                     <input type="number" name="rating" id="rating1" class="rating text-warning"
                     data-clearable="remove" value="1"/>
                  </div>
                  <div class="col-md-6">
                     <h3>Your Name (Required)</h3>
                     <input type="text" id="yname" name="name" required="" class="form-group" value=""
                        aria-required="true">
                  </div>
                  <div class="col-md-6">
                     <h3>Your Email (Optional)</h3>
                     <input type="email" id="email_" name="email"  class="form-group" value=""
                        aria-required="true">
                  </div>
                  <div class="col-md-6">
                     <h3>Your Designation (Optional)</h3>
                     <input type="text" id="designation" name="designation" class="form-group" value="">
                  </div>
                  <div class="col-md-6">
                     <h3>Your LinkedIn (Optional)</h3>
                     <input type="text" id="linkedin" name="linkedin" placeholder="" class="form-group" value="">
                  </div>
                  <div class="col-md-12">
                     <h3>Website Link (Optional)</h3>
                     <input type="text" id="web_url" name="web_url" class="form-group" value="">
                  </div>
                  <div class="col-md-12 form-group">
                     <h3>Write Your Review (Required) </h3>
                     <textarea id="review" name="review" rows="5" required class="form-control" value=""></textarea>
                  </div>
                  <div class="col-md-12">
                     <h3>Your Image (Required) </h3>
                     <input type="file" class="form-group ttfl" required class="filestyle" name="image" tabindex="-1"
                        style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                  </div>
                  <div class="col-md-12 text-center">
                     <button class="btn btn-default model-submit-btn" id="submitReview" type="submit">Submit Your
                     Review</button>
                  </div>
               </div>
               </form>
            </div>
         </div>
         <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div> -->
      </div>
   </div>
</div>
@endsection
@section('scripts')
<script>
   $(document).ready(function(){
   $('#slideForm').validate();
    $(document).on('click', '.pagination a', function(event){
     event.preventDefault(); 
     var page = $(this).attr('href').split('page=')[1];
     fetch_data(page);
    });
   
    function fetch_data(page)
    {
      
          
     $.ajax({
      url:"/reviews/fetch_data?page="+page,
     
      success:function(data)
      {
          
       $('#reviews-all').html(data);
       
      }
     });
    }
    
   });
   $('.ttfl').filestyle({
                    input : false,
                    buttonName : 'btn-primary'
                });
                
</script>
<script src="{{asset('/site/js/rating.js')}}"></script>

@endsection