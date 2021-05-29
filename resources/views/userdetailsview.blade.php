@extends("usertheme")
@section("content")
<style>
* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.hero{
    width: 100%;
}
.row{
    width: 90%;
    height: 100vh;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.col{
    flex-basis: 45%;
}
.slider{
    height: 80vh;
    display: flex;
}
.product img{
    height: 19vh;
    margin-bottom: 9px;
    cursor: pointer;
    opacity: 0.6;
}

.product img:hover{
    opacity: 1;
}


.preview img{
    height: 100%;
}
p{
    margin-bottom: 20px;
}
.brand{
    background:#fe980f;
    width: fit-content;
    color: black;
    font-size: 12px;
    padding: 2px 5px;
}
h2{
    font-size: 55px;
    color: white;
    margin-bottom: 20px;
}
.rating{
    display: flex;
    height: 15px;
}
.rating .fa{
    color: #008000;
}
.price{
    color: #fe980f;
    font-size: 26px;
    font-weight: bold;
    padding-top: 10px;
}
input{
    width: 30px;
    border: 1px solid #ccc;
    font-weight: bold;
    text-align: center;
}
button{
    color: #fff;
    font-size: 15px;
    outline: none;
    border: 0;
    border-radius: 5px;
    background: #fe980f;
    padding: 10px 15px;
    box-sizing: border-box;
    cursor: pointer;
}
button .fa{
    margin-right: 10px;
}
.related{
    width: 90%;
    margin: 0 auto 40px;
}
.related .row{
    width: 100%;
    height: auto;
}
.columns{
    flex-basis: 22%;
    height: 100%;
}
.items img{
    width: 100%;
}
.details{
    margin-top: 20px;
}
.details p{
    font-size: 14px;
    margin-bottom: 10px;
}
.details .rating{
    margin: 10px 0;
}
.imgsec{
    width: 600px;
    height: 400px;
}

@media screen and (max-width: 600px) {
    .imgsec{
    width: 300px;
    height: 100px;
}
}
</style>





          



<section style="background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(https://images.unsplash.com/photo-1523821741446-edb2b68bb7a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80); height:3000px; 	background-size: cover;">

<div class="container">
<div class="row">


<div class="col col-12 col-sm-6 col-md-6 col-lg-6">


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
 </div>

<div class="carousel-inner">

  <div class="carousel-item active">
  <img width="600" height="400" src="{{ URL ::asset('assets/project_img/'.$projects->pimage) }}">
</div>

  <div class="carousel-item">
  <img width="600" height="400" src="{{ URL ::asset('assets/project_img1/'.$projects->pimage1) }}">
  </div>
 
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>

</div>

<div class="col col-12 col-sm-6 col-md-6 col-lg-6">
<div class="content">

    <p class="brand">{{$projects->pcategory}}</p>
    <h2>{{$projects->ptitle}}</h2>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
    </div>

    <p class="price">{{$projects->pprize}}</p>
    <p style="color:blue"><b>Place: </b>
    <label>{{$projects->pplace}}</label>
    </p>
    <p style="color:blue"><b>Area:</b> <label>{{$projects->pbedroom}}</label></p>
    <button type="button">
        <i class="fa fa-shopping-cart"></i>
        {{$projects->parea}}</button>
</div>
</div>















<br>
<br>

<br>
<br>

<br>
<br>

<br>
<br>

<br>
<br>

<br>
<br>

<br>
<br>
<br>

<br>
<br>

<br>
<br>

<br>
<br>

<br>
<br>

<br>
<br>



        <div class="related">
            <h2 style="color:white">Details</h2>
            <div class="row">
               
                   
                        
                            <p style="color:white">{{$projects->pdetails}}</p>     
        </div>
    </div>

    <div class="related">
            <h2 style="color:white">Features</h2>
            <div class="row">
                            <p style="color:white">{{$projects->pdetailsnew}}</p>
 
        </div>
        </div>
        <div class="related">
            <h2 style="color:black">Floor Plans</h2>
            <div class="row">
            <div class="col col-12 col-lg-12">
               
                   
           
            <img class="imgsec" width="600" height="400" src="{{ URL ::asset('assets/project_img2/'.$projects->pimage2) }}">
                           

                      
                            </div>
         
        </div>

        <br>
    <br>
    <br>
    <br>

    </div>
    </div>
    </div>
    <br>
    <br>
    <br>
</section>
          
            @endsection