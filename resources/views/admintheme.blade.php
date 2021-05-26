<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: black;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 11.1%; /* eight links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color:black;
}

.navbar a.active {
  background-color:black;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<body>



<div class="navbar">
  <a class="active" href="/adminhome"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="/registerview"><i class="fa fa-fw fa-search"></i>Registered Users</a> 
  <a href="/categorys"><i class="fa fa-fw fa-search"></i>Category</a> 
  <a href="/addcategory"><i class="fa fa-fw fa-envelope"></i>Projects</a> 
  <a href="/viewproject"><i class="fa fa-fw fa-envelope"></i>Projects View</a> 
  <a href="/bookingview"><i class="fa fa-fw fa-envelope"></i>Bookings</a> 
  <a href="/contactsview"><i class="fa fa-fw fa-envelope"></i>Contact</a> 
  <a href="/adminregister"><i class="fa fa-fw fa-envelope"></i>Add Admin</a> 
  <a href="/adminlogout"><i class="fa fa-fw fa-user"></i>logout</a>
</div>

<form class="d-flex">
        
      </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
@yield("content")
