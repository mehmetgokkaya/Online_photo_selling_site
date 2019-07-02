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
                <h1>Delete User </h1>
               {{@csrf_field()}}
               <table>
                
                
                <div class="form-row form-group">
                  
                    <tr>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> ID </label></div></td>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> : </label></div></td>
                   <td> <div class="col-sm-6 input-column"><label class="col-form-label" for="name-input-field"> {{$infotable['uid']}} </label></div></td>
                
                   </tr> 
                </div>
                
                    

                    
                <div class="form-row form-group">
                    <tr>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> NAME </label></div></td>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> : </label></div></td>
                   <td> <div class="col-sm-6 input-column"><label class="col-form-label" for="name-input-field"> {{$infotable['username']}} </label></div></td>

                   </tr>
                </div>
                

                <div class="form-row form-group">
                    <tr>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> EMAIL </label></div></td>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> : </label></div></td>
                   <td> <div class="col-sm-6 input-column"><label class="col-form-label" for="name-input-field"> {{$infotable['email']}} </label></div></td>

                   </tr>
                </div>
                
               <div class="form-row form-group">
                    <tr>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> </label></div></td>
                   <td> <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">  </label></div></td>
                   <td> <div class="col-sm-6 input-column"><label class="col-form-label" for="name-input-field"> </label></div></td>

                   </tr>
                </div>
                


                </table>
               
                

                
                <div><label>ARE YOU SURE TO DELETE THIS USER</label></div><button class="btn btn-light submit-button" type="Submit">Submit Form</button>
                <div class="col-12 col-md-4 offset-md-4"><a href="{{ URL::previous() }}" style="color: #cc0000" >BACK</a></div>
              </form>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>