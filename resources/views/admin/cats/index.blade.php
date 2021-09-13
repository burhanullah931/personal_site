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
            <h4 class="card-title">Categories</h4>
          </div>
          <div class="card-body">
            
            <div class="toolbar ">
                 <a href="{{route('categories.create')}}"> <button  class="btn btn-primary btn-round">
                    <i class="material-icons">person_add </i>  Add Category
                  <div class="ripple-container"></div></button></a>
                {{-- <div class="col-md-4 pull-right">
                <form class="navbar-form" action="{{action('Admin\catsController@search')}}">
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
                </div> --}}
            </div>
            
            <div class="material-datatables">
              <table id="datatable" class="table  table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Total Jobs</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Total Jobs</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @isset($cats)
                  @php
                    $count=0;  
                  @endphp
                    @foreach ($cats as $cat)
                        @php
                            $count++;  
                        @endphp
                      
                  
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$cat->name}} </td>
                        <td>{{count($cat->jobs)}} </td>
                        
                        <td class="td-actions text-right">
                          
                        {{-- <a href="{{ route('cats.show',$job->id) }}" ><button type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="" title="View">
                              <i class="material-icons">visibility</i>
                            </button></a> --}}
                            
                            <a href="{{ route('categories.edit',$cat->id) }}" ><button type="button" rel="tooltip" class="btn btn-success btn-link" data-original-title="" title="Edit">
                              <i class="material-icons">edit</i>
                            </button></a>
                           
                           

                {{-- <form class="delete-form"   action="{{ route('categories.destroy',$cat->id) }}" class="d-inline" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-link" title="Delete">
                                <i class="material-icons">close</i>
                              </button>
  
                            </form> --}}
                            
                          </td>
                        
                    </tr>
                    @endforeach
                  @endisset
                   
                </tbody>
                
              </table>
            </div>
          </div>
          <div class="card-footer"> {{$cats->appends(Request::except('page'))->links()}} </div>
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

     

      // Edit record
    
    });
  </script>
  <script>
    $(document).ready(function() {
      // Initialise Sweet Alert library
      demo.showSwal();
    });
  </script>
  <script>
    $('.delete-form').on('submit', function(e){
    e.preventDefault();
    demo.showSwal('delete-job', this);

    })

    demo = {
      showSwal: function(type, form) {
    if (type == 'delete-job') {
      var formdata =form;
      swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this job!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function(result) {
        if(result.value){
        formdata.submit();
        
      }})

    } 
  },
    }
  </script>

@endsection

