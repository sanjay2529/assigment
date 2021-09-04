<?php
        error_reporting(0);
    include 'conn.php';
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
      /*
       echo $fname."<br>";
       echo $lname."<br>";
       echo $email."<br>";
       echo $dob."<br>";
       echo $work."<br>";
       echo $gender."<br>";
       echo $mobile_no."<br>";
       echo$hobbies;*/
    

if (isset($_POST['submit'])) {
$sql="INSERT INTO user_info(fname,lname,email,dateofbirth,contactno,designation,gender,hobbies,password)
VALUES('$fname','$lname','$email','$dob','$mobile_no','$work','$gender','$hobbies','$password')";
 $upload=mysqli_query($conn,$sql);
}
if ($upload) {
     echo "register susesfully";
     header("location:index.php");
 }
else{
   echo"register unsussesfull"; 
}

 	?>