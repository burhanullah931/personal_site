

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
                    <h4 class="card-title">Consultants</h4>
                </div>
                <div class="card-body">
                    <div class="toolbar ">
                        <!-- <a href="{{route('consultants.create')}}"> <button  class="btn btn-primary btn-round">
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
                                    <th>Category</th>
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
                                    <th>Category</th>
                                    <th>Registration Type</th>
                                    <th>Status</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @isset($consultants)
                                @php
                                $count=0;  
                                @endphp
                                @foreach ($consultants as $consultant)
                                @php
                                $count++;  
                                @endphp

                                @isset($consultant->user->email)
                                    
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$consultant->first_name ?? ''}} {{$consultant->last_name ?? ''}}</td>
                                    <td>{{$consultant->user->email ?? ''}}</td>
                                    <td>{{ $consultant->created_at->format('d/m/Y') ?? ''}}</td>
                                    <td>@if($consultant->job_category ?? ''){{$consultant->job_category->name ?? ''}} @endif</td>
                                    <td>@if($consultant->manual) <span class="badge badge-success">Data Entry</span>
                                        @else 
                                        @if($consultant->user->provider)
                                        <span class="badge badge-warning">{{$consultant->user->provider ?? ''}}</span>
                                        @else  <span class="badge badge-primary">Email Sign up</span>
                                        @endif
                                        @endif
                                    </td>
                                    <td>@if($consultant->active) <span class="badge badge-success">active</span>
                                        @else<span class="badge badge-warning">Pending</span>
                                        @endif
                                    </td>
                                    <td class="td-actions text-right">
                                        @if(!$consultant->active)
                                        {{-- <a href="#" data-toggle="modal" data-target="#decline_{{$consultant->id}}" class="btn btn-danger btn-xs"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Decline Email</a> --}}
                                        <div class="modal fade" id="decline_{{$consultant->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><strong> Send this mail to: {{$consultant->user->email}} </strong></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{action('Admin\ConsultantsController@mail_decline')}}" method="post">
                                                        @csrf    
                                                        <div class="modal-body">
                                                            <input type="hidden" class="form-control" name="first_name" value="{{$consultant->first_name}}" readonly id="first_name"  >
                                                            <input type="hidden" class="form-control" name="email" value="{{$consultant->user->email}}" readonly id="email"  >
                                                            <div class="form-group bmd-form-group">
                                                                <textarea rows="4" cols="50" class="form-control ckeditor" name="message" id="message">                    <div class="email-content">
                                                                    <p>Dear {{$consultant->first_name}},  </p>
                                                                    <p>After a manual review of your account, we could not find enough information to verify you as a
                                                                        qualified consultant for our platform.</p>
                                                                    <p>We encourage you to provide us with more details in reply to this email to activate your account.</p>
                                                                    <p>PersonalSite is an exclusive community and we only accept experienced senior-level
                                                                        professionals to join our network.</p>
                                                                        <p>If you can provide us your LinkedIn profile or a link to your website in reply to this email, it will
                                                                            help us verify your professional experience.</p>
                                                                    <p style="line-height:1.4">Regards,
                                                                    
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
                                        </div>
                    </div>
                    @endif
                    @if(!$consultant->active)
                    <a href="{{ url('dashboard/consultants/activate/' . $consultant->id) }}" ><button type="button" rel="tooltip" class="btn btn-success " data-original-title="" title="Activate">
                    approve
                    </button></a>
                    @else
                    <a href="{{ url('dashboard/consultants/deactivate/' . $consultant->id) }}" ><button type="button" rel="tooltip" class="btn btn-warning " data-original-title="" title="Deactivate">
                    disapprove
                    </button></a>@endif
                    <a href="{{ route('consultants.edit',$consultant->id) }}" ><button type="button" rel="tooltip" class="btn btn-success btn-link" data-original-title="" title="Edit">
                    <i class="material-icons">edit</i>
                    </button></a>
                    <a href="{{ route('consultants.show',$consultant->id) }}" ><button type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="" title="View">
                    <i class="material-icons">visibility</i>
                    </button></a>
                    <form class="delete-form" action="{{ route('consultants.destroy',$consultant->id) }}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-link" title="Delete">
                    <i class="material-icons">close</i>
                    </button>
                    </form>
                    </td>
                </tr>
                @endisset

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
    demo.showSwal('delete-consultant', this);
    
    })
    
    demo = {
      showSwal: function(type, form) {
    if (type == 'delete-consultant') {
      var formdata =form;
      swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this consultant!',
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

