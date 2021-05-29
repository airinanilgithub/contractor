
             <!DOCTYPE html>
			 <html lang="en">
			 <head>
				 <meta charset="UTF-8">
				 <meta http-equiv="X-UA-Compatible" content="IE=edge">
				 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				 <title>Document</title>
				 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
			 </head>
			 <body>
             <div class="container">
<br>
<br>
<br>
<br>

<style>


body {
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}
body:before {
	content: '';
	position: fixed;
	width: 100vw;
	height: 100vh;
	background-image: url(https://i.postimg.cc/8cf6v1rk/1.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
	-webkit-filter: blur(10px);
	-moz-filter: blur(10px);
	filter: blur(10px);
}
.contact-form {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 400px;
	height: 450px;
	padding: 80px 40px;
	background: rgba(0, 0, 0, 0.5);
}
.avatar {
	position: absolute;
	width: 80px;
	height: 80px;
	border-radius: 50%;
	overflow: hidden;
	top: calc(-80px/2);
	left: 190px;
}
.contact-form h2 {
	margin: 0;
	padding: 0 0 20px;
	color: #fff;
	text-align: center;
	text-transform: uppercase;
}
.contact-form p {
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #fff;
}
.contact-form input {
	width: 100%;
	margin-bottom: 20px;
}
.contact-form input[type=email], .contact-form input[type=password] {
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.contact-form input[type=submit] {
	height: 30px;
	color: #fff;
	font-size: 15px;
	background: red;
	cursor: pointer;
	border-radius: 25px;
	border: none;
	outline: none;
	margin-top: 15%;
}
.contact-form a {
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}
input[type=checkbox] {
	width: 20%;
}




</style>
<div class="row">

<div class="col">


</div>

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" style="background-image: url('https://image.freepik.com/free-photo/design-space-paper-textured-background_53876-32191.jpg'); background-size :100%;">
<br>
<br>
<br>
<br>
<br>
<center><<h1> <p class="text-white ">SIGN UP!</p><h1></center>
</div>
<div class="col col-12 col-sm-6 col-md-4 col-lg-4" style="background-image:url('')">
<form action="/adminlogs" method="post">
{{ csrf_field() }}
@if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
            </ul>
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif

<table class="table table-borderless">
<tr>
<br>
<br>
<br>


	<div class="contact-form">
		<img alt="" class="avatar" src="https://i.postimg.cc/zDyt7KCv/a1.jpg">
		<h2>ADMIN LOGIN</h2>
	
			<p>UserName</p><input type="text" name="adusername" placeholder="Enter the username**"class="form-control">
			<p>Password</p><input type="password" name="adpassword" placeholder="Enter the password**" style="background-color:#fff;color:black;" class="form-control"><button class="btn btn-success" type="submit">Login</button>
<br>
        <br>
       <br><a href="/index">User Login</a>
	
        </center>
   
	</div>
    









</table>


</form
<tr>
    <center>
    
</tr>
<div>
							
						</div>
</div>

<div class="col">



</div>
</div>
</div>



			 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
			 </body>
			 </html>
	

	
</body>
</html>