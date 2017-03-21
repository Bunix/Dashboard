<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA - @yield('title') </title>

    <link rel="stylesheet" href="{{asset('css/vendor.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">
            <!-- Page wrapper -->
            <div id="app">
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')
            <!-- Footer -->
            @include('layouts.footer')
            </div>
        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->



@section('scripts')
@show<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
</body>
</html>
