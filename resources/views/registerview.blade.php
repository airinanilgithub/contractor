@extends("admintheme")
@section("content")

<div class="container">
<br>
<br>
<br>
<br>
<div class="row">

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" >
<br>
<br>

</div>




<table class="table table table-dark">
<tr><th scope="row">Name</th>
    <th scope="row">Phone</th>
    <th scope="row">Place</th>
    <th scope="row">Mailid</th>
    <th scope="row">Username</th>
    <th scope="row">Password</th></tr>
    
@foreach($registers as $register)

<tr class="table-primary">
   
    <td >{{$register->rname}}</td>
  
    <td>{{$register->rphone}}</td>
  
    <td>{{$register->rplace}}</td>
    
    <td>{{$register->rmailid}}</td>
   
    <td>{{$register->rusername}}</td>
    
    <td>{{$register->rpassword}}</td>
</tr>

@endforeach
</table>







@endsection

</div>
</div>







