<?php 
include('connection.php');
session_start();
?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
        <script src="js/bootstrap.min.js"></script> 
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Online Notice Board</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/02.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/03.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img src="images/04.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/05.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>

    ...
  </div>

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>


<div class="container">
	<div class="row">
	
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2>notice and cirrcular hosting</h2>";
		}
		?>
		
		
		
		
		</div>

		
		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">SCL</div>
  <div class="panel-body">
    department of space
  </div>
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>


	</body>
</html>