<!DOCTYPE html>
<html style="width: 100%;height: 100vh;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body style="background-color: rgb(84,80,80);">
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" style="background-color: rgb(129,143,143);" method="post">
                <h1>Delete Credit Request </h1>
               {{@csrf_field()}}
               <table>
                
                
                <div class="form-row form-group">
                  
                    <tr>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Credit Request ID </label></div></td>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> : </label></div></td>
                   <td> <div class="col-sm-6 input-column"><label class="col-form-label" for="name-input-field"> {{$creditrequest['cid']}} </label></div></td>
                
                   </tr> 
                </div>
                
                    

                    
                <div class="form-row form-group">
                    <tr>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> Amount </label></div></td>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> : </label></div></td>
                   <td> <div class="col-sm-6 input-column"><label class="col-form-label" for="name-input-field"> {{$creditrequest['amount']}} </label></div></td>

                   </tr>
                </div>
                

                <div class="form-row form-group">
                    <tr>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> EMAIL </label></div></td>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> : </label></div></td>
                   <td> <div class="col-sm-6 input-column"><label class="col-form-label" for="name-input-field"> {{$creditrequest['email']}} </label></div></td>

                   </tr>
                </div>
                
               
                


                </table>
               
                

                
                <div><label>Are you sure? this can't be undone if you click confirm!</label></div><button class="btn btn-light submit-button" type="Submit">Confirm</button></form>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>