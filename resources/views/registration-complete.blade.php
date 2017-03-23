	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.css">
	<script src="css/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>

<style>
	
#form1{
		margin-top: 75px;
		height: 500px;
		width: 500px;
		background-color:black;	
		opacity: 0.8;
		margin-left: 450px;
		border-radius: 50px;
		border-color: black;
		border-style: solid;
		border-width: 8px;
	}

#fillup{
		margin-top: 50px; 
		margin-left: 45px;
		position: absolute;
		font-size: 19px;
		font-family: "Segoe UI";
		color: #e7e7e7;
		text-align: center;
	}
.reg{
	margin-bottom: 65px;
	font-family: "Advanced Sans Serif 7";
}

.button{
		margin-top:370px;
		margin-left: 180px;
		height: 40px;
		width: 130px;
		font-family: Haettenschweiler;
		color: black;
		letter-spacing: 3px;
		border-style: solid;
		position: absolute;
		border-radius: 5px;
		font-size: 22px;
}
	.button:hover{
		color: black;
}
.button1{
		margin-top:410px;
		margin-left: 180px;
		height: 40px;
		width: 130px;
		font-family: Haettenschweiler;
		color: black;
		letter-spacing: 3px;
		border-style: solid;
		position: absolute;
		border-radius: 5px;
		font-size: 22px;
}
.button1:hover{	
		color: black;
}
.back{
		height: 100%;
		width: 100%;
		position: absolute;
		overflow: hidden;
		top: 0;
		left: 0;
	}
	
/*.logo{
	position:fixed;
	left: 630px;
	bottom: 550px;
}*/
</style>
<body>
<img class="back" src="{{ URL::asset('img/forest-1950402_960_720.jpg') }}">
	
<div id="form1">
	<div id="fillup">
		<div class="reg">
			<h1>Registration complete</h1>
		</div>

		<h3> Student name: 
			<?php 
				$full_name= $first_name . " " . $middle_initial . ". " . $last_name;
				echo $full_name; 	
			?>
		</h3>
		<h3> Course: {{ $course }} </h3>
		<h3> Student Number: {{ $student_number }} </h3>
		</div>

	<form method="POST" action="/add-student">
		{{ csrf_field() }}
		<button type="submit" class="button btn-success"> ADD </button>
	</form>	
	<form method="POST" action="/all-students">
		{{ csrf_field() }}
		<button type="submit" class="button1 btn-warning">SHOW</button>
	</form>

	
</div>
	</body>	