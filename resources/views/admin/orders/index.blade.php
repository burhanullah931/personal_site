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
            <h4 class="card-title">Orders</h4>
          </div>
          <div class="card-body">
            
            
            
            <div class="material-datatables">
              <table id="datatables" data-order='[[ 0, "desc" ]]' class="table  table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Email</th>
                    {{-- <th>Template</th>
                    <th>Order Price</th> --}}
                    <th>Order Status</th>
                    {{-- <th>Payment Status</th> --}}
                    <th>Site Status</th>
                    {{-- <th>Site Status Action</th> --}}
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Email</th>
                    {{-- <th>Template</th>
                    <th>Order Price</th> --}}
                    <th>Order Status</th>
                    {{-- <th>Payment Status</th> --}}
                    <th>Site Status</th>
                    {{-- <th>Site Status Action</th> --}}
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @isset($orders)
                  @php
                    $count=0;  
                  @endphp
                    @foreach ($orders as $order)
                        @php
                            $count++;  
                        @endphp
                      
                      
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{ucfirst($order->client->first_name)." ".ucfirst($order->client->last_name)}}</td>
                        <td>{{$order->user->email}}</td>
                        {{-- <td>@isset($order->template_id){{($order->template->name)}} @endisset</td>
                        <td>@isset($order->template_id) @if($order->template->template_category->template_package->price > 0) ${{($order->template->template_category->template_package->price)}} @else FREE @endif @endisset</td> --}}
                        <td>@if($order->status == 0) <span class="btn btn-primary disabled" > INITIATED</span> @elseif($order->status == 1) <span class="btn btn-success disabled" > COMPLETED </span> @endif </td>
                    {{-- <td>@if($order->template->template_category->template_package->price > 0) @if($order->payment) {{strtoupper($order->payment->payment_status)}} @else UNPAID @endif @else FREE @endif</td> --}}
                        
                        <td >@if(isset($order->client->site)) @if($order->client->site->status == 0) PENDING @elseif($order->client->site->status == 1) PUBLISHED @endif @else Not Created Yet  @endif</td>
                        
                        <td class="td-actions text-right">
                            <a href="{{ route('orders.show',$order->id) }}" ><button  type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="" title="">
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

