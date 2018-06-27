
<h2>Add New Notice</h2>
<form method="post" enctype="multipart/form-data" action="">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
        <div class="col-sm-5">
		<input type="textarea" name="sub" class="form-control"/></div>
 <input type="file" name="file" />
 
	</div>
	
	
		
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-6">
		<input type="submit" value="UPLOAD" name="add" class="btn btn-success"/>
		</div>
	</div>
</form>	
<?php
include_once '../connection.php';
extract($_POST);
if(isset($add))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $folder="uploads/";
 
 
 $new_size = $file_size/1024;  
 
 
 $new_file_name = strtolower($file);
 
 
 $final_file=str_replace(' ','-',$new_file_name);
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  mysqli_query($conn,"INSERT INTO uploads VALUES('','$sub','$final_file','$new_size',now())");
  ?>
  <script>
  alert ('successfully uploaded');
        </script>
   <?php
 }
 else
 {
   ?>
  <script>
  alert('error while uploading file');
        </script>
  <?php
 }
}
?>