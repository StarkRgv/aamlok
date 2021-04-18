<!doctype html>
<html class="no-js" lang="">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stark') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="auth/image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="auth/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="auth/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="auth/font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="auth/css/style.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="fxt-template-animation fxt-template-layout3" data-bg-image="auth/img/figure/bg3-r.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 fxt-none-991">
                    <div class="fxt-header">
                        <div class="fxt-transformY-50 fxt-transition-delay-1">
<!--                            <a href="login-3.html" class="fxt-logo"><img src="img/logo-3.png" alt="Logo"></a>-->
                        </div>
                        <div class="fxt-transformY-50 fxt-transition-delay-2">
                            <h1>Welcome to AAMLOK</h1>
                        </div>
                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                            <p>Shop Here !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-form">
                            <h2>Register</h2>
                            <p>Create an account</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="input-label">Full Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="input-label">Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="input-label">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                                <div class="form-group">
                                    <label for="password" class="input-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <i toggle="#re-password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="fxt-btn-fill">Register</button>
                                </div>
                            </form>
                        </div>
                        <div class="fxt-footer">
                            <p>Have an account?<a href="{{ route('login') }}" class="switcher-text2 inline-text">Log in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="auth/js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="auth/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="auth/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="auth/js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="auth/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="auth/js/main.js"></script>

</body>


</html>
