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
            <form action="{{route('admin.course.update')}}" method="POST">
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
   <script src="{{asset('admin/dashboard/assets/js/plugins/sweetalert2.js')}}"></script>
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

    
    });
    
  </script>
   <script>
        CKEDITOR.replace( 'description' );
    </script>
 

@endsection

