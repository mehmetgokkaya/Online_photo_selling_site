<!DOCTYPE html>
<html style="width: 100%;height: 100vh;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Confirm buy</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body style="background-color: rgb(84,80,80);">
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" style="background-color: rgb(129,143,143);" method="post">
                <h1>Confirm Buy</h1>
                {{@csrf_field()}}
                
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Available Balance </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" value="{{$balance}}" disabled=""></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Photo Price </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="amount" value="{{$photo['price']}}" disabled=""></div>
                </div>
                <div><img src="/assets/Tempuploads/{{$photo['photo']}}" width='600' height='400'></div>

                <input type="hidden" name="customerid" value="{{$photo['uid']}}">
                <input type="hidden" name="photoname" value="{{$photo['photo']}}">
                <input type="hidden" name="availablebalance" value="{{$balance}}">
                <input type="hidden" name="photoprice" value="{{$photo['price']}}">
                

                
                <div><label>Click <b>Confirm</b> Button to Buy this Photo.</label></div><a href="{{ url()->previous() }}">BACK</a><button class="btn btn-light submit-button" type="Submit">Confirm</button></form>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>