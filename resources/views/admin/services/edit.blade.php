@extends('layouts.dashboard.application')
@section('styles')
@endsection
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
         <form id="RegisterValidation" action="{{route('services.update',$service->id)}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card ">
               <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                     <i class="material-icons">mail_outline</i>
                  </div>
                  <h4 class="card-title">Service Edit Form</h4>
               </div>
               <div class="card-body ">
                  <div class="form-group bmd-form-group ">
                     <label for="title" class="bmd-label-floating  @error('title') has-danger @enderror"> Title *</label>
                     <input type="text" class="form-control" name="title" id="title" required="true" aria-required="true" value="{{$service->title}}">
                     @error('title') <label id="name-error" class="error" for="title">{{$message}}</label>@enderror
                  </div>
                  
                  
                 <div class="form-group bmd-form-group ">
                  <label for="price" class="bmd-label-floating  @error('price') has-danger @enderror"> Price*</label>
                  <input type="number" min="0" class="form-control" name="price" id="price" required="true" aria-required="true" value="{{$service->price}}">
                  @error('price') <label id="name-error" class="error" for="price">{{$message}}</label>@enderror
                 </div>
                 <div class="form-group bmd-form-group ">
                  <label for="description" class="bmd-label-floating  @error('description') has-danger @enderror"> Description *</label>
                  <textarea class="form-control description" name="description" id="description" required="true" aria-required="true" >{{$service->description}}</textarea>
                  @error('description') <label id="name-error" class="error" for="description">{{$message}}</label>@enderror
                 </div>
                 <div class="form-group bmd-form-group ">
                  <label for="service_tag"  class="bmd-label-floating @error('service_tag') has-danger @enderror"> Template  Category *</label><br>
                  <select class="form-control selectpicker" name="service_tag[]" id="service_tag" multiple required="true" data-parsley-errors-container="#error-pages" data-style="btn btn-link">
                     <option selected hidden disabled>category</option>
                      
                     <option @foreach($service->tags as $tag) @if($tag->name == 'Design') selected @endif @endforeach value="Design">Design & Creative</option>
                     <option @foreach($service->tags as $tag) @if($tag->name == 'Web-mobile-software-dev') selected @endif @endforeach  value="Web-mobile-software-dev">Web/Mobile & Software dev</option>
                     <option @foreach($service->tags as $tag) @if($tag->name == 'Sales-marketing') selected @endif @endforeach  value="Sales-marketing">Sales & Marketing</option>
                     <option @foreach($service->tags as $tag) @if($tag->name == 'Writing') selected @endif @endforeach  value="Writing">Writing</option>
                     @foreach($service->tags as $tag) @if($tag->name == 'Others') selected @endif @endforeach  value="Others">Others</option>
                    
                  </select>
                  @error('service_tag') 
                  <div id="error-service_tag" class="error"
                     for="service_tag">{{$message}}</div>
                  @else 
                  <div id="error-service_tag"
                     class="error" for="service_tag"> </div>
                  @enderror
                 </div>
                  <div class="row">
                     <label for="post-image" class="col-sm-2 col-form-label">Image *</label>
                     <div class="form-group bmd-form-group col-sm-7">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                           <div id="service_imageholder" class="fileinput-new thumbnail ">
                            @if(($service->image == null )) 
                            <img src="{{asset('admin/dashboard/assets/img/placeholder.jpg')}}" alt="..."> 
                            @else
                            <img src="{{$service->image}}" alt="template">
      
                            @endif
                           </div>
                           <div class="fileinput-preview fileinput-exists thumbnail"></div>
                           <div>
                              <span class="btn btn-round btn-rose btn-file">
                              <span class="fileinput-new">Add Photo</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="hidden" id="service_image" name="service_image" value="{{$service->image}}">
                              <input class="filemanager" data-input="service_image" data-preview="service_imageholder"  type="file" name="service_image-image" id="service_image-image">
                              </span>
                              <br>
                              <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                              @error('service_image') <label id="service_image-image-error" class="error" for="service_image-image">{{$message}}</label>@enderror
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer ml-auto mr-auto">
                  <button type="submit" class="btn btn-rose">Add </button>
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
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
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
<script>
   (function( $ ){
   
   $.fn.filemanager = function(type, options) {
     type = type || 'file';
   
     this.on('click', function(e) {
       var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
       var target_input = $('#' + $(this).data('input'));
       var target_preview = $('#' + $(this).data('preview'));
       window.open(route_prefix + '?type=' + type, 'FileManager', 'width=1200,height=600');
       window.SetUrl = function (items) {
         var file_path = items.map(function (item) {
           return item.url;
         }).join(',');
   
         // set the value of the desired input to image url
         target_input.val('').val(file_path).trigger('change');
   
         // clear previous preview
         target_preview.html('');
   
         // set or change the preview image src
         items.forEach(function (item) {
   
           target_preview.append(
             $('<img>').attr('src', item.thumb_url)
           );
         });
   
         // trigger change event
         target_preview.trigger('change');
       };
       return false;
     });
   }
   
   })(jQuery);
   
</script>
<script>
   var route_prefix = "/filemanager";
   $('.filemanager').filemanager('image', {prefix: route_prefix});
   // $('#lfm').filemanager('file', {prefix: route_prefix});
</script>
<script>
   CKEDITOR.replace( 'description' );
   </script>
@endsection