@extends('layouts.dashboard.application')
@section('styles')
    
@endsection
@section('content')
    
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="toolbar ">
          <div class="col-md-4 pull-right">
            {{-- <a href="{{route('admin.create.course')}}" class="btn btn-primary pull-right">Add New Course</a> --}}
          </div>
      </div>
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">person</i>
            </div>
            <h4 class="card-title">Lectures of {{$course->title}} </h4>
          </div>
          <div class="card-body">
            <div class="material-datatables">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Banner</th>
                            <th>Vidio</th>
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
                          <td><img src="{{asset('site/images/courses/'.$lecture->banner)}}" width="70" alt=""></td>
                          <td>
                            <a href="{{$lecture->video_link}}" target="_blank" class="bnt btn-info btn-sm">Video</a>
                          </td>
                        </tr>
                      @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>S.No</th>
                            <th>Title</th>
                            <th>Banner</th>
                            <th>Video</th>
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


      
  </script>
  
 

@endsection

