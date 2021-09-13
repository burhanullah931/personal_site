@extends('layouts.dashboard.application')
@section('styles')
@endsection
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                     <i class="material-icons">person</i>
                  </div>
                  <h4 class="card-title">Form Details-
                     <small class="category"></small>
                  </h4>
               </div>
               <div class="card-body">
                  <div class="material-datatables">
                     <table id="datatables_payment" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              {{-- <th>Submitted By</th> --}}
                           </tr>
                        </thead>
                        <tbody>
                           
                           <tr>
                              <td>
                                 @isset($contact->user_name)
                                 {{$contact->user_name}}   
                                     @else
                                     N/A
                                 @endisset                                                                    
                              </td>
                              <td>
                                 @isset($$contact->email)
                                 {{$contact->email}}  
                                     @else
                                     N/A

                                 @endisset                                                                     
                              </td>
                              <td>
                                 @isset($$contact->phone)
                                 {{$contact->phone}}
                                     @else
                                     N/A
                                 @endisset                                                                     
                              </td>
                              
                           </tr>
                           
                        </tbody> 
                     </table>
                  </div>
               </div>
            </div>
         </div>
         
            <div class="col-md-12">
               <div class="card">
                 <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                       <i class="material-icons">edit</i>
                    </div>
                    <h4 class="card-title">Message
                       
                    </h4>
                 </div>
                 <div class="card-body">
                   <div class="col-md-12 ">
                    <textarea class="col-md-12 " rows="15" disabled> {{$contact->message}} </textarea>
                   </div>
                   
                 </div>
              </div>
             </div>
           
      </div>
   </div>
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