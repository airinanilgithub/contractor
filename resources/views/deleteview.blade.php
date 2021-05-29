@extends("admintheme")
@section("content")
<div class="container">

<div class="row">


<div class="col">
<form action="/bookdeleteprocess/{{$projects->id}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}<table class="table table-borderless">

<tr>
    <td>Project id:</td>
    <td><input type="text"  name="pid" class="form-control" value="{{$projects->pid}}"></td>

</tr>
<br>

<tr>
    <td> Title:</td>
    <td><input type="text"  name="ptitle" class="form-control" value="{{$projects->ptitle}}"></td>
</tr>
<br>



<tr>
    <td>Area:</td>
    <td><input type="text" name="parea" class="form-control" value="{{$projects->parea}}"></td>
</tr>
<br>
<tr>
    <td>Bedrooms:</td>
    <td><input type="text" name="pbedroom" class="form-control" value="{{$projects->pbedroom}}"></td>
</tr>
<br>



<tr>
    <td>Place:</td>
    <td><input type="text" name="pplace" class="form-control"  value="{{$projects->pplace}}"></td>
</tr>

<br>
<tr>
    <td>Prize:</td>
    <td><input type="text" name="pprize" class="form-control" value="{{$projects->pprize}}"></td>
</tr>
<tr>
<td>Category:</td>
   <td> <input type="text" name="pcategory" class="form-control" value="{{$projects->pcategory}}">
   </td>
          </tr>   
<tr>
<tr>
    <td>Detailsone:</td>
    <td>
  
                            <textarea  name="pdetails" class="form-control" value="{{$projects->pdetails}}"  style="width: 100%; height: 150px;"></textarea>
                        </td>

</tr>
<br>

<tr>
    <td>Detailstwo:</td>
    <td> <textarea name="pdetailsnew" class="form-control"  value="{{$projects->pdetailsnew}}" style="width: 100%; height: 150px;"></textarea></td>
</tr>



<br>
<tr>

    <td>image1:</td>
    <td><input type="file" name="pimage"class="form-control" value="{{$projects->pimage}}"></td>
    
    
</tr>
<br>
<tr>

    <td>image2:</td>
    <td><input type="file" name="pimage1"class="form-control" value="{{$projects->pimage1}}"></td>
    
    
</tr>
<br>
<tr>

    <td>Floor Plan:</td>
    <td><input type="file" name="pimage2"class="form-control" value="{{$projects->pimage2}}"></td>
    
    
</tr>

<br>

<br>




<tr>
    <td></td>
   <center> <td><td> <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger"> DELETE  </button></td></td></center>
   
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
