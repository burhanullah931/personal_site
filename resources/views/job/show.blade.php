@extends('layouts.site.app')


@section('content')
<style>
.job-data-box ul{
    list-style:disc;
}
    .job-data-box{

              background-color: #ffffff;
              padding: 40px;
              border: 1px solid #efefef;
              margin-bottom: 30px;
              position: relative;}
              .job-apply-btn{ background-color: rgb(38, 103, 248);
    color: rgb(255, 255, 255);
    font-family: Montserrat;
    font-size: 21px;
    padding: 15px 30px;
    display: block;}
    .icon-x{ margin-right:10px; margin-left:0;    color: #2667f8;
    font-size: 18px; width:20px;}
    .job-data-box h2{     font-family: Poppins;
    font-size: 30px;    margin-bottom: 20px;}
    #job-page{ padding-top:220px; padding-bottom:180px;}
    .job-page-head{ margin-top:-100px;}
.job-description-box h1, .job-description-box h2,.job-description-box h3,
.job-description-box h4,.job-description-box h5,.job-description-box h6{
    font-size:15px;
    font-weight:500;
}
.saved{
    color:red;
}
</style>

<section id="job-page">

<div class="container">
    <div class="row">
        <div class="col-md-12 header-title">

            <p></p>
        </div>
    </div>
</div>

</section>

<section class="job-page-head">
  <div class="container">
      <div class="row job-data-box" >
        <div class="col-lg-8"><h2>{{$job->job_title}}</h2>
            @if(auth()->check())                                   
@hasrole('superadmin')
@isset($job->data_oprator)
 <h4>Job Posted By: {{$job->data_oprator}}</h4>
 @endisset
@endhasrole
@endif
          <div class="job-employer">Employer: {{$job->employer}}</div>
          <div class="job-posted">Posted: {{date('d-m-Y', strtotime($job->created_at))}}</div></div>
          <div class="col-lg-4">
          <a class="btn btn-default job-apply-btn" target="_blank" href="{{$job->joblink}}">Apply Now<i class="fa fa-long-arrow-alt-right"></i></a>
          <a href="{{route('savedjob', $job->id)}}" class="btn btn-success  mt-1"><i class="fas fa-save mr-1 {{$is_saved == true ? 'saved' : '' }}"></i> Saved Job </a>
          </div>

      </div>
  </div>

</section>

<section class="job-single">
<div class="container">
    <div class="row" >
    <div class="col-lg-4 job-data-box " >
    <h2>Job Detail</h2>

              <div class="mb-20"><i class="fas fa-tags icon-x"></i>Category:

              {{($category->name) ?? 'Other'}}</div>

              <div class="mb-20"><i class="fas fa-map-marker-alt  icon-x"></i>Location:
              {{$job->location}}</div>

       </div>
      <div class="col-lg-8" style="padding-right:0">
        <div class="job-data-box">

          <div class="row">


          </div>

          <h2>Job Description</h2>
          <div class="job-description-box">{!!$job->description!!}</div>
      </div>
      </div>

    </div>
</div>

</section>


@endsection
