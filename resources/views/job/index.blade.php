@extends('layouts.site.app')


@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<style>
.ck-editor__editable_inline {
    min-height: 200px;
}</style>
<section id="requirement-page">
   <div class="container">
    <div class="row">
        <div class="col-md-12 header-title">
            <h1 class="text-center">Post a Job</h1>
        </div>
    </div>
</div> 
</section>


<section id="register-form" class="edit-profile" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="row">
       
            <div class="col-lg-8 col-lg-offset-2 form-card">
                <h2 class="text-center">Post a job</h2>
                
               <div class="">
               
                <div class="row">
                  
                  <!-- edit form column -->
                  <div class="col-md-12 personal-info">
                  @if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<div class="col-md-12 personal-info">
                  @if ($message = Session::get('danger'))
<div class="alert alert-danger">
  <p>{{ $message }}</p>
</div>
@endif
                    
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('JobController@store') }}" enctype="multipart/form-data" data-parsley-validate="">
                        @method('POST')
                        @csrf()
                    
                        

                        <h2 class="profile-heading">Job Info</h2>

                        <div class="col-md-6">
                            
                            <input type="text" id="job_title" name="job_title" placeholder="Job Title" class="form-group " value=""
                            required
                    data-parsley-required-message="Job Title name is required."
                     data-parsley-errors-container=".errorsjobtitleinput" 
                            >
                            <div class="errorsjobtitleinput">
                         @error('job_title')
                         <div class="alert alert-danger" role="alert">
                            {{$message}}
                          </div>
                         @enderror
                    </div>
                        </div>
                        <div class="col-md-6">
                           
                            <input type="text" id="employer" name="employer" placeholder="Employer" class="form-group " value=""
                            required 
                        data-parsley-required-message="Employer name is required."
                        data-parsley-errors-container=".errorsemployernameinput"
                            >
                            <div class="errorsemployernameinput">
                            @error('employer')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                            
                            <input type="text" id="location" name="location" placeholder="Job Location" class="form-group" value=""
                            required 
                        data-parsley-required-message="Job Location is required."
                        data-parsley-errors-container=".errorslocationinput"
                            >
                            <div class="errorslocationinput">
                            @error('location')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                            
                            <input type="text" id="joblink" name="joblink" placeholder="Job Link" class="form-group" value=""
                            required 
                        data-parsley-required-message="Job Link is required."
                        data-parsley-type="url"
                        data-parsley-errors-container=".errorsjoblinkinput"
                            >
                            <div class="errorsjoblinkinput">
                            @error('joblink')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-6 form-group"  style=" margin-right:0">
                        <select name="job_category_id" id="job_category_id" class="form-control" style="box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, .25);
    background-color: whitesmoke;
    border-radius: 8px; background-color:#f5f5f5; height:45px;" required 
                        data-parsley-required-message="Job Category is required."
                        data-parsley-errors-container=".errorscategoryinput">
                        <option value=""  disabled selected>Select Category</option>

                        @foreach ($jobcat as $cat)    
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
  
                            </select>
                            <br>
                            <div class="errorscategoryinput">
                            @error('job_category_id')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-6 form-group" style=" margin:0">
                        <select name="data_oprator" id="data_oprator" class="form-control" required style="box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, .25); 
    background-color: whitesmoke;
    border-radius: 8px; background-color:#f5f5f5; height:45px;" data-parsley-required-message="Select Your name from drop down."
                        data-parsley-errors-container=".errorsdataopinput">
                         
                        <option value=""  disabled selected>Select Data Operator</option>
                        <option value="Khawaja Hamad">Khawaja Hamad</option>
                        <option value="Kiran Amin">Kiran Amin</option>
                        <option value="Sajid Nazar">Sajid Nazar</option>
                        <option value="Daniyal Hussain">Daniyal Hussain</option>
                        <option value="Subhan Nadeem">Subhan Nadeem</option>
                        <option value="Irum Khalil">Irum Khalil</option>
                        <option value="Rabia Shafiq">Rabia Shafiq</option>
                        <option value="Sehar Khan">Sehar Khan</option>
                        <option value="Rafy Alam">Rafy Alam</option>
                        <option value="Hamza Akbar">Hamza Akbar</option>
                        <option value="Jarhan Azeem">Jarhan Azeem</option>
                        <option value="Zahid Ali">Zahid Ali</option>
                        <option value="Sabeen Jameel">Sabeen Jameel</option>
                       
  
                            </select>
                            <br>
                            <div class="errorsdataopinput">
                            @error('data_oprator')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                           
                        </div>
                       
                        <!-- <div class="col-md-12">
                           
                            <textarea  id="description" name="description" placeholder="Job Description" class="form-group" cols="3" rows="5"
                            required 
                        data-parsley-required-message="Job Decription is required."
                        data-parsley-errors-container=".errorsdescinput"
                            ></textarea>
                            <div class="errorsdescinput">
                            @error('description')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                        </div> -->
                        <div class="col-md-12" style="padding:0; margin-top:10px;">
                        <textarea class="form-control" id="description" name="description" required
                        data-parsley-required-message="Description is required."
                        data-parsley-errors-container=".errorsdescinput"></textarea>
                        <script>
CKEDITOR.replace( 'description' );
</script>
<div class="errorsdescinput">
                            @error('description')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                            </div>            
                        <div class="col-sm-12 text-center">
                             <button class="btn btn-default submit-btn" type="submit">Post Job</button>
                        </div>
                     
                    </form>
                  </div>
              </div>
            </div>

            </div>
        </div>
    </div>
</section>
<script>function updateAllMessageForms()
{
    for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
    }
}</script>

@endsection