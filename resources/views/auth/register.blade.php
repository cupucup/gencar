<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>@yield('app-title', 'Login')</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
    <link rel="icon" href="https://ableproadmin.com/assets/images/favicon.svg" type="image/x-icon">
    <!-- [Font] Family -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/inter/inter.css" id="main-font-link" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style-preset.css" />
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
    <div class="auth-wrapper v1">
        <div class="auth-form">
        <div class="card my-5">
            <div class="card-body">
                <h4 class="text-center f-w-500 mb-3">Register Account</h4>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <?= $error ?>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required autofocus placeholder="Full Name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Confirm Password">
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- [Page Specific JS] start -->
    @yield('js-plugin')
    <!-- [Page Specific JS] end -->

    <!-- Required Js -->
    <script src="{{ asset('assets') }}/js/jquery.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/fonts/custom-font.js"></script>
    <script src="{{ asset('assets') }}/js/config.js"></script>
    <script src="{{ asset('assets') }}/js/pcoded.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/feather.min.js"></script>

    <script>
        $('#toggle-password').click(function () {
            if( $(this).attr('data-toggle') == 'close' ){
                $(this).html('<i class="fa fa-eye-slash"></i>')
                $('#password').attr('type', 'text')
                $(this).attr('data-toggle', 'open')
            }else{
                $(this).html('<i class="fa fa-eye"></i>')
                $('#password').attr('type', 'password')
                $(this).attr('data-toggle', 'close')
            }
        })
    </script>


</body>
<!-- [Body] end -->
</html>
