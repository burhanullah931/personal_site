@extends('layouts.site.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css">

@endsection
@section('content')

<!-- **************************************  HERO INTRO ************************* -->
<section id="hero-Intro" class="ov-hide bg-second-step-hero">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6  text-center text-md-left  mb-md-1 mb-5">
                <div class="hero-body pl-md-5 pl-3">
                    <img src="{{ asset('site/images/consulting-gig/white-logo.png') }}"
                        class="img-fluid mb-5" alt="">
                    <h3 class="font-poppins-bold text-white f-60">
                        “<span class="text-uppercase">One Last Step</span> to Access
                    </h3>
                    <h1 class="f-74px font-norm-bold text-white text-uppercase">
                        High Paying Gigs
                    </h1>
                    <h4 class="font-norm-ex-bold text-white f-40">
                        Find Your Dream Clients and Grow Your <br> Consultancy”
                    </h4>
                    <p class="f-22 font-norms-mediumItalic text-secondary-green  mt-4 mb-2">
                        No Monthly Subscriptions and Even No Credit Card is Required!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ************************************** Client ************************* -->
<section id="company" class="section-secondary-space second-client-bg">
    <div class="container-fluid hero-p-container-fluid">
        <div class="col-md-11 mx-auto">
            <div class="text-center ">
                <h2 class="font-poppins-bold text-dark-black f-40px">
                    THE GO-TO PLATFORM FOR TOP ORGANIZATIONS
                </h2>
                <p class="font-norm-regular text-dark-black f-40px">we’ve posted gigs from companies including</p>

            </div>
            <div class="row mt-md-5 mt-2 pt-md-5 align-items-center justify-content-center">
                <div class="col-md col-6 text-center mb-md-0 mb-3">
                    <a href="">
                        <img src="{{ asset('site/images/consulting-gig/Google-Logo.wine.png') }}"
                            class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-md col-6 text-center mb-md-0 mb-3">
                    <a href="">
                        <img src="{{ asset('site/images/consulting-gig/Amazon_logo.png') }}"
                            class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-md col-6 text-center">
                    <a href="">
                        <img src="{{ asset('site/images/consulting-gig/Microsoft-Logo.wine.png') }}"
                            class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-md col-6 text-center">
                    <a href="">
                        <img src="{{ asset('site/images/consulting-gig/Walmart-Logo.wine.png') }}"
                            class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ************************************** Connect ************************* -->
<section id="consultant-cards">
    <div class="container-fluid hero-p-container-fluid">
        <div class="text-center ">
            <h2 class="font-norm-bold text-dark-black f-46px text-capitalize">
                Tell The World About Your Expertise So Businesses <br> Looking For Help Can Reach You Directly
            </h2>
            <p class="font-norms-mediumItalic text-secondary-blue f-26px mt-2">You Will Get Invitations For High Paying
                Gigs Based On Your Expertise</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12  position-relative">
                <div class="card-1 position-relative">
                    <img src="{{ asset('site/images/consulting-gig/card-1.png') }}"
                        class="img-fluid" alt="">
                </div>
                <div class="card-2 position-relative">
                    <img src="{{ asset('site/images/consulting-gig/card-2.png') }}"
                        class="img-fluid" alt="">
                </div>
                <div class="card-3 position-relative">
                    <img src="{{ asset('site/images/consulting-gig/card-3.png') }}"
                        class="img-fluid" alt="">
                </div>
                <div class="card-4 position-relative">
                    <img src="{{ asset('site/images/consulting-gig/card-4.png') }}"
                        class="img-fluid" alt="">
                </div>
                <div class="card-5 position-absolute">
                    <img src="{{ asset('site/images/consulting-gig/card-5.png') }}"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ********************************** guide /story ************************************** -->
<section id="guide">
    <div class="container-fluid hero-p-container-fluid ">
        <h1 class="font-norm-bold f-52px text-center mb-md-5 mb-2 text-white">
            Imagine you wake up in the morning and find <br> an Invitation Email for a High Paying Gig
        </h1>
        <div class="row pt-md-5">
            <div class="col-md-8">
                <p> <span class="font-norm-regular">Success Story:</span> <span class="font-norms-medium f-28">Brett
                        Walker</span> </p>
                <p>
                    Brett spent 13 years in the corporate world as a Marketing Executive, before he started his journey
                    as an independent consultant. His biggest fear was losing the security of working for a big company.
                    After all, the corporation provided 6 figures salary
                    and other benefits. If he went out on his own, would he be able to “find enough clients to enjoy
                    even the same benefits”? One day during his lunch break in the office, Brett got an invitation and
                    introductory email from PersonalSite,
                    he thought to check it out after all it’s a free platform. He created his free consulting profile on
                    PersonalSite, added his skills and professional experience. Here’s an example of the success Brett
                    has had after creating his
                    consulting profile on PersonalSite.
                    <br><br> One day during his lunch break in the office, Brett got an invitation and introductory
                    email from PersonalSite, he thought to check it out after all it’s a free platform. He created his
                    free consulting profile on PersonalSite,
                    added his skills and professional experience. <br><br> Here’s an example of the success Brett has
                    had after creating his consulting profile on PersonalSite.

                </p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('site/images/consulting-gig/actor.png') }}" class="img-fluid"
                    alt="">
            </div>
            <div class="col-md-12 mt-5">
                <p>
                    “After 3 weeks of joining the platform, I got an invitation for a consulting project, I almost
                    forgot about PersonalSite since I never logged IN after creating my free account. I had no idea how
                    to do a pitch or anything. That forced me to initiate the
                    conversation and learn. <br><br> I accepted the project to get some credibility, although quite
                    frankly, it was a small one time Gig. I delivered the projects, everything went smooth. After the
                    first project
                    I was actively searching and applying for Gigs on PersonalSite, Within 6 months I got 4 retainers
                    paying me more than my full time job. in June 2021, I resigned from my 9-5 job as I found there is
                    way more security and freedom
                    in betting on yourself than betting on someone else. Even if that someone else is a big, safe
                    corporation.”
                    <br><br> WOW, Brett has a great story. So you see, PersonalSite is not only a platform where you can
                    search and apply for consulting jobs, but also a great source to market your services on the
                    consulting marketplace where businesses
                    can hire your directly based on your skills and expertise even if you are not applying for the jobs.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ********************************** guide /story ************************************** -->
<section id="grow-steps" class="section-secondary-space">
    <div class="container-fluid hero-p-container-fluid ">

        <div class="col-md-12 text-right">
            <h1 class="font-norm-bold f-60px text-right mb-1 text-uppercase text-secondary-green">
                Grow Your Consultancy Now!
            </h1>
            <p class="font-norms-mediumItalic f-28 text-dark-black">
                You are just One Step Away from creating your <br> Free Consulting Profile
            </p>
        </div>

        <h2 class="text-secondary-blue f-60px font-norm-bold mb-5">
            Here's How It Works
        </h2>
        <div class="row-wrap">
            <div class="col-md-6">
                <div class="steps d-flex">
                    <div class="count  mr-2">1.</div>
                    <div class="w-100">
                        <div class="step-card bg-white w-100 d-flex align-items-center">
                            <span class="w-30">
                                <img src="{{ asset('site/images/consulting-gig/steps-work-1.png') }}"
                                    class="img-fluid" alt="">
                            </span>
                            <span class="content  w-70 font-norms-medium f-28">
                                <p> Complete the Form Below</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="steps d-flex">
                    <div class="count  mr-2">2.</div>
                    <div class="w-100">
                        <div class="step-card bg-white w-100 d-flex align-items-center">
                            <span class="w-30">
                                <img src="{{ asset('site/images/consulting-gig/step-work-2.png') }}"
                                    class="img-fluid" alt="">
                            </span>
                            <span class="content w-70 font-norms-medium f-28">
                                <p> We will review and approve your account if you provide complete information.</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6  ml-auto">
                <div class="steps d-flex">
                    <div class="count  mr-2">3.</div>
                    <div class="w-100">
                        <div class="step-card bg-white w-100 d-flex align-items-center">
                            <span class="w-30">
                                <img src="{{ asset('site/images/consulting-gig/step-work-3.png') }}"
                                    class="img-fluid" alt="">
                            </span>
                            <span class="content w-70 font-norms-medium f-28">
                                <p>Once approved for our consulting
                                    marketplace, businesses can reach you and hire you to solve their challenges.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- **********************************Profile Form************************************** -->
<section id="profile-Form">
    <div class="container-fluid hero-p-container-fluid">
        <h1 class="font-norms-medium f-40px text-white  text-center col-md-9 mx-auto">
            Update Your Profile With Your Complete Information, We Only Approve Qualified Consultants On The Personal
            Site Consulting Marketplace
        </h1>
        <div class="card">
            <form action="{{route('sale.screen2.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <div class="col-md-12">
                    <div class="upload-user-profile">
                        <div class="circle upload-button mx-auto">
                            <!-- User Profile Image -->
                            <img class="profile-pic"
                                src="{{ asset('site/images/consulting-gig/upload.png') }}">

                            <!-- Default Image -->
                            <i class="fa fa-user fa-5x"></i>
                            <span class="hover_overlay">
                                Change Image <i class="fas fa-camera ml-1"></i>
                            </span>
                        </div>

                        <input class="file-upload" type="file" name="image" accept="image/*" />


                        <h3 class="font-norm-bold text-secondary-blue text-center mt-3  mb-5  f-34">UPload Your Photo
                        </h3>
                    </div>


                </div>
                <h2 class="font-norm-bold text-dark-black f-46px  mb-3">Personal Info</h2>
                <div class="row mb-4">

                    <div class="form-group col-md-6">
                        <input type="text" name="first_name" class="form-control" id="first-name" placeholder="Jhon">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Doe">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="designation" class="form-control" id="last-name" placeholder="Designation">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="summary"  class="form-control" placeholder="Personal Summary" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>
                <h2 class="font-norm-bold text-dark-black f-46px  mb-3">Compensation</h2>
                <div class="row mb-4">

                    <div class="form-group col-md-6">
                        <select name="hourly" class="form-control" id="exampleFormControlSelect1">
                            <option selected="" disabled="">Hourly</option>
                            <option>Per Hour</option>
                            <option>Part Time</option>
                            <option>Full Time</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="rate" class="form-control" id="last-name" placeholder="Rate">
                    </div>
                </div>
                <h2 class="font-norm-bold text-dark-black f-46px  mb-3">Locattion</h2>
                <div class="row mb-4">

                    <div class="form-group col-md-6">
                        <input type="text" name="country" class="form-control" id="first-name" placeholder="Country">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="state" class="form-control" id="last-name" placeholder="State">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="city" class="form-control" id="last-name" placeholder="City">
                    </div>
                </div>
                <h2 class="font-norm-bold text-dark-black f-46px  mb-3">Skills</h2>
                <div class="row mb-4">
                    <div class="form-group col-12">
                        <input type="text" name="skill[]" name="input" class="form-control" placeholder="">
                    </div>
                </div>
                <h2 class="font-norm-bold text-dark-black f-46px  mb-3">Links</h2>
                <div class="row mb-4">

                    <div class="form-group col-md-12">
                        <input type="text" name="website_link" class="form-control" id="last-name" placeholder="Add your Website Link">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="linkedin" class="form-control" id="last-name"
                            placeholder="Add your LinkedIn Profile Link">
                    </div>
                </div>
                <div class="col text-center mt-5 pt-md-5">
                    <button
                        class="btn-secondary-blue text-uppercase btn-pill text-uppercase btn font-poppins-semibold f-26 text-white">Submit
                        and Access The Jobs</button>
                </div>
                <div class="col-12 text-center mt-3">
                    <div class="error danger font-norm-regular f-26px">
                        No, I don’t want to Get Invitations for Projects - I just want to Search & Apply for the Jobs
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>

<script>
    $(document).ready(function() {

        $('input[name="input"]').tagsinput({
            trimValue: true,
            confirmKeys: [13, 44, 32],
            focusClass: 'my-focus-class'
        });

        $('.bootstrap-tagsinput input').on('focus', function() {
            $(this).closest('.bootstrap-tagsinput').addClass('has-focus');
        }).on('blur', function() {
            $(this).closest('.bootstrap-tagsinput').removeClass('has-focus');
        });

    });
</script>
<script>
    $(document).ready(function () {
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
    $(document).ready(function () {
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
    $(window).scroll(function () {

        var oTop = $('#sales_stats').offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
            $('.count-stats').each(function () {
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
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            counted = 1;
        }

    });

</script>
<script>
    $(document).ready(function () {


        var readURL = function (input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function () {
            readURL(this);
        });

        $(".upload-button").on('click', function () {
            $(".file-upload").click();
        });
    });

</script>
@endsection
