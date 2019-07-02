<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>sellerProfile</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sellerProfile.css')}}">
    
</head>

<body style="width: 100%;height: 100vh;background-color: rgb(177,171,171);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color: rgb(120,65,65);">
        <div class="container"><a class="navbar-brand" href="{{route('seller.profile')}}"  style="color: rgb(11,153,234);">Profile</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('seller.uploadphoto')}}" style="color: rgb(10,145,221);">Upload Photo</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('seller.changeinformation')}}" style="color: rgb(10,145,221);">Update Infoformation</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('seller.uploadedphoto')}}" style="color: rgb(10,145,221);">Uploaded Photo</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('seller.changepassword')}}" style="color: rgb(10,145,221);">Change Password</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('logout.index')}}" style="color: rgb(10,145,221);">Log Out</a></li>
                </ul>
        </div>
        </div>
    </nav>

    
    
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>