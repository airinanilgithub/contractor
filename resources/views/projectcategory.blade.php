@extends("admintheme")
@section("content")

<div class="container">

<div class="row">


<div class="col">
<form action="/categoryread" method="post">
{{csrf_field()}}<table class="table table-borderless">
<tr>

    <td>Category id:</td>
    <td><input type="text" name="cid" class="form-control"></td>

</tr>
<br>

<tr>
    <td>Category Name:</td>
    <td><input type="text" name="cname" class="form-control"></td>
</tr>
<br>
<br>
<tr>
    <td>
   <center> <td><button class="btn btn-success">Insert</button></a></td></center>
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





<table class="table table table-dark">
<tr><th scope="row">CATEGORY ID</th>
    <th scope="row">CATEGORY NAME</th>
    <th scope="row">UPDATE </th>
    <th scope="row">DELETE </th>
    </tr>
    
@foreach($categorys as $category)

<tr class="table-primary">
   
    <td >{{$category->cid}}</td>
  
    <td>{{$category->cname}}</td>
    
    

<td><a class="btn btn-warning" href={{"/categoryeditview/".$category->id}}>EDIT</a></td>
    <td><a class="btn btn-danger"  href={{"/categorydeleteview/".$category->id}}>DELETE</a></td>
@endforeach
</tr>
</table>







@endsection












