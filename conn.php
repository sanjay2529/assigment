<?PHP
$db="u_data";
$hostname="localhost";
$conn=mysqli_connect("$hostname","root","" ,"$db");
 if (!$conn) {
   echo("Connection failure:".mysqli_connect_error());
  }
  else{
    //echo "ok";
  }

?>