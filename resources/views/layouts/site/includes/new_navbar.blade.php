<header>
    <!-- main-menu  start -->

    <section id="header-area" class="mt-0">
        <div class="main-menu">
            <nav class="navbar navbar-container navbar-expand-lg navbar-light bg-light  bg-white">
                <a class="navbar-brand" style="height:auto" href="{{ route('site.home') }}">
                    <img src="{{ asset('site/images/logo.png') }}" class="header-logo img-fluid">
                </a>
                <button class="bg-light navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse   ml-3" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Consulting
                            </a>
                            <div class="dropdown-menu top-d-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('site.employer') }}">Hire a
                                    Consultant</a>
                                <a class="dropdown-item" href="{{ route('site.jobs') }}">Find
                                    Consultant Gigs</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('site.branding') }}">Grow Your
                                    Consultancy</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                How It Works
                            </a>
                            <div class="dropdown-menu  top-d-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">I want to Work</a>
                                <a class="dropdown-item" href="#">I want to Hire</a>
                                {{-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a> --}}
                            </div>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link " href="{{ route('site.about') }}">
                                About
                            </a>
                        </li>
                        @guest
                            <li class="nav-item ">
                                <a href="{{ route('login') }}"
                                    class="btn btn-pill btn-outline-success btn-secondary-outline-green text-uppercase btn-header  ">Login</a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('register') }}"
                                    class="btn btn-pill btn-secondary-blue  btn-header-2  text-uppercase">
                                    Join Now
                                </a>
                            </li>
                        @else
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-user-circle" style="font-size: 22px;"></i>
                            </a>
                            <div class="dropdown-menu  top-d-menu" aria-labelledby="navbarDropdown">
                                <ul style="padding: 0;list-style: none;text-align: left;">
                                    @role('consultant')
                                        <li class="menu-dropdown"><a class="dropdown-item"
                                                href="{{ route('consultant.edit', Auth::user()->id) }}">Edit
                                                profile</a></li>
                                    @endrole

                                    @role('recruiter')
                                        <li class="menu-dropdown"><a class="dropdown-item"
                                                href="{{ route('recruiter.edit', Auth::user()->id) }}">Edit
                                                profile</a></li>
                                    @endrole
                                    <li class="menu-dropdown"><a class="dropdown-item"
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>
                                </ul>



                                <form id="logout-form" action="{{ route('logout') }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                            
                        @endguest

                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <!-- main-menu end -->

</header>
