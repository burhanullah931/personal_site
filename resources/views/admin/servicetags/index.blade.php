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
              <i class="material-icons">table_chart</i>
            </div>
            <h4 class="card-title">Services Tags</h4>
          </div>
          <div class="card-body">
            
            <div class="toolbar ">
                <a href="{{route('servicetags.create')}}"> <button  class="btn btn-primary btn-round">
                    <i class="material-icons">person_add </i>  Add Service Tag
                  <div class="ripple-container"></div></button></a>
            </div>
            
            <div class="material-datatables">
              <table id="datatables" class="table text-right table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @isset($tags)
                  @php
                    $count=0;  
                  @endphp
                    @foreach ($tags as $tag)
                        @php
                            $count++;  
                        @endphp
                      
                  
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{ucfirst($tag->name)}}</td>
                        
                        

                        <td class="td-actions text-right">
                           
                            <div class="ripple-container"></div></button></a>
                            <a href="{{ route('servicetags.edit',$tag->id) }}" ><button type="button" rel="tooltip" class="btn btn-success btn-link" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                            </button></a>
                            
                          </td>
                        
                    </tr>
                    @endforeach
                  @endisset
                    
                </tbody>
              </table>
            </div>
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

@endsection

