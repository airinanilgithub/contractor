@extends("admintheme")
@section("content")
<div class="container">

<div class="row">


<div class="col">
<form action="/projectadd" method="post" enctype="multipart/form-data">
{{csrf_field()}}<table class="table table-borderless">

<tr>
    <td>Project id:</td>
    <td><input type="text"  name="pid" class="form-control" ></td>

</tr>
<br>

<tr>
    <td> Title:</td>
    <td><input type="text"  name="ptitle" class="form-control"></td>
</tr>
<br>
<tr>
    <td>Area:</td>
    <td><input type="text" name="parea" class="form-control"></td>
</tr>

<br>
<tr>
    <td>Bedrooms:</td>
    <td><input type="text" name="pbedroom" class="form-control"></td>
</tr>
<br>



<tr>
    <td>Place:</td>
    <td><input type="text" name="pplace" class="form-control"></td>
</tr>

<br>


<tr>
    <td>Prize:</td>
    <td><input type="text" name="pprize" class="form-control"></td>
</tr>
<tr>
<td>Category:</td>
   <td> <select name="pcategory" class="form-control">
    @foreach($bcategory as $bcategory)
              <option>{{$bcategory->cname }}</option>
              @endforeach
              </select></td>
          </tr>   


          <tr>
    <td>Detailsone:</td>
    <td>
  
                            <textarea  name="pdetails" class="form-control"   style="width: 100%; height: 150px;"></textarea>
                        </div>

</tr>
<br>

<tr>
    <td>Detailstwo:</td>
    <td> <textarea name="pdetailsnew" class="form-control"    style="width: 100%; height: 150px;"></textarea></td>
</tr>
<br>
<tr>
    <td>image1:</td>
    <td><input type="file" name="pimage"class="form-control"></td>
    
    
</tr>
<tr>
    <td>image2:</td>
    <td><input type="file" name="pimage1"class="form-control"></td>
    
    
</tr>
<tr>
    <td>Floor Plan:</td>
    <td><input type="file" name="pimage2"class="form-control"></td>
    
    
</tr>





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






</form>







@endsection



