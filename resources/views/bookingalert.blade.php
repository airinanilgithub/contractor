@extends("usertheme")
@section("content")

@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
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
<div class="jumbotron">
@foreach($bookings as $booking)
  <h1 class="display-4">{{$booking->status}}</h1>
 
  <p class="lead"></p>
  <hr class="my-4">
  
  <p><b>**Note:Kindly carry the invoice at the time of Appointment.</b></p>
  <p class="lead">
  <a class="btn btn-warning"  href="/download/{{$booking->id}}" role="Button" >View Invoice</a>
    
  </p>
</div>
@endforeach

@endsection