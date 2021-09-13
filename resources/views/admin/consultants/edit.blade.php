@extends('layouts.dashboard.application')
@section('styles')

@endsection
@section('content')
    
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <form id="RegisterValidation" action="{{action('Admin\ConsultantsController@update', $consultant->id)}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
             @method('PUT')
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title">Update Consultant Form</h4>
                  </div>
                  <div class="card-body ">
                    
                  <div class="form-group bmd-form-group ">
                        
                        <label for="logo" class="title bmd-label-floating @error('logo') has-danger @enderror"> Profile Pic</label><br><br>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                        @if(($consultant->logo == Null) || ($consultant->logo == 'noimage.png'))
                            
                             <img src="{{asset('admin/dashboard/assets/img/placeholder.jpg')}}" alt="...">
                              @else
                              
                              <img src="{{asset('storage/site/images/users/consultant/'.$consultant->logo)}}" alt="...">
                             
                             @endif
                        
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                        <div>
                          <span class="btn btn-round btn-rose btn-file">
                            <span class="fileinput-new">Add Photo</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="logo">
                          </span>
                          
                          <br>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          @error('logo') <label id="logo-error" class="error" for="logo">{{$message}}</label>@enderror
                        </div>
                      </div>
                    </div>
                  
                   
                   
                      <div class="row">
                      <input type="hidden" name="consultant_id" value="{{$consultant->id}}" >
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="fname" class="bmd-label-floating  @error('fname') has-danger @enderror"> First Name *</label>
                      <input type="text" class="form-control" name="fname" id="fname" required="true" value="{{$consultant->first_name}}" aria-required="true">
                        @error('fname') <label id="fname-error" class="error" for="fname">{{$message}}</label>@enderror
                      </div>
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="lname" class="bmd-label-floating @error('laststname') has-danger @enderror"> Last Name *</label>
                        <input type="text" class="form-control" name="lname" id="lname" required="true" value="{{$consultant->last_name}}" aria-required="true">
                        @error('lname') <label id="lname-error" class="error" for="lname">{{$message}}</label>@enderror
                      </div>
                   
                      
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="title" class="bmd-label-floating"> Designation / Title</label>
                        <input type="text" class="form-control"  id="title"  value="{{$consultant->job_title}}"   name="title" aria-required="true">
                        @error('title') <label id="title-error" class="error" for="title">{{$message}}</label>@enderror
                      </div>
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="company" class="bmd-label-floating"> Company</label>
                        <input type="text" class="form-control"  id="company"  value="{{$consultant->organization}}"   name="company" aria-required="true">
                        @error('company') <label id="company-error" class="error" for="company">{{$message}}</label>@enderror
                      </div>
                      <div class="form-group bmd-form-group col-md-4">
                          <select class="selectpicker" data-style="select-with-transition" name="category_id" title="Select Category" required data-size="7">
                            <option disabled selected> Category</option>
                            @foreach($jobcat as $cat)
                        <option @if( $consultant->category_id == $cat->id ) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
                              
                          @endforeach
                          </select>
                        </div>
                      <div class="form-group bmd-form-group col-md-4">
                          <select class="selectpicker" data-style="select-with-transition" name="compensation" title="Select Compensation" data-size="7">
                            <option disabled selected> Select Compensation</option>
                            
                              
                           

                        <option @if( $consultant->compensation == 'hr' ) selected @endif value="hr">Hourly</option>
                        <option @if( $consultant->compensation == 'day' ) selected @endif value="day">Daily</option>
                        <option @if( $consultant->compensation == 'month' ) selected @endif value="month">Monthly</option>
                          </select>
                        </div>
                      <div class="form-group bmd-form-group col-md-4">
                        <label for="hourly_rate" class="bmd-label-floating"> Rate</label>
                        <input type="text" class="form-control"  id="hourly_rate"  value="{{$consultant->current_salary}}"   name="hourly_rate" aria-required="true">
                        @error('hourly_rate') <label id="hourly_rate-error" class="error" for="hourly_rate">{{$message}}</label>@enderror
                      </div>
                      <div class="form-group bmd-form-group ">
                        <label for="summary" class="bmd-label-floating @error('summary') has-danger @enderror"> Personal Summary</label>
                        <textarea rows="4" cols="150" class="form-control" name="summary" id="summary"  aria-required="true">{{$consultant->summary}}</textarea>
                        @error('summary') <label id="summary-error" class="error" for="summary">{{$message}}</label>@enderror
                      </div>
                    </div>
                      
                        
                   
                    
                   
                  
                    <div class="row">
                    <div class="form-group bmd-form-group col-md-12 p-0">
                    <label for="city" class=""> Skills</label>

                    <select class="form-control js-example-tags"  name="skills[]" multiple="multiple" required 
                        data-parsley-required-message="Enter at least one skill."
                        data-parsley-errors-container=".errorsskillinput">
                            
                          

                            @foreach($consultant->skills as $skill)
                            <option selected="selected">{{$skill->title}}</option>
                            
                            @endforeach
                            </select>
                    </div>
                    </div>
                    
                    <div class="row mt-4">
                    <br><br>
                    
                   
                    <div class="form-group bmd-form-group col-md-6">
                      <label for="state" class="bmd-label-floating"> State</label>
                      <input type="text" class="form-control"  id="state" value="{{$consultant->region}}"  name="state" aria-required="true">
                      @error('state') <label id="state-error" class="error" for="state">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group col-md-6">
                      <label for="country" class="bmd-label-floating"> Country</label>
                      <input type="text" class="form-control"  id="country"  value="{{$consultant->country}}"  name="country" aria-required="true">
                      @error('country') <label id="country-error" class="error" for="country">{{$message}}</label>@enderror
                    </div>
                   
                  </div>
                  
                  <div class="row">
                    
                   
                    <div class="form-group bmd-form-group col-md-12">
                      <label for="linkedin" class="bmd-label-floating">Linkedin</label>
                      <input  class="form-control"  id="linkedin"     name="linkedin" value="{{$consultant->linkedin}}" type='url' data-parsley-type='url'  aria-required="true">
                      @error('linkedin') <label id="linkedin-error" class="error" for="linkedin">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group col-md-12">
                      <label for="website" class="bmd-label-floating">Website</label>
                      <input  class="form-control"  id="website"     name="website" value="{{$consultant->website}}" type='url' data-parsley-type='url'  aria-required="true">
                      @error('website') <label id="website-error" class="error" for="website">{{$message}}</label>@enderror
                    </div>
                  </div>
                    
                    
                    
                    
                    
                    <div class="category form-category">* Required fields</div>
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
                    <button type="submit" class="btn btn-rose">Update</button>
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

