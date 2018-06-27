<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from uploads2 where id='$nid'");

header('location:index.php?page=oford');

?>