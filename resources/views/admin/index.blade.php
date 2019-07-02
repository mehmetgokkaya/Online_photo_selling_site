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
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color: rgb(6,71,99);">
        <div class="container"><a class="navbar-brand" href="{{route('admin.profile')}}" style="color: rgb(20,159,134);">Admin Profile</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.photoInfo')}}" style="color: rgb(137,118,16);">Confirm Photo</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.changePassword')}}" style="color: rgb(137,118,16);">Change Password</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.userList')}}" style="color: rgb(137,118,16);">User List</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.creditrequest')}}" style="color: rgb(137,118,16);">Requested Credit</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.changeInformation')}}" style="color: rgb(137,118,16);">Edit Admin Information</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('logout.index')}}" style="color: rgb(137,118,16);">Log OUT</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>

                    <table >

                        <tr>
                            <td>

                                <h1></h1>
                                


                            </td>
                        </tr>
                        


                    </table>


                </form>
        </div>
        </div>
    </nav>
    <h6>{{session('msg')}}</h6>


    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>