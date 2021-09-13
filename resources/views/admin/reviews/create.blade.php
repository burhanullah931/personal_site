@extends('layouts.dashboard.application')
@section('styles')

@endsection
@section('content')
    
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <form id="RegisterValidation" action="{{route('clients.store')}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title">Register Form</h4>
                  </div>
                  <div class="card-body ">
                    
                      <div class="form-group bmd-form-group ">
                        <label for="firstname" class="bmd-label-floating  @error('firstname') has-danger @enderror"> First Name *</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" required="true" aria-required="true">
                        @error('firstname') <label id="firstname-error" class="error" for="firstname">{{$message}}</label>@enderror
                      </div>
                      <div class="form-group bmd-form-group ">
                        <label for="lastname" class="bmd-label-floating @error('laststname') has-danger @enderror"> Last Name *</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" required="true" aria-required="true">
                        @error('lastname') <label id="lastname-error" class="error" for="lastname">{{$message}}</label>@enderror
                      </div>
                   
                      <div class="form-group bmd-form-group ">
                        <label for="personalsummary" class="bmd-label-floating @error('personalsummary') has-danger @enderror"> Personal Summary</label>
                        <textarea rows="4" cols="50" class="form-control" name="personalsummary" id="personalsummary"  aria-required="true"></textarea>
                        @error('personalsummary') <label id="personalsummary-error" class="error" for="personalsummary">{{$message}}</label>@enderror
                      </div>
                      
                        
                      <div class="form-group bmd-form-group ">
                        
                        <label for="profilepic" class="title bmd-label-floating @error('profilepic') has-danger @enderror"> Profile Pic</label><br><br>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                        <img src="{{asset('admin/dashboard/assets/img/placeholder.jpg')}}" alt="...">
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
                      <input type="email" class="form-control" name="email" id="email" required="true" aria-required="true">
                      @error('email') <label id="email-error" class="error" for="email">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="password" class="bmd-label-floating @error('firstname') has-danger @enderror"> Password *</label>
                      <input type="password" class="form-control" name="password" id="password" required="true"  data-parsley-minlength="6" aria-required="true">
                      @error('password') <label id="password-error" class="error" for="password">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="password_confirmation" class="bmd-label-floating"> Confirm Password *</label>
                      <input type="password" class="form-control"  id="password_confirmation"  required="true" required="true" data-parsley-equalto="#password"  name="password_confirmation" aria-required="true">
                      @error('password_confirmation') <label id="firstname-error" class="error" for="firstname">{{$message}}</label>@enderror
                    </div>
                    <div class="row">
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="company" class="bmd-label-floating"> Company</label>
                        <input type="text" class="form-control"  id="company"     name="company" aria-required="true">
                        @error('company') <label id="company-error" class="error" for="company">{{$message}}</label>@enderror
                      </div>
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="title" class="bmd-label-floating"> Designation / Title</label>
                        <input type="text" class="form-control"  id="title"     name="title" aria-required="true">
                        @error('title') <label id="title-error" class="error" for="title">{{$message}}</label>@enderror
                      </div>
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="DateOfBirth" class="bmd-label-floating"> Date Of Birth </label>
                      <input type="text" class="form-control datepicker" name="dob" id="DateOfBirth" value=""  > 
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="phone" class="bmd-label-floating"> Phone No </label>
                      <input type="text" class="form-control" name="phone" id="phone"  aria-required="true">
                    </div>
                    
                    <div class="form-group bmd-form-group">
                      <label for="address" class="bmd-label-floating"> Address</label>
                      <input type="text" class="form-control"  id="address"     name="address" aria-required="true">
                      @error('address') <label id="address-error" class="error" for="address">{{$message}}</label>@enderror
                    </div>
                    <div class="row">
                    <div class="form-group bmd-form-group col-md-3">
                      <label for="country" class="bmd-label-floating"> Country</label>
                      <input type="text" class="form-control"  id="country"   name="country" aria-required="true">
                      @error('country') <label id="country-error" class="error" for="country">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group col-md-3">
                      <label for="region" class="bmd-label-floating"> Region</label>
                      <input type="text" class="form-control"  id="region"    name="region" aria-required="true">
                      @error('region') <label id="region-error" class="error" for="region">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group col-md-3">
                      <label for="city" class="bmd-label-floating"> City</label>
                      <input type="text" class="form-control"  id="city"     name="city" aria-required="true">
                      @error('city') <label id="city-error" class="error" for="city">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group col-md-3">
                      <label for="postalcode" class="bmd-label-floating"> Postal Code</label>
                      <input type="text" class="form-control"  id="postalcode"     name="postalcode" aria-required="true">
                      @error('postalcode') <label id="postalcode-error" class="error" for="postalcode">{{$message}}</label>@enderror
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group bmd-form-group col-md-3">
                      <label for="facebook" class="bmd-label-floating"> Facebook</label>
                      <input  class="form-control"  id="facebook"     name="facebook"  type='url' data-parsley-type='url'  aria-required="true">
                      @error('facebook') <label id="facebook-error" class="error" for="facebook">{{$message}}</label>@enderror
                    </div>
                    {{-- <div class="form-group bmd-form-group">
                      <label for="youtube" class="bmd-label-floating"> Youtube</label>
                      <input type="text" class="form-control"  id="youtube"     name="youtube" aria-required="true">
                      @error('youtube') <label id="youtube-error" class="error" for="youtube">{{$message}}</label>@enderror
                    </div> --}}
                    <div class="form-group bmd-form-group col-md-3">
                      <label for="twitter" class="bmd-label-floating">Twitter</label>
                      <input  class="form-control"  id="twitter"     name="twitter"  type='url' data-parsley-type='url'  aria-required="true">
                      @error('twitter') <label id="twitter-error" class="error" for="twitter">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group col-md-3">
                      <label for="instagram" class="bmd-label-floating">Instagram</label>
                      <input  class="form-control"  id="instagram"     name="instagram"  type='url' data-parsley-type='url'  aria-required="true">
                      @error('instagram') <label id="instagram-error" class="error" for="instagram">{{$message}}</label>@enderror
                    </div>
                    <div class="form-group bmd-form-group col-md-3">
                      <label for="linkedin" class="bmd-label-floating">Linkedin</label>
                      <input  class="form-control"  id="linkedin"     name="linkedin"  type='url' data-parsley-type='url'  aria-required="true">
                      @error('linkedin') <label id="linkedin-error" class="error" for="linkedin">{{$message}}</label>@enderror
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
                    <button type="submit" class="btn btn-rose">Register</button>
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

