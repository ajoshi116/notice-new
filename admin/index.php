<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Online Notice Board Admin Dashboard</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    
    <link href="../css/dashboard.css" rel="stylesheet">

    </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome Admin !</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"></span> Manage Users</a></li>
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Mange  Notices</a></li>
        <li><a href="index.php?page=cir"><span class="glyphicon glyphicon-envelope"></span> Mange  cirulars</a></li>
        <li><a href="index.php?page=oford"><span class="glyphicon glyphicon-envelope"></span> Mange  office orders</a></li>
        </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
     <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			}
      if($page=="oford")
      {
        include('oford.php');
      }
      if($page=="addof")
	    {
        include('addof.php');
      }
  		 if($page=="addusers")
      
      {
        include('addusers.php');
      
      }
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			if($page=="cir")
			{
				include('cir.php');
			
			}
			if($page=="addcir")
      {
        include('addcir.php');
      }
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
		  }
		  
		  else
		  {
        include('manage_users.php');
      }
		  ?>
		  
		  
		  
		  

         
        </div>
      </div>
    </div>

  </body>
</html>
