<?php 
session_start();
include('../connection.php');
$user= $_SESSION['user'];
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online Notice Board User Dashboard</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <link href="../css/dashboard.css" rel="stylesheet">

   
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls= "navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome <?php echo $users['name'];?></a>
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
			 <li><a href="index.php?page=notification"><span class="glyphicon glyphicon-envelope"></span> Notices</a></li>
       <li><a href="index.php?page=cirr"><span class="glyphicon glyphicon-envelope"></span> Cirrulars</a></li>
       <li><a href="index.php?page=ofor"><span class="glyphicon glyphicon-envelope"></span> Office orders</a></li>
         </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			if($page=="notification")
			{
				include('notification.php');
			
			}
      if ($page=="ofor")
      {
        include('ofor.php');
      }
		  if($page=="cirr")
      {
        include('circu.php');
      }
      }
		  else
		  {
		  include('notification.php');
		  ?>
		
<?php } ?>
          
         
        </div>
      </div>
    </div>

  
    </body>
</html>
