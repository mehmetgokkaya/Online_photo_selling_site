<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>table</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Lora')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Article-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Table-With-Search-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Table-With-Search.css')}}">
</head>

<body style="width: 100%;height: 100vh;background-color: rgb(176,192,194);">
    <div class="article-clean"></div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr></tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <div class="col-md-12 search-table-col">

        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div>
        <span class="counter pull-right"></span>

        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <div class="col-12 col-md-4 offset-md-4"><a href="{{ URL::previous() }}" style="color: #cc0000" >BACK</a></div>
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg-1">User Id</th>
                        <th id="trs-hd" class="col-lg-2">User Name</th>
                        <th id="trs-hd" class="col-lg-3">Email</th>
                        <th id="trs-hd" class="col-lg-2">Phone</th>
                        <th id="trs-hd" class="col-lg-2">Balance</th>
                        <th id="trs-hd" class="col-lg-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($infotable as $ds)
        
        
                    <tr>
                        <td>{{$ds['uid']}}</td>
                        <td>{{$ds['username']}}</td>
                        <td>{{$ds['email']}}</td>
                        <td>{{$ds['phone']}}</td>
                        <td>{{$ds['balance']}}</td>
                        
                            <td><a href="{{route('admin.userEdit', $ds['uid'])}}">Edit</a>|<a href="{{route('admin.userDelete', $ds['uid'])}}">Delete</a></td>
                            
                        
                    </tr>
                    @endforeach
        
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/Table-With-Search.js')}}"></script>
</body>

</html>