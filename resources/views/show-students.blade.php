<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.css">

  <title> List of Students </title>
</head>
<style>
table {  
    top: 80px;  
    border: 1px solid #ddd;
    text-align: left;
    position: absolute;
    background-color: black;
    opacity: 0.8;
    color: white;

}

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    padding: 15px;
    border: 1px solid #ddd;
    text-align: center;
    font-family: Segoe UI Light;
}

th {
    padding: 15px;
    border: 1px solid #ddd;
    text-align: center;
    background-color: white;
    color: black;
}
tr:hover{background-color: white; opacity: 0.9; color: black; font-weight: bolder;}

/*#tablestyle {
    position: absolute;
    top: 100px;
    border-top: 2px solid #ddd;
    border-left: 2px solid #ddd;
    border-right: 2px solid #ddd;     
    border-bottom: 2px solid #ddd;
    border-collapse: collapse;
    border-style: solid 50px ;
    width: 70%;
    margin-left: 250px;
}

th, td {
    text-align: left;
    padding: 8px;
    font-family: century Gothic;
    text-align: center;

}

tr:nth-child(even){background-color: #f2f2f2}
tr:hover{background-color: black; opacity: 0.8; color: white;}

th {
    background-color: black;
    opacity: 0.8;
    color: #999999;
    text-align: center;
    font-family: "Haettenschweiler";
    font-size:30px; 
    letter-spacing: 5px;
}*/
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px;
    font-family: 'Advanced Sans Serif 7';
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size:15px;
    cursor: pointer;
    border-radius: 10px;
    letter-spacing: 2px;
}

.button1 {
    background-color: #f44336;;
    border: none;
    color: white;
    padding: 10px;
    font-family: 'Advanced Sans Serif 7';
    color: black;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size:15px;
    cursor: pointer;
    border-radius: 10px;
    letter-spacing: 2px;
}

.button1:hover{
    color: black;
}
.background{
  position: absolute;
  left: 0;
  top: 0;
}
.background{
  position: absolute;
  left: 0;
  top: 0;
}
.add{
    margin-left: 1070px;
    margin-top: 30px;
    height: 40px;
    width: 130px;
    font-family: Haettenschweiler;
    color: black;
    background-color: #4CAF50;
    opacity: 0.9;
    letter-spacing: 3px;
    border-style: solid;
    border-color: #4CAF50;
    position: fixed;
    border-radius: 5px;
    font-size: 22px;
}
  .button:hover{
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
</style>

<body>
<img class="background" src="{{ URL::asset('img/lone-tree-1934897_960_720.jpg') }}" width="100%" height="100%">

  <form method="POST" action="/add-student">
    {{ csrf_field() }}
    <button class="add" type="submit" value="AddStudent"> + STUDENT </button>
  </form> 
    <table>
      <thead>
        <tr>
          <th hidden> ID </th>
          <th> FULL NAME </th>
          <th> COURSE </th>
          <th> STUDENT NUMBER</th>
          <th><i class="fa fa-pencil" aria-hidden="true"></i></th>
          <th><i class="fa fa-trash" aria-hidden="true"></i></th>
        </tr>
      </thead>

      <tbody>
      
        <?php
        foreach ($students as $student):
        ?>

        <tr>
          <td> <?php echo $student->first_name . " " . $student->middle_initial . ". " . $student->last_name ?> </td> 
          <td> <?php echo $student->course ?></td>
          <td> <?php echo $student->student_number ?></td>
          
          <td width="7%">
            <form method="post" action="/update">
          {{ csrf_field() }}
          <input type="hidden" name="StudentID" value="{{$student->id}}">
          <input type="hidden" name="firstname" value="{{$student->first_name}}">
          <input type="hidden" name="middle" value="{{$student->middle_initial}}">
          <input type="hidden" name="lastname" value="{{$student->last_name}}">
          <input type="hidden" name="course" value="{{$student->course}}">
          <input type="hidden" name="studentnumber" value="{{$student->student_number}}">
          <button type="submit" class="button btn-success btn-sm">Edit</button>
            </form>
          </td>
          <td width="7%">
            <form method="post" action="/delete/{{$student->id}}">
          {{ csrf_field() }}
          <input type="hidden" name="StudentID" value="{{$student->id}}">
          <input type="hidden" name="firstname" value="{{$student->first_name}}">
          <input type="hidden" name="middle" value="{{$student->middle_initial}}">
          <input type="hidden" name="lastname" value="{{$student->last_name}}">
          <input type="hidden" name="course" value="{{$student->course}}">
          <input type="hidden" name="studentnumber" value="{{$student->student_number}}">
          <button type="submit" class="button1 btn-danger btn-sm">Delete</button> 
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</body>
</html>