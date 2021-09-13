@extends('layouts.site.app')
@section('styles')
<title> - Consultant Directories</title>
@endsection
@section('content')

<section id="requirement-page">
    <div class="container">
     <div class="row">
         <div class="col-md-12 header-title">
             <h1 class="text-center">LOGIN</h1>
         </div>
     </div>
 </div> 
 </section>
 
<section id="register-form" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6 col-lg-offset-3 offset-lg-3 form-card">
                <h2 class="text-center">Log in and get to work</h2>
                <div id="social-login" class="text-center">
                    <h4>Login with Social Account</h4>
                    <a href="{{ route('login')}}" class="loginBtn loginBtn--facebook">
                        Facebook
                    </a>
                      
                      <a href="{{ route('login') }}"  class="loginBtn loginBtn--google">
                        Google
                      </a>
                      <a href="{{ route('login') }}" class="loginBtn loginBtn--linkedin">
                         LinkedIn
                    </a>
                </div>
               <br><br>
            <form role="form" method="POST" action="{{ route('login') }}">
            @csrf
                    <div class="col-sm-12"><h3><i class="fas fa-envelope"></i> Email</h3>
                    <input type="email" id="email" name="email" placeholder="" class="form-group"></div>
                    <div class="col-sm-12"><h3><i class="fas fa-lock"></i> Password</h3>
                    <input type="password" id="password" name="password" placeholder="" class="form-group"></div>
                   
                    
                    
                   

                   

                    <div class="col-sm-12 text-center">
                       <button class="btn btn-default submit-btn" type="submit">Login</button>
                    </div>
                </form>
                <div>
                    <h4 class="text-center">New to PS? <a href="register.html">Sign Up here</a></h4>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
    
@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

