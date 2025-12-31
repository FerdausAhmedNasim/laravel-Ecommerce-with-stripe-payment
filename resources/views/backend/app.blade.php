<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!--start style-->
    @include('backend.partials.styles')
    <!--end style-->

    <!--begin::Custom Stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">
    <!--end::Custom Stylesheet-->

    <!--end::Primary Meta Tags-->
    <!--begin::Favicon-->
    <link rel="shortcut icon" href="{{asset('frontend/images/shopping.png')}}" type="image/png">
    <!--end::Favicon-->
    
    <style>
        /* Light mode toastr style */
        body:not(.dark-mode) .toast {
            background-color: #ffffff !important;
            color: #000000 !important;
            border: 1px solid #ccc !important;
            z-index: 9999 !important;
        }
    
        /* Dark mode toastr style */
        body.dark-mode .toast {
            background-color: #2c2c2c !important;
            color: #ffffff !important;
            border: 1px solid #444 !important;
            z-index: 9999 !important;
        }
    
        /* Optional: link color fix inside toast */
        .toast a {
            color: #007bff;
        }
    </style>
    

</head>
<!--end::Head-->
<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary {{ session('mode') === 'dark' ? 'dark-mode' : 'light-mode' }}">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        @include('backend.partials.nav-top')
        <!--end::Header-->
        <!--begin::Sidebar-->
        @include('backend.partials.side-nav')
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            @yield('content')
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        @include('backend.partials.footer')
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    @include('backend.partials.scripts')
    <!--end::Script-->

    
    {{-- {!! Toastr::message() !!} --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showDuration": "300",
                "hideDuration": "1000",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
    
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @elseif(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @elseif(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @elseif(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
            @endif
        });
    </script>
    
</body>
<!--end::Body-->

</html>