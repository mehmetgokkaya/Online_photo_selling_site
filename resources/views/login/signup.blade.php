<!DOCTYPE html>
<html style="width: 100%;height: 100vh;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>signup</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/signup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/signup1.css')}}">
</head>

<body style="background-image: url(&quot;assets/img/signup.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;width: 100%;height: 100vh;background-color: #ffffff;">
    @if($errors->any())
            @foreach($errors->all() as $error)
             <p>{{$error}}</p>
            @endforeach

             @endif
    <form method="post"  style="background-color: rgba(56,64,71,0.74);font-size: 16px;padding: 0px;padding-bottom: 10px;padding-top: 10px;padding-right: 0px;padding-left: 0px;font-family: lifecraft;box-shadow: inset deepskyblue 0px 0px 20px 2px;color: rgb(34,106,179);margin-top: 166px;">
        {{@csrf_field()}}
        <h1 class="text-center text-white" style="font-size: 38px;color: rgb(239,235,235);letter-spacing: 0px;font-family: lifecraft;margin-top: 0px;padding-top: 0px;padding-right: 5px;padding-bottom: 0px;padding-left: 5px;margin-bottom: 0px;">Create your free account.</h1>
        <div class="form-group" style="margin-right:24px;margin-left:24px;margin-bottom:16px;"><input class="form-control form-control-sm" type="text" name="username" value="{{ old('username') }}"  placeholder="User Name" maxlength="20" minlength="3" autofocus="" autocomplete="on" style="height: 36px;font-size: 20px;background-color: rgba(0,0,0,0.5);padding: 0px;padding-left: 8px;color: rgb(231,235,239);"></div>
        <div
            class="form-group" style="margin-left:24px;margin-right:24px;"><input class="form-control form-control-sm" type="password" name="password"  placeholder="Password" autofocus="" autocomplete="on" style="height:36px;font-size:20px;background-color:rgba(0,0,0,0.5);padding:0px;padding-left:8px;"></div>
            <div
                class="form-group" style="margin-right:24px;margin-left:24px;"><input class="form-control form-control-sm" type="password" name="password-repeat"   placeholder="Confirm Password" autofocus="" autocomplete="on"
                    style="height:36px;font-size:20px;background-color:rgba(0,0,0,0.5);padding:0px;padding-left:8px;"></div>
                <div class="form-group" style="margin-right: 24px;margin-left: 24px;padding-top: 11px;"><input class="form-control form-control-sm" type="text" name="email"  value="{{ old('email') }}" placeholder="Email" autofocus="" autocomplete="on" style="height: 36px;font-family: lifecraft;font-size: 20px;background-color: rgba(0,0,0,0.5);padding: 0px;padding-left: 8px;color: rgb(231,235,239);"></div>
                <div
                    class="form-group" style="margin-right: 24px;margin-left: 24px;padding-top: 11px;"><input class="form-control form-control-sm" type="text" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="Phone Number" minlength="11" autofocus="" autocomplete="on" style="height: 36px;font-family: lifecraft;font-size: 20px;background-color: rgba(0,0,0,0.5);padding: 0px;padding-left: 8px;color: rgb(231,235,239);"></div>
                    <div>
                        <fieldset>
                            <legend style="margin-right: 1px;margin-left: 27px;color: rgb(179,184,188);">Select Type</legend>
                            <div class="custom-control custom-radio" style="margin-left: 27px;margin-top: -7px;"><input type="radio" name="usertype" value="buyer" checked="" id="customRadio1" class="custom-control-input"><label class="custom-control-label" for="customRadio1" style="color: rgb(176,190,205);">As a Buyer</label></div>
                            <div class="custom-control custom-radio"
                                style="margin-left: 26px;"><input type="radio" name="usertype" value="seller" id="customRadio2" class="custom-control-input"><label class="custom-control-label" for="customRadio2" style="color: rgb(176,190,205);">As a Seller</label></div>
                        </fieldset>
                    </div>
                    <div class="form-group mx-auto mx-sm-auto mx-md-auto mx-lg-auto mx-xl-auto" style="width:150px;margin-top:10px;height:34px;margin-bottom:10px;"><button class="btn btn-primary btn-block" type="submit" style="font-family: lifecraft;font-size: 33px;background-color: rgba(127,139,147,0.74);margin-top: 60px;width: 150px;font-weight: normal;line-height: 30px;color: rgb(41,163,231);letter-spacing: 1px;padding: 0px;">Register</button></div>
                    <div style="color:rgb(176,190,205); ">&nbsp &nbsp &nbsp Already Have an Account. Please <a href="{{route('login.index')}}" style="color: rgb(51, 187, 255);">Log In</a></div>
    </form>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>