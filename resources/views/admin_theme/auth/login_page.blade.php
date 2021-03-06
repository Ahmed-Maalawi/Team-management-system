<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Original URL: https://demo.hasthemes.com/adomx-preview/dark/login.html
    Date Downloaded: 6/14/2022 6:02:22 PM !-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>test - Login to Admin Panal </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- CSS
   ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" />

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/material-design-iconic-font.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/cryptocurrency-icons.css') }}" />

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css') }}" />

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}" />

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{ asset('assets/css/style-primary.css') }}" />

</head>

<body class="skin-dark">
<div class="main-wrapper">

    <!-- Content Body Start -->
    <div class="content-body m-0 p-0">

        <div class="login-register-wrap">
            <div class="row">

                <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                    <div class="login-register-form-wrap">

                        <div class="content">
                            <h1>Sign in </h1>
                            <p>Sign in As Admin For Manage the Teams </p>
                        </div>

                        <div class="login-register-form">
                            <form action="{{ route('admin.login') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-20">
                                        <input id="email" class="form-control" type="email" name="email" placeholder="Admin Email" />
                                    </div>
                                    <div class="col-12 mb-20">
                                        <input id="password" class="form-control" name="password" type="password" placeholder="Password" />
                                    </div>
                                    <div class="col-12 mb-20"><label for="remember" class="adomx-checkbox-2"><input id="remember" type="checkbox" /><i class="icon"></i>Remember. </label></div>
                                    <div class="col-12">
                                        <div class="row justify-content-between">
                                            <div class="col-auto mb-15">
                                                <a href="{{ route('password.request') }}">Forgot Password? </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-10">
                                        <input type="submit" class="button button-primary button-outline" value="sign in">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                    <div class="content">
                        <h1>Sign in </h1>
                        <p>Lorem Ipsum is simply _____ text of the printing ___ typesetting industry. </p>
                    </div>
                </div>

            </div>
        </div>

    </div><!-- Content Body End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<!--Plugins JS-->
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/tippy4.min.js.js') }}"></script>
<!--Main JS-->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
