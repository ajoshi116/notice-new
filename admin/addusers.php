<?php 
extract($_POST);
if(isset($adduser))
{
	if($name=="" || $email=="" || $password=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

	$query="insert into user values('','$name','$email','$password')";
mysqli_query($conn,$query);
		
		
		$err="<font color='green'>User added Successfully</font>";	
	}
}

?>
<h2>Add New user</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter name </div>
		<div class="col-sm-5">
		<input type="text" name="name" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">email</div>
		<div class="col-sm-5">
		<input type="email" name="email" class="form-control"></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">enter password</div>
		<div class="col-sm-5">
		<input type="password" name="password" class="form-control" ></div>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New user " name="adduser" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	