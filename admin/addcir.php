
<h2>Add New Circular</h2>
<form method="post" enctype="multipart/form-data" action="">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
        <div class="col-sm-5">
		<input type="textarea" name="subb" class="form-control"/></div>
 <input type="file" name="file" />
 
	</div>
	
	
		
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-6">
		<input type="submit" value="UPLOAD" name="addd" class="btn btn-success"/>
		</div>
	</div>
</form>	
<?php
include_once '../connection.php';
extract($_POST);
if(isset($addd))
{    
     
 $filee = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_locc = $_FILES['file']['tmp_name'];
 $file_sizee = $_FILES['file']['size'];
 $folderr="uploads1/";
 
 
 $new_sizee = $file_sizee/1024;  
 
 
 $new_file_namee = strtolower($filee);
 
 
 $final_filee=str_replace(' ','-',$new_file_namee);
 if(move_uploaded_file($file_locc,$folderr.$final_filee))
 {
  mysqli_query($conn,"INSERT INTO uploads1 VALUES('','$subb','$final_filee','$new_sizee',now())");
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