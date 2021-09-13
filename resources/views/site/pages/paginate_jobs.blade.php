<div id="job_listing">
    
    <div class="row search-details">
        <div class="col s12">
            <h2> Jobs</h2>
            {{-- <span class="vertical-bar vertical-bar--disable-small">
               @if ($jobs->currentPage() == 1){{$jobs->currentPage()}}@else{{(($jobs->currentPage()*25)-25)}}@endif - {{($jobs->currentPage()*25)}} of more than {{ $jobs->total() }} Jobs
                                        </span> --}}
            
        </div>
    </div>
    {{-- {{ $jobs->currentPage() }}
    {{ $jobs->count() }} --}}
            @if((count($jobs))> 0)
                
           
            @foreach($jobs as $job)
                
                        <div class="row job-listing">

                            <div class="col s12">
                                <h4><a target="_self" @guest data-toggle="modal"
                                        data-target="#scaleModal" @else
                                        href="{{ url('job/'.$job->id) }}"
                                        @endguest
                                        class="non-organic-link search-result-link">{{ $job->job_title }}</a>
                                </h4>
                                <!-- <a class="modal-trigger" href="#createAccountPrompt">
                                        <span class="icon-save-job-inactive save-job right"></span>
                                        </a> -->
                                <div class="show-on-large hide-on-med-and-down">
                                    <p class="f-s-14">
                                        <span
                                            class="vertical-bar semi-bold">{{ $job->employer }}</span>
                                        <span class="semi-bold">{{ $job->location }}</span>
                                    </p>
                                </div>

                                {{-- <div class="half-desc" data-id="{{$job->id}}">{!!substr($job->description, 0, 200)!!} @if(strlen($job->description) > 200) ... @endif</div> --}}
                                <div class="full-desc" >{!!strip_tags(substr($job->description, 0, 300))!!} @if(strlen($job->description) > 300) ... @endif </div>
                                @if(strlen($job->description) > 300)<a target="_self" @guest data-toggle="modal"  data-target="#scaleModal" @else  href="{{ url('job/'.$job->id) }}" @endguest  class="show_hide" style="font-weight: 500;color: #00449b;">Read More</a>@endif
                                <!-- <p class="job-footer f-s-14">
                                    <span>Sponsored</span>
                                </p> -->
                            </div>
                        </div>
                    
            @endforeach
            @else
            <div class="row job-listing">

                <div class="col s12 t">
                    <h4> No Job Found
                    </h4>
                    
                </div>
            </div>

            @endif


            <div class="col-md-12 " style="margin-bottom: 80px;">
                <div class="float-right" style="float:right; margin-top:15px;">
                    {{$jobs->onEachSide(1)->links() }}
                </div>
            </div>
           
        
</div>