<header>
    <!-- main-menu  start -->
    <section id="header-area" class="mt-0">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light  bg-blue">
                <a class="navbar-brand" style="height:auto" href="{{route('site.home')}}"><img src="{{ asset('/site/images/logo.png')}}" class="header-logo img-fluid"></a>
                <button class="bg-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse   ml-3" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('site.howitworks')}}">
                                How it Works
                            </a>
                            @if(Request::segment(1)=='how-it-works')
                            <div class="border-bottom-active"></div>
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.about')}}">About</a>
                            @if(Request::segment(1)=='about-us')
                            <div class="border-bottom-active"></div>
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('site.contact')}}">Contact</a>
                            @if(Request::segment(1)=='contact')
                            <div class="border-bottom-active"></div>
                            @endif
                        </li>
                    </ul>
                    @guest
                    <span class="action mr-4">
                        <a href="{{route('login')}}" class="d-inline-block pr-4 d-block-res">Log In</a>
                        <a href="{{route('register')}}" class="d-inline-block bg-green px-3 border-radius-30">Sign Up</a>
                    </span>
                    @else
                    <li class="nav-item dropdown" style="list-style: none">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{-- @role('consultant')
                            {{ Auth::user()->consultant->first_name }}
                            @endrole
                            @role('recruiter')
                            {{ Auth::user()->recruiter->first_name }}
                            @endrole
                            @role('superadmin')
                            {{ Auth::user()->name }}
                            @endrole --}}
                            <i class="far fa-user-circle" style="font-size: 22px;"></i>

                            <!-- <span class="caret"></span> -->
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 8px; background-color: black; width: 100%; text-align: center; ">

                        <ul style="padding: 0;list-style: none;text-align: left;">
                        @role('consultant')
                            <li class="menu-dropdown"><a class="dropdown-item" href="{{ route('consultant.edit', Auth::user()->id) }}"  >Edit profile</a></li>
                            @endrole

                            @role('recruiter')
                            <li class="menu-dropdown"><a class="dropdown-item" href="{{ route('recruiter.edit', Auth::user()->id) }}"  >Edit profile</a></li>
                            @endrole
                            <li class="menu-dropdown"><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
                        </ul>



                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                    @endguest
                    <form class="form-inline my-2 my-lg-0" id="search_form" action="{{action('PageController@search_consultants_form')}}">
                        @csrf
                        @method('GET')
                        <div class="input-group md-form form-sm form-2 pl-0">
                            <input class="form-control my-0 py-1 search-field r-border" name="title" type="text" placeholder="Search Consultant" aria-label="Search">
                            <div class="input-group-append">
                                <span class="input-group-text bg-white" id="submit-button"><i class="fas fa-search " aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
        <div class="sub-menu">
            <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-light  bg-green py-0">
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active"@if(Request::segment(1)=='employer')
                        style="list-style: none; margin-left:.5rem";
                        ><i class="fas fa-greater-than mr-1"></i> @else > @endif
                            <a class="nav-link  d-inline-block" href="{{route('site.employer')}}">
                               Hire a Consultant
                            </a>
                            <div class="border-bottom-active"></div>
                        </li>
                        <li class="nav-item"@if(Request::segment(1)=='jobs')
                        style="list-style: none; margin-left:.5rem";
                        ><i class="fas fa-greater-than mr-1"></i> @else > @endif
                            <a class="nav-link d-inline-block" href="{{route('site.jobs')}}">Find Consulting Gigs</a>
                        </li>
                        <li class="nav-item"@if(Request::segment(1)=='branding')
                        style="list-style: none; margin-left:.5rem";
                        ><i class="fas fa-greater-than mr-1"></i> @else > @endif
                            <a class="nav-link d-inline-block" href="{{route('site.branding')}}">Grow Your Consultancy</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <!-- main-menu end -->

</header>