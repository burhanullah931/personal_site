@extends('layouts.site.app')
@section('styles')
<title>Consultants - Consultant Directories</title>
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" /> --}}
<style>
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




</style>
@endsection
@section('content')

<section id="hire-page">

    <div class="container">
        <div class="row">
            <div class="col-md-12 header-title">
                <h1 class="text-uppercase">Hire a Professional Consultant
                  </h1>
                <p>Unlock full protentional for your business!</p>
                <a class="btn btn-default mr-20" href="{{url('register')}}">Post a Project<i class="fa fa-long-arrow-alt-right"></i></a>
  

                <p></p>
            </div>
        </div>
    </div>

</section>

    <section id="category-tiles" class="category-tiles-section p-lg-bottom" >
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-12 col-lg-offset-0">
                    <h1 class="mb-20 text-center text-uppercase"> FIND INDEPENDENT CONSULTANTS OR AGENCIES </h1>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants" >
                                    <img src="{{ asset('/site/images/finance-Consultant.svg')}}"  class="tile-image"  alt="Finance Consultant">
                                    <h4 class="tile-title my-20"> Finance </h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants" >
                                    <img src="{{ asset('/site/images/law-consultant.svg')}}"
                                        class="tile-image" alt="Legal Consultant">
                                    <h4 class="tile-title my-20"> Legal</h4>
                                </a></div>
                        </div>
                        
                        <div  class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants" >
                                    <img src="{{ asset('/site/images/health-care-consultant.svg')}}"
                                        class="tile-image" alt="Health Care Consultant">
                                    <h4 class="tile-title my-20"> Health Care</h4>
                                </a></div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants"  >
                                    <img src="{{ asset('/site/images/human-resource-consultant.svg')}}"
                                        class="tile-image"  alt="Human Resource HR Consultant" >
                                    <h4 class="tile-title my-20"> Human Resource </h4>
                                    
                                </a></div>
                        </div>
                        <div  class="col-md-6  col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a  class="tile-container" href="#consultants" >
                                    <img src="{{ asset('/site/images/marketing-consultants.svg')}}"
                                        class="tile-image" alt="Marketing/Branding Consultant">
                                    <h4 class="tile-title my-20"> Marketing/Branding </h4>
                                </a></div>
                        </div>
                        <div  class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants"  >
                                    <img  src="{{ asset('/site/images/public-relations-consultant.svg')}}"
                                        class="tile-image" alt="Public Relations Consultant">
                                    <h4 class="tile-title my-20"> Public Relations</h4>
                                </a></div>
                        </div>
                        <div  class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a  class="tile-container" href="#consultants"  >
                                    <img
                                        src="{{ asset('/site/images/sales-consultant.svg')}}"
                                        class="tile-image"
                                        alt="Sales Consultant">
                                    <h4 class="tile-title my-20 ml-20 ml-md-0"> Sales </h4>
                                </a></div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants" >
                                    <img src="{{ asset('/site/images/IT-consultants.svg')}}"
                                        class="tile-image" alt="IT/Technology/Business Automation Consultant">
                                    <h4 class="tile-title my-20">Software/Business Automation </h4>
                                </a></div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants" >
                                    <img src="{{ asset('/site/images/management-consultant.svg')}}"  class="tile-image"  alt="Management Consultant">
                                    <h4 class="tile-title my-20"> Management </h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants" >
                                    <img src="{{ asset('/site/images/business-consultant.svg')}}"
                                        class="tile-image" alt="Business Consultant">
                                    <h4 class="tile-title my-20"> Business Consultant    </h4>
                                </a></div>
                        </div>
                        
                        <div  class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants" >
                                    <img src="{{ asset('/site/images/supply-chain.svg')}}"
                                        class="tile-image" alt="Supply Chain">
                                    <h4 class="tile-title my-20"> Supply Chain</h4>
                                </a></div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container"  href="#consultants" >
                                    <img src="{{ asset('/site/images/cyber-security.svg')}}"
                                        class="tile-image"  alt="Cyber Security " >
                                    <h4 class="tile-title my-20"> Cyber Security </h4>
                                    
                                </a></div>
                        </div>
                        <div  class="col-md-6  col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a  class="tile-container" href="#consultants">
                                    <img src="{{ asset('/site/images/data-science.svg')}}"
                                        class="tile-image" alt="Data Science">
                                    <h4 class="tile-title my-20"> Data Science        </h4>
                                </a></div>
                        </div>
                        <div  class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants" >
                                    <img  src="{{ asset('/site/images/corporate-governance.svg')}}"
                                        class="tile-image" alt="Corporate Governess">
                                    <h4 class="tile-title my-20"> Corporate Governess     </h4>
                                </a></div>
                        </div>
                        <div  class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a  class="tile-container" href="#consultants">
                                    <img
                                        src="{{ asset('/site/images/strategy-innovation-consultant.svg')}}"
                                        class="tile-image"
                                        alt="Strategy & Innovation">
                                    <h4 class="tile-title my-20 ml-20 ml-md-0"> Strategy & Innovation </h4>
                                </a></div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="pb-10 pb-md-30 text-center">
                                <a class="tile-container" href="#consultants" >
                                    <img src="{{ asset('/site/images/mergers.svg')}}"
                                        class="tile-image" alt="Mergers & Acquisition   ">
                                    <h4 class="tile-title my-20">Mergers & Acquisition   </h4>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all-cat-link text-center py-20 ">
                
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section id="hire-profile-section">
        <div class="container" id="consultants">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th style="display: none">i</th>
                        
                    </tr>
                </thead>
                <tbody id="jobs_table">
            @foreach ($consultants as $consultant)
                
            <tr>
                <td>
            <div class="hire-profile">
                <div class="row">
                    <div class="col-lg-2 hire-profile-img">
                    @if(($consultant->logo == Null) || ($consultant->logo == 'noimage.png'))
                            <img src="{{ asset('/site/images/default.png')}}" width="150px" height="150px" class="avatar img-circle" alt="avatar">
                            @else
                            <img src="{{ asset('storage/site/images/users/consultant/'.$consultant->logo) }}" width="150px" height="150px" class="avatar img-circle" alt="avatar">
                            @endif
                    </div>
                    <div class="col-lg-8">
                        <h1 class="text-uppercase profile-name">{{$consultant->first_name}} {{$consultant->last_name}}</h1>
                        <p class="profile-location"><i class="fas fa-map-marker-alt mr-5"></i>{{$consultant->city}} {{$consultant->region}} {{$consultant->country}}</p>
                        <h2 class="text-uppercase  job-title">{{$consultant->job_title}}</h2>
                       
                    </div>
                    <div class="col-lg-2 float-right mt-20">
                        <p class="profile-rate">${{$consultant->current_salary}}/{{$consultant->compensation}}</p>
                        {{-- <p class="fav-heart"><i class="fas fa-heart"></i></p> --}}
                      
                      
                    </div>
                </div>
       
                              
                <p class="profile-desc half-desc" data-id="{{$consultant->id}}"> {!!substr($consultant->summary, 0, 200)!!}
            </p>
                    <p class="profile-desc full-desc" data-id="{{$consultant->id}}">{{$consultant->summary}}
                </p>
                    <a href="#" data-id="{{$consultant->id}}" class="show_hide">Read More</a>
                    
          
                    @foreach($consultant->skills as $skill)
                    <div class="skill-btn">{{$skill->title}}</div>
                    @endforeach
                    @if(($consultant->website) || ($consultant->linkedin))
                    <div class="profile-web-link text-center">
                    @if($consultant->website)
                        <a  href="{{$consultant->website}}" target="_blank"  style="padding-right:20px"><i class="fas fa-globe"></i> Website</a>
                        @endif
                        @if($consultant->linkedin)
                        <a  href="{{$consultant->linkedin}}" target="_blank" ><i class="fab fa-linkedin"></i> LinkedIn</a>
                        @endif
                    </div>
                  @endif

            </div>
        </td>
    </tr>
            @endforeach
        </tbody>
    </table>
            <div class="col-md-12 text-right">
                <div class="pagination">
                    {{-- {{$consultants->links()}} --}}
                </div>
            </div>
            
        </div>

    </section>

    <section id="hire-cta">
        <h1>So what are you waiting for?</h1><br>
        <p>Post a project today and get bids from talented freelancers.</p>
        <a href="{{url('register')}}"  class="btn btn-default">Post a Project </a>
                  

    </section>


@endsection
@section('scripts')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
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
</script>
<script>
    
    $(document).on("click", ".paginate_button ",  function() {
    $('html, body').animate({
        scrollTop: $(".dataTables_wrapper").offset().top
    }, 'slow');
    });
</script>
<script>

$(document).ready(function () {
    $(".full-desc").hide();
    $(".show_hide").on("click", function (e) {
e.preventDefault();
var id = $(this).attr('data-id');
        console.log(id);
        var txt = $(".full-desc[data-id='"+id+"']").is(':visible') ? 'Read More' : 'Read Less';
        $(this).text(txt);
        
        $(".full-desc[data-id='"+id+"']").slideToggle(200);
        $(".half-desc[data-id='"+id+"']").slideToggle(200);
    });
});
</script>
@endsection
