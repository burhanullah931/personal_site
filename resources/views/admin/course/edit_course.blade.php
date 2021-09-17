@extends('layouts.dashboard.application')
@section('styles')
    
@endsection
@section('content')
    
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">person</i>
            </div>
            <h4 class="card-title">Update Course</h4>
          </div>
          <div class="card-body">
            <form action="{{route('admin.course.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="course_id" value="{{$course->id}}">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" value="{{$course->title}}"  class="form-control">
                    <span class="text-danger">{{$errors->first('title')}}</span>
                </div>
                <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" name="author" value="{{$course->author}}"  class="form-control">
                    <span class="text-danger">{{$errors->first('author')}}</span>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="description"  class="form-control" rows="5">{{$course->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Video Link</label>
                    <input type="url" name="video_link" value="{{$course->video_link}}" class="form-control">
                    <span class="text-danger">{{$errors->first('video_link')}}</span>
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="tel" name="price" value="{{$course->price}}"  class="form-control">
                    <span class="text-danger">{{$errors->first('price')}}</span>
                </div>
                <div class="form-group">
                    <label for="">Sale Price</label>
                    <input type="tel" name="sale_price" value="{{$course->sale_price}}"  class="form-control">
                    <span class="text-danger">{{$errors->first('sale_price')}}</span>
                </div>
                <div class="form-group">
                    {{-- <label for="">Status</label> --}}
                    <select name="status" id="" class="form-control">
                        <option selected disabled value="">Select Status</option>
                        <option value="1" {{$course->status == 1 ? 'selected' : ''}} >Paid</option>
                        <option value="0" {{$course->status == 0 ? 'selected' : ''}}>Free</option>
                    </select>
                </div>
                <span class="text-danger">{{$errors->first('status')}}</span>
                <div class="form-group">
                  <button class="btn btn-info mt-5 add-lecture">Add Lecture</button>
                </div>
                <div class="row mt-5 addLecutre">
                  @foreach ($course->lectures as $lecture)
                  <input type="hidden" name="lect_id[]" value="{{$lecture->id}}">
                  <div  class="col-md-6 border mt-4 rounded"> 
                    <a data-lect-id="{{$lecture->id}}" class="btn-sm text-white btn btn-danger pull-right delete-lecture">Delete</a>
                    <div class="form-group" style="margin-top:50px;">
                      <label for="">Title</label>
                      <input type="text" name="lect_title[]" value="{{$lecture->title}}" class="form-control" required> </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="lect_description[]"  class="ck_description form-control">{{$lecture->description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Video Link</label>
                      <input type="url" name="lect_video_link[]" value="{{$lecture->video_link}}" class="form-control" required> </div>
                    <div class="form-group">
                      <label for="">Banner</label>
                      <input type="file" name="lect_banner[]" class="form-control" style="position:unset !important; opacity:1 !important">
                    </div>
                  </div>
                  @endforeach
                </div>

                <button class="btn btn-primary pull-right mt-5">Update</button>
            </form>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>
@endsection

@section('scripts')
    
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{asset('admin/dashboard/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
   <!--  Plugin for Sweet Alert -->
   {{-- <script src="{{asset('admin/dashboard/assets/js/plugins/sweetalert2.js')}}"></script> --}}
  <!-- <script src="{{asset('admin/dashboard/assets/demo/demo.js')}}"></script> -->
  <script>
    $(document).ready(function() {
      $('#datatables').dataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });


      var i = 0;
      $('.add-lecture').click(function(e){
        e.preventDefault();
         i = i+1;
        $(document).ready(function() {
				CKEDITOR.replace("ck_description"+i);
			});
        $('.addLecutre').append('<div id="div'+i+'" class="col-md-6 border mt-4 rounded"> <a class="btn-sm text-white btn btn-danger pull-right" onclick="remove('+i+')">Remove</a> <div class="form-group" style="margin-top:50px;"> <label for="">Title</label> <input type="text" name="new_title[]" class="form-control" required> </div> <div class="form-group"> <label for="">Description</label> <textarea name="new_description[]" id="ck_description'+i+'" class=" form-control"></textarea> </div> <div class="form-group"> <label for="">Video Link</label> <input type="url" name="new_video_link[]" class="form-control" required> </div> <div class="form-group"> <label for="">Banner</label> <input type="file" name="new_banner[]" class="form-control" style="position:unset !important; opacity:1 !important"> </div> </div>')
      });
   ////////// delete lecture /////////////
   $('.delete-lecture').click(function(e){
            e.preventDefault();
            var lecture_id = $(this).data('lect-id');
            var url = '{{ route("admin.lecture.destroy", ":id") }}';
            url = url.replace(':id', lecture_id);
            
            Swal.fire({
                title: 'Are you sure you want to delete?',
                // text: 'All records related to this category will be deleted!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Delete!'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  window.location = url;
                }
            });
        });
    
    });
    function remove(which){
          $('#div'+which).remove();
        }
    
  </script>
   <script>
        CKEDITOR.replace( 'description' );
        CKEDITOR.replaceAll("ck_description");
    </script>
 

@endsection

