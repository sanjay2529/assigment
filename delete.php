delet<?php
 include"conn.php";
 $idth=$_REQUEST['idth'];
$dsql="DELETE FROM user_info WHERE id='$idth' ";
$delete=mysqli_query($conn,$dsql);
 header("location:main.php");
 if ($delete) {
 	echo "data delete";
 }
 else{
 	echo "error";
 }
?>