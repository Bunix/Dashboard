<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>INSPINIA - @yield('title') </title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{!! asset('css/vendor.css') !!}"/>
<link rel="stylesheet" href="{!! asset('css/app.css') !!}"/>
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>