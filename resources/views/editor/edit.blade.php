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
                <h2 class="text-center">Edit your profile information</h2>
                @if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
                
               <div class="">
               
                <div class="row">
                  
                  <!-- edit form column -->
                  <div class="col-md-12 personal-info">
                    
                    
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('consultants.update') }}" enctype="multipart/form-data" data-parsley-validate="">
                        
                        @csrf()
                    <input type="hidden" name="consultant_id" value="{{$consultant->id}}" >
                        <div class="text-center">
                            @if(($consultant->logo == Null) || ($consultant->logo == 'noimage.png'))
                            <img src="{{ asset('storage/site/images/users/default.png')}}" width="200px" class="avatar img-circle" alt="avatar">
                            @else
                            <img src="{{ asset('storage/site/images/users/consultant/'.$consultant->logo) }}" width="150px" height="150px" class="avatar img-circle" alt="avatar">
                            @endif
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

                        <h2 class="profile-heading">Personal info</h2>

                        <div class="col-md-6">
                            
                            <input type="text" id="fname" name="fname" placeholder="First Name" class="form-group " value="{{$consultant->first_name}}"
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
                           
                            <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-group " value="{{$consultant->last_name}}"
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
                            
                            <input type="text" id="title" name="title" placeholder="Designation" class="form-group" value="{{$consultant->job_title}}"
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
                           
                            <input type="text" id="rate" name="hourly_rate" placeholder="Hourly Rate" class="form-group" value="{{$consultant->current_salary}}"
                            required 
                        data-parsley-required-message="Hourly Rate is required."
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
                        <div class="col-md-12">
                           
                            <textarea  id="summary" name="summary" placeholder="Personal Summary" class="form-group" cols="3" rows="5"
                            required 
                        data-parsley-required-message="Summary is required."
                        data-parsley-errors-container=".errorssummaryinput"
                            >{{$consultant->summary}}</textarea>
                            <div class="errorssummaryinput">
                            @error('summary')
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
                            
                            <input type="text" id="city" name="city" placeholder="City" class="form-group" value="{{$consultant->city}}"
                            required 
                        data-parsley-required-message="City is required."
                        data-parsley-errors-container=".errorscityinput"
                            >
                            <div class="errorscityinput">
                            @error('city')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                            
                            <input type="text" id="state" name="state" placeholder="State" class="form-group" value="{{$consultant->region}}"
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
                            
                            <input type="text" id="country" name="country" placeholder="Country" class="form-group" value="{{$consultant->country}}"
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
                            
                          

                            @foreach($consultant->skills as $skill)
                            <option selected="selected">{{$skill->title}}</option>
                            
                            @endforeach
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
                            <input type="text" id="website" name="website" placeholder="http://yourwebsite.com" value="{{$consultant->website}}" class="form-group">
                        </div>

                        <div class="col-md-12 row">
                            <h2 class="profile-heading">LinkedIn Profile </h2>
                        </div>
                        <div class="col-md-12">
                            <input type="text" id="linkedin" name="linkedin" placeholder="Link" value="{{$consultant->linkedin}}" class="form-group">
                        </div>
                                       
                        <div class="col-sm-12 text-center">
                             <button class="btn btn-default submit-btn" type="submit">Update</button>
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