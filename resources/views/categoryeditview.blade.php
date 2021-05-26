@extends("admintheme")
@section("content")
<div class="container">

<div class="row">


<div class="col">
<form action="/categoryeditprocess/{{ $categorys->id }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}<table class="table table-borderless">

<tr>
    <td>Category id:</td>
    <td><input type="text"  name="cid" class="form-control" value="{{$categorys->cid}}"></td>

</tr>
<br>

<tr>
    <td> Category Name:</td>
    <td><input type="text"  name="cname" class="form-control" value="{{$categorys->cname}}"></td>
</tr>
<br>






<tr>
    <td>
   <center> <td><button class="btn btn-success">EDIT</button></a></td></center>
   </td>
</tr>
</div>
</div>

</div>




<div class="container">
<br>
<br>
<br>
<br>
<div class="row">






</form>







@endsection