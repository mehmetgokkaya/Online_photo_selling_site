<!DOCTYPE html>
<html style="width: 100%;height: 100vh;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>display</title>
     <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/display.css')}}">
    
</head>

<body style="padding-top: -11px;background-position: center;background-size: cover;background-repeat: no-repeat;height: 100vh;width: 100%;background-image: url(&quot;assets/img/display.jpg&quot;);">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgb(32,33,35);">
            <div class="container"><a class="navbar-brand" style="color: rgb(102,98,65);">Photo Gallery</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="color: rgb(48,86,38);">Buy and Sell Your Photoes</a></li>
                        <li class="nav-item" role="presentation"></li>
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(48,86,38);">Services</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="{{route('contact.index')}}">Contact Us</a><a class="dropdown-item" role="presentation" href="{{route('signup.index')}}">Register</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a class="login" href="{{route('signup.index')}}" style="color: rgb(30,90,139);">Sign Up</a></span><span class="navbar-text actions"> <a class="login" href="{{route('login.index')}}" style="color: rgb(30,90,139);">Log In</a></span></div>
    </div>
    </nav>
    </div>
     <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>