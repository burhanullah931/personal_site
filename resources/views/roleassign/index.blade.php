@extends('layouts.site.app')

@section('styles')
  <style>
     input.parsley-success,
        select.parsley-success,
        textarea.parsley-success {
          color: #468847;
          background-color: #DFF0D8;
          border: 1px solid #D6E9C6;
        }
        
        input.parsley-error,
        select.parsley-error,
        textarea.parsley-error {
          color: #B94A48;
          background-color: #F2DEDE;
          border: 1px solid #EED3D7;
        }
        
        .parsley-errors-list {
          margin: 2px 0 3px;
          padding: 0;
          list-style-type: none;
          font-size: 0.9em;
          line-height: 0.9em;
          opacity: 0;
          color: #B94A48;
        
          transition: all .3s ease-in;
          -o-transition: all .3s ease-in;
          -moz-transition: all .3s ease-in;
          -webkit-transition: all .3s ease-in;
        }
        
        .parsley-errors-list.filled {
          opacity: 1;
        }
        .parsley-errors-list.filled li {
          width:100%!important
        }
        .careerfy-user-form i {

            position: relative;
            right: 10px;
            bottom: 30px;
            font-size: 20px;
            color: #aaaaaa;
            float: right;
        } 
  </style>  
@endsection
@section('content')
<section id="requirement-page">
    <div class="container">
     <div class="row">
         <div class="col-md-12 header-title">
             <h1 class="text-center">ROLE</h1>
         </div>
     </div>
 </div> 
 </section>
 
<section id="register-form" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 offset-lg-3 form-card">
                <h2 class="text-center">Role</h2>
          
              
            <form role="form" method="POST" action="{{ action('RoleAssignController@update') }}" data-parsley-validate="">
            @csrf
            <div class="col-md-12 form-group @error('role') has-error @enderror">
                            <h3>I am:</h3><br>
                        <input type="radio" id="Consultant" value="consultant" name="role" required data-parsley-errors-container=".errorroleinput" >
                        <label for="Consultant">Consultant</label>
                        <input type="radio" id="Recruiter" value="recruiter" name="role">
                        <label for="Recruiter">Recruiter</label>
                        <div class="errorroleinput">
                            @error('role')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
            </div>
            <div class="row">
            <div class="col-md-6"><h3><i class="fas fa-lock"></i>  Password</h3>
                <input type="password" id="password" name="password" required data-parsley-errors-container=".errorpasswordinput" placeholder="" class="form-group @error('password') has-error @enderror">
                <div class="errorpasswordinput">
                    @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6"><h3><i class="fas fa-lock"></i> Confirm Password</h3>
                <input type="password" id="confirmpass" name="confirmpassword" data-parsley-equalto="#password" required data-parsley-errors-container=".errorconfirmpasswordinput"placeholder="" class="form-group @error('confirmpassword') has-error @enderror">
                <div class="errorconfirmpasswordinput">
                    @error('confirmpassword')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                      </div>
                    @enderror
                </div>
            </div>
          </div> 
                   

                   

                    <div class="col-sm-12 text-center">
                       <button class="btn btn-default submit-btn" type="submit">Continue</button>
                    </div>
                </form>
               
                
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="{{asset('site/plugin/parsley.js')}}"></script>
@endsection


