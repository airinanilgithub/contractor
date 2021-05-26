<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
<br>
<br>
<br>
<br>
<div class="row">

<div class="col">


</div>

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" style="background-image: url('https://image.freepik.com/free-photo/design-space-paper-textured-background_53876-32191.jpg'); background-size :100%;">
<br>
<br>
<br>
<br>
<br>
<center><<h1> <p class="text-white "> ADMIN SIGN UP!</p><h1></center>
</div>
<div class="col col-12 col-sm-6 col-md-4 col-lg-4" style="background-image:url('')">
<form action="/adminlogin" method="post">
{{csrf_field()}}<table class="table table-borderless">
<tr>
<br>
<br>
<br>


    <td>NAME</td>
    <td><input type="text" name="adname" value="{{old('adname')}}" class="form-control">
    <span class="text-danger">@error('adname'){{$message}} @enderror  </span>
    </td>
</tr>
<tr>
    <td>PHONE</td>
    <td><input type="text"  name="adphone"  value="{{old('adphone')}}" class="form-control">
    <span class="text-danger">@error('adphone'){{$message}} @enderror  </span>
    </td>
</tr>

<tr>
    <td>MAIL ID</td>
    <td><input type="text" name="admailid"  value="{{old('admailid')}}"  class="form-control">
    <span class="text-danger">@error('admailid'){{$message}} @enderror  </span>
    </td>
</tr>
<tr>
    <td>USERNAME</td>
    <td><input type="text" name="adusername"  value="{{old('adusername')}}"  class="form-control">
    <span class="text-danger">@error('adusername'){{$message}} @enderror  </span>
    </td>
</tr>
<tr>
    <td>PASSWORD</td>
    <td><input type="password" name="adpassword"   value="{{old('adpassword')}}" class="form-control">
    <span class="text-danger">@error('adpassword'){{$message}} @enderror  </span>
    </td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success">REGISTER</button></td>
</tr>



</table>
</form>


<div>
							<a href="/adminlogin" class="txt1">
								Already have an account!Login
							</a>
						</div>
</div>

<div class="col">



</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>