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
<body >

<form style=" border: 1px solid; margin-left:30%; margin-right: 30%; margin-top: 10%;" method="POST"  action="">
  <div style="margin-left:40%; margin-top: 3%; ">
  <a style=" margin-left: 1%; border: 1px solid black;" href="login.php">admin login</a>
  <a style="border: 1px solid black;" href="singup.php">user login</a><br><br>
	email<input type="email" name="email"><br><br>
	password<input type="password" name="password"><br><br>
	<input style="margin-bottom: 5%; margin-left:2%" type="submit" name="submit">
  </div>
</form>

</body>


<?php 

 if(isset($_POST['submit'])){
   $email= mysqli_real_escape_string($conn,$_POST['email']);
  $password= mysqli_real_escape_string($conn,$_POST['password']);
 $sql=" SELECT * FROM user_info WHERE email ='$email'AND password='$password' ";
 $result=mysqli_query($conn,$sql) or die("query faild");
 if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION['email']=$row['email'];
      $_SESSION['name']=$row['name'];
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