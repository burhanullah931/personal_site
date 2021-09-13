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
            <h4 class="card-title">Reviews</h4>
          </div>
          <div class="card-body">
            
            
            
            <div class="material-datatables">
              <table id="datatables" data-reviews='[[ 0, "desc" ]]' class="table  table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Review</th>
                    <th>Rating</th>
                    <th>Publish</th>
                    
                    {{-- <th>Site Status Action</th> --}}

                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Review</th>
                    <th>Rating</th>
                    <th>Publish</th>
                    {{-- <th>Site Status Action</th> --}}
                    
                  </tr>
                </tfoot>
                <tbody>
                  @isset($reviews)
                  @php
                    $count=0;  
                  @endphp
                    @foreach ($reviews as $review)
                        @php
                            $count++;  
                        @endphp
                      
                      
                    <tr>
                        <td>{{$review->id}}</td>
                        <td>{{ucfirst($review->name)}}</td>
                        <td>{{$review->email}}</td>
                        <td>{{$review->designation}}</td>
                        <td>{{$review->review}}</td>
                        <td><div class="jstars checked" data-value="5"><div class="jstars-empty" style="position: relative; display: inline-block; font-size: 2.0rem; line-height: 5.5rem; color: rgb(221, 221, 221); user-select: none;">★★★★★<div class="jstars-filled" style="top: 0px; left: 0px; position: absolute; display: inline-block; font-size: 2.0rem; line-height: 5.5rem; width: {{$review->rating*20}}%; overflow: hidden; white-space: nowrap; color: rgb(66, 133, 244); user-select: none;">★★★★★</div></div></div> </td>
                        <td class="td-actions text-right"> <a href="{{ route('reviews.show',$review->id) }}">@if($review->status == 0)  <button   class="btn btn-success">Publish</button>  @elseif($review->status == 1) <button  class="btn btn-info">UNPUBLISH</button> @endif </a> </td>
                        
                        
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

