@extends("usertheme")
@section("content")
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
            
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
           
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>
<style type="text/css">
@media print {
    #hide {
        display :  none;
    }
}
</style>

<br>
            <br>
            <br>
            <br>
            <br>
            <br>
    <div class="container">
    
            <br>
        <div class="brand-section">
       
            <br>
            <div class="row">
            <br>
            <br>
            <br>
            <center> <div class="col-6">
                
              <h1 class="text-white" >Brick by Brick</h1>
                </div></center>
                <div class="col-6">
                    <div class="company-details">
                      
                    </div>
                </div>
            </div>
        </div>
@foreach($bookings as $booking)
        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Token No.: {{$booking->id}}</h2>
                   
                </div>
                <div class="col-6">
                   
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading"></h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th class="w-20">Booking Date</th>
                        <th class="w-20">Appointment Date</th>
                        <th class="w-20">Appointment Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$booking->user_id}}</td>
                       
                        <td>{{$booking->bookingdate}}</td>
                        <td>{{$booking->appointmentdate}}</td>
                        <td>{{$booking->time}}</td>
                    </tr>
                    
                </tbody>
            </table>
            <br>

            <h3 class="heading">Booking Status: {{$booking->status}}</h3>
            <h3 class="heading">**Kindly carry the invoice at the time of Appointment</h3>
            <div style="text-align:center"><button id="hide" class="btn btn-outline-warning" onclick="window.print()">Print</button></div>
        </div>
       
@endforeach


        <div class="body-section">
            <p>&copy; Copyright 2021 - . All rights reserved. 
                <a href="https://www.fundaofwebit.com/" class="float-right"></a>
            </p>
        </div>     

    </div>      

    @endsection