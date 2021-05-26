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
<tr><th scope="row">CATEGORY ID</th>
    <th scope="row">CATEGORY NAME</th>
    </tr>
    
@foreach($categorys as $category)

<tr class="table-primary">
   
    <td >{{$category->cid}}</td>
  
    <td>{{$category->cname}}</td>
  
    
</tr>

@endforeach
</table>





@endsection

</div>
</div>







