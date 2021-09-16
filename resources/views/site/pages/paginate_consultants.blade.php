<div id="consultants">
        @if((count($consultants))> 0)
            @foreach ($consultants as $consultant)
            <div class="hire-profile">
                <div class="row">
                    <div class="col-lg-2 hire-profile-img">
                    @if(($consultant->logo == Null) || ($consultant->logo == 'noimage.png'))
                            <img src="{{ asset('/site/images/default.png')}}" width="80px" height="80px" class="avatar img-circle rounded-circle" alt="avatar">
                            @else
                            <img src="{{ asset('/site/images/users/consultant/'.$consultant->logo) }}" width="80px" height="80px" class="avatar img-circle rounded-circle" alt="avatar">
                            @endif
                    </div>
                    <div class="col-lg-8">
                        <a href="{{route('consultant.profile', $consultant->id)}}"><h1 class="text-uppercase profile-name">{{$consultant->first_name}} {{$consultant->last_name}}</h1>
                            <h2 class="text-uppercase  job-title">{{$consultant->job_title}}</h2></a>
                       
                    </div>
                    <div class="col-lg-2 float-right mt-20">
                    @isset($consultant->current_salary)   
                    <p class="profile-rate">${{$consultant->current_salary}}/{{$consultant->compensation}}</p>
                        {{-- <p class="fav-heart"><i class="fas fa-heart"></i></p> --}}
                      @endisset
                      
                    </div>
                </div>
                <p class="profile-location"><i class="fas fa-map-marker-alt mr-2"></i> {{$consultant->region}} {{$consultant->country}}</p>
                      
                
                    {{--<p class="profile-desc half-desc" data-id="{{$consultant->id}}"> {!!substr($consultant->summary, 0, 200)!!}
                </p>--}}

                <div class="summary">
                <p class="collapse show in profile-desc" id="collapseSummary{{$consultant->id}}"  data-id="{{$consultant->id}}" aria-expanded="false">{{substr($consultant->summary, 0, 200)}}<span id="dots-{{$consultant->id}}">...</span><span class="more" id="more-{{$consultant->id}}">{{substr($consultant->summary, 200)}}</span>
                </p>
                <a onclick="myFunction('{{$consultant->id}}')" id="btn-{{$consultant->id}}" style="margin-bottom:30px; display:block; cursor:pointer">Read More</a>


        </div>
                    <!-- <a href="#" data-id="{{$consultant->id}}" class="show_hide">Show More</a> -->
          
                    @foreach($consultant->skills as $skill)
                    <div class="skill-btn">{{$skill->title}}</div>
                    @endforeach
                    @if(($consultant->website) || ($consultant->linkedin))
                    <div class="profile-web-link text-center">
                        @if($consultant->website)
                        <a  href="{{$consultant->website}}" target="_blank"  style="padding-right:20px"><i class="fas fa-globe"></i> Website</a>
                        @endif
                        @if($consultant->linkedin)
                        <a  href="{{$consultant->linkedin}}" target="_blank" ><i class="fab fa-linkedin" style="    color: #00449b;"></i> LinkedIn</a>
                        @endif
                    </div>
                  @endif

            </div>
   
            @endforeach
            @else 
            <div class="hire-profile">
                <div class="row"> 
                    <div class="col-lg-12 text-center">
                        <h4>No Consultant Found</h4>
                    </div>
                </div>
            </div>
            @endif

            <div class="col-md-12 mt-2">
                <div class="float-right mt-2" style="float:right; margin-top:15px;">
                    {{$consultants->onEachSide(1)->links()}}
                </div>
            </div>
            
        </div>