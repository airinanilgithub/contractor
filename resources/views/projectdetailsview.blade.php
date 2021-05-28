@extends("admintheme")
@section("content")
<br>
<br>

<div class="container" >

<div class="row">


<table class="table table table-dark ">
<tr>
    
    <th>PROJECT ID</th>
    <th>PROJECT NAME </th>
    <th>AREA</th>
    <th>BEDROOM</th>
    <th>PLACE</th>
    <th>PRICE</th>
    <th>CATEGORY</th>
    <th>PROJECT DETAILS</th>
    <th>FEATURES</th>
    <th>IMAGE1</th>
    <th>IMAGE2</th>
    <th>FLOOR PLAN</th>
  
  
    <th>UPDATE </th>
    <th>DELETE </th>
</tr>
@foreach($projects as $project)
<tr>
    <td>{{ $project->pid}}</td>
    <td>{{ $project->ptitle}}</td>
    <td>{{ $project->parea }}</td>
    <td>{{ $project->pbedroom }}</td>
    <td>{{ $project->pplace}}</td>
    <td>{{ $project->pprize }}</td>
    <td>{{ $project->pcategory }}</td>
    <td>{{ $project->pdetails}}</td>
    <td>{{ $project->pdetailsnew}}</td>
   
    
    
    <td><img width="150" height="100" src="{{ URL ::asset('assets/project_img/'.$project->pimage) }}"></td>
    <td><img width="150" height="100" src="{{ URL ::asset('assets/project_img1/'.$project->pimage1) }}"></td>
    <td><img width="150" height="100" src="{{ URL ::asset('assets/project_img2/'.$project->pimage2) }}"></td>
    
    <td><a class="btn btn-warning" href={{"/editview/".$project->id}}>EDIT</a></td>
    <td><a class="btn btn-danger"  href={{"/deleteview/".$project->id}}>DELETE</a></td>

</tr>

@endforeach

</table>

</div>
</div>
</section>
@endsection