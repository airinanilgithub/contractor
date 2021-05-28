@extends("admintheme")
@section("content")
<table class="table ">
<tr>
    <th>User name</th>

    <th>Booking Date</th>
    <th>Appointment Date</th>
    <th>Time</th>
    <th>Status</th>
    <th>Update</th>
   
</tr>
@foreach($bookings as $booking)
<tr>
    <td>{{ $booking->user_id}}</td>
  
    <td>{{ $booking->bookingdate }}</td>
    <td>{{ $booking->appointmentdate }}</td>
    <td>{{ $booking->time }}</td>
    <td>{{ $booking->status }}</td>
    <td><a class="btn btn-warning"  href="/order/{{$booking->id}}/edit" >UPDATE</a></td>
   


</tr>

@endforeach

</table>

@endsection