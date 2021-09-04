<?php
session_start();
include"conn.php";
error_reporting();

 if(!isset( $_SESSION['email'])) {
   header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>home</title>

</head>
<style type="text/css">
*{
 text-transform: capitalize;
 font-family: Mangal;    
}
     table,td,th{
          border: 1px solid black;
          border-collapse: collapse;
          text-align: center;
          
          padding: 2px;
     }
</style>
<body>
<h1>hello <?php   echo $_SESSION['name'];?></h1> <br>
<div style="padding-bottom: 1%;">
     <a style=" border: 1px solid; margin-left:5%;" href="logout.php"> logout</a><a style=" border: 1px solid;margin-left:70%;" href="index.php"> add data</a>
</div>

<div style="padding-bottom: 10%;">
<table >
     <th>id</th>
     <th>name</th>
     <th>Lastname</th>
     <th>date of birth</th>
     <th>email-id</th>
     <th>number</th>
     <th>desigenation</th>
     <th>gender</th>
     <th>Hobbies</th>
     <th>password</th>
     <th colspan="2">oprations</th>
     <tbody>
<?php
 $sql="SELECT* FROM user_info";
$result=mysqli_query($conn,$sql);
 if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
     /* echo "ID :<td>{$row['id']} </td>  ".
         "NAME : {$row['name']}  ".
         "username : {$row['uname']}  ".
         "email : {$row['email']}  ".
         "password : {$row['password']} <br> ".
          "--------------------------------<br>";*/
          ?>
          <td><?php echo"{$row['id']}"; ?></td>
            <td><?php echo"{$row['fname']}"; ?></td>
            <td><?php echo"{$row['lname']}"; ?></td>
            <td><?php echo"{$row['dateofbirth']}";?></td>
            <td><?php echo"{$row['email']}"; ?></td>
            <td><?php echo"{$row['contactno']}"; ?></td>
             <td><?php echo"{$row['designation']}"; ?></td>
             <td><?php echo"{$row['gender']}"; ?></td>
            <td><?php echo"{$row['hobbies']}"; ?></td>
            <td><?php echo"{$row['password']}"; ?></td>
            <td><a href="update.php?ids=<?php echo"{$row['id']}" ?>">update</a></td>
            <td><a href="delete.php?idth=<?php echo"{$row['id']}" ?>">delete</a></td>
            </tbody>
             
          <?php
   }


?>

</table>
</div>
</body>
</html>