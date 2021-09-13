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
            <h4 class="card-title">Saved Jobs</h4>
          </div>
          <div class="card-body">
            
            <div class="toolbar ">
            
                <div class="col-md-4 pull-right">
                <form class="navbar-form" action="{{action('Admin\JobsController@search')}}">
                  @csrf
             @method('POST')
                    <div class="input-group no-border">
                       <input type="text" value="" class="form-control" name="keyword" placeholder="Search...">
                       <button type="submit" class="btn btn-white btn-round btn-just-icon">
                          <i class="material-icons">search</i>
                          <div class="ripple-container"></div>
                       </button>
                    </div>
                 </form>
                </div>
            </div>
            
            <div class="material-datatables">
              <table id="datatable" class="table  table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No#</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Company</th>
                    <th>Category</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach (auth()->user()->savedJobs->sortBy('id') as $job)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$job->job_title}}</td>
                            <td>{{$job->location}}</td>
                            <td>{{$job->employer}}</td>
                            <td>{{$job->job_category->name}}</td>
                            <td>
                                <a href="{{$job->joblink}}" target="_blank" class="btn btn-primary btn-sm">Apply Now</a>
                                <a href="{{route('savedjob', $job->id)}}" class="btn btn-warning btn-sm">Unsaved</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No#</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Company</th>
                    <th>Category</th>
                    <th class="disabled-sorting text-right">Actions</th>
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
  
 

@endsection

