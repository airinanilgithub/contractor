@extends("admintheme")
@section("content")


<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

<form action="/ordereditprocess/{{$booking->id}}" method="post" >
{{csrf_field()}}<table class="table table-borderless  table-secondary">
<br><br><br>
<tr>
    <td></td><td></td>
</tr>

<tr>
    <td>Username</td>
    <td>{{$booking->user_id}}</td>

</tr>




<tr>
    <td> Booking Date</td>
    <td>{{$booking->bookingdate}}</td>
</tr>


<tr>
    <td> Appointment Date</td>
    <td>{{$booking->appointmentdate}}</td>
</tr>
<tr>
    <td>Time</td>
    <td>{{$booking->time}}</td>
</tr>
<tr>
    <td>Update Customer Status</td>
    <td><select class="form-select" aria-label="Default select example" name="status">
          <option selected value="pending">pending</option>
            <option value="Your Appoinment is Scheduled for the given time">Your Appoinment is accepted</option>
            
              <option value="Booking Cancelled">Booking Cancelled</option>
       </select></td>



</tr>

<tr>

    <td><td>  <button class="btn btn-secondary"> Update Data </button></td></td>

</tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
</div>
@endsection