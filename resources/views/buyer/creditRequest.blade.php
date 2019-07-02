<!DOCTYPE html>
<html style="width: 100%;height: 100vh;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Credit Request</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body style="background-color: rgb(84,80,80);">
     @if($errors->any())
            @foreach($errors->all() as $error)
             <p>{{$error}}</p>
            @endforeach

             @endif

             <strong>{{session('buyernotification')}}</strong>
   
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" style="background-color: rgb(129,143,143);" method="post">
                <h1>Credit Request</h1>
                {{@csrf_field()}}
                
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" placeholder="Type Your Valid Email"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Amount </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="amount" placeholder="Enter Your Amount"></div>
                </div>
                

                
                <div><label>Click <b>Request</b> Button to request credit.</label></div><a href="{{route('buyer.index')}}" >BACK</a><button class="btn btn-light submit-button" type="Submit">Request</button></form>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>