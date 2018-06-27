<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from uploads1 where id='$nid'");

header('location:index.php?page=cir');

?>