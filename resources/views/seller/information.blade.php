<!DOCTYPE html>
<html style="width: 100%;height: 100vh;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile Information</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Information.css')}}">
</head>

<body style="background-color: rgb(60,73,77);">
    <div class="row">
        <div class="col text-center">
            <div class="table-responsive">
                <table class="table">
                    <thead style="color: rgb(121,130,85);">
                        <tr>
                            <th>Account's Entity</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody style="color: rgb(131,147,163);">
                        <tr>
                            <td>Account Name</td>
                            <td>{{$user['username']}}</td>
                        </tr>
                        <tr>
                            <td>Registered Email</td>
                            <td>{{$user['email']}}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>{{$user['phone']}}</td>
                        </tr>
                        <tr>
                            <td>Available Balance</td>
                            <td>{{$user['balance']}}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div><a href="{{ url()->previous() }}" style="color: rgb(132,150,61);">BACK</a></div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>