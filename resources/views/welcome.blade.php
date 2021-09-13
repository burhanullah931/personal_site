@extends('layouts.site.app')

@section('styles')
<style>
    @media only screen and (max-width: 500px){
#consult-page .header-title .btn-default {
    /* text-align: center; */
    width: 250px;
    font-size: 16px;
    padding: 15px 18px 15px 18px;
    margin: 5px 0 !important;
    border: none;
}
.header-title h1 {
    font-size: 24px!important;
    line-height: 35px!important;}
#consult-page {
    
    height: 100% !important;
    
    
}
/* .header-title h1 {
   
    margin-top: 200px !important;
    
} */

}
@media only screen and (max-width: 767px) and (min-width: 500px){
    .header-title h1 {
    font-size: 30px!important;
    line-height: 38px!important;
text-align:left;}
}
@media only screen and (max-width: 991px) and (min-width: 768px){
.header-title h1 {
   
    text-align: left;
}
}
/* #consult-page {
    
    height: 100%;
    position:fixed;
    width:100%;
    
} */
#footer-extra {
    
    position: absolute;
    width: 100%;
    bottom: 0;
}
/* .header-title h1 {
    margin-top: 0;
    } */
    /* .header-title{
        position: fixed;
    top: 40%;
   
} */
    
    .header-title h1{ font-size:44px;     line-height: 55px;}
    #footer-extra{ display:none}
    #banner-slider .consultant-info{
        font-size:56px;
        color: #91bf20;
        text-align: justify
    }
    #banner-slider .consultant-desg{
        color: #00439b;
    font-size: 24px;
    text-align: justify;
    font-weight: 400;
    }
    #banner-slider .consultant-detail{
       
    text-align: justify;
    color:black;
    margin-bottom: 20px;
    font-size: 18px;
    }

    #banner-slider .skill-btn {
        background-color: #00419b;
    color: white;
    font-family: inherit;
    font-size: 14px;
    padding: 6px 20px 7px 20px;
    margin: 0 10px 5px 10px;
    text-align: center;
    display: inline-block;
    border-radius: 50px;
    width: 46%;
    display: inline-block;
    float: left;}
    .slick-slide{
        height:auto;
    }
    #banner-slider{
background: linear-gradient(to right,rgb(169 169 167),rgb(232 232 232),rgb(156 142 142 / 2%),rgb(169 168 168 / 20%));
padding:80px 0px
}
    @media only screen and (max-width: 767px){
        .center .slick-slide .consultant-item h3{
           padding-top:20px;
        }
        #header-area .main-menu .nav-item:nth-child(1){
            margin-top:10px;
            list-style: disc;
            color: #91bf20;
        }
        .border-bottom-active{
            display: none
        }
        span.action.mr-4{
            display: block;
    padding: 15px 5px;
        }
        #banner-slider .skill-btn {
    
    width: 100%;}
    #banner-slider .consultant-info {
    font-size: 36px;
    margin-top:40px;
}
#banner-slider .consultant-desg {
   
    font-size: 18px;
   
}
#banner-slider{
    padding:40px 0px;
}

.slick-slide img{
    width:100%;
}
}
.font-20{
    font-size:20px !important;
    color:#6F6F6F;
}
.text-gray{
    color:#6F6F6F;
}
.borderRight{
    border-right: 1px solid gray;

}


</style>
<title>Home</title>
@endsection

@section('content')
<section id="banner-slider" style="
background: linear-gradient(to right,rgb(169 169 167),rgb(232 232 232),rgb(156 142 142 / 2%),rgb(169 168 168 / 20%));
padding:80px 0px">
    <div class="container-fluid">
        <div class="">
            <div class="header-slider slider">
                <div class="consultant-item ">
                    <div class="row">
                    <div class="col-md-6 pr-md-5 pr-lg-5">
                        <img src="{{asset('/site/images/cover4.png')}}" style='max-width:450px' class="m-auto" >
                    </div>
                    <div class="col-md-6">
                        <h2 class="consultant-info">JESSICA SHELLEY</h2>
                        <h4 class="consultant-desg">CHIEF REVENUE OFFICER</h4>
                        <p class="consultant-detail">Business Operations Executive with 13+ years' experience of leading multi-national teams of up to 150 people. I have managed multi-million dollar budgets and achieved triple-digit YoY revenue growth and 40%+ increases in profitability. Specialties: •Leadership & Strategy •Building High-Performing Teams & Cultures •Revenue & Profit Growth •Recruitment & Talent Management </p>
                        <div class="skill-btn">Talent Management</div>
                        <div class="skill-btn"  style="background-color: #91bf20;
                        ">Employee Engagement</div>
                        <div class="skill-btn" style="background-color: #91bf20;
                        ">Employer Branding</div>
                        <div class="skill-btn">Recruiting</div>
                    </div>
                </div>
                    
                </div>
                <div class="consultant-item ">
                    <div class="row">
                    <div class="col-md-6 pr-md-5 pr-lg-5">
                        <img src="{{asset('/site/images/cover1.png')}}" style='max-width:450px' class="m-auto" >
                    </div>
                    <div class="col-md-6">
                        <h2 class="consultant-info">RAFAEL A. CASTANEDA</h2>
                        <h4 class="consultant-desg">EXECUTIVE ACADEMIC PARTNERSHIP CONSULTANT</h4>
                        <p class="consultant-detail">As a versatile and excellence-driven leader, I have 15+ years’ experience relentlessly pursuing opportunities to drive revenue and cut costs. With a strong business and financial acumen, exceling at taking on extreme challenges and navigating complex organizational dynamics, I am a strategist with a keen eye for detail and innovative approaches to continuous improvement. </p>
                        <div class="skill-btn">Sales</div>
                        <div class="skill-btn"  style="background-color: #91bf20;
                        ">Finance</div>
                        <div class="skill-btn" style="background-color: #91bf20;
                        ">Strategic</div>
                        <div class="skill-btn">Management</div>
                    </div>
                </div>
                    
                </div>
                <div class="consultant-item ">
                    <div class="row">
                    <div class="col-md-6 pr-md-5 pr-lg-5">
                        <img src="{{asset('/site/images/cover3.png')}}" style='max-width:450px' class="m-auto" >
                    </div>
                    <div class="col-md-6">
                        <h2 class="consultant-info">TONY MARTIGNETTI</h2>
                        <h4 class="consultant-desg">FOUNDER</h4>
                        <p class="consultant-detail">Navigating Leaders through change and unlocking their true potential | Inspiration through Honest Conversation! Before sharing my experience as a coach, I was a finance and strategy professional with experience working with some of the world’s leading life sciences companies. Along my journey, I also managed small businesses and ran a financial consulting company. </p>
                        <div class="skill-btn">Pharmaceutical Industry</div>
                        <div class="skill-btn"  style="background-color: #91bf20;
                        ">Strategic Planning</div>
                        <div class="skill-btn" style="background-color: #91bf20;
                        ">Leadership</div>
                        <div class="skill-btn">Biotechnology</div>
                    </div>
                </div>
                    
                </div>
              
               
                            </div>


        </div>
    </div>
</section>
{{-- <section id="consult-page" >
   
    
    <div class="container">
     <div class="row">
         <div class="col-md-12 header-title" >
             <h1 class="text-uppercase">Connecting Businesses With <br>Consultants  <span class="custom">To Create <br> A Thriving Future</span></h1>
           
             <a class="btn btn-default  " style="margin-right: 20px" href="{{url('employer')}}">Hire a Consultant</a>
             <a class="btn btn-default btn-border" href="/jobs">Explore Consulting Gigs</a>
             <p></p>
         </div>
     </div>
 </div> 
 
 </section> --}}
 <!-- *******************************************need someting done / whats great about it************************************* -->
 
 <section id="services" class="mt-5">
    <div class="container-fluid container-fluid-p">
        <div class="need_something_done  ">
            <div class="tittle-sec text-center">
                <h2 class="font-m-bold">PersonalSite <br>The Town Square for the Gig Economy</h2>
                <p class="text-justify  text-gray mt-1 p-5  no-pad-res">
                    The world has been moving to a gig economy since the turn of the millennium. The Covid-19
                    pandemic has greatly accelerated this transition. You’ll need to figure out how to thrive in this
                    new environment.
                </p>
            </div>
            <div class="row text-black pt-3">
                <div class="col-md-6 mb-2 text-center borderRight">
                    <h4  class="mb-3">You’re a seasoned executive who found yourself suddenly and unexpectedly displaced</h4>
                    <div class="features mb-3">
                        <p class="text-left  font-20">- &nbsp; &nbsp;How do you start a consulting practice?</p>
                        <p class="text-left  font-20">- &nbsp; &nbsp;How do you find potential clients?</p>
                        <p class="text-left  font-20">- &nbsp; &nbsp;How do you project the right image?</p>
                    </div>
                    <div class="mt-2 mr-5">
                        <img src="https://personalsite.com/ps/asset/images/2.png" class="img-fluid d-block mx-auto img-home mt-2 mb-2" alt="">
                        <a href="https://consulting.personalsite.com/jobs" style="text-decoration:underline;" class="d-block mt-2 text-blue">
                            <h4  class="mt-4">  Find a Gig </h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mb-2 text-center pl-5 no-pad-res">
                    <h4 class="mb-3">Your business has executive needs but isn’t ready to make a permanent hire due to uncertain finances</h4>
                    <div class="features mb-3">
                        <p class="text-left font-20">- &nbsp; &nbsp;How do you determine your real needs?</p>
                        <p class="text-left  font-20">- &nbsp; &nbsp;How do you find potential consultants?</p>
                        <p class="text-left  font-20">- &nbsp; &nbsp;How do you evaluate potential consultants?</p>
                    </div>
                    <div class="mt-4 mr-5">
                       <img src="https://personalsite.com/ps/asset/images/1.png" class="img-fluid d-block mx-auto img-home mt-3 mb-2" alt="">
                        <a href="https://consulting.personalsite.com/employer" style="text-decoration:underline;" class="d-block mt-2 text-blue">
                            <h4 class="mt-4">  Find a Consultant </h4>
                        </a>
                    </div>
                </div>



            </div>
        </div>
        <div class="whats_great mt-5 mb-5">
            <div class="tittle-sec text-center">
                <h2 class=" font-m-bold mt-3 mb-3">We Help Businesses Find the Help They Need<br>We Help Consultants Elevate their Practices</h2>
            </div>
            <div class="row mt-5 text-black px-6per mb-5">
                <div class="col-md-3 mb-2 text-center">
                    <a class="d-block">
                        <img src="{{asset('/site/images/icon-0.png')}}" class="img-fluid" alt="">
                        <p class="text-black font-m-regular mt-4">Small jobs, large jobs, anything in between</p>
                    </a>
                </div>
                <div class="col-md-3  mb-2 text-center">
                    <a class="d-block">
                        <img src="{{asset('/site/images/icon-2.png')}}" class="img-fluid" alt="">
                        <p class="text-black font-m-regular mt-4">Jobs that are fixed price or hourly term</p>
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a  class="d-block">
                        <img src="{{asset('/site/images/icon-3.png')}}" class="img-fluid" alt="">
                        <p class="text-black font-m-regular mt-4">International and local jobs.</p>
                    </a>
                </div>
                <div class="col-md-3 mb-2 text-center">
                    <a  class="d-block">
                        <img src="{{asset('/site/images/icon-4.png')}}" class="img-fluid" alt="">
                        <p class="text-black font-m-regular mt-4">Specific skills, price and schedule requirements.</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="divder-blue"></div>
    </div>
</section>
<div class="divder-blue" style="background-color:#00449b;"></div>
<!-- *******************************************Categories************************************* -->
<section id="categories" class="mt-5">
    <div class="container-fluid container-fluid-p">
        <div class="need_something_done  ">
            <div class="tittle-sec text-center">
                <h2 class="text-black font-m-bold">CATEGORIES</h2>

            </div>
            <div class="row mt-5 text-black pt-3">
                @foreach ($categories as $cat)
                    
                
                <div class="col-md-3">
                    <ul class="cate-list">
                        <li>
                        <a class="font-m-medium" href="{{route('get.consultants_by_cat', $cat->id)}}">{{$cat->name}}</a>
                        </li>
                    </ul>
                </div>
                @endforeach

                

            </div>
        </div>

        <div class="divder-blue"></div>
    </div>
</section>

<!-- *******************************************Team************************************* -->
<section id="team" class="mt-5">
    <div class="container-fluid container-fluid-p">
        <div class="need_something_done  ">
            <div class="tittle-sec text-center">
                {{-- <h1 class="text-black font-m-extraBold">WE DON'T JUST CREATE PERSONAL SITES,<br> WE HELP YOU EXPLORE NEW OPPORTUNITIES</h1> --}}
                {{-- <div class="divder-title mt-4"></div> --}}
                <h2 class="text-black font-m-bold text-uppercase">Top Consultants</h2>
                <h3 class="top-consultant-title">
                   
                </h3>
            </div>
        </div>
    </div>
</section>

<section id="team-slider" class="mt-5" style="margin-bottom: 50px;">
    <div class="container-fluid ">
        <div class="row px-5">
            <div class="center slider">
                <div class="consultant-item">
                    <img src="{{ asset('/site/images/team-1.jpg')}}" class="img-thumbnail">
                    <h3 class="consultant-info">JOE BIESER</h3>
                    <p class="consultant-des">VICE PRESIDENT</p>
                </div>
                <div class="consultant-item">
                    <img src="{{ asset('/site/images/jefff.jpg')}}" class="img-thumbnail">
                    <h3 class="consultant-info">JEFF GREENBERG</h3>
                    <p class="consultant-des">MANAGING DIRECTOR</p>
                </div>
                <div class="consultant-item">
                    <img src="{{ asset('/site/images/team-3.jpg')}}" class="img-thumbnail">
                    <h3 class="consultant-info">AMANDA STARK</h3>
                    <p class="consultant-des">ATTORNEY</p>
                </div>
                <div class="consultant-item">
                    <img src="{{ asset('/site/images/team-4.jpg')}}" class="img-thumbnail">
                    <h3 class="consultant-info">JOSE CINTRON</h3>
                    <p class="consultant-des">CEO</p>
                </div>
                <div class="consultant-item">

                    <img src="{{ asset('/site/images/team-5.jpg')}}" class="img-thumbnail">
                    <h3 class="consultant-info">MARY ANN ROBINSON</h3>
                    <p class="consultant-des">OWNER</p>
                </div>
                <div class="consultant-item">
                    <img src="{{ asset('/site/images/team-6.jpg')}}" class="img-thumbnail">
                    <h3 class="consultant-info">JOHN DUGUE</h3>
                    <p class="consultant-des">BUSINESS OWNER</p>
                </div>
            </div>


        </div>
    </div>
    <div class="divder-green pos-divder"></div>
</section>


 <!-- <section id="consultants">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('/site/images/consultants.png')}}" alt="" class="img-responsive">
            </div>

            <div class="col-md-6" style="margin-top:100px">
                <h1>Connecting People<br>
      Creating Opportunities 
</h1>
                <p>PersonalSite expertly connects executives and agencies
    		     to businesses seeking specialized consultants.
</p>
                
                <a class="btn btn-default" href="/jobs">Explore Opportunities<i class="fa fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section> -->

<!-- <section id="seekers">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6" style="margin-top:100px">
                <h1>Developing Brands <br>
Delivering Results
</h1>
                
                <p>Seal new deals, from one-off freelance projects to long-term contracts with multinational organizations by uplifting your personal brand.</p>

               
                <a class="btn btn-default" target="_blank" href="http://personalsite.com/branding">Learn More<i class="fa fa-long-arrow-alt-right"></i></a>
            </div>
            
            <div class="col-md-5">
                <img src="{{ asset('/site/images/seekers.png')}}" alt="" class="img-responsive">
            </div>
        </div>
    </div>
</section> -->
@endsection

