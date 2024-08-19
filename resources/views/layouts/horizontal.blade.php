<!DOCTYPE html>
<html lang="en" data-layout="topnav">

<head>
    @include('layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.shared/head-css',['mode' => $mode ?? '', 'demo' => $demo ?? ''])
    @vite(['resources/js/hyper-head.js','resources/js/hyper-config.js'])
</head>

<body>
<!-- Begin page -->
<div class="wrapper">

    @include('layouts.shared/topbar')
    @include('layouts.shared/horizontal-nav')

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container -->

        </div>
        <!-- content -->

        @include('layouts.shared/footer')
    </div>

</div>
<!-- END wrapper -->
@yield('modal')

@include('layouts.shared/right-sidebar')

@include('layouts.shared/footer-scripts')

@vite(['resources/js/hyper-main.js','resources/js/hyper-layout.js'])

</body>
</html>