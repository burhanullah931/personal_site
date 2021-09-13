
@extends('layouts.dashboard.application')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <h3 class="text-uppercase">Welcome to Consultants Directories Dashboard</h3> 
        </div>       
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
           <a href="{{route('consultants.index')}}">
           <div class="card card-stats">
              <div class="card-header card-header-rose card-header-icon">
                 <div class="card-icon">
                    <i class="material-icons">engineering</i>
                 </div>
                 <p class="card-category">Consultants</p>
                 <h3 class="card-title">{{App\Consultant::count()}}</h3>
              </div>
              <div class="card-footer">
                 <div class="stats">
                  <i class="material-icons">date_range</i> Total consultants
                 </div>
              </div>
           </div>
           </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
         <a href="{{route('recruiters.index')}}">
           <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                 <div class="card-icon">
                    <i class="material-icons">self_improvement</i>
                 </div>
                 <p class="card-category">Recruiters</p>
                 <h3 class="card-title">{{App\Recruiter::count()}}</h3>
              </div>
              <div class="card-footer">
                 <div class="stats">
                    <i class="material-icons">date_range</i> Total recruiters
                 </div>
              </div>
           </div>
         </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
         <a href="{{route('jobs.index')}}">
           <div class="card card-stats">
              <div class="card-header card-header-info card-header-icon">
                 <div class="card-icon">
                  <i class="material-icons">work</i>
                 </div>
                 <p class="card-category">Jobs</p>
                 <h3 class="card-title">{{App\Jobs::count()}}</h3>
              </div>
              <div class="card-footer">
                 <div class="stats">
                    <i class="material-icons">update</i> All jobs
                 </div>
              </div>
           </div>
         </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
         <a href="{{route('contact_us.index')}}">
         <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
               <div class="card-icon">
                <i class="material-icons">add_comment</i>
               </div>
               <p class="card-category">Contact Form Entries</p>
               <h3 class="card-title">{{App\Contactus::count()}}</h3>
            </div>
            <div class="card-footer">
               <div class="stats">
                  <i class="material-icons">update</i> All entries
               </div>
            </div>
         </div>
         </a>
      </div>
     </div>
    </div>
</div>@endsection

