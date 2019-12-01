<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login UKF</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/ukf.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lo/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lo/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lo/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lo/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lo/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lo/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lo/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lo/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lo/css/util.css">
    <link rel="stylesheet" type="text/css" href="lo/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('lo/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <span class="login100-form-logo" >
                     <a href="{{ URL::asset('index')}}">
            <img src="{{ URL::asset('images/ukf.png')}}" alt="Logo"  style="width:100px; " >
                    </a></span>
                <span class="login100-form-title p-b-34 p-t-27">
Prihlásenie					</span>

                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Prihlásiť
                    </button>
                </div>
                <p><a href="{{ url('password/reset') }}">Forgot My Password</a>

            </form>
        </div>
    </div>
</div>
        </div>
    </section>


<div id="dropDownSelect1"></div>
<script src="lo/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="lo/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="lo/vendor/bootstrap/js/popper.js"></script>
<script src="lo/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="lo/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="lo/vendor/daterangepicker/moment.min.js"></script>
<script src="lo/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="lo/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="lo/js/main.js"></script>

</body>
</html>