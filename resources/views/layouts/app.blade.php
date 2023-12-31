<!doctype html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('sneat/assets/')}}"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}} - VKM</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&family=Noto+Serif+SC:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/fonts/boxicons.css')}}"/>

    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/css/core.css')}}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/css/theme-default.css')}}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{asset('sneat/assets/css/demo.css')}}"/>

    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"/>

    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/libs/apex-charts/apex-charts.css')}}"/>

    <script src="{{asset('sneat/assets/vendor/js/helpers.js')}}"></script>

    <script src="{{asset('sneat/assets/js/config.js')}}"></script>

    @stack('dataTablesCSS')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: "Inter Tight", sans-serif;
        }

        .text-mandarin {
            font-family: 'Noto Serif SC', serif;
        }
    </style>
</head>
<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <x-dashboard-sidebar/>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <x-dashboard-navbar/>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="" target="_blank" class="footer-link fw-bolder">VKM</a>
                        </div>
                    </div>
                </footer>

                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>

<script src="{{asset('sneat/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('sneat/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('sneat/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('sneat/assets/vendor/js/menu.js')}}"></script>

<script src="{{asset('sneat/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

<script src="{{asset('sneat/assets/js/main.js')}}"></script>

<script src="{{asset('sneat/assets/js/dashboards-analytics.js')}}"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

@stack('scripts')

<script src="{{asset('js/setNavbarTimeout.js')}}"></script>
<script src="{{asset('js/getSidebarMenu.js')}}"></script>
</body>

</html>
