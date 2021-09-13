@extends('layouts.dashboard.application')
@section('styles')

@endsection
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <style>.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn){ width:100%}</style>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <div class="pull-right mb-3">
                  <a  href="{{ route('jobs.edit',$job->id) }}" class="btn btn-primary">Edit Job</a>
                  
                  <form action="{{ route('jobs.destroy',$job->id) }}" class="d-inline" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger" title="Delete">
                                Delete Job
                              </button>
  
                            </form>
                  </div>
      <form id="RegisterValidation" action="{{action('Admin\JobsController@update', $job->id)}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
             @method('PUT')
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title">job</h4>
                  </div>
                  <div class="card-body ">
                    
                 
                   
                      <div class="row">
                      <input type="hidden" name="job_id" value="{{$job->id}}" >
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="title" class="bmd-label-floating  @error('title') has-danger @enderror"> Job Title *</label>
                      <input type="text" class="form-control" name="title" id="title" required="true" value="{{$job->job_title}}" aria-required="true" disabled>
                        @error('title') <label id="title-error" class="error" for="title">{{$message}}</label>@enderror
                      </div>
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="employer" class="bmd-label-floating @error('employer') has-danger @enderror"> Employer *</label>
                        <input type="text" class="form-control" name="employer" id="employer" required="true" value="{{$job->employer}}" aria-required="true"  disabled>
                        @error('employer') <label id="employer-error" class="error" for="employer">{{$message}}</label>@enderror
                      </div>
                   
                      
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="location" class="bmd-label-floating"> Location</label>
                        <input type="text" class="form-control"  id="location"  value="{{$job->location}}"   name="location" aria-required="true" disabled>
                        @error('location') <label id="location-error" class="error" for="location">{{$message}}</label>@enderror
                      </div>
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="job_link" class="bmd-label-floating"> Job Link</label>
                        <input type="text" class="form-control"  id="job_link"  value="{{$job->joblink}}"   name="job_link" aria-required="true" disabled>
                        @error('job_link') <label id="job_link-error" class="error" for="job_link">{{$message}}</label>@enderror
                      </div>
                      <div class="form-group bmd-form-group col-md-6">
                          <select class="selectpicker" data-style="select-with-transition" name="job_category_id" title="Select Job Category" data-size="7" disabled>
                            <option disabled> Select Job Category</option>
                            
                            @foreach ($jobcat as $cat)    
                        <option @if($cat->id == $job->job_category_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                          </select>
                        </div>
                      
                      <div class="form-group bmd-form-group " style="width:100%">
                        <label for="description" class="bmd-label-floating @error('description') has-danger @enderror"> Description</label>
                        <textarea  class="form-control" name="description" id="description"  aria-required="true" disabled>{{$job->description}}</textarea>
                        @error('description') <label id="description-error" class="error" for="description">{{$message}}</label>@enderror
                        <script>
CKEDITOR.replace( 'description' );
</script>
                      </div>
                     
                    </div>
                      
                        
                   
                    
                   
                  
                  
                  
                  <div class="row">
                    
                    
                    
                    
                    
                    
                    <!-- <div class="category form-category">* Required fields</div> -->
                  </div>
                  <div class="card-footer text-right">
                    <div class="form-check mr-auto">
                      <label class="form-check-label">
                    {{-- {{dd($errors)}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        {{-- <input class="form-check-input" type="checkbox" value="" required="" aria-required="true"> Subscribe to newsletter --}}
                        {{-- <span class="form-check-sign">
                          <span class="check"></span>
                        </span> --}}
                      </label>
                    </div>
                    <!-- <button type="submit" class="btn btn-rose">Update</button> -->
                  </div>
                </div>
              </form>
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>
@endsection

@section('scripts')
    
  	  <!-- Plugin for the momentJs  -->
      <script src="{{asset('admin/dashboard/assets/js/plugins/moment.min.js')}}"></script>
      <!--  Plugin for Sweet Alert -->
      <script src="{{asset('admin/dashboard/assets/js/plugins/sweetalert2.js')}}"></script>
      <!-- Forms Validations Plugin -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
     
      <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
      <script src="{{asset('admin/dashboard/assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
      <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
      <script src="{{asset('admin/dashboard/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
      
      <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
      <script src="{{asset('admin/dashboard/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
      <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
      <script src="{{asset('admin/dashboard/assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
     
      
      <!--  Notifications Plugin    -->
      <script src="{{asset('admin/dashboard/assets/js/plugins/bootstrap-notify.js')}}"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="{{asset('admin/dashboard/assets/js/material-dashboard.js?v=2.1.0')}}" type="text/javascript"></script>
      <!-- Material Dashboard DEMO methods, don't include it in your project! -->
      <script src="{{asset('admin/dashboard/assets/demo/demo.js')}}"></script>
      
      
      
      <script>
        function setFormValidation(id) {
          $(id).validate({
            highlight: function(element) {
              $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
              $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
            },
            success: function(element) {
              $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
              $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
            },
            errorPlacement: function(error, element) {
              $(element).closest('.form-group').append(error);
            },
          });
        }
    
        $(document).ready(function() {
          $('#RegisterValidation').parsley();;
          
        });
      </script>
      <script>
       console.log( new Date(2020, 11 , 21));
       $("#DateOfBirth").datetimepicker({
        format: 'DD-MM-YYYY',
        minDate: new Date(1, 1,1900),
        maxDate: new Date(1, 1,2010),
        defaultDate:new Date(1, 1,1900)
       });

      
      </script>
      <script>
      
      
        // $('#RegisterValidation').submit( function(e){
        //   // return false;
        //   $('#RegisterValidation').validate();
        //   debugger;
        // });
        </script>

@endsection

