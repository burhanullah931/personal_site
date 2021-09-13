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
            <h4 class="card-title">Contact Us Entries</h4>
          </div>
          <div class="card-body">
            
            
            
            <div class="material-datatables">
              <table id="datatables" data-order='[[ 0, "desc" ]]' class="table  table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @isset($contacts)
                  @php
                    $count=0;  
                  @endphp
                    @foreach ($contacts as $contact)
                        @php
                            $count++;  
                        @endphp
                      
                      
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{ucfirst($contact->user_name)}}</td>
                        <td>{{$contact->email}}</td>
                        <td>@isset($$contact->phone) {{$contact->phone}} @else N/A  @endisset </td>
                        
                    <td class="td-actions text-right">
                            <a href="{{ route('contact_us.show',$contact->id) }}" ><button  type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="" title="">
                              <i class="material-icons">remove_red_eye</i>
                            <div class="ripple-container"></div></button></a>
                            
                            
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

