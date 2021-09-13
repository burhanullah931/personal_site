@extends('layouts.site.app')
@section('styles')
    <style>
    #about-page{
background:url({{asset('/ps/asset/images/bg-lines.png')}}), linear-gradient(to right,rgb(169 169 167),rgb(232 232 232),rgb(156 142 142 / 2%),rgb(169 168 168 / 20%));
padding:60px 0px 60px 0px;
height: 550px;
}
@media only screen and (max-width: 600px){
       
    #about-page{height:auto;}
   }
.header-title h1 {
    color: #00449b;
     font-size:60px;
    font-family: Poppins;
    font-weight: 600;
    line-height: 70px;
    margin-top: 0px;
}
.header-title h4 {
    font-size:28px;
}

@media only screen and (max-width: 479px) and (min-width: 320px){
     .header-title h1{
     font-size: 32px;
    text-align: center;
}}
.filterDiv{ display:block; margin:0}
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
   animation: float 6s ease-in-out infinite;
}
    </style>
@endsection
@section('content')

   <section id="about-page">
    <div class="container">
     <div class="row">

         <div class="col-md-6 header-title text-center mt-5">

             <h1  class="text-blue banner-head text-left font-m-bold mt-5 text-uppercase mb-0 p-0" style="">GET A FREE QUOTE  </h1>
             <h4 class="text-blue  text-left  font-m-bold text-uppercase">NO CREDIT CARD REQUIRED</h4>

             {{-- <button class="btn float-lg-left btn-default" href="{{route('service.checkout',$service->slug)}}" onclick="window.location.href='{{route('service.checkout',$service->slug)}}'" >Get A Quote<i class="fa fa-long-arrow-alt-right"></i></button> --}}
         </div>
         <div class="col-md-6">
            <img src="{{asset('/ps/asset/images/quote.png')}}" class="img-fluid  mx-auto d-block header-img">
         </div>

     </div>
 </div>
 </section>

<section id="package-detail">
<div class="container">
    <div class="package-detail-inner">
        <div class="row  package-deatil-header">
        <div class="col-md-8">
            <h2>{{$service->title}}</h2>
            <h4>${{$service->price}}</h4>
        </div>
        <div class="col-md-4 text-right">
        <a class="btn btn-default" href="{{route('service.checkout',$service->slug)}}">Get Quote</a>
        </div>

    </div>
    <div class="bottom-spacer"></div>
    <div class="row package-detail-body">
        <div class="col-md-7">
            <h2>Package details</h2>
            <div class="package-points">

            <span>@php echo $service->description; @endphp</span>

            </div>
        </div>
        <div class="col-md-5">
            <img src="{{$service->image}}" width="100%" alt="">
        </div>
    </div>
    </div>
</div>
</section>



<section id="related-packages">
    <div class="container">
        <h2 >More packages like this
        </h2>
        <div class="row">

           @isset($relatedtags)
               @foreach ($relatedtags->take(3) as $tag)


                <div class="col-md-4 filterDiv">
                    <div class="listing-shot grid-style">
                        <div class="listing-shot-img">
                        <img src="{{$tag->service->image}}" width="100%" class="category-boxs" alt="">
                         <span class="listing-status">

                           </span>



                           </div>
                           <div class="listing-shot-caption">
                               <h4>{{$tag->service->title}}</h4><br>
                               <h4>${{$tag->service->price}}</h4>
                             <a class="btn btn-default"href="{{route('service.details',$tag->service->slug)}}" >View Details</a>
                           </div>

                   </div>
                    </div>

             @endforeach
           @endisset

        </div>
    </div>
</section>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){

$(".fa-search").click(function(){
    $(".search, .input").toggleClass("active");
    $("input[type='text']").focus();
});

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
   $(document).ready(function(){
       $('#email').on('change', function(){
           let email = $(this).val();

           $.ajaxSetup({
             headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
          });

          $.ajax({
                type: 'POST',
                url: "#",
                data: {email: email},
                success: function (data){
                      if(data.status == 'true'){
                          $('#email-error').text('This email address already exist, Enter another email address.');
                          $('#email').val('');
                      }

                      if(data.status == 'false'){
                          $('#email-error').text('');
                      }
                },
                error: function(e) {
                     console.log(e);
                }
             })
       })
   })
</script>
@endsection

