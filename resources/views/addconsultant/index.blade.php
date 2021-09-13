@extends('layouts.site.app')


@section('content')
<section id="requirement-page">
   <div class="container">
    <div class="row">
        <div class="col-md-12 header-title">
            <h1 class="text-center">CONSULTANT PROFILE</h1>
        </div>
    </div>
</div> 
</section>
<style>.select2-search__field{ min-width:200px;} </style>

<section id="register-form" class="edit-profile" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 col-lg-offset-2 form-card">
                <h2 class="text-center">Add Consultant</h2>
                @if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
               <div class="">
               
                <div class="row">
                  
                  <!-- edit form column -->
                  <div class="col-md-12 personal-info">
                    
                    
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('AddConsultantController@store') }}" enctype="multipart/form-data" data-parsley-validate="">
                        @method('POST')
                        @csrf()
                    
                        <div class="text-center">
                            
                            <img src="{{ asset('site/images/default.png')}}" width="200px" class="avatar img-circle" alt="avatar">
                           
                            <h6>Upload a different photo...</h6>
                            
                            <input type="file" class="form-control @error('firstname') has-error @enderror" style="margin:auto" name="logo" 
                                data-parsley-required-message="Profile image is required."
                                data-parsley-errors-container=".errorsimageinput" >
                                <div class="errorsimageinput mt-20">
                         @error('logo')
                         <div class="alert alert-danger" role="alert">
                            {{$message}}
                          </div>
                         @enderror
                    </div>
                          </div>

                        <h2 class="profile-heading">Personal Info</h2>

                        <div class="col-md-6">
                            
                            <input type="text" id="fname" name="fname" placeholder="First Name" class="form-group " value=""
                            required
                    data-parsley-required-message="First name is required."
                     data-parsley-errors-container=".errorsfirstnameinput" 
                            >
                            <div class="errorsfirstnameinput">
                         @error('fname')
                         <div class="alert alert-danger" role="alert">
                            {{$message}}
                          </div>
                         @enderror
                    </div>
                        </div>
                        <div class="col-md-6">
                           
                            <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-group " value=""
                            required 
                        data-parsley-required-message="Last name is required."
                        data-parsley-errors-container=".errorslastnameinput"
                            >
                            <div class="errorslastnameinput">
                            @error('lname')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                           
                            <input type="text" id="email" name="email" placeholder="Email" class="form-group " value=""
                            required 
                        data-parsley-required-message="Email is required."
                        data-parsley-errors-container=".errorsemailinput"
                            >
                            <div class="errorsemailinput">
                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                           
                            <input type="password" id="password" name="password" placeholder="Password" class="form-group " value=""
                            required 
                        data-parsley-required-message="Password is required."
                        data-parsley-errors-container=".errorspasswordinput"
                            >
                            <div class="errorspasswordinput">
                            @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                            
                            <input type="text" id="title" name="title" placeholder="Designation" class="form-group" value=""
                            required 
                        data-parsley-required-message="Profile title is required."
                        data-parsley-errors-container=".errorstitleinput"
                            >
                            <div class="errorstitleinput">
                            @error('title')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                            
                            <input type="text" id="company" name="company" placeholder="Company" class="form-group" value=""
                            
                        data-parsley-errors-container=".errorscompanyinput"
                            >
                            <div class="errorscompanyinput">
                            @error('company')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        
                       
                        

                       
                      
                        <div class="col-md-6 form-group" style=" margin-bottom:0">
                        <select name="category_id" id="category_id" class="form-control" required style="box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, .25); 
    background-color: whitesmoke;
    border-radius: 8px; background-color:#f5f5f5; height:45px;" data-parsley-required-message="Select category from drop down."
                        data-parsley-errors-container=".errorscategoryinput">
                         
                        <option value=""  disabled selected>Select category</option>
                        @foreach($jobcat as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                              
                          @endforeach
                        
                       
  
                            </select>
                            <br>
                            <div class="errorscategoryinput">
                            @error('category_id')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                           
                        </div>
                        <div class="col-md-12">
                           
                            <textarea  id="summary" name="summary" placeholder="Personal Summary" class="form-group" cols="3" rows="5"
                            required 
                        data-parsley-required-message="Summary is required."
                        data-parsley-errors-container=".errorssummaryinput"
                            ></textarea>
                            <div class="errorssummaryinput">
                            @error('summary')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-12 row">
                            <h2 class="profile-heading">Compensation</h2>
                        </div>
                        <div class="col-md-6 form-group" style=" margin:5px 15px 0px -15px">
                       <select name="compensation" id="compensation" class="form-control" required style="box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, .25); 
   background-color: whitesmoke;
   border-radius: 8px; background-color:#f5f5f5; height:45px;" data-parsley-required-message="Select compensation from drop down."
                       data-parsley-errors-container=".errorscompensationinput">
                        
                       <option value=""  disabled selected>Select Compensation</option>
                       <option value="hr">Hourly</option>
                       <option value="day">Daily</option>
                       <option value="month">Monthly</option>
                       
                      
 
                           </select>
                           <br>
                           <div class="errorscompensationinput">
                           @error('compensation')
                           <div class="alert alert-danger" role="alert">
                               {{$message}}
                             </div>
                           @enderror
                       </div>
                          
                       </div>
                        <div class="col-md-6">
                           
                           <input type="text" id="rate" name="hourly_rate" placeholder="Rate" class="form-group" value=""
                           required 
                       data-parsley-required-message="Rate is required."
                       data-parsley-type="digits"
                       data-parsley-errors-container=".errorsrateinput"
                           >
                           <div class="errorsrateinput">
                           @error('hourly_rate')
                           <div class="alert alert-danger" role="alert">
                               {{$message}}
                             </div>
                           @enderror
                       </div>
                       </div>
                      
                        

                        <div class="col-md-12 row">
                            <h2 class="profile-heading">Location</h2>
                        </div>

                      
                        <div class="col-md-6">
                            
                            <input type="text" id="state" name="state" placeholder="State" class="form-group" value=""
                            required 
                        data-parsley-required-message="State is required."
                        data-parsley-errors-container=".errorsstateinput"
                            >
                            <div class="errorsstateinput">
                            @error('state')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                            
                            <input type="text" id="country" name="country" placeholder="Country" class="form-group" value=""
                            required 
                        data-parsley-required-message="Country is required."
                        data-parsley-errors-container=".errorscountryinput"
                            >
                            <div class="errorscountryinput">
                            @error('country')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>


                        </div>

                        <div class="col-md-12 row">
                            <h2 class="profile-heading">Skills</h2>
                        </div>
                        <div class="col-md-12">
                           
                        <div class="form-group">
                            <select class="form-control js-example-tags"  name="skills[]" multiple="multiple" required 
                        data-parsley-required-message="Enter at least one skill."
                        data-parsley-errors-container=".errorsskillinput">
                            
                          

                            
                            
                           
                            </select>
                            <br>
                            <div class="errorsskillinput mt-20" >
                            @error('skills')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        </div>
                        <div class="col-md-12 row">
                            <h2 class="profile-heading">Website Link</h2>
                        </div>
                        <div class="col-md-12">
                            <input type="text" id="website" name="website" placeholder="http://yourwebsite.com" value="" class="form-group"
                            data-parsley-type="url"
                            data-parsley-errors-container=".errorswebinput">
                            <div class="errorsswebinput" >
                            @error('website')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-12 row">
                            <h2 class="profile-heading">LinkedIn Profile </h2>
                        </div>
                        <div class="col-md-12">
                            <input type="text" id="linkedin" name="linkedin" placeholder="Link" value="" class="form-group"
                            data-parsley-type="url"
                            data-parsley-errors-container=".errorslinkedininput">
                            <div class="errorslinkedininput" >
                            @error('linkedin')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                                       
                        <div class="col-sm-12 text-center">
                             <button class="btn btn-default submit-btn" type="submit">Save</button>
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