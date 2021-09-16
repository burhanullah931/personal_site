@extends('layouts.dashboard.application')
@section('styles')
    
@endsection
@section('content')
    
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="toolbar ">
          <div class="col-md-4 pull-right">
            <a href="{{route('admin.create.course')}}" class="btn btn-primary pull-right">Add New Course</a>
          </div>
      </div>
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">person</i>
            </div>
            <h4 class="card-title">Courses</h4>
          </div>
          <div class="card-body">
            <div class="material-datatables">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php
                          $i = 1;
                      @endphp
                      @foreach ($courses as $course)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$course->title}}</td>
                          <td>{{$course->autdor}}</td>
                          <td>{{$course->price}}</td>
                          <td>{{$course->sale_price}}</td>
                          <td style="width:10%;">{{$course->video_link}}</td>
                          <td><span class="badge badge-pill p-2 {{$course->status == 1 ? 'badge-success' : 'badge-warning'}}">{{$course->status == 1 ? 'Paid' : 'Free'}}</span></td>
                          <td>
                            <a href="{{route('admin.course.edit', $course->id)}}" class="btn btn-info btn-sm">Edit</a>
                            <button data-course-id="{{$course->id}}" class="btn btn-danger btn-sm delete-course">Delete</button>
                          </td>
                        </tr>
                      @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>S.No</th>
                          <th>Title</th>
                          <th>Author</th>
                          <th>Price</th>
                          <th>Sale Price</th>
                          <th>Link</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
          </div>
          <div class="card-footer"> {{-- {{auth()->user()->savedJobs->simplePaginate(1)->appends(Request::except('page'))->links()}} --}} </div>
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


      ////////// delete course /////////////
      $('.delete-course').click(function(e){
                e.preventDefault();
                var course_id = $(this).data('course-id');
                var url = '{{ route("admin.course.destroy", ":id") }}';
                url = url.replace(':id', course_id);
                
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
  </script>
  
 

@endsection

