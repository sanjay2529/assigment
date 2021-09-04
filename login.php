<?php
 include"conn.php";
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 
	<title>login</title>
</head>
<body>
 
<form style=" margin-top: 15%; border: 1px solid black; margin-left: 30%; margin-right:40%;" method="POST" action="">
	<div style="margin-left:25%; margin-top:5%;">
    <a style=" margin-left: 1%; border: 1px solid black;" href="login.php">admin login</a>
  <a style="border: 1px solid black;" href="singup.php">user login</a><br><br>
   email<input type="email" name="email"><br><br>
  password<input type="password" name="password"><br><br>
  <input style="margin-left:20%; margin-bottom: 5%;" type="submit" name="submit"> 
  </div>
</form>
</body>


<?php 

 if(isset($_POST['submit'])){
   $email= mysqli_real_escape_string($conn,$_POST['email']);
  $password= mysqli_real_escape_string($conn,$_POST['password']);
 $sql=" SELECT * FROM admin WHERE email ='$email'AND password='$password' ";
 $result=mysqli_query($conn,$sql) or die("query faild");
 if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION['email']=$row['email'];
      $_SESSION['fname']=$row['fname'];
      header("location:main.php");
       echo"pasword not match";

    }
  }
  else{
 echo"pasword not match";
    }
  }
  
 ?>  


</html>