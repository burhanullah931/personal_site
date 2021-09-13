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
            <h4 class="card-title">Recruiters</h4>
          </div>
          <div class="card-body">
            
            <div class="toolbar ">
                <!-- <a href="{{route('recruiters.create')}}"> <button  class="btn btn-primary btn-round">
                    <i class="material-icons">person_add </i>  Add Client
                  <div class="ripple-container"></div></button></a> -->
            </div>
            
            <div class="material-datatables">
              <table id="datatables" class="table  table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                   
                    <th>Registration Type</th>
                    <th>Status</th>
                    
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                  
                    <th>Registration Type</th>
                    <th>Status</th>
                    <th class="disabled-sorting text-right">Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @isset($recruiters)
                  @php
                    $count=0;  
                  @endphp
                    @foreach ($recruiters as $recruiter)
                        @php
                            $count++;  
                        @endphp
                      
                  
                    <tr>
                      
                        <td>{{$count}}</td>
                        <td>{{$recruiter->first_name}} {{$recruiter->last_name}}</td>
                        <td>{{$recruiter->user->email}}</td> 
                        <td>{{ $recruiter->created_at->format('d/m/Y')}}</td>  
                       

                            <td>@if($recruiter->manual) <span class="badge badge-success">Data Entry</span>
                            @else 
                              @if($recruiter->user->provider)
                              <span class="badge badge-warning">{{$recruiter->user->provider}}</span>
                            @else  <span class="badge badge-primary">Email Sign up</span>
                             @endif
                            @endif</td> 
                            <td>@if($recruiter->active) <span class="badge badge-success">active</span>
                            @else<span class="badge badge-warning">Pending</span>
                            @endif</td>
                        
                       
                        <td class="td-actions text-right">
                        @if(!$recruiter->active)

                        {{-- <a href="#" data-toggle="modal" data-target="#decline_{{$recruiter->id}}" class="btn btn-danger btn-xs"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Decline Email</a> --}}
                        <div class="modal fade" id="decline_{{$recruiter->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><strong> Send this mail to: {{$recruiter->user->email}} </strong></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <form action="{{action('Admin\RecruitersController@mail_decline')}}" method="post">
                                    @csrf    
                                <div class="modal-body">

                                            <input type="hidden" class="form-control" name="first_name" value="{{$recruiter->first_name}}" readonly id="first_name"  >
                                            <input type="hidden" class="form-control" name="email" value="{{$recruiter->user->email}}" readonly id="email"  >
                                           
                                        <div class="form-group bmd-form-group">
                                            <textarea rows="4" cols="50" class="form-control ckeditor" name="message" id="message">                    <div class="email-content">
                                                <p>Dear {{$recruiter->first_name}},  </p>
                                                <p>After a manual review of your account, we could not find enough information to verify you as an eligible consultant for our platform. </p>
                                                <p>We encourage you to provide us with more details in reply to this email so that we can activate your account.</p>
                                                <p style="line-height:1.4">Regards<br>
                                                Team PersonalSite Inc.
                                                </p>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Email</button>
                                    </form>
                                    </div>
                                </div>
                               
                            </div>
                            
                        </div>


                            <a href="{{ url('dashboard/recruiters/activate/' . $recruiter->id) }}" ><button type="button" rel="tooltip" class="btn btn-success " data-original-title="" title="Activate">
                              approve
                            </button></a>
                            @else
                            <a href="{{ url('dashboard/recruiters/deactivate/' . $recruiter->id) }}" ><button type="button" rel="tooltip" class="btn btn-warning " data-original-title="" title="Deactivate">
                              disapprove
                            </button></a>@endif
                            <a href="{{ route('recruiters.edit',$recruiter->id) }}" ><button type="button" rel="tooltip" class="btn btn-success btn-link" data-original-title="" title="Edit">
                              <i class="material-icons">edit</i>
                            </button></a>
                            <a href="{{ route('recruiters.show',$recruiter->id) }}" ><button type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="" title="View">
                              <i class="material-icons">visibility</i>
                            </button></a>
                            
                            <form class="delete-form" action="{{ route('recruiters.destroy',$recruiter->id) }}" class="d-inline" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-link" title="Delete">
                                <i class="material-icons">close</i>
                              </button>
  
                            </form>
                            
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
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{asset('admin/dashboard/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
   <!--  Plugin for Sweet Alert -->
   <script src="{{asset('admin/dashboard/assets/js/plugins/sweetalert2.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Initialise Sweet Alert library
      demo.showSwal();
    });
  </script>
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
    $('.delete-form').on('submit', function(e){
    e.preventDefault();
    demo.showSwal('delete-recruiter', this);

    })

    demo = {
      showSwal: function(type, form) {
    if (type == 'delete-recruiter') {
      var formdata =form;
      swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this Rrcruiter!',
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

