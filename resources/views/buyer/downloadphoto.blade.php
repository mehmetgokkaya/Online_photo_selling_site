<!DOCTYPE html>
<html>
<head>
	<title>Download photo</title>
</head>
<body>

	<!-- <img src="/assets/Tempuploads/{{$imagename}}" width='600' height='400'>
	<a href="/assets/Tempuploads/{{$imagename}}">Download</a> -->

	<a download="custom-filename.jpg" href="/assets/Tempuploads/{{$imagename}}" title="ImageName">
    <img alt="ImageName" src="/assets/Tempuploads/{{$imagename}}">
</a>
<h3>Click The Photo to Download.</h3><br/>
<a href="{{route('buyer.index')}}">Back To Home</a>

</body>
</html>