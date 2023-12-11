<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
    <link href="{{ asset('./admin_assets/css/sb-admin1.css') }}" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
        <form {{route('login/Verify')}} method="POST">
            @csrf
            <div class="icon" style="display: flex; justify-content: center; align-items: center;">
                <img src="{{ asset('admin_assets/img/logo.png') }}" style="width: 25vw;">
            </div>
            <h1>LOGIN</h1>
            @error('invalid_credentials')
            <div class="alert alert-dismissible fade show" role="alert" style="color: rgb(255, 0, 0);">
                <small>
                    {{ $message }}
                </small>
            </div>
            @enderror
            <div class="input-box">
                <input name="email" type="text" placeholder="Correo" value="{{old('email')}}" id="exampleInputEmail1" aria-describedat="emailHelp" required>
                <i class='bx bxs-user'></i>
                @error('email')
                <small class="text-danger mt-1">
                    <strong>{{$message }}</strong>
                </small>
                @enderror
            </div>
            <div class="input-box">
                <input name="password" type="password" placeholder="password" id="exampleInputPassword1" required>
                <i class='bx bxs-lock-alt'></i>
                @error('password')
                <small class="text-danger mt-1">
                    <strong>{{$message }}</strong>
                </small>
                @enderror
            </div>
            <button type="submit" class="btn">Ingresar</button>
            <br><br>
            
<div class="fb-login-button" data-width="20" data-size="large"  data-layout="rounded" data-auto-logout-link="true" data-use-continue-as="false" style="align-content: center"></div>
  
<!-- API de Facebook -->
<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '1034811190893901',
        cookie     : true,
        xfbml      : true,
        version    : 'v13.0'
      });
        
      FB.AppEvents.logPageView();
    };
  
    (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
            <div class="register">
                ¿No tienes cuenta?<div class="register"> <a href="">Registrarse</a>
                </div>
                
            </div>
            <br>
        </form>
    </div>
</body>
</html>
