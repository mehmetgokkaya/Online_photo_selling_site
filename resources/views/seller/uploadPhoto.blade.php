<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>uploadPhoto</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/uploadPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uploadPhoto1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uploadPhoto2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uploadPhoto3.css')}}">
</head>

<body style="width: 100%;height: 100vh;">
    @if($errors->any())
            @foreach($errors->all() as $error)
             <p>{{$error}}</p>
            @endforeach

             @endif
    <div class="row register-form" style="width: 100%;height: 100vh;background-color: #413535;">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" method="post" enctype="multipart/form-data">
                {{@csrf_field()}}
                <h1>Upload Photo</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" >Photo Name</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="photoName" value="{{ old('photoName') }}"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" >Photo Type</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="photoType" value="{{ old('photoType') }}"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" >Photo Description</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="photoDescription" value="{{ old('photoDescription') }}"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" >Asking Price</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="askingPrice" value="{{ old('askingPrice') }}" ></div>
                </div>
                <p>Select Photo</p>
                <div class="form-row form-group">
                    <div class="col"><input type="file" accept="images/*" name="select_file"></div>
                </div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="checkbox" value="1" id="formCheck-3"><label class="form-check-label" for="formCheck-3" style="padding: 3px;">I've read and accept the terms and conditions</label></div><button class="btn btn-light submit-button"
                    type="submit" value="submit">Submit</button></form>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/Profile-Edit-Form.js')}}"></script>
</body>

</html>