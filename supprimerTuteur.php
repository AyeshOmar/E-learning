<?php


include("dataBaseConnexion.php");

if (isset($_GET['id'])) {
	

$id=$_GET['id'];
$sql= "delete from tuteur where id=$id";

$result=mysqli_query($conn,$sql);
}
header('location:/welcome.php');
exit;
?>