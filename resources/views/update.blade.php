<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.css">
<style>
	.back{
		height: 100%;
		width: 100%;
		position: absolute;
		overflow: hidden;
		top: 0;
		left: 0;
	}
	.form1{
		height: 500px;
		width: 600px;
		background-color:black;	
		opacity: 0.8;
		position: absolute;
		margin-left: 450px;
		margin-top: 100px;
		border-radius: 50px;
		border-color: black;
		border-style: solid;
		border-width: 8px;
	}
	.fillup{
		margin-top: 20px; 
		margin-left: 90px;
		position: absolute;
		font-size: 20px;
		font-family: "Segoe UI Light";
		color: #e7e7e7;
		text-align: center;
	}
	.button{
		margin-top:-2px;
		margin-left: -50px;
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
	input[type=text] {
	    width: 250px;
	    padding: 10px 18px;
	    margin: 5px 0;
	    box-sizing: border-box;
	    border-radius: 5px;
	    border-color: black;
	    font-family: "Segoe UI Light";
	    color: black;
	    font-size: 15px;

}
	input[type=number] {
	    width: 250px;
	    padding: 10px 18px;
	    margin: 5px 0;
	    box-sizing: border-box;
	    border-radius: 5px;
	    border-color: black;
	    font-family: "Segoe UI Light";
	    color: black;
	    font-size: 15px;
}

</style>

<body>
	<img class="back" src="{{ URL::asset('img/forest-1950402_960_720.jpg') }}">
		<div class="form1">
	<div class="fillup">
 <form method="post" action="/update/{{$id}}">
	 {{ csrf_field() }}

	 				<input type="hidden" name="ID" value="{{ $id }}">
	 				First Name: 	<input type="text" name="firstname" value="{{ $first_name }}"
						 style="margin-left: 40px;"> <br><br>
					Middle Initial: <input type="text" name="middle" value="{{ $middle_initial }}"
						 style="margin-left: 25px;"> <br><br>
					Last Name: 		<input type="text" name="lastname" value="{{ $last_name }}"
						 style="margin-left: 40px;"> <br><br>
					Course: 		<input type="text" name="course" value="{{ $course }}"
						 style="margin-left: 40px;"> <br><br>
					Student Number: <input type="number" name="studentnumber" value="{{ $student_number }}" style="margin-left: 25px;"> <br><br>
					 <button class="button btn-success" type="submit">Update</button>
 </form>
	</div>
		</div>
</body>