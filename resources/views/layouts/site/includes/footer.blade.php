<section id="footer">
  <div class="container">
      <div class="row text-center">


          <div class="col-md-4  text-left">
          <h3>Contact Us &nbsp;</h3>
          <p class="grey-color">Drop us a line if you  have any questions or concerns</p>
              <p><span><i class="fa fa-phone"></i></span> +1 (347) 759-6261</p>
              <p class="grey-color">We can be reached during the <br> following hours:<br> 9AM - 5PM EST.</p>

            </div>
          <div class="col-md-4 text-left" id="quicklink">
              <h3>Quick Links</h3>
              <p><a href="privacy-policy"><span><i class="fas fa-check"></i></span><span class="grey-color">Privacy Policy</span></a></p>
               {{-- <p><a href="{{route('site.revisions')}}"><span><i class="fas fa-check"></i></span>Revisions</a></p> --}}
              {{-- <p><a href="{{route('site.subscriptions')}}"><span><i class="fas fa-check"></i></span>Subscription</a></p>  --}}
              <p><a href="/faqs"><span><i class="fas fa-check"></i></span><span class="grey-color">FAQs</span></a></p>
              <p><a href="/terms-of-service"><span><i class="fas fa-check"></i></span><span class="grey-color">Terms Of Service</span></a></p>



          </div>

          <div class="col-md-4 text-left">
              <form action="{{route('site.callBack')}}" method="POST" id="call_back">
                  @csrf
              <h3> Callback Service</h3>
              <p class="grey-color">Please leave your number.</p>
              <p class="grey-color">We'll call you back immediately.</p>
              <input type="text" name="user_name" required placeholder="Enter Name"><br>
              <input type="number" name="phone" required placeholder="Your Phone Number"><br>
              <button class="btn btn-default" type="submit">Request A Call Back</button>
              </form>
          </div>
          <div class="col-md-6 m-auto text-center">
            <div class="get-started-btn">
              <div class="header-social-icons header-icons">
                  <span><a target="_blank" href="https://www.facebook.com/personalsiteofficial/"><i class="fab fa-facebook-f"></i></a></span>
                  <span><a target="_blank" href="https://www.instagram.com/personalsiteofficial/"><i class="fab fa-instagram"></i></a></span>
                  <span><a target="_blank" href="https://twitter.com/PersonlSite"><i class="fab fa-twitter"></i></a></span>

                  <span><a target="_blank" href="https://www.linkedin.com/company/personalsite/"><i class="fab fa-linkedin-in"></i></a></span>
                  </div>

              </div>
            <img src="{{ asset('/site/images/consulting-logo.png')}}" alt="" width="230px" style="margin-top: 20px">
            <p class="mt-2">Copyright <script>document.write(new Date().getFullYear())</script> -  All Rights Reserved.</p>
            <div class="divder-blue mt-2 mb-2" style="    background-color: #00449b;    width: 120px;
            margin: auto;
            height: 3px;"></div>
          </div>

      </div>
  </div>
</section>


{{-- <section id="footer-extra">
    <div class="container">
        <div class="row text-center">

            <p>© <script>document.write(new Date().getFullYear())</script> <a href="personalsite.com/branding">PersonalSite.com</a></p>


        </div>
    </div>
</section> --}}
{{-- preloader --}}
<div id="preloader" style="display: none">
  <div id="loader" class="text-center">
     <img src="{{ asset('/site/images/loading.gif') }}"
        alt="loader" />
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="scaleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

      </div>
      <section id="register-form" >
    <div class="">
        <div class="row">

            <div class="col-lg-12 ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h2 class="text-center">Log in and get to work</h2>
                @include('flash-message')
                <div id="social-login" class="text-center">
                    <h4>Login with Social Account</h4>
                    <a href="{{url('login/facebook')}}" class="loginBtn loginBtn--facebook">
                        Facebook
                    </a>

                      <a href="{{url('login/google')}}"  class="loginBtn loginBtn--google">
                        Google
                      </a>
                      <a href="{{url('login/linkedin')}}" class="loginBtn loginBtn--linkedin">
                         LinkedIn
                    </a>
                </div>
               <br><br>
            <form role="form" method="POST" action="{{ route('login') }}" data-parsley-validate="">
            @csrf
                    <div class="col-sm-12"><h3><i class="fas fa-envelope"></i> Email</h3>
                    <input type="email" id="email" name="email" placeholder="" required
                    data-parsley-required-message="Email is required."
                    data-parsley-errors-container=".errorsemailinput" placeholder="" class="form-group @error('email') has-error @enderror"></div>
                    <div class="erroremailinput">
                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>
                    <div class="col-sm-12"><h3><i class="fas fa-lock"></i> Password</h3>
                    <input type="password" id="password" name="password" placeholder=""  required
                    data-parsley-minlength="8"
                            data-parsley-required-message="Password is required and must be min 8 characters long."
                    data-parsley-errors-container=".errorspasswordinput" placeholder="" class="form-group @error('password') has-error @enderror"></div>


                    <div class="errorpasswordinput">
                            @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                              </div>
                            @enderror
                        </div>




                    <div class="col-sm-12 text-center">
                       <button class="btn btn-default submit-btn" type="submit">Login</button>
                    </div>
                </form>
                <div>
                    <h4 class="text-center">New to PS? <a href="/register">Sign Up here</a></h4>
                </div>

            </div>
        </div>
    </div>
</section>

    </div>
  </div>
</div>
<!-- Modal -->


<!-- Modal -->
<div class="modal fade" id="messagepop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

      </div>
      <section id="register-form" >
    <div class="">
        <div class="row">

            <div class="col-lg-12 ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="text-center mt-3">
            <img style="width:100px" src="{{asset('/site/images/favicon.ico')}}" alt="">

            </div>
                <h2 class="text-center mt-3">Your account is pending for review</h2>
                <p class="text-center">Update your profile with your complete inforamtion to get it approved so people can find you easily on PS</p>
                @guest
                @else
                @role('consultant')
                <a class="btn btn-default submit-btn" href="{{ route('consultant.edit', Auth::user()->id) }}" >Update Profile</a>
                @endrole
                @role('recruiter')
                <a class="btn btn-default submit-btn" href="{{ route('recruiter.edit', Auth::user()->id) }}" >Update Profile</a>
                @endrole
                @endguest

            </div>
        </div>
    </div>
</section>

    </div>
  </div>
</div>
<!-- Modal -->

<style>
.fade-scale {
  transform: scale(0);
  opacity: 0;
  -webkit-transition: all .25s linear;
  -o-transition: all .25s linear;
  transition: all .25s linear;
}
.fade-scale.in {
  opacity: 1;
  transform: scale(1);
}
.fade-scale .modal-dialog {
    position: absolute;
    left: 0;
    right: 0;
    top: 50%;
    transform: translateY(-50%) !important;
    max-width:600px;
}
</style>
