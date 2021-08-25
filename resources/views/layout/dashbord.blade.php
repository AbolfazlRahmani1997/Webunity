<!doctype html>
<html lang="en" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">



    <!-- Icons -->
{{--    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">--}}
{{--    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">--}}
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>--}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->

    <!--
        Basic RTL CSS Overwrites (Please consider moving it in an external CSS file - it is added inline just for demostration)

        The UI elements will play nice with RTL in most cases. This file is provided as a get started point for RTL projects,
        so please have in mind that a few elements might require some further CSS adjustments.

        Moreover, .float-left/.float-right and .text-left/.text-right classes will come in handy
    -->
    <style>
        /* Set Text Direction to RTL */
        html {
            direction: rtl;
            text-align: right;
        }

        body {
            text-align: right;
        }

        /* Sidebar Mini */
        @media (min-width: 992px) {
            .sidebar-o.sidebar-mini #sidebar .sidebar-content {
                -webkit-transform: translateX(0) translateY(0) translateZ(0);
                transform: translateX(0) translateY(0) translateZ(0);
            }

            .sidebar-r.sidebar-o.sidebar-mini #sidebar .sidebar-content {
                -webkit-transform: translateX(-166px) translateY(0) translateZ(0);
                transform: translateX(-166px) translateY(0) translateZ(0);
            }

            .sidebar-r.sidebar-o.sidebar-mini #sidebar:hover .sidebar-content {
                -webkit-transform: translateX(0) translateY(0) translateZ(0);
                transform: translateX(0) translateY(0) translateZ(0);
            }
        }

        /* Main Sidebar Navigation */
        .nav-main a {
            padding-right: 40px;
            padding-left: 18px;
        }

        .nav-main a > i {
            right: 19px;
            left: auto;
        }

        .nav-main a.nav-submenu {
            padding-right: 40px;
            padding-left: 35px;
        }

        .nav-main a.nav-submenu::before, .nav-main a.nav-submenu::after {
            right: auto;
            left: 15px;
        }

        .nav-main a.nav-submenu::before {
            content: '\f105';
        }

        .nav-main a.nav-submenu::after {
            -webkit-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .nav-main ul {
            padding-right: 40px;
            padding-left: 0;
        }

        .nav-main ul a,
        .nav-main ul a.nav-submenu {
            padding-right: 0;
            padding-left: 8px;
        }

        .nav-main ul a > i {
            margin-right: 0;
            margin-left: 15px;
        }

        .nav-main ul ul {
            padding-right: 12px;
        }

        /* Main Header Navigation */
        @media (min-width: 992px) {
            .nav-main-header a > i {
                margin-right: 0;
                margin-left: 8px;
            }

            .nav-main-header a.nav-submenu {
                padding-right: 14px;
                padding-left: 28px;
            }

            .nav-main-header a.nav-submenu::before {
                right: auto;
                left: 6px;
            }

            .nav-main-header ul {
                right: 0;
                left: auto;
            }

            .nav-main-header ul a.nav-submenu::before {
                content: '\f104';
            }

            .nav-main-header ul ul {
                right: 100%;
                left: auto;
            }

            .nav-main-header > li:last-child ul {
                right: auto;
                left: 0;
            }

            .nav-main-header > li:last-child ul a.nav-submenu::before {
                content: '\f105';
            }

            .nav-main-header > li:last-child ul ul {
                right: auto;
                left: 100%;
            }
        }
    </style>
    <!-- END Stylesheets -->
</head>
<body>
<div id="page-container" class="sidebar-o sidebar-r side-scroll page-header-modern main-content-boxed enable-page-overlay">
    <!-- Side Overlay-->
@include('Dashbord.sidebar')
    <!-- END Sidebar -->

    <!-- Header -->

    <!-- END Header -->

@yield('content')
    @include('Dashbord.footer')
</div>
<!-- END Page Container -->

<!-- Codebase JS -->

<script src="/assets/js/codebase.core.min.js"></script>
<script src="/assets/js/codebase.app.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
{{--<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>--}}
{{--<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/body-scroll-lock/4.0.0-beta.0/bodyScrollLock.min.js" integrity="sha512-3Nm4Kyd9rUTWfh21EUrquXSPtan5lhhOFqnV7xdE9gW7+M8Y6FEyTf7NJQMwtMiCyulb6Wu6j6boo6Q79N/CPA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
<script type="text/javascript">


</script>
</body>
</html>
