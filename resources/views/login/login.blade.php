<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-login.css') }}" />
        <link href="{{ asset('fonts/backend_fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="control-group normal_text"> <h3><img src="{{ asset('images/backend_images/logo.png')}}" alt="Logo" /></h3></div>

                        <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                         <span class="add-on bg_lg"><i class="icon-user"></i></span><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                    </div>
                </div>

                        <div class="form-actions">  
                            <span class="pull-left"><a class="flip-link btn btn-info" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></span>
                            <span class="pull-right"> <button type="submit" class="btn btn-primary">{{ __('Login') }}</button></a></span>
                      </div>
                    </form>
        </div>
        
        <script src="{{ asset('js/backend_js/jquery.min.js') }}"></script>  
        <script src="{{ asset('js/backend_js/matrix.login.js') }}"></script> 
    </body>

</html>
