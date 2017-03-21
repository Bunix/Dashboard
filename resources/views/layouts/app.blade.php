<!DOCTYPE html>
<html>
<head>
    @include('layouts.header')
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

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>
