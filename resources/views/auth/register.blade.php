<!DOCTYPE html>
<html>

<head>

    @include('layouts.header')

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        {{--<div>--}}

            {{--<h1 class="logo-name">IN+</h1>--}}

        {{--</div>--}}
        <h3>Register to IN+</h3>
        <p>Create account to see it in action.</p>
        <form class="m-t" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" name="email" type="email" class="form-control" placeholder="Email" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
            </div>
            {{--<div class="form-group">--}}
                {{--<div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>--}}
            {{--</div>--}}
            <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

            <p class="text-muted text-center"><small>Already have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{route('login')}}">Login</a>
        </form>
        <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
    </div>
</div>
</body>

</html>
