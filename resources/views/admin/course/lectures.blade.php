@extends('layouts.dashboard.application')
@section('styles')
    
@endsection
@section('content')
    
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="toolbar ">
          <div class="col-md-4 pull-right">
            <a data-toggle="modal" data-target="#createModal" class="btn btn-primary pull-right text-white">Add New lecture</a>
          </div>
      </div>
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">person</i>
            </div>
            <h4 class="card-title">Lectures of {{$course->title}}</h4>
          </div>
          <div class="card-body">
            <div class="material-datatables">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Banner</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php
                          $i = 1;
                      @endphp
                      @foreach ($lectures as $lecture)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$lecture->title}}</td>
                          <td >{{$lecture->video_link}}</td>
                          <td><img src="{{asset('site/images/courses/'.$lecture->banner)}}" width="70" alt=""></td>
                          <td>
                            <a data-lect-id="{{$lecture->id}}" data-title="{{$lecture->title}}" data-description="{{$lecture->description}}" data-link="{{$lecture->video_link}}" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-sm edit-lecture"><i class="material-icons">edit</i></a>
                            <button data-lect-id="{{$lecture->id}}" class="btn btn-danger btn-sm delete-lecture"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                      @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>S.No</th>
                          <th>Title</th>
                          <th>Link</th>
                          <th>Banner</th>
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
        {{-- create lectuer modal  --}}
        <div class="modal" id="createModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Add New Lecture</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                 <form action="{{route('admin.lecture.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="course_id"  value="{{$course->id}}">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="new_description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Video Link</label>
                        <input type="url" name="video_link"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Banner</label>
                        <input type="file" name="banner" class="form-control" style="position:unset !important; opacity:1 !important">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary pull-right">Register</button>
                    </div>
                </form>
                </div>
          
            
          
              </div>
            </div>
        </div>
  <!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Lecture</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
         <form action="{{route('admin.lecture.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="lect_id" id="lect_id">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">Video Link</label>
                <input type="url" name="video_link" id="video_link" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Banner</label>
                <input type="file" name="banner" class="form-control" style="position:unset !important; opacity:1 !important">
            </div>
            <div class="form-group">
                <button class="btn btn-primary pull-right">Update</button>
            </div>
        </form>
        </div>
  
    
  
      </div>
    </div>
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
            /////////////////// edit lecture////////////

        $('.edit-lecture').click(function(e){
            e.preventDefault();
            $('#lect_id').val($(this).data('lect-id'));
            $('#title').val($(this).data('title'));
            CKEDITOR.instances['description'].setData($(this).data('description'));
            $('#video_link').val($(this).data('link'));
            
        });
    });
  </script>
   <script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'new_description' );

</script>
  
 

@endsection

