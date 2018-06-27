
<h2>Add New office order</h2>
<form method="post" enctype="multipart/form-data" action="">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
        <div class="col-sm-5">
		<input type="textarea" name="subbb" class="form-control"/></div>
 <input type="file" name="file" />
 
	</div>
	
	
		
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-6">
		<input type="submit" value="UPLOAD" name="adddd" class="btn btn-success"/>
		</div>
	</div>
</form>	
<?php
include_once '../connection.php';
extract($_POST);
if(isset($adddd))
{    
     
 $fileee = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loccc = $_FILES['file']['tmp_name'];
 $file_sizeee = $_FILES['file']['size'];
 $folderrr="uploads2/";
 
 
 $new_sizeee = $file_sizeee/1024;  
 
 
 $new_file_nameee = strtolower($fileee);
 
 
 $final_fileee=str_replace(' ','-',$new_file_nameee);
 if(move_uploaded_file($file_loccc,$folderrr.$final_fileee))
 {
  mysqli_query($conn,"INSERT INTO uploads2 VALUES('','$subbb','$final_fileee','$new_sizeee',now())");
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