<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('admin/images/icons/favicon.ico') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/animate/animate.css') }}">

    <!-- Hamburgers CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/css-hamburgers/hamburgers.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendor/select2/select2.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css') }}">
</head>


<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('template1/images/sekolah.png') }}" alt="IMG">
                </div>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form class="login100-form validate-form " method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <x-text-input id="email" class="input100" type="email" name="email" :value="old('email')"
                            placeholder="Enter Email Address..." required autofocus aria-describedby="emailHelp"
                            autocomplete="username" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <x-text-input id="password" class="input100" type="password" name="password"
                            placeholder="Password" required autocomplete="current-password" />

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

                    <div class="container-login100-form-btn">
                        <x-primary-button class="login100-form-btn">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- jQuery -->
    <script src="{{ asset('admin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>

    <!-- Popper.js -->
    <script src="{{ asset('admin/vendor/bootstrap/js/popper.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('admin/vendor/select2/select2.min.js') }}"></script>

    <!-- Tilt.js -->
    <script src="{{ asset('admin/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        });
    </script>

    <!-- Main JS -->
    <script src="{{ asset('admin/js/main.js') }}"></script>


</body>

</html>
