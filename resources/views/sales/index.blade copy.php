@extends('layouts.site.app')
@section('styles')
    <title>PersonalSite - Home</title>
    
@endsection
@section('hurryup')
    <div class="header-news">
        <p class="font-poppins-mediumItalic f-20 text-white">HURRY! We only accept 100 qualified consultants every month as of {{Carbon\Carbon::now()->format('F j')}} only 11 slots left. </p>
    </div>
@endsection

@section('content')
<!-- **************************************  HERO INTRO ************************* -->
<section id="hero-Intro" class="ov-hide hero-area-intro">
    <div class="container-fluid  ">
        <div class="row align-items-center">

            <div class="col-md-6 bg-hero-left text-center text-md-left  mx-auto mb-md-1 mb-5  mx-auto">
                <div class="hero-body pl-md-5 pl-3">
                    <div>
                        <h1 class="f-74px font-poppins-bold text-white wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <span class="font-poppins-Light">Access</span> 1378+ open consulting gigs  <span class="font-poppins-Light"> & see which ones</span> match your experience.
                        </h1>
                        <p class="f-22 font-poppins-Light  mt-4 mb-2 text-white wow fadeInUp"  >
                            No Monthly Subscriptions and Even No Credit Card is Required!
                        </p>
                    </div>
                    <div class="wow fadeInLeft" >
                        <form action="{{route('sale.store')}}" method="POST" class="mt-4">
                            @csrf
                            <div class="form-group col-md-5 px-md-0 mb-3">
                                <select name="experience" class="form-control" id="exampleFormControlSelect1">
                                    <option selected disabled>Select Experience</option>
                                    <option>1 Year</option>
                                    <option>1-2 Years</option>
                                    <option>2-5 Years</option>
                                    <option>5+ Years</option>
                                </select>
                            </div>
                            <span class="text-danger">{{$errors->first('experience')}}</span>
                            <div class="form-group col-md-5 px-md-0">
                                <input type="text"  name="email" class="form-control" placeholder="Enter Your Email">
                            </div>
                            <span class="text-danger">{{$errors->first('email')}}</span>
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-primary btn-green btn-medium f-22 rounded-8rem sales-button">Find Gigs</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="col-md-6 d-md-block d-none   col-sm-9 col-11 mx-auto">
                <div class="hero-body pr-md-2 pr-3">
                    <div class="img-dec-1">
                        <div class="img-2 position-absolute">
                            <img src="{{ asset('site/images/hero-1.png') }}" class="img-fluid " alt="">
                        </div>
                        <div class="img-1 position-absolute">
                            <img src="{{ asset('site/images/hero-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="img-3 position-absolute">
                            <img src="{{ asset('site/images/hero-3.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="img-4 position-absolute">
                            <img src="{{ asset('site/images/hero-4.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="shadow-1 position-absolute">
                            <img src="{{ asset('site/images/hero-shadow-1.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="profile-img-2">
                        <div class="profile-img" style="visibility: visible; animation-duration: 1.2s; animation-delay: 1s; animation-name: fadeIn;">
                            <img src="{{ asset('site/images/woman.png') }}" class="position-relative img-responsive z-index1 obj-cover " alt="">
                        </div>
                    </div>

                    <div class="img-5 position-absolute">
                        <img src="{{ asset('site/images/hero-5.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="img-6 position-absolute">
                        <img src="{{ asset('site/images/hero-6.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="shadow-2 position-absolute">
                        <img src="{{ asset('site/images/hero-shadow-2.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- ************************************** Client ************************* -->

<section id="client" class="section-secondary-space">
    <div class="container">
        <div class="col-md-11 mx-auto">
            <div class="row my-md-5 my-2 align-items-center justify-content-center">
                <div class="col-md col-6 text-center wow animate__zoomIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <img src="{{ asset('site/images/client-1.png') }}" class="img-fluid filter-gray" alt="">
                </div>
                <div class="col-md col-6 text-center wow animate__zoomIn" data-wow-duration=".7s" data-wow-delay=".5s">
                    <img src="{{ asset('site/images/client-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md col-6 text-center wow animate__zoomIn" data-wow-duration=".9s" data-wow-delay=".6s">
                    <img src="{{ asset('site/images/client-3.png') }} " class="img-fluid" alt="">
                </div>
                <div class="col-md col-6 text-center  wow animate__zoomIn" data-wow-duration="1.1s" data-wow-delay=".7s">
                    <img src="{{ asset('site/images/client-4.png') }} " class="img-fluid" alt="">
                </div>
            </div>
            <div class="row my-5 align-items-center justify-content-center wow animate__flipInY" data-wow-duration="1.3s" data-wow-delay=".9s">
                <img src="{{ asset('site/images/glob.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col text-center">
                <p class="font-poppins-mediumItalic text-secondary-dark f-22 wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".7s">Why Join the PersonalSite Consulting Platform?</p>
                <h2 class="font-poppins-bold text-secondary-dark f-78px mt-2 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".9s">
                    <span class="font-poppins-Light"> 90% Consultants Are Using the </span> Same “Old School” Referral Marketing - <span class="font-poppins-Light">And they </span>Never Get A Consistent Flow of Gigs
                </h2>
            </div>
        </div>
    </div>
</section>
<!-- ************************************** Connect ************************* -->

<section id="connect" class="section-secondary-space">
    <div class="container-fluid hero-p-container-fluid">

        <div class="row align-items-center">
            <div class="col-md-5 ">
                <div class="line mb-4 wow animate__bounceInLeft"   data-wow-duration=".8s" data-wow-delay="1s"></div>
                <p class="font-poppins-Light f-24 text-secondary-light wow fadeInleft"   data-wow-duration=".5s" data-wow-delay=".8s">
                    Network, network, network and begging for referrals… <br><br> Most of the time it’s consultants looking for clients networking with other consultants looking for clients. A lot of people looking for clients, but nobody looking
                    to buy. <br><br> Even if you network with the right people, still it's not possible to meet enough prospects in person who can fill your pipeline.
                </p>
                ⠀
            </div>
            <div class="offset-md-1 col-md-6 wow fadeInRight" data-wow-duration=".6s" data-wow-delay=".9s">
                <img src="{{ asset('site/images/connect.png') }}" class="img-fluid  " alt="">
            </div>
        </div>

        <div class="col bg-shadow py-5">
            <p class="font-poppins-mediumItalic f-42 text-center my-5 wow fadeInUp"   data-wow-duration=".8s" data-wow-delay="1s">
                You will always struggle with the consulting rollercoaster. Networking and desperately looking for new gigs and when you get the project, you become super busy that it's impossible to network resulting in an unpredictable business.
            </p>
        </div>

        <div class="row align-items-center my-md-5 my-md-2">
            <div class="col-md-5 d-md-block d-none  wow bounceIn"   data-wow-duration=".6s" data-wow-delay="1s">
                <img src="{{ asset('site/images/consulting-animate.png') }}  " class="img-fluid  " alt="">
            </div>
            <div class=" col-md-6 secondary-border">
                <p class="font-poppins-Light f-24 text-secondary-light pl-5 wow fadeInRight"   data-wow-duration=".8s" data-wow-delay="1s">
                    For far too, finding a consulting opportunity has been entirely based on word of mouth and who you know. PersonalSite has changed that. We are the same as headhunters working for you but in a digital, more efficient and cost-effective way.

                    <br><br> Our innovative digital format enables all professionals with valuable expertise to become consultants, even if they don't have previous consulting experience.

                    <br><br>Traditional marketing can’t keep up with the breakneck speed of change that has pushed the world off a cliff.

                    <br><br>NOTHING is the same anymore. NOTHING will ever be the same.
                </p>
            </div>
        </div>

        <div class="row pt-5 align-items-center">
            <div class="col-md-6">
                <h1 class="font-poppins-bold f-78px mb-5 wow animate__lightSpeedInLeft"  data-wow-duration=".9s" data-wow-delay="1s">
                    Grow Your <br> Consultancy <br> Without Spending a Dime on Advertising!
                </h1>
            </div>
            <div class="col-md-6 d-md-block d-none">
                <div class="graph">
                    <img src="{{ asset('site/images/graph.png') }}" class="img-fluid graph-pos wow  animate__lightSpeedInRight"  data-wow-duration="6.s" data-wow-delay="1s" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="connect-wrap col-md-6">

                <div class="line mb-4 wow animate__bounceInLeft"   data-wow-duration=".8s" data-wow-delay=".9s"></div>
                <p class="font-poppins-mediumItalic mb-4 f-24 text-secondary-light wow fadeInUp"   data-wow-duration=".9s" data-wow-delay="1s">
                    Running ads and hiring a marketing agency is awesome if:
                </p>
                <ul class="list-unstyled wow fadeInUp"   data-wow-duration=".9s" data-wow-delay="1s">
                    <li class="d-flex mb-3">
                        <div class="pt-1 wow bounceIn"   data-wow-duration="2s" data-wow-delay="1.5s">
                            <i class="fas fa-check text-green f-32px ml-2"></i>
                        </div>
                        <div class="font-poppins-medium f-32px ml-2">
                            You Have The Budget⠀
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="pt-1  wow bounceIn"   data-wow-duration="2s" data-wow-delay="1.7s">
                            <i class="fas fa-check text-green  f-32px"></i>
                        </div>
                        <div class="font-poppins-medium f-32px ml-2">
                            You don’t mind building out an entire funnel, making tweaks, dealing with tech, suffering through troll comments, and running customer service support emails
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row align-items-center pt-md-5 mt-md-5 mt-md-2">
            <div class="col-md-5 ">
                <img src="{{ asset('site/images/svg.png') }}" class="img-fluid wow  animate__lightSpeedInLeft"  data-wow-duration="6.s" data-wow-delay="1s" alt="">
            </div>
            <div class="offset-md-1 col-md-6">
                <p class="font-poppins-bold text-secondary-dark f-78px   text-md-right text-center   pl-md-5  wow  animate__lightSpeedInRight"  data-wow-duration="8.s" data-wow-delay="1s">
                    <span class="font-poppins-Light"> For </span> 99% <span class="font-poppins-Light"> of </span> client based businesses, <span class="font-poppins-Light"> paid advertising is  </span> not recommended until <span class="font-poppins-Light"> much later. </span>
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ********************************** This is why ************************************** -->
<section id="this_is_why" class="section-secondary-space">
    <div class="container-fluid hero-p-container-fluid">
        <div class="d-flex">
            <div class="this_is_why_img d-md-block d-none w-80 wow fadeIn"  data-wow-duration=".6s" data-wow-delay="1s">
                <img src="{{ asset('site/images/whyImg.png') }}" width="100%" height="92%" alt="">
            </div>
            <div class="this_is_why_content why_shadow   text-white">
                <h1 class="font-weight-bold  f-5vw mb-5 wow animate__fadeInDown" data-wow-duration=".8s" data-wow-delay="1s">
                    This is why: ⠀
                </h1>
                <p class="font-poppins-medium f-24 wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1s">
                    <span class="text-green"> A.</span> We built a consulting directory where you just need to put your profile so businesses looking for help can instantly find you based on the services you offer. Just spend 10-15 minutes creating
                    a profile and you are now searchable and ready to accept offers <br><br> And <br><br>
                    <span class="text-green">B.</span> Review the open consulting gigs and apply to the matching opportunities to boost your chances of getting hired faster. No monthly subscription and no bidding fees.
                </p>
                <ul class="why_point p-0 pl-3 mt-4 mb-5  wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1s">
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
                <div class="col mt-4 px-0  wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1s">
                    <a href="" class="btn btn-green text-white btn-green-size font-poppins-semibold f-24">Yes, I Want To Grow My Consultancy</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ********************************** info ************************************** -->

<section id="info" class="section-secondary-space">
    <div class="container-fluid hero-p-container-fluid">
        <div class="info-body col-md-10 text-center mx-auto wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1s">
            <h1 class="f-78px text-center font-poppins-bold">
                See How Easily You Can Find Gigs Without Spending Hours Searching Different Websites and Submitting <br> Proposals…
            </h1>
            <p class="font-poppins-Light mt-4  f-24 text-secondary-light">
                PersonalSite is your one-stop shop for all sorts of Consulting Gigs! Our data mining experts daily scan the whole web and put all gigs in one place for you so you can
                <strong class="text-dark">conveniently find matching opportunities at one place without visiting multiple sources.</strong>
            </p>
            <p class="font-poppins-Light mt-4  f-24 text-secondary-light">
                Even if you are a super busy consultant and don't have enough time searching for jobs and submitting proposals, you can just create a profile on PersonalSite (It takes less than 10-15 minutes) and
                <strong class="text-dark"> businesses will be able to reach you directly without you
                    submitting proposals. </strong>
                </p>
            </div>
        </div>
    </section>
    <!-- ********************************** subscription ************************************** -->

    <section id="hero-Intro">
        <div class="container-fluid  ">
            <div class="row">

                <div class="col-md-6 px-0  text-center text-md-left  mx-auto mb-md-0    mx-auto">
                    <div class="pl-md-5 py-10p h-100 bg-theme  pl-3 wow fadeInLeft" data-wow-duration=".8s" data-wow-delay="1s">
                        <h1 class="f-74px font-poppins-bold text-white">
                            No Monthly Subscriptions And Even No Credit Card Is Required!
                        </h1>
                        <p class="f-22 font-poppins-Light  mt-4 mb-2 text-white">
                            You take 100% of your first project, and later we only charge 5% of each transaction. You only pay if you get hired via PersonalSite otherwise, there is no obligation and no strings attached.
                        </p>
                    </div>
                </div>
                <div class="col-md-6  bg-f7 px-0 mx-auto text-center">
                    <div class=" h-100 wow fadeInRight" data-wow-duration=".9s" data-wow-delay="1s">
                        <img src="{{ asset('site/images/avoid.png') }}" class="d-block mx-auto" width="75%" alt="">

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ********************************** Testimonial ************************************** -->
    <section id="sales-testimonial">
        <div class="container-fluid hero-p-container-fluid ">
            <div class="row">

                <h1 class="font-poppins-bold f-78px text-center mb-4 text-white wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1s">
                    See Why Consultants Are Raving About PersonalSite Consulting Platform:
                </h1>
                <div class="sales-testimonial-slider owl-carousel mt-5 px-4p wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1s">
                    <div>
                        <div class="card px-3 py-5 text-center">
                            <span class="quotes">
                                <i class="fas fa-quote-right"></i>
                            </span>
                            <img src="{{ asset('site/images/thumb-3.png')}}" class="mx-auto rounded-circle slider-img  mb-3" alt="">
                            <p class="card-text font-poppins-Light text-center text-secondary-light f-24">
                                I was struggling financially and could not hire a marketing agency and invest in expensive marketing tools. Mubasher provided me a free marketing
                            </p>
                            <p class="font-poppins-bold f-26 name mt-4 mb-0">
                                Steven Crabbe
                            </p>
                            <p class="categories">
                                MANAGEMENT <span class="text-green">CONSULTANT</span>
                            </p>
                            <p class="reviews mb-0">
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="card px-3 py-5 text-center">
                            <span class="quotes">
                                <i class="fas fa-quote-right"></i>
                            </span>
                            <img src="{{ asset('site/images/thumb-3.png')}}" class="mx-auto rounded-circle slider-img mb-3" alt="">
                            <p class="card-text font-poppins-Light text-center text-secondary-light f-24">
                                I was struggling financially and could not hire a marketing agency and invest in expensive marketing tools. Mubasher provided me a free marketing
                            </p>
                            <p class="font-poppins-bold f-26 name mt-4 mb-0">
                                Steven Crabbe
                            </p>
                            <p class="categories">
                                MANAGEMENT <span class="text-green">CONSULTANT</span>
                            </p>
                            <p class="reviews mb-0">
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="card px-3 py-5 text-center">
                            <span class="quotes">
                                <i class="fas fa-quote-right"></i>
                            </span>
                            <img src="{{ asset('site/images/thumb-3.png')}}" class="mx-auto rounded-circle slider-img mb-3" alt="">
                            <p class="card-text font-poppins-Light text-center text-secondary-light f-24">
                                I was struggling financially and could not hire a marketing agency and invest in expensive marketing tools. Mubasher provided me a free marketing
                            </p>
                            <p class="font-poppins-bold f-26 name mt-4 mb-0">
                                Steven Crabbe
                            </p>
                            <p class="categories">
                                MANAGEMENT <span class="text-green">CONSULTANT</span>
                            </p>
                            <p class="reviews mb-0">
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="card px-3 py-5 text-center">
                            <span class="quotes">
                                <i class="fas fa-quote-right"></i>
                            </span>
                            <img src="{{ asset('site/images/thumb-3.png')}}" class="mx-auto rounded-circle slider-img mb-3" alt="">
                            <p class="card-text font-poppins-Light text-center text-secondary-light f-24">
                                I was struggling financially and could not hire a marketing agency and invest in expensive marketing tools. Mubasher provided me a free marketing
                            </p>
                            <p class="font-poppins-bold f-26 name mt-4 mb-0">
                                Steven Crabbe
                            </p>
                            <p class="categories">
                                MANAGEMENT <span class="text-green">CONSULTANT</span>
                            </p>
                            <p class="reviews mb-0">
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                                <i class="fas fa-star text-green f-18p"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************************** Gigs ************************************** -->
    <section id="gigs" class="section-secondary-space">
        <div class="container-fluid hero-p-container-fluid ">

            <h1 class="font-poppins-bold f-78px col-md-10 mx-auto text-center mb-5 wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1s">
                Here’s Just a Mere Fraction of the High <br> Paying Gigs You’ll Find On Personalsite
            </h1>


            <div class="col-md-11 mx-auto mt-4">
                <div class="row wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1s">

                    <div class="col-md-6  gap ">
                        <div class="gigs-body bg-s-blue   ">
                            <h4>
                                <a class="text-white f-26 font-poppins-semibold">SR COMPENSATION CONSULTANT</a>
                            </h4>
                            <div class="show-on-large hide-on-med-and-down mb-2">
                                <p class="">
                                    <span class="vertical-bar font-poppins-semibold f-18p text-green">W3global</span>
                                    <span class="font-poppins-Light text-white"> Texas City, TX 77590</span>
                                </p>
                            </div>
                            <div class="full-desc text-white font-m-bold font-montserrat">
                                Start Date: ImmediatelyPossibility of RemoteMinimum years of experience required: 10 YrsInterview Mode: Phone + SkypeJD:10 Years SAP experienceS4HANA implementation experience on MDM and MDG .Should have hands on experience on Master data creation Material,
                                Vendor, Pricing, CustomerHands on exper ...
                            </div>
                        </div>
                        <div class="text-right col px-0">
                            <a href="" class="btn btn-green btn-green-size rounded-0 text-white f-22">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6  gap">
                        <div class="gigs-body bg-s-blue   ">
                            <h4>
                                <a class="text-white f-26 font-poppins-semibold">Associate Incident Response Consultant</a>
                            </h4>
                            <div class="show-on-large hide-on-med-and-down mb-2">
                                <p class="">
                                    <span class="vertical-bar font-poppins-semibold f-18p text-green">Fireeye, Inc.</span>
                                    <span class="font-poppins-Light text-white"> Chicago, IL, USA</span>
                                </p>
                            </div>
                            <div class="full-desc text-white font-m-bold font-montserrat">
                                About Liferay Liferay, Inc. is a uniquely profitable B2B enterprise software company with 1,000+ fiery-eyed employees all across Europe, the Americas, Middle East, and Asia. As the leading provider of enterprise open source techn...
                            </div>
                        </div>
                        <div class="text-right col px-0">
                            <a href="" class="btn btn-green btn-green-size rounded-0 text-white f-22">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>

                    <div class="col-md-6 gap">
                        <div class="gigs-body bg-s-blue">
                            <h4>
                                <a class="text-white f-26 font-poppins-semibold">Sr. Software Consultant</a>
                            </h4>
                            <div class="show-on-large hide-on-med-and-down mb-2">
                                <p class="">
                                    <span class="vertical-bar font-poppins-semibold f-18p text-green">W3global</span>
                                    <span class="font-poppins-Light text-white">  Salem, Oregon</span>
                                </p>
                            </div>
                            <div class="full-desc text-white font-m-bold font-montserrat">
                                About WSDOT Washington State Department of Transportation (WSDOT) is the steward of an integrated, multimodal transportation system that helps to ensure people and goods move safely and efficiently throughout the state. In addition to building, maintaining,
                                and operating t ...
                            </div>
                        </div>
                        <div class="text-right col px-0">
                            <a href="" class="btn btn-green btn-green-size rounded-0 text-white f-22">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>

                    </div>

                    <div class="col-md-6 gap">
                        <div class="gigs-body bg-s-blue">
                            <h4>
                                <a class="text-white f-26 font-poppins-semibold">Associate Incident Response Consultant</a>
                            </h4>
                            <div class="show-on-large hide-on-med-and-down mb-2">
                                <p class="">
                                    <span class="vertical-bar font-poppins-semibold f-18p text-green">Liferay</span>
                                    <span class="font-poppins-Light text-white">  Texas City, TX 77590</span>
                                </p>
                            </div>
                            <div class="full-desc text-white font-m-bold font-montserrat">
                                FireEye is the leader in intelligence-led security-as-a-service. Working as a seamless, scalable extension of customer security operations, FireEye offers a single platform that blends innovative security technologies, nation-state grade threat intelligence,
                                and world-renowned Mandiant® consu ...
                            </div>
                        </div>
                        <div class="text-right col px-0">
                            <a href="" class="btn btn-green btn-green-size rounded-0 text-white f-22">Read More <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>

                    </div>

                    <div class="col text-center mt-5 wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1s">
                        <button class="btn-linear btn font-poppins-semibold f-26 text-white">Start Free Trial Now</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ********************************** How Its Work ************************************** -->

    <section id="sales_how_its_work" class="section-secondary-space">
        <div class="container-fluid hero-p-container-fluid">
            <div class="col-md-10 text-center mx-auto wow fadeInUp" data-wow-duration=".6s" data-wow-delay="1s">
                <h1 class="font-poppins-bold f-78px">
                    Want to Know How It works?
                </h1>
                <h3 class="text-secondary-light font-poppins-mediumItalic  f-28">
                    Finding Consulting Gigs has never been easier.
                </h3>
            </div>
            <div class="step-how-works  text-center col-md-10 mt-4 mx-auto">
                <h1 class="font-poppins-bold f-42px mb-4 wow bounceIn" data-wow-duration=".8s" data-wow-delay="1s">
                    Here's how it works
                </h1>
                <div class="step-point wow fadeInUp" data-wow-duration=".6s" data-wow-delay="1s">
                    <h3>
                        <span class="bullet"> </span> Create your Consulting Profile
                    </h3>
                    <p>
                        Your customizable profile showcases your expertise, interests, and qualifications. Build your brand as a consultant, and receive consulting inquiries
                    </p>
                </div>
                <div class="step-point wow fadeInUp" data-wow-duration=".7s" data-wow-delay="1s">
                    <h3>
                        <span class="bullet"> </span> Browse open consulting opportunities
                    </h3>
                    <p>
                        If you are actively looking for new gigs, you can review open consulting opportunities, find the matching ones and submit your offer.
                    </p>
                </div>
                <div class="step-point wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1s">
                    <h3>
                        <span class="bullet"> </span> Find Your First Project and Keep Growing
                    </h3>
                    <p>
                        Consulting Projects on your schedule. Give feedback directly to the Founder and CEOs while showcasing your knowledge and adding consulting work to your resume.
                    </p>
                </div>
                <div class="col text-center mt-5 pt-3 wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1s">
                    <button class="btn-linear btn font-poppins-semibold f-26 text-white">Create Your Free Profile</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ********************************** Stats ************************************** -->
    <section id="sales_stats">
        <div class="container-fluid hero-p-container-fluid">
            <div class="col-md-10 m-sm-136  text-center mx-auto text-white mb-5 ">
                <h1 class="font-poppins-bold f-78px">
                    Changing The Lives Of Consultants
                </h1>
                <h3 class="font-poppins-mediumItalic  f-28">
                    Join the 1054 consultants who are actively using PersonalSite to easily get their services and their message out to the world!
                </h3>
            </div>

            <div class="col-md-8 mx-auto row">
                <div class="col-md-6 gap">
                    <div class="stats text-center ">
                        <div class="number  count-stats" data-count="1050">
                            0
                        </div>
                        <div class="lables">
                            Consultants
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gap">
                    <div class="stats text-center"  >
                        <div class="number count-stats" data-count="57613">
                            0
                        </div>
                        <div class="lables">
                            Jobs Posted
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gap">
                    <div class="stats text-center"  >
                        <div class="number count-stats" data-count="1378">
                            0
                        </div>
                        <div class="lables">
                            Active Jobs
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gap">
                    <div class="stats text-center"  >
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
            <div class="col-md-10 text-center mx-auto text-white mb-5  wow fadeInUp" data-wow-duration=".7s" data-wow-delay="1s">
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
    <section id="sales_about" class="section-secondary-space">
        <div class="container-fluid hero-p-container-fluid">
            <div class="about-bg  wow fadeInUp" data-wow-duration=".7s" data-wow-delay="1s">
                <div class="sales-about-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="bg-profile-detail-img">
                                    <img src="{{ asset('site/images/profile-detail-img.png')}}" alt="">
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
                                        <br> <br> That's why I want you to create your free account on PersonalSite, apply to the matching opportunities and find the Gigs without spending thousands of dollars on marketing. In fact, you take 100% of your
                                        first project, and later we only charge 5% of each transaction. No monthly subscriptions and even no credit card is required.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="bg-profile-detail-img">
                                    <img src="{{ asset('site/images/profile-detail-img.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 ">
                                <div class="profile-details mt-md-5 mt-1 text-md-left text-center ">
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
                                        <br> <br> That's why I want you to create your free account on PersonalSite, apply to the matching opportunities and find the Gigs without spending thousands of dollars on marketing. In fact, you take 100% of your
                                        first project, and later we only charge 5% of each transaction. No monthly subscriptions and even no credit card is required.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="bg-profile-detail-img">
                                    <img src="{{ asset('site/images/profile-detail-img.png')}}" alt="">
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
                                        <br> <br> That's why I want you to create your free account on PersonalSite, apply to the matching opportunities and find the Gigs without spending thousands of dollars on marketing. In fact, you take 100% of your
                                        first project, and later we only charge 5% of each transaction. No monthly subscriptions and even no credit card is required.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="bg-profile-detail-img">
                                    <img src="{{ asset('site/images/profile-detail-img.png')}}" alt="">
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
                                        <br> <br> That's why I want you to create your free account on PersonalSite, apply to the matching opportunities and find the Gigs without spending thousands of dollars on marketing. In fact, you take 100% of your
                                        first project, and later we only charge 5% of each transaction. No monthly subscriptions and even no credit card is required.

                                    </p>
                                </div>
                            </div>
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
                <div class="shaapes-faq d-sm-block d-none">
                    <img src="{{ asset('site/images/shp-11.png')}}" class="shp-1 wow fadeInLeft"   data-wow-duration=".6s" data-wow-delay="1s" alt="">
                    <img src="{{ asset('site/images/shp-2.png')}}" class="shp-2 wow fadeInRight"  data-wow-duration=".8s" data-wow-delay="1s" alt="">
                </div>
                <h1 class="font-poppins-bold f-78px mb-5 wow fadeInUp"  data-wow-duration=".9s" data-wow-delay="1s">
                    Frequently Asked Questions:
                </h1>

                <div class="wow fadeInUp"  data-wow-duration=".9s" data-wow-delay="1s">
                       <div id="faq">
                    <div class="accordion" id="accordionFAQ">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <span>
                                        Question title?
                                    </span>
                                </button>
                            </div>

                            <div id="" class="collapse show" aria-labelledby="heading1" data-parent="#accordionFAQ">
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
        </div>
    </section>

    @section('scripts')
    <script>
        $(document).ready(function() {
            $(".sales-testimonial-slider").owlCarousel({
                loop: true,
                margin: 100,
                nav: true,
                navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2,
                        margin: 50,
                    },
                    1000: {
                        items: 3,
                        margin: 80,
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".sales-about-slider").owlCarousel({

                loop: true,
                nav: true,
                items: 1,
                dots: false,
                navText: [
                '<i class="fas fa-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
                ],

            });
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

    @endsection
