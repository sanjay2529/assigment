<?Php
error_reporting(0);
include('conn.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>submit page</title>
	<style >
	*{
      font-family: Mangal;
      text-transform: capitalize;
	    }

	</style>
</head>
<body>
 <form action="insert.php" method="POST">
   <div style=" margin-left:30%  ; margin-right:30%; margin-top: 5%; border: 1px solid black; "> 	<div style=" margin-left:40% ;  ">
      <caption  > form</caption></div><br><br>
 	<div style="margin-left: 10%;">
     First name<input  type="text" name="fname" required> <br><br> 
   </div>
 	<div style="margin-left:10%; width: 50%;" > 
     Last name<input type="text" name="lname" required><br><br> 
   </div>
 	<div style="margin-left:10%;">
     E-mail<input type="email" name="email" required><br><br> 
   </div>
   <div style="margin-left:10%;">
      passsword<input type="password" name="password"><br><br>
   </div>
 	<div style="margin-left:10%;">
      Date of birth<input type="date" name="dob" required><br><br>
   </div> <div style="margin-left:10%;">
      mobile number<input type="text" name="mno" required><br><br>
   desigenation<input type="text" name="desigen" required=""><br><br>
   <label>gender</label> <br>
   male<input type="radio" name="gender" value="male">
   Femail<input type="radio" name="gender" value="female">
   other<input type="radio" name="gender" value="others"><br><br>
   <label>Hobbies</label><br>
    music<input type="checkbox" name="hobies1" value="music," >
   read books<input type="checkbox" name="hobies2" value="read books,">
   tarvling<input type="checkbox" name="hobies3" value="tarvling,">
   coin collating<input type="checkbox" name="hobies4" value="coin collating"><br><br>
   </div>
 	<div style="margin-left:40%;"><input type="submit" name=" submit"> <a href="login.php">login</a><br><br></div></div>
 	</form>
</body>
</html>