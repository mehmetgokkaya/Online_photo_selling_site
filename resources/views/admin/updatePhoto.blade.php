<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin UpdateInfo</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto')}}">
   
    <link rel="stylesheet" href="{{asset('assets/css/userUpdateInfo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/userUpdateInfo1.css')}}">
    
</head>

<body style="width: 100%;height: 100vh;background-color: rgb(115,128,135);">
    @if($errors->any())
            @foreach($errors->all() as $error)
             <p>{{$error}}</p>
            @endforeach

             @endif
    <div class="container">
        <div>
            <form method="post">
                {{@csrf_field()}}
                <strong style="color: rgb(255, 51, 51)">{{session('msg')}}</strong>
                <div class="form-group">
                    <div id="formdiv">
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Photo Name</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="photoName"  value="{{$tempupload['photoName']}}" maxlength="30" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Photo Type</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="photoType" value="{{$tempupload['photoType']}}"   style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Photo Description</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="photoDescription" value="{{$tempupload['photoDescription']}}"    style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>

                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Asking Price</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="price" value="{{$tempupload['askingPrice']}}"    style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>

                        <input type="hidden" name="pid" value="{{$tempupload['pid']}}">
                        <input type="hidden" name="uid" value="{{$tempupload['uid']}}">
                        <input type="hidden" name="photo" value="{{$tempupload['photo']}}">
                        
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-12 col-md-4 offset-md-4"><a href="{{route('admin.photoInfo')}}" style="color: #cc0000" >BACK</a><button class="btn btn-light btn-lg" type="submit" style="margin-left:16px;">Update</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
