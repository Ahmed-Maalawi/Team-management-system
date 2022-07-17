<!doctype html>
<html class="no-js" lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Resala - Admin Management system for teams </title>
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
{{--                                    towastr--}}

    {{-- toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

</head>

<body class="skin-dark">
{{--<div style="z-index: 9999; position: fixed; width: 100%; border: 0px; padding: 5px; margin: 0px; background-color: transparent;  font-size: 12pt; font-family: sans-serif;" id="web2disk_nag" onclick="javascript: document.getElementById('web2disk_nag').style.display = 'none';">--}}
{{--    <div style="color: #000000; background-color:#F1F1F1; margin-left: auto; margin-right: auto; border-width: 2px; border-style: solid; width: 550px; ">--}}
{{--        <div style="width: 100%; text-align: center; font-weight: bold; border: 0px; margin: 0px; padding: 0px">Hey, where did my words go? (Click to hide)</div>--}}
{{--        <p>In the trial version of Web2Disk every fifth word is blanked out.--}}
{{--            To copy this site with all the words, please upgrade to the full version and copy this website again.</p>--}}
{{--        <div style="width: 100%; text-align: center; font-weight: bold; border: 0px; margin: 0px; padding: 0px">--}}
{{--            <a href="http://www.inspyder.com/products/Web2Disk/">Inspyder Web2Disk: The Website Downloader</a>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--</div>--}}

<div class="main-wrapper">


    <!-- Header Section Start -->
    @include('admin_theme.body.header')
    <!-- Header Section End -->
    <!-- Side Header Start -->
    @include('admin_theme.body.sidebar')
    <!-- Side Header End -->

    <!-- Content Body Start -->
    <div class="content-body">

        @yield('admin_content')

    </div>
    <!-- Content Body End -->

    <!-- Footer Section Start -->
    @include('admin_theme.body.footer')
   <!-- Footer Section End -->

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

<!-- Plugins & Activation JS For Only This Page -->

<!--Moment-->
<script src="{{ asset('assets/js/plugins/moment/moment.min.js') }}"></script>

{{--<!--Daterange Picker-->--}}
<script src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>

<!--Echarts-->
<script src="{{ asset('assets/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/chartjs/chartjs.active.js') }}"></script>

<!--VMap-->
<script src="{{ asset('assets/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('assets/js/plugins/vmap/vmap.active.js') }}"></script>

{{--    add toastr links    --}}
<script src="{{ asset('assets/js/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/toastr/toastr.active.js') }}"></script>



{{-- toastr js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @elseif(Session::has('info'))
        toastr.info('{{ Session::get('success') }}');
        @elseif(Session::has('warning'))
        toastr.warning('{{ Session::get('success') }}');
        @endif
    });

</script>
</body>

</html>
