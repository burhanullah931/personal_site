@extends('layouts.site.app')


@section('content')
<section id="requirement-page">
   <div class="container">
    <div class="row">
        <div class="col-md-12 header-title">
            <h1 class="text-center">Find PROFILE</h1>
        </div>
    </div>
</div> 
</section>
<style>.select2-search__field{ min-width:200px;} </style>

<section id="register-form" class="edit-profile" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="row">

            
            <div class="col-lg-8 col-lg-offset-2 form-card">
                <h2 class="text-center">Find consultant profile to edit</h2>
                @if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
                
               <div class="">
               
                <div class="row">
                  
                  <!-- edit form column -->
                  <div class="col-md-12 personal-info">
                    
                    
                    
                    <form class="form-horizontal" role="form" method="post" action="{{route('consultants.edit')}}" enctype="multipart/form-data" data-parsley-validate="">
                        
                        @csrf()
                    
                        

                        <h2 class="profile-heading">Email</h2>

                        <div class="col-md-12">
                            
                            <input type="email" id="email" name="email" placeholder="Email" class="form-group " 
                            required
                    data-parsley-required-message="Email  is required."
                     data-parsley-errors-container=".errorsfirstnameinput" 
                            >
                            <div class="errorsfirstnameinput">
                         @error('email')
                         <div class="alert alert-danger" role="alert">
                            {{$message}}
                          </div>
                         @enderror
                    </div>
                        </div>
                        
                        
                        

                        

                       
                        
                        

                        
                        
                        

                        
                                       
                        <div class="col-sm-12 text-center">
                             <button class="btn btn-default submit-btn" type="submit">Find</button>
                        </div>
                     
                    </form>
                  </div>
              </div>
            </div>

            </div>
        </div>
    </div>
</section>

@endsection