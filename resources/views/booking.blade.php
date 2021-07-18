@extends("usertheme")
@section("content")
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
<style>

.section {
	position: relative;
	height: 100vh;
}

.section .section-center {
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

#booking {
	font-family: 'Montserrat', sans-serif;
	background-image: url('../img/background.jpg');
	background-size: cover;
	background-position: center;
}

#booking::before {
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	background: rgba(0, 0, 0, 0.6);
}

.booking-form {
	max-width: 642px;
	width: 100%;
	margin: auto;
}

.booking-form .form-header {
	text-align: center;
	margin-bottom: 25px;
}

.booking-form .form-header h5 {
	font-size: 30px;
	text-transform: uppercase;
	font-weight: 700;
	color: #ffc001;
	margin: 0px;
}

.booking-form>form {
	background-color: #101113;
	padding: 30px 20px;
	border-radius: 3px;
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 15px;
}

.booking-form .form-control {
	background-color: #f5f5f5;
	border: none;
	height: 45px;
	border-radius: 3px;
	-webkit-box-shadow: none;
	box-shadow: none;
	font-weight: 400;
	color: #101113;
}

.booking-form .form-control::-webkit-input-placeholder {
	color: rgba(16, 17, 19, 0.3);
}

.booking-form .form-control:-ms-input-placeholder {
	color: rgba(16, 17, 19, 0.3);
}

.booking-form .form-control::placeholder {
	color: rgba(16, 17, 19, 0.3);
}

.booking-form input[type="date"].form-control:invalid {
	color: rgba(16, 17, 19, 0.3);
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 0px;
	bottom: 6px;
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: #101113;
	font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form .form-label {
	color: #fff;
	font-size: 12px;
	font-weight: 400;
	margin-bottom: 5px;
	display: block;
	text-transform: uppercase;
}

.booking-form .submit-btn {
	color: #101113;
	background-color: #ffc001;
	font-weight: 700;
	height: 50px;
	border: none;
	width: 100%;
	display: block;
	border-radius: 3px;
	text-transform: uppercase;
}










</style>





<!-- <script>
function myFunction() {
  var x = document.getElementById("myDate").min;
  document.getElementById("demo").innerHTML = x;
}
</script> -->


<script>var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>


<body>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
	  <p><b>**Note:Kindly carry the invoice at the time of Appointment.</b></p>
	  
        
	
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  Booking Status:
	  <h5 class="modal-title" id="exampleModalLabel">{{$booking->status}}</h5>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		<a class="btn btn-warning"  href="/download/{{$booking->id}}" role="Button" >View Invoice</a>

      </div>
    </div>
  </div>
</div>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h5>Book an Appointment</h5>
						</div>
					
		
                        <form action="/bookings" method="post">
{{csrf_field()}}



							<div class="row">
								
							</div>
							
							
							
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label"> Date</span>
										<p id="demo"></p>
										
										<input class="form-control" id="appointmentdate"  name="appointmentdate"type="date" min="2021-07-19" max="2021-08-30" required>
										<span class="text-danger">@error('appointmentdate'){{$message}} @enderror  </span>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Choose</span>
												<input type="radio" id="time1" name="time" value="12.30 am-1.30 pm">
<label for="time1" style="color:white">12.30 am-1.30 pm</label><br>





												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">a</span>
												<input type="radio" id="time2" name="time" value="2.00pm-3.00pm">
<label for="time2" style="color:white">2.00pm-3.00pm</label><br>


												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">time</span>
												<input type="radio" id="time3" name="time" value="4.00pm-5.00pm">
<label for="time3" style="color:white">4.00pm-5.00pm</label>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
                            <button class="submit-btn" onclick="myFunction()">Book Now</button>
						
						
						
							</div>
							
						</form>
					</div>
					
				</div>
			</div>
<br>
<br>
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  View Status
</button>
		</div>
	</div>





</body>



@endsection
