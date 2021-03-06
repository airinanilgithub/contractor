@extends("usertheme")
@section("content")

<style>
* {
	margin: 0;
	padding: 0;
}
body {
	font-family: 'Baloo 2', cursive;
}
.banner-text {
	width: 100vw;
	position: absolute;
	z-index: 1;
}
.banner-text ul {
	height: 50px;
	float: right;
}
.banner-text ul li {
	display: inline-block;
	padding: 40px 15px;
	text-transform: uppercase;
	color: #fff;
	font-size: 20px;
}
.banner-text ul li:hover {
	cursor: pointer;
}
.banner-text h5 {
	font-family: poppins;
	text-align: center;
	color: #fff;
	font-size: 42px ;
	margin-top: 20%;
}
.banner-tx h2 {
	text-align: center;
	color: #fff;
	font-size: 30px;
	margin-top: 20%;
}
.animation-area {
	background: linear-gradient(to left, #8942a8, #ba382f);
	width: 100vw;
	height: 100vh;
}
.box-areaa {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
}
.box-areaa li {
	position: absolute;
	display: block;
	list-style: none;
	width: 25px;
	height: 25px;
	background: rgba(255, 255, 255, 0.2);
	animation: animate 20s linear infinite;
	bottom: -150px;
}
.box-areaa li:nth-child(1) {
	left: 86%;
	width: 80px;
	height: 80px;
	animation-delay: 0s;
}
.box-area li:nth-child(2) {
	left: 12%;
	width: 30px;
	height: 30px;
	animation-delay: 1.5s;
	animation-duration: 10s;
}
.box-areaa li:nth-child(3) {
	left: 70%;
	width: 100px;
	height: 100px;
	animation-delay: 5.5s;
}
.box-areaa li:nth-child(4) {
	left: 42%;
	width: 150px;
	height: 150px;
	animation-delay: 0s;
	animation-duration: 15s;
}
.box-areaa li:nth-child(5) {
	left: 65%;
	width: 40px;
	height: 40px;
	animation-delay: 0s;
}
.box-areaa li:nth-child(6) {
	left: 15%;
	width: 110px;
	height: 110px;
	animation-delay: 3.5s;
}
@keyframes animate {
	0% {
		transform: translateY(0) rotate(0deg);
		opacity: 1;
	}
	100% {
		transform: translateY(-800px) rotate(360deg);
		opacity: 0;
	}
}


</style>
<br>


<section>
<div class="banner-text">
	<div class="container">
	<div class="row">
	<br>
	<br>
	<br>
	<h5>BRICK BY BRICK CONSTRUCTIONS </h5>

	
	<h2>-Build your happiness brick by brick- </h2>

	
	</div>

	
	</div>
	</div>
	<div class="animation-area">
		<ul class="box-areaa">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</section>





@endsection