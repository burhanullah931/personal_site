@extends('layouts.site.app')
@section('styles')
    <style>
        .bootstrap-filestyle.input-group {
    /* padding: 0px 15px; */
}
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
     font-size:45px;
    font-family: Poppins;
    font-weight: 600;
    line-height: 70px;
    margin-top: 0px;
}
.header-title h4 {
    font-size:28px;
}
label#label-attachment {
   margin-left: 16px;
   padding-top: 5px;
}
#contact .contact-form input{ margin:15px 0px;}
textarea#notes{ margin:15px 0px;}
@media only screen and (max-width: 479px) and (min-width: 320px){
     .header-title h1{
     font-size: 32px;
    text-align: center;
}}
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

         <div class="col-md-7 header-title text-center mt-5">

             <h1  class="text-blue banner-head text-left font-m-bold mt-5 text-uppercase mb-0 p-0" style="">Request For Quote (RFQ) </h1>


             {{-- <button class="btn float-lg-left btn-default" href="{{route('service.checkout',$service->slug)}}" onclick="window.location.href='{{route('service.checkout',$service->slug)}}'" >Get A Quote<i class="fa fa-long-arrow-alt-right"></i></button> --}}
         </div>
         <div class="col-md-5">
            <img src="{{asset('/ps/asset/images/rfq.png')}}" class="img-fluid  mx-auto d-block header-img">
         </div>

     </div>
 </div>
 </section>

 <section id="contact">
    <div class="container">
       <div class="row contact-section">
          {{-- <div class="col-md-5">
             <div class="col-sm-6">
                <h5>STEP 1</h5>
                <h6>Free Signup with your details.</h6>
             </div>
             <div class="col-sm-6">
                <img src="{{asset('/ps/asset/images/right-arrow.png')}}" alt="" class="arrow">
             </div>
             <div class="col-sm-6">
                <img src="{{asset('/ps/asset/images/left-arrow.png')}}" alt="" class="arrow">
             </div>
             <div class="col-sm-6">
                <br>
                <h5>STEP 2</h5>
                <h6>Upload your resume and website content.<br><br></h6>
             </div>
             <div class="col-sm-6">
                <br>
                <h5>STEP 3</h5>
                <h6>Receive your professional personal site within 3 business days!</h6>
             </div>
          </div> --}}
          <div class="col-md-2"></div>
          <div class="col-md-8  contact-form">
            <form id="get_start" action="{{route('service.order')}}" method="post" class="contact__form" enctype="multipart/form-data" autocomplete="off" >
                @csrf

                <input type="hidden" name="service_id" value="{{$service->id}}"/>

                <div class="row">
                   <div class="col-12">
                      <div class="loading-overlay" id="waiting_loader">
                         <center>
                            <img class="loading-image loading-icon" src="{{asset('/ps/asset/images/loading.gif')}}" alt="loading..">
                         </center>
                      </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                   <input type="text" class="form-control" id="fname" required name="firstname" placeholder="Enter First Name" value="">
                   @error('firstname')<label id="fname-error" class="error" for="fname"> {{$message}}</label>@enderror

                </div>
                <div class="col-sm-6 form-group">
                   <input type="text" class="form-control" id="lname" required name="lastname" placeholder="Enter Last Name" value="">
                   @error('lastname')<label id="lname-error" class="error" for="lname"> {{$message}}</label>@enderror

                </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                   <input type="email" class="form-control" id="email" required name="email" placeholder="Enter Email" value="">
                     <label id="email-error" class="error" for="email"></label>

                   @error('email')<label id="email-error" class="error" for="email"> {{$message}}</label>@enderror


                </div>
                <div class="col-sm-6 form-group">
                   <input type="text" class="form-control" id="phone" required name="phone" placeholder="Enter Mobile Number" value="">
                   @error('phone')<label id="phone-error" class="error" for="phone"> {{$message}}</label>@enderror

                </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">

                    <textarea class="form-control" id="notes" rows="5"  required name="notes" placeholder="Notes" value=""></textarea>

                    @error('notes')<label id="notes-error" class="error" for="notes"> {{$message}}</label>@enderror

                 </div>
                 <div class="col-sm-12 ">
                    <input type="file" id="attachment" class="ttfl form-control" name="attachment" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                    <label id="label-attachment" class="form" for="attachment">Project details/contents (Optional)</label>
                    @error('attachment')<label id="attachment-error" class="error" for="attachment" style="margin-left: 16px; padding-top: 5px;"> {{$message}}</label>@enderror

                </div>
                <div class="col-sm-12">
                   <button class="btn btn-default btn-get-start pull-right" type="submit">Submit</button>
                </div>
                </div>



             </form>
          </div>
          <div class="col-md-2"></div>

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
      $('#get_start').validate();
      //  $('#email').on('change', function(){
      //      let email = $(this).val();

      //      $.ajaxSetup({
      //        headers: {
      //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //        }
      //     });

      //     $.ajax({
      //           type: 'POST',
      //           url: "#",
      //           data: {email: email},
      //           success: function (data){
      //                 if(data.status == 'true'){
      //                     $('#email-error').text('This email address already exist, Enter another email address.');
      //                     $('#email').val('');
      //                 }

      //                 if(data.status == 'false'){
      //                     $('#email-error').text('');
      //                 }
      //           },
      //           error: function(e) {
      //                console.log(e);
      //           }
      //        })
      //  })
   });
   setInterval(function(){ ;( function ( document, window, index )
    {
                $('.ttfl').filestyle({
                    input : false,
                    buttonName : 'btn-primary'
                });
    
            
    }( document, window, 0 ));}, 2000);	
</script>
@endsection

