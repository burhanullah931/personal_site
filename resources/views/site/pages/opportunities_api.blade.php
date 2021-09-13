@extends('layouts.site.app')
@section('styles')
<title>Opportunities - Consultant Directories</title>
<style>
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    #loader {
        display: block;
        position: relative;
        left: 50%;
        top: 50%;
        width: 125px;
        height: 125px;
        margin: -75px 0 0 -75px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #1ca5f6;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }
    #loader:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #2667f8;
        -webkit-animation: spin 3s linear infinite;
        animation: spin 3s linear infinite;
    }
    #loader:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #2667f8;
        -webkit-animation: spin 1.5s linear infinite;
        animation: spin 1.5s linear infinite;
    }
    @-webkit-keyframes spin {
        0%   {
            -webkit-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    @keyframes spin {
        0%   {
            -webkit-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>
@endsection
@section('content')

<section id="opp-page">

    <div class="container">
        <div class="row">
            <div class="col-md-12 header-title">
                <h1 class="text-uppercase">Find Your Next Consulting Gig </h1>
                <p>From One-off Freelance Projects to long Term Contracts 
</p>
<a href="#"  class="btn btn-default">Get Started  <i class="fa fa-long-arrow-alt-right"></i></a>

                <p></p>
            </div>
        </div>
    </div>

</section>
<div id="preloader">
    <div id="loader"></div>
  </div>
<section class="section-feature" id="section-feature">
    <div class="container">
        <div class="row">
            <h1 class="text-center">How can we help?</h1>
            <div class="col-lg-6 py-50">
                <h2 class="SectionFeature-heading">What kind of work can I do?</h2>
                <p class="SectionFeature-body">
                You can find just about any job you can imagine. You can find a variety of consulting assignments that suit you on PersonalSite.com.
</p>
                    <p class="SectionFeature-body"> Just complete your profile and let us know your skill sets so we can match you to the right jobs</p>
                        <a href="#"  class="btn btn-default">Signup Now  <i class="fa fa-long-arrow-alt-right"></i></a>
              
            </div>
            <div class="col-lg-6">
                <img class="section-feature-image" width="100%" src="{{ asset('/site/images/jobs.png')}}">
            </div>
        </div>
    </div>
</section>
<section class="feature-icons-sections" id="feature-icons-sections" >
    <div class="container">
        <div class="SectionFeature-content SectionFeature-content--center">
            <div class="Grid Grid--horizontalCenter">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2 class="text-center">
                        Our job search can return a full range of results:
                    </h2>

                    <div class="row">
                        <div class="col-lg-3">
                            <figure class="PageHowItWorks-feature-figure">
                                <div class="PageHowItWorks-feature-imgContainer">
                                    <img class="section-figure-icon" src="{{ asset('/site/images/feature-jobs.svg')}}" alt="Small jobs, large jobs, anything in between">
                                </div>
                                <figcaption class="PageHowItWorks-feature-caption">
                                    Small jobs, large jobs, <br>anything in between                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-3">
                            <figure class="PageHowItWorks-feature-figure">
                                <div class="PageHowItWorks-feature-imgContainer">
                                    <img class="section-figure-icon" src="https://www.f-cdn.com/assets/img/how-it-works/features/feature-type-638ff46b.svg" alt="Jobs that are on fixed price, or hourly terms">
                                </div>
                                <figcaption class="PageHowItWorks-feature-caption">
                                    Fixed price or hourly projects                               </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-3">
                            <figure class="PageHowItWorks-feature-figure">
                                <div class="PageHowItWorks-feature-imgContainer">
                                    <img class="section-figure-icon" src="{{ asset('/site/images/feature-locale.svg')}}" alt="Jobs that are on fixed price, or hourly terms">
                                </div>
                                <figcaption class="PageHowItWorks-feature-caption">
                                    International and local jobs                              </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-3">
                            <figure class="PageHowItWorks-feature-figure">
                                <div class="PageHowItWorks-feature-imgContainer">
                                    <img class="section-figure-icon" src="https://www.f-cdn.com/assets/img/how-it-works/features/feature-requirements-7741d45d.svg" alt="Work that requires specific skill sets, costs, or scheduling requirements.">
                                </div>
                                <figcaption class="PageHowItWorks-feature-caption">
                                    Specific skills, price,<br> and schedule requirements                              </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="how-it-works-opp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img class="SectionFeature-figure-image PageHowItWorks-image" width="100%" src="{{ asset('/site/images/how-to-opp.png')}}" alt="How does it work?">
            </div>
            <div class="col-lg-6">
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
                            <span class="PageHowItWorks-howTo-title">Browse jobs that suit your skills, expertise, price, and schedule</span>
                            <div class="PageHowItWorks-howTo-desc">
                                We have jobs available for all skills. Maximize your job opportunities by optimizing your filters. Save your search and get alerted when relevant jobs are available.                           </div>
                        </div>
                    </li>

                    
                    <li class="PageHowItWorks-howTo-item">
                        <div class="PageHowItWorks-howTo-content">
                            <span class="PageHowItWorks-howTo-title">Write your best job application</span>
                            <div class="PageHowItWorks-howTo-desc">
                                Put your best foot forward and write the best pitch possible. Read the project and let the clients know you understand their brief. Tell them why you're the best person for this job. Writing a new brief for each project is more effective than using the same one!               </div>
                        </div>
                    </li>
                    <li class="PageHowItWorks-howTo-item">
                        <div class="PageHowItWorks-howTo-content">
                            <span class="PageHowItWorks-howTo-title">Get awarded and earn</span>
                            <div class="PageHowItWorks-howTo-desc">
                                Get ready to work once you get hired. Deliver high quality work and earn the agreed amount.</div>
                        </div>
                    </li>
                </ol>
                <a href="#"  class="btn btn-default">Get Started <i class="fa fa-long-arrow-alt-right"></i></a>
              
                
            </div>
        </div>
    </div>
</section>
<section id="opp-search">
    <div class="linkup-off-white search-bar pin-top" style="top: 0px;">
        <div class="container">
            <div class="col-lg-10 col-lg-offset-1">
                <form method="GET" action="/search/results">
                        <div class="row">
                            <div class="col-lg-2">
                                <h3>Search Jobs</h3>
                            </div>
                        
                            <div class="col-lg-4">
                                <div class="relative-pos keyword-desktop-container">
                                    <input class="form-input search-bar__keyword" type="text" id="keyword" name="keyword" placeholder="Job title, company, or keywords" value="" autocomplete="off">
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 600px; z-index: 9999;"></div>
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 600px; z-index: 9999;"></div>
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 600px; z-index: 9999;"></div>
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 600px; z-index: 9999;"></div>
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 600px; z-index: 9999;"></div>
                                </div>
                                <label class="search-bar__label" for="keyword">Job title, company, or keywords</label>
                            </div>
                            <div class="col-lg-4">
                                <div class="relative-pos location-desktop-container">
                                    <input class="form-input search-bar__location" type="text" id="location" name="location" placeholder="City, state, or zip" value="" autocomplete="off">
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 400px; z-index: 9999;"></div>
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 400px; z-index: 9999;"></div>
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 400px; z-index: 9999;"></div>
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 400px; z-index: 9999;"></div>
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 400px; z-index: 9999;"></div>
                                </div>
                                <label class="search-bar__label" for="location">City, state, or zip</label>
                            </div>

                            <div class="col-lg-2">
                                <button class="search_oppotunities  btn btn-primary no-margin" data-value="1" type="button">Search Jobs</button>
                            </div>
                        </div>
                
                </div>

            </div>

        </div>
    </section>
    <section id="opp-jobs">
        <div class="container m-t-30">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="border-right">

                            <div class="m-b-20 filter-dropdown">
                                <h4>Sort By</h4>
                                <div class="input-field">
                                    <div class="select-wrapper form-select__email url-select">
                                        <select class="form-select__email url-select initialized" name="sort_by" id="sort_by">
                                            <option value="r">Most Recent</option>
                                            <option selected="" value="d">Best Match</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="m-b-20 filter-dropdown">
                                <h4>Located Within</h4>
                                <div class="input-field">
                                    <div class="select-wrapper form-select__email url-select">
                                        <select class="form-select__email url-select initialized" name="distance" id="distance">
                                            <option selected="">Anywhere</option>
                                            <option value="e">Exact location only</option>
                                            <option value="10">10 miles</option>
                                            <option value="15">15 miles</option>
                                            <option selected="" value="25">25 miles</option>
                                            <option value="50">50 miles</option>
                                            <option value="100">100 miles</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="m-b-20 filter-dropdown">
                                <h4>Posted</h4>
                                <div class="input-field">
                                    <div class="select-wrapper form-select__email url-select">
                                        <select class="form-select__email url-select initialized" name="posted_in" id="posted_in">
                                            <option selected="" value="any">Anytime</option>
                                            <option value="1d">Within 1 day</option>
                                            <option value="7d">Within 7 days</option>
                                            <option value="14d">Within 14 days</option>
                                            <option value="30d">Within 30 days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="advanced-options-container ">
                                
                                    

                                    <div class="m-b-20 filter-dropdown">
                                        <h4>ALL of these words</h4>
                                        <div class="input-field">
                                            <input class="form-input"  name="keyword_included" id="keyword_included" placeholder="Included keywords" value="">
                                        </div>
                                    </div>

                                    <div class="m-b-20 filter-dropdown">
                                        <h4>NONE of these words</h4>
                                        <div class="input-field">
                                            <input class="form-input" name="keyword_excluded" id="keyword_excluded" placeholder="Excluded keywords" value="">
                                        </div>
                                    </div>

                                    <div class="m-b-20 filter-dropdown">
                                        <h4>These words in the TITLE</h4>
                                        <div class="input-field">
                                            <input class="form-input" name="title" id="title" placeholder="Included in title" value="">
                                        </div>
                                    </div>

                                    <div class="m-b-20 filter-dropdown">
                                        <h4>From this COMPANY</h4>
                                        <div class="input-field">
                                            <input class="form-input" name="company" id="company" placeholder="Company name" value="" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="filter-dropdown">
                                        <div class="input-field">
                                            <button type="button" class="search_oppotunities btn btn-primary" data-value="1">Search Jobs</button>
                                        </div>
                                    </div>
                            </form>
                        </div>

                        <!-- <p class="advanced-filters-trigger center-align f-s-14">
                <a><span class="advanced-visibility  hidden">Show</span><span class="advanced-visibility ">Hide</span> Advanced Options</a><span id="sdexebrzvsyxtesrdudfudtucbasbcbbccrd"><a rel="file" style="display: none;" href="rezquvwdrrzzvyfqatyxvxbszttrwrx.html">xqttzadavcxcbszsqyautyfrbst</a></span>
            </p> -->

                    </div>
                </div>
                <div class="col s12 m9 col-lg-9">
                    <div class="row search-details">
                        <div class="col s12">
                            <h2>  Jobs</h2>
                            <span class="vertical-bar vertical-bar--disable-small" id="content_title"> 1-25 of more than 20,000 Jobs </span>
                            <div class="email-alert-container display-inline">
                                <div class="email-notification-text m-b-30-mobile">
                                    <a id="getEmailAlert">
                                        <span data-icon="" class="icon-email-notification-grey fas">&nbsp;</span>
                                        <span>Get notified</span>
                                    </a>of new jobs
                                </div>
                                <ul id="email-alert" class="display-inline hidden">
                                    <li>
                                        <div>
                                            <form id="topJobAlertForm">
                                                <input id="email" type="email" class="validate form-input" required="" placeholder="user@example.com">
                                                <button id="getAlertBtn" type="submit" class="btn btn-secondary">Get Alerts</button>
                                            </form>
                                            <ul id="jobAlertMessage" class="hidden">
                                                <li>
                                                    <div class="center-align">
                                                        <i class="material-icons">check</i>
                                                        <span>Success! Job Alert Saved</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="job_listing">
                        <div class="row job-listing">
                            <div class="col s12">
                                <h4><a target="_blank" href="http://www.linkup.com/job-redirect/dY_NbsMgEITfhUNOIQED_olk9UUioeXHDi3YCOMmUdV3L06i3HpZaWb3m9H-oM9ZSWfQCVFRt6ThjBO0RwFuUm22IEW46SlYEW8XjIww2o1ED7XMa9L2EVbW3za5wWnIbp5kvsdyiOkejQniRb5LLamEYU2LG95oTKkFrGowWFSCE2KZ6dSWvtgx2Ck_mYGDGkADrgcg_zNbxwWWSyE6bYQFxrjmjBBilGBMddBqpgztqCjXyRqXrM5yTb4Ql5zjcjofz8fr9XoYkr0H571NJrny2HLQc_hYc3j93Hs3fa1xtzmhBK2h11E_pIYQwY1Tr43UTi5ZQvYwZRhBvqjUewtm8PYm_SpLcoTpLp9NO2f6qm1rgcusWlxRUVFaNy1Hv38" class="non-organic-link search-result-link">CDL-A Company Truck Driver</a></h4>
                                <a class="modal-trigger" href="#createAccountPrompt">
                                    <span class="icon-save-job-inactive save-job right"></span>
                                </a>
                                <div class="show-on-large hide-on-med-and-down">
                                    <p class="f-s-14">
                                        <span class="vertical-bar semi-bold">Freymiller</span>
                                        <span class="semi-bold">Cumming, GA</span>
                                    </p>
                                </div>

                                <p>CDL-A COMPANY TRUCK DRIVER JOBS Newly Increased Pay And Top Miles…Find More At Freymiller! Get on board with a carrier that combines old-school trucking with modern respect! At Freymiller, we off</p>
                                <p class="job-footer f-s-14">
                                    <span>Sponsored</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    

                    <ul class="job-listing-pagination">
                        <div class="valign-wrapper" id="pagination">
                            {{-- <li class="disabled"><span>PREVIOUS</span></li> 
                             <li class="active"><a class="btn btn-secondary" href=""><strong>1</strong></a></li>
                            <li><a class="btn btn-secondary" href="/search/results?keyword=&amp;location=&amp;all=&amp;none=&amp;title_contains=&amp;company=&amp;company_ids=&amp;pageNum=2">2</a></li>
                            <li><a class="btn btn-secondary" href="/search/results?keyword=&amp;location=&amp;all=&amp;none=&amp;title_contains=&amp;company=&amp;company_ids=&amp;pageNum=3">3</a></li>
                            <li class="hide-on-med-and-down"><a class="btn btn-secondary" href="/search/results?keyword=&amp;location=&amp;all=&amp;none=&amp;title_contains=&amp;company=&amp;company_ids=&amp;pageNum=4">4</a></li>
                            <li class="hide-on-med-and-down"><a class="btn btn-secondary" href="/search/results?keyword=&amp;location=&amp;all=&amp;none=&amp;title_contains=&amp;company=&amp;company_ids=&amp;pageNum=5">5</a></li>
                            <li><a class="btn btn-primary hide-on-med-and-down" href="/search/results?keyword=&amp;location=&amp;all=&amp;none=&amp;title_contains=&amp;company=&amp;company_ids=&amp;pageNum=2"><span>NEXT</span></a></li> --}}
                        </div>
                    </ul>
                   

                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section id="opp-cta">
    <h1>So what are you waiting for?</h1>
    <br>
    <p>Search for the right job and write your best bid proposal now.</p>
    <a href="#" class="btn btn-default">Browse Jobs </a>

</section> -->

@endsection
@section('scripts')
    
<!-- <script>
    $( document ).ready(function() {
        $(document).ajaxStart(function(){
    $("#preloader").css("display", "block");
    $("#job_listing").css("display", "none");
    $("#pagination").css("display", "none");
  });
  $(document).ajaxComplete(function(){
    $("#preloader").css("display", "none");
    $("#job_listing").css("display", "block");
    $("#pagination").css("display", "block");
  });
        $(document).on("click",".search_oppotunities",function() {
            var keyword= $("#keyword").val();
            var location= $("#location").val();
            var sort_by= $("#sort_by").val();
            var distance= $("#distance").val();
            var posted_in= $("#posted_in").val();
            var keyword_included= $("#keyword_included").val();
            var keyword_excluded= $("#keyword_excluded").val();
            var title= $("#title").val();
            var company= $("#company").val();
            var page= $(this).attr("data-value")
            
                 $.ajaxSetup({
                                headers: {
                                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                         }
                            });
       
     
                 $.ajax({ 
                            url:'{{ route('get.jobs') }}',
                            method: 'POST',
                            data: {        
                                    "_token": "{{ csrf_token() }}",
                                    keyword:keyword,
                                    location:location,
                                    sort_by:sort_by,
                                    distance:distance,
                                    posted_in:posted_in,
                                    keyword_included:keyword_included,
                                    keyword_excluded:keyword_excluded,
                                    title:title,
                                    company:company,
                                    page:page,
                                    

                                    },
                            dataType: 'json',
                                   
                            success:function(data) 
                            {
                                    
                                // $.each(data, function(key, value){
                                   var total_pages= data.result_info.total_pages;
                                   $('#pagination').empty();
                                   $('#job_listing').empty();
                                   $('#content_title').text(data.title);
                                   
                                   let current =parseInt(data.result_info.page);
                                   let total =parseInt(data.result_info.total_pages);
                                   console.log(current);
                                   console.log(total);
                                   let prev= current-1;
                                   let nxt= current+1;
                                   if(current == 1){
                                      
                                    $('#pagination').append('<li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+nxt+'" >NEXT</button></li>'); 
                                   }else if(current == total){
                                    $('#pagination').append('<li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+prev+'" >PREV</button></li>'); 
                                   }else{
                                    $('#pagination').append('<li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+prev+'" >PREV</button></li><li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+nxt+'" >NEXT</button></li>'); 
                                   }
                                //    for (i = 1; i <= total_pages; i++){ 
                                //         $('#pagination').append('<li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+i+'" ><strong>'+ i +'</strong></button></li>'); 
                                //    }
                                    $.each(data.jobs, function(key, value){
                                        
                                        let params = getUrlValues(value.job_title_link);
                                        $('#job_listing').append('<div class="row job-listing"><div class="col s12"><h4><a target="_blank"  @guest data-toggle="modal" data-target="#scaleModal" @else href="http://localhost:8000/opportunity/'+params+'"   @endguest class="non-organic-link search-result-link">'+ value.job_title +'</a></h4> <a class="modal-trigger" href="#createAccountPrompt"> <span class="icon-save-job-inactive save-job right"></span> </a><div class="show-on-large hide-on-med-and-down"><p class="f-s-14"> <span class="vertical-bar semi-bold">'+ value.job_company +'</span> <span class="semi-bold">'+ value.job_location +'</span></p></div><p>'+ value.job_description +'</p><p class="job-footer f-s-14"> <span></span></p></div></div>');
                                    
                                    });





                            }
                        });
     
                          
                 
     function getUrlValues(url)
     {
       let paramsArray = url.split("job/");
        paramsArray = paramsArray[1].split("/");
        let slug = paramsArray[1].split("?");
       return `${paramsArray[0]}/${slug[0]}`;
     }
            

            // console.log(keyword);
            // console.log(location);
            
        
});
});
</script>
<script>
    $( document ).ready(function() {
            var keyword= $("#keyword").val();
            var location= $("#location").val();
            var sort_by= $("#sort_by").val();
            var distance= $("#distance").val();
            var posted_in= $("#posted_in").val();
            var keyword_included= $("#keyword_included").val();
            var keyword_excluded= $("#keyword_excluded").val();
            var title= $("#title").val();
            var company= $("#company").val();
            var page= $(this).attr("data-value")
            
                 $.ajaxSetup({
                                headers: {
                                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                         }
                            });
     
                 $.ajax({ 
                            url:'{{ route('get.jobs') }}',
                            method: 'POST',
                            data: {        
                                    "_token": "{{ csrf_token() }}",
                                    keyword:keyword,
                                    location:location,
                                    sort_by:sort_by,
                                    distance:distance,
                                    posted_in:posted_in,
                                    keyword_included:keyword_included,
                                    keyword_excluded:keyword_excluded,
                                    title:title,
                                    company:company,
                                    page:page,
                                    
                                    },
                            dataType: 'json',
                                   
                            success:function(data) 
                            {
                                    
                                    // $.each(data, function(key, value){
                                       var total_pages= data.result_info.total_pages;
                                       $('#pagination').empty();
                                       $('#job_listing').empty();
                                       $('#content_title').text(data.title);
                                       
                                       let current =parseInt(data.result_info.page);
                                       let total =parseInt(data.result_info.total_pages);
                                       console.log(current);
                                       console.log(total);
                                       let prev= current-1;
                                       let nxt= current+1;
                                       if(current == 1){
                                          
                                        $('#pagination').append('<li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+nxt+'" >NEXT</button></li>'); 
                                       }else if(current == total){
                                        $('#pagination').append('<li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+prev+'" >PREV</button></li>'); 
                                       }else{
                                        $('#pagination').append('<li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+prev+'" >PREV</button></li><li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+nxt+'" >NEXT</button></li>'); 
                                       }
                                    //    for (i = 1; i <= total_pages; i++){ 
                                    //         $('#pagination').append('<li class="active"><button type="button" class="search_oppotunities btn btn-secondary" data-value="'+i+'" ><strong>'+ i +'</strong></button></li>'); 
                                    //    }
                                        $.each(data.jobs, function(key, value){
                                            
                                            let params = getUrlValues(value.job_title_link);	
                                        $('#job_listing').append('<div class="row job-listing"><div class="col s12"><h4><a target="_blank" @guest data-toggle="modal" data-target="#scaleModal" @else href="http://localhost:8000/opportunity/'+params+'"   @endguest class="non-organic-link search-result-link">'+ value.job_title +'</a></h4> <a class="modal-trigger" href="#createAccountPrompt"> <span class="icon-save-job-inactive save-job right"></span> </a><div class="show-on-large hide-on-med-and-down"><p class="f-s-14"> <span class="vertical-bar semi-bold">'+ value.job_company +'</span> <span class="semi-bold">'+ value.job_location +'</span></p></div><p>'+ value.job_description +'</p><p class="job-footer f-s-14"> <span></span></p></div></div>');
                                        });
                            }
                        });              
     function getUrlValues(url)
     {
       let paramsArray = url.split("job/");
        paramsArray = paramsArray[1].split("/");
        let slug = paramsArray[1].split("?");
       return `${paramsArray[0]}/${slug[0]}`;
     }
      
});

</script> -->
@endsection

