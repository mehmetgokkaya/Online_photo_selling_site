<!DOCTYPE html>
<html style="width: 100%;height: 100vh;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>forgotclass</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Contact-Form-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body>
    <div class="contact-clean">
        <form data-bss-recipient="89d662224ac4d7dc52fdd453023e4150">
            
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required=""></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14" required=""></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/smart-forms.min.js')}}"></script>
</body>

</html>