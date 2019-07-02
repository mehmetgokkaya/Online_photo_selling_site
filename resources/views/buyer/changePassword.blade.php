<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>changePassword</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/changepassword.css')}}">
    
</head>

<body style="width: 100%;height: 100vh; background-color:rgb(36,65,89) ">
    @if($errors->any())
            @foreach($errors->all() as $error)
             <p>{{$error}}</p>
            @endforeach

             @endif
    <div class="login-clean" style="background-color: rgb(36,65,89);">
        <form method="post" style="background-color: rgb(46,85,85);">
            {{@csrf_field()}}
            <strong style="color: rgb(255, 51, 51)">{{session('msg')}}</strong>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>

            <div class="form-group"><input class="form-control" type="Password" name="mainPassword"  placeholder="Old Password" maxlength="50"></div>
            <div class="form-group"><input class="form-control" type="password" name="password"  placeholder="New Password" minlength="8"></div>
            <div class="form-group"><input class="form-control" type="password" name="cPassword"  placeholder="Confirm Password" minlength="8"></div>
            <input type="hidden" name="uid" value="{{session('uid')}}">
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Submit</button></div>
            <div class="col-12 col-md-4 offset-md-4"><a href="{{route('buyer.index')}}" style="color: #cc0000" >BACK</a></div>
        </form>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>