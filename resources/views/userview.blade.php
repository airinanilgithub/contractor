@extends("usertheme")
@section("content")
<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

</style>
<style>

</style>
<body>
<br>


<br>
<br>
<br>
<br>
<section style="background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(https://images.unsplash.com/photo-1523821741446-edb2b68bb7a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80); height:1000px; 	background-size: cover;">
<div class="container">
<div class="row">



<div class="col col-12 col-sm-12 col-md-12 col-lg-12">

<br>

<form class="d-flex" method="post" action="/cussearch">
      {{csrf_field() }}
      <div class="container">
<input class="form-control me-2"  style="height:50px"type="search" placeholder="Search" aria-label="Search"  name="ptitle" >

 <button class="btn btn-outline-success" type="submit">Search</button></div></form>
      
      </div>
      </div>




<div class="main">

 <!--cards -->
 @foreach($projects as $project)
<div class="card">

<div class="image">
<img height="300px" src="{{ URL ::asset('assets/project_img/'.$project->pimage) }}">
</div>
<div class="title">
 <h1>
 {{$project->ptitle}}</h1>
</div>
<div class="des">
 <p>Rs {{$project->pprize}}/-</p>
<button>
<a href={{"/userviewdetails/".$project->id}} >Read More...</a>
</button>
</div>
</div>
@endforeach
</div>
<section>
<br>
<br>
</div>
@endsection