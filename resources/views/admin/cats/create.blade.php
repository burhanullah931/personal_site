@extends('layouts.dashboard.application')
@section('styles')

@endsection
@section('content')
    
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <form id="RegisterValidation" action="{{route('categories.store')}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title">Add Category Form</h4>
                  </div>
                  <div class="card-body ">
                    <div class="row">
                      {{-- <input type="hidden" name="cat_id" value="{{$cat->id}}" > --}}
                      <div class="form-group bmd-form-group col-md-6">
                        <label for="title" class="bmd-label-floating  @error('title') has-danger @enderror"> Category Title *</label>
                      <input type="text" class="form-control" name="title" id="title" required="true" value="" aria-required="true">
                        @error('title') <label id="title-error" class="error" for="title">{{$message}}</label>@enderror
                      </div>
                           
                    </div>
                   
              
                  
                    
                    
                    
                    
                    
                    {{-- <div class="category form-category">* Required fields</div> --}}
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
                    <button type="submit" class="btn btn-rose">Save</button>
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

