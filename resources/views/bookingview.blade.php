@extends("admintheme")
@section("content")
<table class="table ">
<tr>
    <th>User name</th>
    <th>Name</th>
    <th>Email </th>
    <th>Phone</th>
    <th>Whatsapp Number</th>
    <th>Date</th>
    <th>Time</th>
    <th>Status</th>
    <th>Update</th>
   
</tr>
@foreach($bookings as $booking)
<tr>
    <td>{{ $booking->user_id}}</td>
    <td>{{ $booking->bname}}</td>
    <td>{{ $booking->bmailid }}</td>
    <td>{{ $booking->bphone }}</td>
    <td>{{ $booking->bwno}}</td>
    <td>{{ $booking->bdate }}</td>
    <td>{{ $booking->time }}</td>
    <td>{{ $booking->status }}</td>
    <td><a class="btn btn-warning"  href="/order/{{$booking->id}}/edit" >UPDATE</a></td>
   


</tr>

@endforeach

</table>

@endsection