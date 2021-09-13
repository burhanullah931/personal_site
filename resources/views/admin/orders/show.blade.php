@extends('layouts.dashboard.application')
@section('styles')
@endsection
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-header-icon card-header-rose">
                  <div class="card-icon">
                     <i class="material-icons">attach_money</i>
                  </div>
                  <h4 class="card-title">Payment Details-
                     <small class="category"></small>
                  </h4>
               </div>
               <div class="card-body">
                  <div class="material-datatables">
                     <table id="datatables_payment" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>Payment Type</th>
                              <th>Transaction Id</th>
                              <th>Gross Payment</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           @if($order->payment)
                           <tr>
                              <td>
                                 {{$order->payment->payment_method}}                                                                       
                              </td>
                              <td>
                                 {{$order->payment->transaction_id}}                                                                       
                              </td>
                              <td>
                                 ${{$order->payment->total_amount}}                                                                     
                              </td>
                              <td>
                                 {{ucfirst($order->payment->payment_status)}}                                                                        
                              </td>
                           </tr>
                           @else
                           <tr>
                              <td> NA </td>
                              <td> NA</td>
                              <td> NA </td>
                              <td> UNPAID  </td>
                           </tr> 
                           @endif
                        </tbody> 
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="col-md-12">
               <div class="card">
                  
                  <div class="card-header card-header-icon card-header-rose">
                     <div class="card-icon">
                        <i class="material-icons">shopping_cart</i>
                     </div>
                     <h4 class="card-title">Order Details-
                        <small class="category"># {{$order->id}}</small>
                     </h4>
                  </div>
                  <div class="card-body table-responsive">
                     @isset($order->template)
                    <table class="table table-hover">
                      <thead class="text-rose">
                        <tr><th>ID</th>
                        <th>Package</th>
                        <th>Template</th>
                        <th>Status</th>

                      </tr></thead>
                      <tbody>
                        <tr>
                          <td>{{$order->id}}</td>
                          <td>{{$order->template->template_category->template_package->title}}</td>
                          <td>{{$order->template->name}}</td>
                          <td>@if($order->status) <button class="btn btn-success btn-round">Completed<div class="ripple-container"></div></button> @else <button class="btn btn-primary btn-round">Initiated<div class="ripple-container"></div></button> @endif</td>
                        </tr> 
                       
                      </tbody>
                    </table>
                    @endisset

                    @isset($order->service_id)
                    <table class="table table-hover">
                      <thead class="text-rose">
                        <tr><th>ID</th>
                        <th>Service</th>
                        
                        <th>Status</th>

                      </tr></thead>
                      <tbody>
                        <tr>
                          <td>{{$order->id}}</td>
                          <td>{{$order->service->title}}</td>
                          
                          <td>@if($order->status) <button class="btn btn-success btn-round">Completed<div class="ripple-container"></div></button> @else <button class="btn btn-primary btn-round">Initiated<div class="ripple-container"></div></button> @endif</td>
                        </tr> 
                       
                      </tbody>
                    </table>
                    @endisset
                  </div>
                </div>
             </div><br>
            <div class="col-md-12">
            <div class="card card-profile">
               
               <div class="card-avatar">
                  <a href="#pablo">
                  <img class="img" @isset($order->client->profile_pic) src="{{asset('/storage/cv/candidates/'.$order->client->id.'/'.$order->client->profile_pic)}}" @else src="{{asset('admin/dashboard/assets/img/placeholder.jpg')}}" @endisset style="width: 100%;
                     height: 150px;
                     max-width: 150px;
                     display: block;
                     object-fit: cover;">
                  </a>
               </div>
               <div class="card-body">
                        
                        <h4 class="card-title text-primary"> Customer Details</h4>
                  <h6 class="card-category text-gray">{{$order->client->first_name}} {{$order->client->last_name}}</h6>
                  <h4 class="card-title">{{$order->client->email}}</h4>
                  <p class="card-description">{{$order->client->phone}}</p>
                  {{-- <a href="#pablo" class="btn btn-rose btn-round">Follow</a> --}}
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-icon card-header-rose">
                 <div class="card-icon">
                    <i class="material-icons">cloud_download</i>
                 </div>
                 <h4 class="card-title">Order Details-
                    <small class="category"># {{$order->id}}</small>
                 </h4>
              </div>
              @isset($order->template)
              <div class="card-body">
                <div class="col-md-12 text-center">
                  <a href="{{asset('/storage/cv/candidates/'.$order->client->id.'/'.$order->client->cv)}}" target="_blank"> Download CV </a>
                </div>
                
              </div>
              @endisset
              @isset($order->service_id)
              <div class="card-body">
                <div class="col-md-12 text-center">
                  <a href="{{asset('/storage/attachments/clients/'.$order->client->id.'/'.$order->attachment)}}" target="_blank"> Download Attachment </a>
                </div>
                
              </div>
              @endisset
           </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-icon card-header-rose">
                 <div class="card-icon">
                    <i class="material-icons">edit</i>
                 </div>
                 <h4 class="card-title">Special Notes
                    
                 </h4>
              </div>
              <div class="card-body">
                <div class="col-md-12 ">
                 <textarea class="col-md-12 " rows="8" disabled> {{$order->notes}} </textarea>
                </div>
                
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