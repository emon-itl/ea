<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body> <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <div class="card">
    <div class="card-header">Contact Submitted successfully: Here is the details</div>
	<div class="card-body">
		<div class="form-group">
            	<label>Name1st :</label><span>{{$a['user_fname']}}</span>
            	<br>
            	<label>Name2nd:</label><span>{{$a['user_sname']}}</span>
            	<br>
                <label>Gender :</label><span>{{$a['gender']}}</span>
                <br>
            	<label>Email :</label><span>{{$a['user_email']}}</span>
                <br>
                <label>Message :</label><span>{{$a['user_phone']}}</span>
                </div>
                </div>
	            </div>
	            <a class="btn btn-primary" href="{{url('/')}}">Back to Home</a>


</div>
</body>
</html>