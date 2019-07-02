<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>profile</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/profile_admin.css')}}">
</head>

<body style="background-color: rgb(87,109,125);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color: rgb(24,55,65);">
        <div class="container"><a class="navbar-brand" href="{{route('buyer.profile')}}" style="color: rgb(20,159,134);">Buyer Profile</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('buyer.changepassword')}}" style="color: rgb(137,118,16);">Change Password</a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('buyer.changeinformation')}}" style="color: rgb(137,118,16);">Edit Information</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('buyer.creditrequest')}}" style="color: rgb(137,118,16);">Request Credit</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('buyer.requestlist')}}" style="color: rgb(137,118,16);">Request's List</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('buyer.buyphoto')}}" style="color: rgb(137,118,16);">Buy Photo</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('buyer.downloadlist')}}" style="color: rgb(137,118,16);">Downloadable list</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('logout.index')}}" style="color: rgb(137,118,16);">Log OUT</a></li>
                </ul>
                
        </div>
        </div>
    </nav>

    <h3>{{session('buyer')}}</h3>
    
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>