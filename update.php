<?Php
error_reporting();
include('conn.php');
$ids=$_REQUEST['ids'];
$selectsql="SELECT*FROM user_info WHERE id='$ids'";
 $run=mysqli_query($conn,$selectsql);
 $row = mysqli_fetch_array($run);{
      
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>submit page</title>
    <style type="text/css">
    body{
      text-transform: capitalize;
        text-align: abslute;
    }

    </style>
</head>
<body>
 <form action="insert.php" method="POST">
   <div style=" padding-left:30% ; padding-top: 5%; ">  <div style=" padding-left:20% ;  ">
      <caption > form</caption></div><br><br>
   id <input type="text" name="id" value=" <?php echo $ids; ?>"><br><br>
    First name<input  type="text" name="fname" required value="<?php echo"{$row['fname']}"; ?>"> <br><br>
    Last name<input type="text" name="lname" required value="<?php echo"{$row['lname']}"; ?>"><br><br>
    E-mail<input type="email" name="email" required value="<?php echo"{$row['email']}"; ?>"><br><br> 
   passsword<input type="password" name="password" value="<?php echo"{$row['password']}"; ?>"><br><br>
    Date of birth<input type="date" name="dob" required value="<?php echo"{$row['dateofbirth']}"; ?>"><br><br>
    mobile number<input type="text" name="mno" required value="<?php echo"{$row['contactno']}"; ?>"><br><br>
    desigenation<input type="text" name="desigen" required value="<?php echo"{$row['designation']}"; ?>"><br><br>
    <label>gender</label> <br>
    male<input type="radio" name="gender" value="male">
    Femail<input type="radio" name="gender" value="female">
    other<input type="radio" name="gender" value="others"><br><br>
    <label>Hobbies</label><br>
    music<input type="checkbox" name="hobies1" value="music," >
    read books<input type="checkbox" name="hobies2" value="read books,">
    tarvling<input type="checkbox" name="hobies3" value="tarvling,">
    coin collating<input type="checkbox" name="hobies4" value="coin collating"><br><br>
    <div style="padding-left:10%;"><input type="submit" name=" submit"><br><br></div></div>

    </form>
</body>
</html>
<?php
}
?>
<?php
      $password=$_POST['password'];
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $email=$_POST['email'];
       $dob=$_POST['dob'];
       $mobile_no=$_POST['mno'];
       $work=$_POST['desigen'];
       $gender=$_POST['gender'];
       $h1=$_POST['hobies1'];
       $h2=$_POST['hobies2'];
       $h3=$_POST['hobies3'];
       $h4=$_POST['hobies4'];
       $hobies=array();
       array_push($hobies,$h1,$h2,$h3,$h4);
       $hobbies=implode(" ",$hobies);
 if ($password== $pass2) {
$sql="UPDATE login SET  fname='$fname',lname='$lname' ,dateofbith='$dob',email='$email',password='$password',contactno='$mobile_no' ,designation =' $work' gender='$gender' ,hobbies='$hobbies' WHERE id='$ids' " ;
 $result=mysqli_query($conn,$sql);
 if ($result) {
   // header("location:welcome.php");
 }
 }
?>