<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="container d-flex">
                                <form action="" method="POST" class="m-auto bg-white p-5 rounded-sm shadow-lg w-form">
                                    @csrf
                                    <h2 class="text-center">
                                        Registrar
                                    </h2>
                                   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Email Adrres</label>
                                        <input name="email" type="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1" 
                                        aria-describedat="emailHelp" placeholder="Enter email">
                                        @error('email')
                                            <small class="text-danger mt-1">
                                                <strong>{{$message }}</strong>
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Password</label>
                                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" 
                                        placeholder="Password">
                                        @error('password')
                                        <small class="text-danger mt-1">
                                            <strong>{{$message }}</strong>
                                        </small>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Password confirmacion</label>
                                        <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" 
                                        placeholder="Password">
                                        @error('password_confirmation')
                                        <small class="text-danger mt-1">
                                            <strong>{{$message }}</strong>
                                        </small>
                                    @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
                                </form>
                            </div>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
