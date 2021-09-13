@extends('layouts.site.app')
@section('styles')
    <title>PersonalSite - Home</title>
    
@endsection
@section('hurryup')
    <div class="header-news">
        <p class="font-norms-mediumItalic f-20 text-white">HURRY! We only accept 100 qualified consultants every month as of <i class="font-norm-bold">{{Carbon\Carbon::now()->format('F j')}}</i> only 11 slots left. </p>
    </div>
@endsection

@section('content')
    <!-- **************************************  HERO INTRO ************************* -->
    <section id="hero-Intro">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 bg-hero-left text-center text-md-left  mx-auto mb-md-1 mb-5  mx-auto">
                    <div class="hero-body pl-md-5 pl-3">
                        <h1 class="font-norm-regular f-46px  text-dark-black text-black">
                            Access <span class="font-norm-bold text-secondary-green f-50px">1378+</span> open <span class="f-50px font-norm-bold">Consulting Gigs</span> <span class="font-norm-regular"> & see which ones</span> match your <span class="font-norm-bold  f-50px">Experience.</span>
                        </h1>
                        <p class="f-22 font-norms-mediumItalic  mt-2 mb-2 text-secondary-blue">
                            No Monthly Subscriptions & Credit Card Required!
                        </p>
                        <div class="register_gigs_profile my-4">
                            <form action="{{route('sale.store')}}" method="POST">
                                @csrf
                                <div class="form-group d-md-flex mb-0 form-bg bg-white">
                                    <div class="card-number card-input col-md-6">
                                        <select name="industry" class="form-control" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Select Industry</option>
                                            @foreach ($industries as $industry)
                                                <option value="{{$industry->id}}">{{$industry->name}}</option>
                                            @endforeach        
                                      </select>
                                      <span class="text-danger">{{$errors->first('industry')}}</span>
                                    </div>
                                    <div class="card-input text-center card-input col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email Address" class="border-0" required>
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <button type="submit" class="btn btn-pill btn-primary btn-secondary-blue">FIND GIGS</button>
                                </div>
                            </form>
                        </div>
                        <div class="row mt-md-5 mt-2 pt-md-5 align-items-center justify-content-center">
                            <div class="col-md col-6 text-center mb-md-0 mb-3">
                                <a href="">
                                    <img src="{{asset('site/images/consulting-gig/client-1.png')}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-md col-6 text-center mb-md-0 mb-3">
                                <a href="">
                                    <img src="{{asset('site/images/consulting-gig/client-2.png')}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-md col-6 text-center">
                                <a href="">
                                    <img src="{{asset('site/images/consulting-gig/client-3.png')}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-md col-6 text-center">
                                <a href="">
                                    <img src="{{asset('site/images/consulting-gig/client-4.png')}}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 d-md-block d-none   col-sm-9 col-11 mx-auto">
                    <div class="hero-body pb-0 pr-md-2 pr-3">
                        <div class="img-dec-1">
                            <div class="img-2 position-absolute">
                                <img src="{{asset('site/images/consulting-gig/hero-3.png')}}" class="wow animate__zoomIn" data-wow-duration=".7s" data-wow-delay="1s" class="img-fluid" alt="">
                            </div>
                            <div class="img-1 position-absolute">
                                <img src="{{asset('site/images/consulting-gig/hero-2.png')}}" class="img-fluid wow animate__zoomIn" data-wow-duration="1.1s" data-wow-delay="1.3s" alt="">
                            </div>
                            <div class="img-3 position-absolute float-animation">
                                <img src="{{asset('site/images/consulting-gig/laptop.svg')}}" class="img-fluid wow animate__lightSpeedInRight" data-wow-duration=".3s" data-wow-delay=".8s" alt="">
                            </div>
                            <div class="img-4 position-absolute">
                                <img src="{{asset('site/images/consulting-gig/hero-4.png')}}" class="img-fluid wow animate__shakeX" data-wow-duration="1.1s" data-wow-delay="1.3s" alt="">
                            </div>
                        </div>
                        <div class="profile-img-2">
                            <div class="profile-img">
                                <img src="{{asset('site/images/consulting-gig/Person.svg')}}" class="position-relative img-responsive z-index1 obj-cover " alt="">
                            </div>
                        </div>

                        <div class="img-5 position-absolute">
                            <img src="{{asset('site/images/consulting-gig/hero-7.png')}}" class="img-fluid wow animate__zoomIn" data-wow-duration=".9s" data-wow-delay="1.1s" alt="">
                        </div>
                        <div class="img-6 position-absolute">
                            <img src="{{asset('site/images/consulting-gig/hero-1.png')}}" class="img-fluid wow animate__zoomIn" data-wow-duration=".5s" data-wow-delay=".9s" alt="">
                        </div>
                        <div class="img-7 position-absolute">
                            <img src="{{asset('site/images/consulting-gig/hero-6.png')}}" class="img-fluid wow animate__zoomIn" data-wow-duration="1s" data-wow-delay="1.2s" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ************************************** Client ************************* -->
    <section id="connect">
        <div class="container-fluid">
            <div class="col-md-11 mx-auto mt-9p">
                <div class="col text-center mt-md-3 mt-2 mb-md-5 mb-3">
                    <h1 class="font-norm-boldItalic f-50px text-secondary-green position-relative">
                        <span class="why"><img src="{{asset('site/images/consulting-gig/why.png')}}" class="img-fluid" alt=""></span> Join the PersonalSite Consulting Platform
                    </h1>
                    <p class="f-40px font-norm-regular text-dark-black text-uppercase mt-md-5 mt-3 pt-md-3">
                        90% Consultants Are Using
                    </p>
                    <h2 class="font-norm-ex-bold f-50px text-secondary-blue text-uppercase">
                        Same <span class="text-secondary-green">“</span>Old School<span class="text-secondary-green">”</span> Referral Marketing
                    </h2>
                    <h3 class="font-norm-bold f-40px text-secondary-blue text-uppercase position-relative">
                        <span class="and"><img src="{{asset('site/images/consulting-gig/and.png')}}" class="img-fluid" alt=""></span> They Never Get A Consistent Flow of Gigs
                    </h3>
                </div>
            </div>
            <div class="row align-items-center">
                <div class=" col-md-5 text-md-left text-center">
                    <div class="group-images">
                        <div class="img-item-1 position-absolute float-animation">
                            <img src="{{asset('site/images/consulting-gig/man-float.png')}}" class="img-fluid wow animate__fadeInUp" data-wow-duration="1.2s" data-wow-delay="1.4s" alt="">
                        </div>
                        <div class="img-item-2 position-absolute">
                            <img src="{{asset('site/images/consulting-gig/woman-float.png')}}" class="img-fluid wow animate__fadeInUp" data-wow-duration="1.4s" data-wow-delay="1.6s" alt="">
                        </div>
                        <img src="{{asset('site/images/consulting-gig/spin.png')}}" class="img-fluid  wow animate__fadeInUpBig" data-wow-duration="1s" data-wow-delay="1s" alt="">

                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <p class="font-norm-regular f-24 text-dark-black mb-md-0 mb-5 ">
                        Network, Network, Network and begging for referrals… Networking is great if you’re networking with people who can actually become a client. That’s not how most networking works though, is it? ⠀
                        <br><br> Most of the time it’s consultants looking for clients networking with other consultants looking for clients. A lot of people looking for clients, but nobody looking to buy. <br><br> Even if you network with the right people,
                        still it's not possible to meet enough prospects in person who can fill your pipeline.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- ************************************** Details ************************* -->
    <section id="gigs-details">
        <!-- info -->

        <div class="info">
            <div class="container-fluid hero-p-container-fluid">
                <h1 class="text-center text-white font-norms-italic f-46px">
                    You will always struggle with the consulting rollercoaster.<br> Networking and desperately looking for new gigs and when you get the project, you become super busy that it's impossible to network resulting in an unpredictable business.
                </h1>
            </div>
        </div>
        <!-- how to find -->
        <div class="how-to-find-info">
            <div class="container-fluid hero-p-container-fluid">
                <div class="row align-items-center">
                    <div class=" col-md-6 my-md-4 py-md-5 py-3">
                        <p class="font-norm-regular f-26px text-dark-black">
                            For far too, finding a consulting opportunity has been entirely based on word of mouth and who you know. PersonalSite has changed that. We are the same as headhunters working for you but in a digital, more efficient and cost-effective way.


                            <br><br> Our innovative digital format enables all professionals with valuable expertise to become consultants, even if they don't have previous consulting experience.

                            <br><br>Traditional marketing can’t keep up with the breakneck speed of change that has pushed the world off a cliff.

                            <br><br>
                            <div class="d-flex align-items-center">
                                <span class="text-secondary-green f-58px font-norm-boldItalic">
                                    NOTHING
                                </span>
                                <span class="f-26px font-norm-italic pl-2 lh-27">
                                    is the same anymore. <br> will ever be the same.
                                </span>
                            </div>
                        </p>
                    </div>
                    <div class="offset-md-1 col-md-5  my-md-4 py-md-5 py-3 d-md-block d-none">
                        <img src="{{asset('site/images/consulting-gig/illus.png')}}" class="img-fluid  " alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Grow your cosultancy -->
        <div class="grow-your-consultancy">
            <div class="container-fluid hero-p-container-fluid">
                <div class="text-center col-md-10 mx-auto">
                    <h1 class="text-dark-black text-uppercase font-norm-ex-bold f-72px">
                        Grow Your Consultancy Without Spending a Dime on Advertising!
                    </h1>
                </div>
                <div class="row">
                    <div class="connect-wrap pos-grow col-md-9">
                        <p class="font-poppins-mediumItalic mb-4 f-24 text-secondary-light">
                            Running ads and hiring a marketing agency is awesome if:
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-3">
                                <div class="pt-1">
                                    <i class="fas fa-check text-green f-32px ml-2"></i>
                                </div>
                                <div class="font-norm-regular f-32px ml-2">
                                    You Have The Budget⠀
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="pt-1">
                                    <i class="fas fa-check text-green  f-32px"></i>
                                </div>
                                <div class="font-norm-regular f-32px ml-2">
                                    You don’t mind building out an entire funnel, making tweaks, dealing with tech, suffering through troll comments, and running customer service support emails
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="ml-auto  mt-md-5 mt-2 pt-md-5 col-md-8">
                        <p class="font-norm-bold text-secondary-dark f-60px   text-md-right text-center     pt-5">
                            <span class="font-norm-regular"> For </span> 99% <span class="font-norm-regular"> of </span> client based businesses, <span class="font-norm-regular"> paid advertising is  </span> not recommended until <span class="font-norm-regular"> much later. </span>
                        </p>

                        <div class="group-images">
                            <div class="img-item-3 position-absolute">
                                <img src="{{asset('site/images/consulting-gig/img-shpe-3.png')}}" alt="">
                            </div>
                            <div class="img-item-4 position-absolute">
                                <img src="{{asset('site/images/consulting-gig/img-shpe-4.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************************** This is why ************************************** -->
    <section id="this_is_why" class="section-secondary-space">
        <div class="container-fluid hero-p-container-fluid">
            <div class="col-md-12 text-white">
                <div class="d-flex">
                    <div class="wrap-content w-50 w-md-100">
                        <h1 class="font-norm-ex-bold text-uppercase  f-72px mb-5">
                            This is why: ⠀
                        </h1>
                        <p>
                            We built a consulting directory where you just need to put your profile so businesses looking for help can instantly find you based on the services you offer. Just spend 10-15 minutes creating a profile and you are now searchable and ready to accept offers.
                            <br><br> Review the open consulting gigs and apply to the matching opportunities to boost your chances of getting hired faster. No monthly subscription and no bidding fees.
                        </p>
                        <ul class="list-unstyled mt-4">
                            <li class="d-flex mb-3">
                                <div class="pt-1">
                                    <i class="fas fa-check text-secondary-green"></i>
                                </div>
                                <div class="font-norm-regular  ml-4">
                                    It doesn't cost a thing.
                                </div>
                            </li>
                            <li class="d-flex mb-3">
                                <div class="pt-1">
                                    <i class="fas fa-check text-secondary-green  "></i>
                                </div>
                                <div class="font-norm-regular   ml-4">
                                    And it actually works.
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="pt-1 ">
                                    <i class="fas fa-check text-secondary-green  "></i>
                                </div>
                                <div class="font-norm-regular   ml-4">
                                    In fact, last year 1054 Consultants joined PersonalSite and they are finding Gigs without paid advertising!
                                </div>
                            </li>
                        </ul>
                        <div class="col mt-4 mt-md-5 mt-2 px-0">
                            <a href="" class="btn btn-pill btn-secondary-green text-white btn-green-size">Yes, I Want To Grow My Consultancy <i class="fas fa-chevron-right ml-1 btn-arrow text-white"></i></a>
                        </div>
                    </div>
                    <div class="wrap-Img  d-md-block d-none">
                        <img src="{{asset('site/images/consulting-gig/why-vector.png')}}" class="why-img" alt="">
                    </div>
                </div>
            </div>



            <!-- <div class="this_is_why_img d-md-block d-none w-80">
                    <img src="site/images/whyImg.png" width="100%" height="92%" alt="">
                </div> -->
            <!-- <div class="this_is_why_content why_shadow   text-white">
                    <h1 class="font-weight-bold  f-5vw mb-5">
                        This is why: ⠀
                    </h1>
                    <p class="font-poppins-medium f-24">
                        <span class="text-green"> A.</span> We built a consulting directory where you just need to put your profile so businesses looking for help can instantly find you based on the services you offer. Just spend 10-15 minutes creating
                        a profile and you are now searchable and ready to accept offers <br><br> And <br><br>
                        <span class="text-green">B.</span> Review the open consulting gigs and apply to the matching opportunities to boost your chances of getting hired faster. No monthly subscription and no bidding fees.
                    </p>
                    <ul class="why_point p-0 pl-3 mt-4 mb-5">
                        <li class="mb-3">
                            <p> It doesn't cost a thing.</p>
                        </li>
                        <li class="mb-3">
                            <p>
                                Its Fast
                            </p>
                        </li>
                        <li class="mb-3">
                            <p>And it actually works</p>
                        </li>
                        <li class="mb-3">
                            <p>
                                In fact, last year 1054 consultants joined PersonalSite and they are finding Gigs without paid advertising!
                            </p>
                        </li>
                    </ul>
                    <div class="col mt-4 px-0">
                        <a href="" class="btn btn-green text-white btn-green-size font-poppins-semibold f-24">Yes, I Want To Grow My Consultancy</a>
                    </div>
                </div> -->

        </div>

    </section>
    <!-- ********************************** Find Gigs content ************************************** -->

    <section id="bg-gigs">
        <div class="container-fluid hero-p-container-fluid">
            <div class="text-center col-md-10 mx-auto">
                <h1 class="f-52px font-norm-bold">
                    See How Easily You Can Find Gigs Without Spending Hours Searching Different Websites and Submitting Proposals!
                </h1>
                <div class="line mx-auto mb-md-5 mb-3"></div>

                <p class="mb-5">
                    PersonalSite is your one-stop shop for all sorts of Consulting Gigs! Our data mining experts daily scan the whole web and put all gigs in one place for you so you can conveniently find matching opportunities at one place without visiting multiple sources.
                </p>
                <p>
                    Even if you are a super busy consultant and don't have enough time searching for jobs and submitting proposals, you can just create a profile on PersonalSite (It takes less than 10-15 minutes) and businesses will be able to reach you directly without
                    you submitting proposals.
                </p>
            </div>
        </div>
    </section>
    <!-- ********************************** subscription ************************************** -->

    <section id="subscription-details">
        <div class="container-fluid hero-p-container-fluid ">
            <div class="row row-pos">

                <div class="col-md-9  text-center text-md-left  mx-auto mb-md-0    mx-auto">

                    <h1 class="f-74px font-norm-ex-bold text-white">
                        NO Monthly Subscriptions <br> and Even NO Credit Card is Required!
                    </h1>
                    <p class="f-22 font-norm-regular  mt-4 mb-2 text-white">
                        You take 100% of your first project, and later we only charge 5% of each transaction. You only pay if you get hired via PersonalSite otherwise, there is no obligation and no strings attached.
                    </p>

                </div>
                <div class="col-md-3 px-0 mx-auto text-center d-md-block d-none">
                    <div class=" h-100">
                        <img src="{{asset('site/images/consulting-gig/avoid.png')}}" class="d-block mx-auto" width="75%" alt="">
                    </div>
                </div>
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************************** Testimonial ************************************** -->
    <section id="sales-testimonial">
        <div class="container-fluid hero-p-container-fluid ">
            <div class="row">
                <h1 class="font-norm-bold text-center col-12 f-52px text-center mb-4 text-white">
                    See Why Consultants Are Raving About <br> PersonalSite Consulting Platform
                </h1>
            </div>
            <div class="sales-testimonial-slider ">
                <div class="slider slider-main">
                    <div>
                        <div class="wrap-slider media   align-items-center">
                            <div class="col-sm-2 col-4 img-order">
                                <img src="{{asset('site/images/consulting-gig/thumb-3.png')}}" alt="" class="rounded-circle img-fluid">
                            </div>
                            <div class="col-sm-10 col-10 text-white space-order">
                                <p class="reviews mb-2">
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                </p>
                                <p class="font-norms-light f-22">I was struggling financially and could not hire a marketing agency and invest in expensive marketing tools...</p>
                                <h2 class="font-norms-regular f-22 mt-2">
                                    Steven Crabbe
                                </h2>
                                <small class="font-poppins-medium">MANAGEMENT <span class="text-secondary-green">CONSULTANT</span></small>
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="wrap-slider media align-items-center">
                            <div class="col-sm-2 col-4 img-order">
                                <img src="{{asset('site/images/consulting-gig/thumb-3.png')}}" alt="" class="rounded-circle img-fluid">
                            </div>
                            <div class="col-sm-10 col-10 text-white space-order">
                                <p class="reviews mb-2">
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                </p>
                                <p class="font-norms-light f-22">I was struggling financially and could not hire a marketing agency and invest in expensive marketing tools...</p>
                                <h2 class="font-norms-regular f-22 mt-2">
                                    Steven Crabbe
                                </h2>
                                <small class="font-poppins-medium">MANAGEMENT <span class="text-secondary-green">CONSULTANT</span></small>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="wrap-slider media align-items-center">
                            <div class="col-sm-2 col-4 img-order">
                                <img src="{{asset('site/images/consulting-gig/thumb-3.png')}}" alt="" class="rounded-circle img-fluid">
                            </div>
                            <div class="col-sm-10 col-10 text-white space-order">
                                <p class="reviews mb-2">
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                </p>
                                <p class="font-norms-light f-22">I was struggling financially and could not hire a marketing agency and invest in expensive marketing tools...</p>
                                <h2 class="font-norms-regular f-22 mt-2">
                                    Steven Crabbe
                                </h2>
                                <small class="font-poppins-medium">MANAGEMENT <span class="text-secondary-green">CONSULTANT</span></small>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="wrap-slider media align-items-center">
                            <div class="col-sm-2 col-4 img-order">
                                <img src="{{asset('site/images/consulting-gig/thumb-3.png')}}" alt="" class="rounded-circle img-fluid">
                            </div>
                            <div class="col-sm-10 col-10 text-white space-order">
                                <p class="reviews mb-2">
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                    <i class="fas fa-star text-green f-18p"></i>
                                </p>
                                <p class="font-norms-light f-22">I was struggling financially and could not hire a marketing agency and invest in expensive marketing tools...</p>
                                <h2 class="font-norms-regular f-22 mt-2">
                                    Steven Crabbe
                                </h2>
                                <small class="font-poppins-medium">MANAGEMENT <span class="text-secondary-green">CONSULTANT</span></small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ********************************** Gigs ************************************** -->
    <section id="gigs" class="section-secondary-space">
        <div class="container-fluid hero-p-container-fluid ">

            <h1 class="font-poppins-bold f-78px col-md-8 ml-md-auto  text-right mb-5">
                Here’s just a mere Fraction of the <br> High Paying Gigs you’ll find on PersonalSite
            </h1>
            <div class="col-md-11 mx-auto pt-5">
                <div class="row">
                    <div class="col-md-6 gig-gap">
                        <div class="gigs-body bg-white h-100 shadow">
                            <h4>
                                <a class="text-dark-black f-26 font-norm-bold">SR COMPENSATION CONSULTANT</a>
                            </h4>
                            <div class="show-on-large hide-on-med-and-down mb-2">
                                <p class="">
                                    <span class="vertical-bar-style2 font-norm-medium f-20 text-secondary-green">W3global</span>
                                    <span class="font-norm-regular text-dark-black"> Texas City, TX 77590</span>
                                </p>
                            </div>
                            <div class="full-desc text-dark-black f-22 mt-4 font-m-bold font-montserrat">
                                FireEye Helix unifies the security operations platform by providing next-generation security incident and event management. The FireEye XDR platform provides native security protections for Endpoint, Network, Email, and Cloud with a focus on improving
                                organizations’ capabilities for controlling incidents from detection to response...
                            </div>
                            <div class="text-right col px-0 pos-gig-card-btn ">
                                <a href="" class="btn btn-secondary-green btn-green-size  text-white  ">Read More <i class="fas fa-chevron-right ml-1 btn-arrow text-white"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 gig-gap">
                        <div class="gigs-body bg-white h-100 shadow">
                            <h4>
                                <a class="text-dark-black f-26 font-norm-bold">SR COMPENSATION CONSULTANT</a>
                            </h4>
                            <div class="show-on-large hide-on-med-and-down mb-2">
                                <p class="">
                                    <span class="vertical-bar-style2 font-norm-medium f-20 text-secondary-green">W3global</span>
                                    <span class="font-norm-regular text-dark-black"> Texas City, TX 77590</span>
                                </p>
                            </div>
                            <div class="full-desc text-dark-black f-22 mt-4 font-m-bold font-montserrat">
                                FireEye Helix unifies the security operations platform by providing next-generation security incident and event management. The FireEye XDR platform provides native security protections for Endpoint, Network, Email, and Cloud with a focus on improving
                                organizations’ capabilities for controlling incidents from detection to response...
                            </div>
                            <div class="text-right col px-0 pos-gig-card-btn ">
                                <a href="" class="btn btn-secondary-green btn-green-size  text-white  ">Read More <i class="fas fa-chevron-right ml-1 btn-arrow text-white"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 gig-gap">
                        <div class="gigs-body bg-white h-100 shadow">
                            <h4>
                                <a class="text-dark-black f-26 font-norm-bold">SR COMPENSATION CONSULTANT</a>
                            </h4>
                            <div class="show-on-large hide-on-med-and-down mb-2">
                                <p class="">
                                    <span class="vertical-bar-style2 font-norm-medium f-20 text-secondary-green">W3global</span>
                                    <span class="font-norm-regular text-dark-black"> Texas City, TX 77590</span>
                                </p>
                            </div>
                            <div class="full-desc text-dark-black f-22 mt-4 font-m-bold font-montserrat">
                                FireEye Helix unifies the security operations platform by providing next-generation security incident and event management. The FireEye XDR platform provides native security protections for Endpoint, Network, Email, and Cloud with a focus on improving
                                organizations’ capabilities for controlling incidents from detection to response...
                            </div>
                            <div class="text-right col px-0 pos-gig-card-btn ">
                                <a href="" class="btn btn-secondary-green btn-green-size  text-white  ">Read More <i class="fas fa-chevron-right ml-1 btn-arrow text-white"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 gig-gap">
                        <div class="gigs-body bg-white h-100 shadow">
                            <h4>
                                <a class="text-dark-black f-26 font-norm-bold">SR COMPENSATION CONSULTANT</a>
                            </h4>
                            <div class="show-on-large hide-on-med-and-down mb-2">
                                <p class="">
                                    <span class="vertical-bar-style2 font-norm-medium f-20 text-secondary-green">W3global</span>
                                    <span class="font-norm-regular text-dark-black"> Texas City, TX 77590</span>
                                </p>
                            </div>
                            <div class="full-desc text-dark-black f-22 mt-4 font-m-bold font-montserrat">
                                FireEye Helix unifies the security operations platform by providing next-generation security incident and event management. The FireEye XDR platform provides native security protections for Endpoint, Network, Email, and Cloud with a focus on improving
                                organizations’ capabilities for controlling incidents from detection to response...
                            </div>
                            <div class="text-right col px-0 pos-gig-card-btn ">
                                <a href="" class="btn btn-secondary-green btn-green-size  text-white  ">Read More <i class="fas fa-chevron-right ml-1 btn-arrow text-white"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col text-center mt-5">
                        <button class="btn-secondary-blue text-uppercase btn-pill btn font-poppins-semibold f-26 text-white">Start Free Trial Now</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ********************************** How Its Work ************************************** -->
    <section id="how_its_work_sales">
        <div class="container">
            <div class="row">

                <div class="col-md-12  text-center">
                    <h1 class="font-norm-bold f-60px text-dark-black">
                        Want to know How it Works?
                    </h1>
                </div>
                <div class="col-md-12 text-center">
                    <p class="font-norms-italic f-32px">
                        Finding Consulting Gigs has never been easier...
                    </p>
                </div>
                <div class="timeline mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="timeline-container">
                                    <div class="timeline-continue">
                                        <div class="row timeline-left mb-80">
                                            <div class="col-md-6 d-md-none d-block">
                                                <p class="timeline-date">
                                                    <img src="{{asset('site/images/consulting-gig/step-1.png')}}" class="img-fluid" alt="">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="timeline-box">

                                                    <div class="timeline-text">
                                                        <h3>Create your Consulting Profile</h3>
                                                        <p>Your customizable profile showcases your expertise, interests, and qualifications. Build your brand as a consultant, and receive consulting inquiries</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6 d-md-block d-none">
                                                <p class="timeline-date">
                                                    <img src="{{asset('site/images/consulting-gig/step-1.png')}}" class="img-fluid" alt="">
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row timeline-right mb-80">
                                            <div class="col-md-6">
                                                <p class="timeline-date">
                                                    <img src="{{asset('site/images/consulting-gig/Gigs-01.png')}}" class="img-fluid" alt="">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="timeline-box">
                                                    <div class="timeline-text">
                                                        <h3>Browse open consulting opportunities</h3>
                                                        <p>If you are actively looking for new gigs, you can review open consulting opportunities, find the matching ones and submit your offer.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row timeline-left">
                                            <div class="col-md-6 d-md-none d-block">
                                                <p class="timeline-date">
                                                    <img src="{{asset('site/images/consulting-gig/Rating-01.png')}}" class="img-fluid" alt="">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="timeline-box">

                                                    <div class="timeline-text">
                                                        <h3>Create your Consulting Profile</h3>
                                                        <p>Your customizable profile showcases your expertise, interests, and qualifications. Build your brand as a consultant, and receive consulting inquiries</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6 d-md-block d-none">
                                                <p class="timeline-date">
                                                    <img src="{{asset('site/images/consulting-gig/Rating-01.png')}}" class="img-fluid" alt="">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ********************************** Stats ************************************** -->
    <section id="sales_stats">
        <div class="container-fluid hero-p-container-fluid">
            <div class="col-md-10 m-sm-136  text-center mx-auto text-white mb-5">
                <h1 class="font-norm-bold f-50px">
                    Changing The Lives Of Consultants
                </h1>
                <h3 class="font-norms-light f-30px mt-3">
                    Join the 1054 consultants who are actively using PersonalSite to easily get their services and their message out to the world!
                </h3>
            </div>

            <div class="col-md-8 mx-auto row">
                <div class="col-md-6 gap">
                    <div class="stats text-center">
                        <div class="number plus count-stats" data-count="1050">
                            0
                        </div>
                        <div class="lables">
                            Consultants
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gap">
                    <div class="stats text-center">
                        <div class="number plus  count-stats" data-count="57613">
                            0
                        </div>
                        <div class="lables">
                            Jobs Posted
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gap">
                    <div class="stats text-center">
                        <div class="number plus count-stats" data-count="1378">
                            0
                        </div>
                        <div class="lables">
                            Active Jobs
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gap">
                    <div class="stats text-center">
                        <div class="number dollar count-stats" data-count="155">
                            $0
                        </div>
                        <div class="lables">
                            Avg Per Hour
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ********************************** Bonus ************************************** -->
    <section id="sales_bonus">
        <div class="container-fluid hero-p-container-fluid">
            <div class="col-md-10 text-center mx-auto text-white mb-5">
                <h1>
                    Special Bonus Worth $200 If You Join Today!
                </h1>
                <p>
                    This week, we also give anyone who creates their consulting profile a Free Tailor Made Linkedin Cover that helps you stand out from the Crowd. We will design a beautiful LinkedIn cover for you to help you get a professional look for your Linkedin
                </p>
            </div>
        </div>
    </section>
    <!-- ********************************** Sales about ************************************** -->
    <section id="sales_about">
        <div class="container-fluid hero-p-container-fluid">
            <div class="about-bg">
                <div class="row">
                    <div class="col-md-5 text-md-left text-center">
                        <div class="bg-profile-detail-img">
                            <img src="{{asset('site/images/consulting-gig/mubasher.png')}}" class="" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="profile-details mt-5 ">
                            <div class="green-line mt-2"></div>
                            <h1>
                                Mubasher Hassan
                            </h1>
                            <p class="job-title">
                                CEO PersonalSite. <br><br>
                            </p>
                            <p class="about-detail">
                                In the past two years, 1054 consultants have joined PersonalSite to Find Gigs, and I want to invite you to join our consulting platform for free so you can find your first Consulting Gig for FREE.
                                <br><br> I know that you have difficulty finding enough projects and not getting a consistent flow of Gigs.
                                <br> <br> Most consultants rely on referrals that can never give you a consistent and predictable business.
                                <br> <br> That's why I want you to create your free account on PersonalSite, apply to the matching opportunities and find the Gigs without spending thousands of dollars on marketing. In fact, you take 100% of your first
                                project, and later we only charge 5% of each transaction. No monthly subscriptions and even no credit card is required.

                            </p>
                        </div>
                        <div class="social text-md-right text-center">
                            <a href="" class="a-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" class="a-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="a-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************************** Sales faq************************************** -->
    <section id="sales_faq">
        <div class="container-fluid hero-p-container-fluid">
            <div class="col-md-8 col-sm-10 text-center mx-auto text-dark mb-5">
                <h1 class="font-poppins-bold f-78px mb-5">
                    Frequently Asked Questions:
                </h1>
                <div id="faq">
                    <div class="accordion" id="accordionFAQ">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <button class="" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                              <span>
                                Question title?
                              </span>
                            </button>
                            </div>

                            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading2">
                                <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                              <span>
                                Question title?
                              </span>
                            </button>
                            </div>

                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading3">
                                <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                              <span>
                                Question title?
                              </span>
                            </button>
                            </div>

                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading4">
                                <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                              <span>
                                Question title?
                              </span>
                            </button>
                            </div>

                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading5">
                                <button class=" collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                              <span>
                                Question title?
                              </span>
                            </button>
                            </div>

                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    new WOW().init();
</script>
<script>
    $('.slider-main').slick({
        slidesToShow: 3,
        arrows: true,
        slidesToScroll: 1,
        vertical: true,
        autoplay: false,
        verticalSwiping: true,
        infinite: false,
    });
</script>

<script>
    var counted = 0;
    $(window).scroll(function() {

        var oTop = $('#sales_stats').offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
            $('.count-stats').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            counted = 1;
        }

    });
</script>
@endsection