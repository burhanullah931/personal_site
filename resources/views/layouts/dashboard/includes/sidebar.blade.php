<div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
    <!--
       Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
       
       Tip 2: you can also add an image using data-image tag
       -->
    <div class="logo">
        <a href="{{ route('dashboard') }}" class="simple-text logo-mini">
            CD
        </a>
        <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
            CD | Dashboard
        </a>
    </div>
    @php
        $user=Auth::user();
    @endphp
        <div class="sidebar-wrapper">
            @role('consultant|superadmin')
            <div class="user">
                <div class="photo">
                    <img src="{{ asset('storage/site/images/users/'.$user->logo) }}" />
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
                        <span>

                            {{ $user->name }}

                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('profile.edit',$user->id ) }}">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> S </span>
                                    <span class="sidebar-normal"> Settings </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endrole
            @role('consultant')
            <ul class="nav">
               <li class="nav-item @if (Route::is('dashboard')) active @endif ">
                   <a class="nav-link" href="{{ route('dashboard') }}">
                       <i class="material-icons">dashboard</i>
                       <p> Dashboard </p>
                   </a>
               </li>
               <li class="nav-item {{request()->segment(2) == 'saved-jobs' ? 'active': ''}} ">
                  <a class="nav-link" href="{{route('admin.savedjob')}}">
                      <i class="material-icons">dashboard</i>
                      <p> Saved Jobs </p>
                  </a>
              </li>
              <li class="nav-item {{request()->segment(2) == 'recommended-jobs' ? 'active' : ''}}">
                <a class="nav-link" href="{{route('recommended.job')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Recommended Jobs </p>
                </a>
            </li>
            </ul>
            
         @endrole
         @role('superadmin')
            <div class="user">
                <ul class="nav">
                    <li class="nav-item @if (Route::is('dashboard')) active @endif ">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p> Dashboard </p>
                        </a>
                    </li>
                    <li class="nav-item @if (Route::is('orders')) active @endif ">
                        <a class="nav-link" href="{{ route('orders.index') }}">
                            <i class="material-icons">dashboard</i>
                            <p> Orders </p>
                        </a>
                    </li>
                    <li class="nav-item @if (Route::is('services.index')) active @endif ">
                        <a class="nav-link" href="{{ route('services.index') }}">
                            <i class="material-icons">dashboard</i>
                            <p> Services </p>
                        </a>
                    </li>
                    {{-- @hasrole('superadmin') --}}
                    <li class="nav-item @if (Route::is('data_operator')) active @endif ">
                        <a class="nav-link" href="{{ route('data_operator') }}">
                            <i class="material-icons">person</i>
                            <p> Data Operator </p>
                        </a>
                    </li>
                    <li class="nav-item @if (Route::is('consultants.index')) active @endif ">
                        <a class="nav-link" href="{{ route('consultants.index') }}">
                            <i class="material-icons">engineering</i>
                            <p> Consultants </p>
                        </a>
                    </li>
                    <li class="nav-item @if (Route::is('recruiters.index')) active @endif ">
                        <a class="nav-link" href="{{ route('recruiters.index') }}">
                            <i class="material-icons">self_improvement</i>
                            <p> Recruiters </p>
                        </a>
                    </li>
                    <li class="nav-item @if (Route::is('jobs.index')) active @endif ">
                        <a class="nav-link" href="{{ route('jobs.index') }}">
                            <i class="material-icons">work</i>
                            <p> Jobs </p>
                        </a>
                    </li>
                    <li class="nav-item @if (Route::is('categories.index')) active @endif ">
                        <a class="nav-link" href="{{ route('categories.index') }}">
                            <i class="material-icons">work</i>
                            <p> Categories </p>
                        </a>
                    </li>
                    <li
                        class="nav-item @if((Route::is('reviews.index')) || (Route::is('reviews.edit')) || (Route::is('reviews.create')))  active @endif  ">
                        <a class="nav-link" href="{{ url('dashboard/reviews') }}">
                            <i class="material-icons">rate_review</i>
                            <p> Reviews </p>
                        </a>
                    </li>
                    <li
                        class="nav-item @if((Route::is('faqs.index')) || (Route::is('faqs.edit')) || (Route::is('faqs.create')))  active @endif  ">
                        <a class="nav-link" href="{{ url('dashboard/faqs') }}">
                            <i class="material-icons">rate_review</i>
                            <p> FAQs </p>
                        </a>
                    </li>
                    <li class="nav-item @if (Route::is('contact_us')) active @endif ">
                        <a class="nav-link" href="{{ route('contact_us.index') }}">
                            <i class="material-icons">add_comment</i>
                            <p> Contact FormEntries </p>
                        </a>
                    </li>



                    <li class="nav-item @if (Route::is('maintenance.index')) active @endif ">
                        <a class="nav-link" href="{{ route('maintenance.index') }}">
                            <i class="material-icons">new_releases</i>
                            <p> Maintenance Mode </p>
                        </a>
                    </li>


                </ul>
            </div>
         @endrole
         <div class="user">
            <div class="user-info ">
                <a data-toggle="collapse" href="#resources" class="username" aria-expanded="true">
                    <span>
                        Resources & Free Cources
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse active" id="resources">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-normal"> Registered Cources </span>
                            </a>
                        </li>
                        <li class="nav-item {{request()->segment(2) =='courses' ? 'active' : ''}}">
                            <a class="nav-link"
                                href="{{route('admin.courses')}}">
                                <span class="sidebar-normal"> Register a new Cource </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-normal"> Download pdfs </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    @if($user->hasrole('dataop'))
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{ asset('storage/site/images/users/'.$user->logo) }}" />
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
                        <span>

                            {{ $user->name }}

                            <b class="caret"></b>
                        </span>
                    </a>

                </div>
            </div>
            <div class="user">
                <ul class="nav">

                    <li class="nav-item @if (Route::is('dataop/dashboard')) active @endif ">
                        <a class="nav-link" href="{{ url('dataop/dashboard') }}">
                            <i class="material-icons">work</i>
                            <p> Jobs </p>
                        </a>
                    </li>






            </div>
            </ul>

        </div>
    @endif
</div>
