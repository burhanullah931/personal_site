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
            <h4 class="card-title">Maintenance Mode</h4>
          </div>
          <div class="card-body">
            
            <div class="toolbar ">
                <a href="{{route('maintenance.create')}}"> <button  class="btn btn-primary btn-round">
                    <i class="material-icons">person_add </i>  Add
                  <div class="ripple-container"></div></button></a>
            </div>
            
            <div class="material-datatables">
              <table id="datatables" class="table  table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No#</th>
                    <th>Message</th>
                    
                    <th>Status</th>
                    
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No#</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @isset($maintenances)
                  @php
                    $count=0;  
                  @endphp
                    @foreach ($maintenances as $maintenance)
                        @php
                            $count++;  
                        @endphp
                      
                  
                    <tr>
                      
                        <td>{{$count}}</td>
                        <td>{{$maintenance->message}}</td>

                        
                            <td>@if($maintenance->active) <span class="badge badge-success">Maintenance on</span>
                            @else<span class="badge badge-warning">Maintenance off</span>
                            @endif</td>

                       
                        <td class="td-actions text-right">
                        <a href="{{ route('maintenance.edit',$maintenance->id) }}" ><button type="button" rel="tooltip" class="btn btn-success btn-link" data-original-title="" title="Edit">
                              <i class="material-icons">edit</i>
                            </button></a>
                        @if(!$maintenance->active)
                            <a href="{{ url('dashboard/maintenance/activate/' . $maintenance->id) }}" ><button type="button" rel="tooltip" class="btn btn-success " data-original-title="" title="Activate">
                              activate
                            </button></a>
                            @else
                            <a href="{{ url('dashboard/maintenance/deactivate/' . $maintenance->id) }}" ><button type="button" rel="tooltip" class="btn btn-warning " data-original-title="" title="Deactivate">
                             deactivate
                            </button></a>@endif
                            
                           
                            
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

