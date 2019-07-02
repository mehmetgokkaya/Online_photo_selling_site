<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>

<body>
    
    <div class="login-dark" style="background-repeat: no-repeat;background-position: center;width: 100%;height: 100vh;">
        <form method="post">
            {{@csrf_field()}}
             <strong>{{session('msg')}}</strong>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email" maxlength="50" ></div>
            <div class="form-group"><input class="form-control" type="password" name="password"  placeholder="Password" maxlength="25" minlength="8" ></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="submit">Log In</button></div><a href="{{route('forget.index')}}" class="forgot">Forgot your email or password?</a><a href="{{route('signup.index')}}" class="forgot" style="color: rgb(16,102,188);">SignUp!!!</a></form>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>