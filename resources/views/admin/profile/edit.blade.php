@extends('layouts.dashboard.application')
@section('styles')

@endsection
@section('content')
    
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <form id="RegisterValidation" action="{{action('Admin\ProfileController@update', $user->id)}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
             @method('PUT')
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title">Register Form</h4>
                  </div>
                  <div class="card-body ">
                    
                      <div class="form-group bmd-form-group ">
                        <label for="firstname" class="bmd-label-floating  @error('firstname') has-danger @enderror"> Name *</label>
                      <input type="text" class="form-control" name="firstname" id="firstname" required="true" value="{{$user->name ?? '' }}" aria-required="true">
                        @error('firstname') <label id="firstname-error" class="error" for="firstname">{{$message}}</label>@enderror
                      </div>
                      
                      
                        
                      <div class="form-group bmd-form-group ">
                        
                        <label for="profilepic" class="title bmd-label-floating @error('profilepic') has-danger @enderror"> Profile Pic</label><br><br>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                             @isset($user->logo)
                             <img src="{{asset('storage/site/images/users/'.$user->logo)}}" alt="...">
                            
                              @else
                              <img src="{{asset('admin/dashboard/assets/img/placeholder.jpg')}}" alt="...">
                             
                             @endisset
                        
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                        <div>
                          <span class="btn btn-round btn-rose btn-file">
                            <span class="fileinput-new">Add Photo</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="profilepic">
                          </span>
                          
                          <br>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          @error('profilepic') <label id="profilepic-error" class="error" for="profilepic">{{$message}}</label>@enderror
                        </div>
                      </div>
                    </div>
                  
                    <div class="form-group bmd-form-group">
                      <label for="email" class="bmd-label-floating @error('email') has-danger @enderror"> Email Address *</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}" required="true" disabled aria-required="true">
                      @error('email') <label id="email-error" class="error" for="email">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group">
                        <label for="oldpassword" class="bmd-label-floating @error('oldpassword') has-danger @enderror">Old Password </label>
                        <input type="password" class="form-control" name="oldpassword" id="oldpassword"   data-parsley-minlength="6" aria-required="true">
                        @error('oldpassword') <label id="oldpassword-error" class="error" for="oldpassword">{{$message}}</label>@enderror
                      </div>
                    <div class="form-group bmd-form-group">
                      <label for="password" class="bmd-label-floating @error('password') has-danger @enderror"> Password </label>
                      <input type="password" class="form-control" name="password" id="password"   data-parsley-minlength="6" aria-required="true">
                      @error('password') <label id="password-error" class="error" for="password">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="password_confirmation" class="bmd-label-floating"> Confirm Password </label>
                      <input type="password" class="form-control"  id="password_confirmation"   data-parsley-equalto="#password"  name="password_confirmation" aria-required="true">
                      @error('password_confirmation') <label id="password_confirmation-error" class="error" for="password_confirmation-error">{{$message}}</label>@enderror
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

