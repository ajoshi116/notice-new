<script>
	function Deletecir(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_cir.php?id="+id;
		}
	}
</script>
<?php 
$qu=mysqli_query($conn,"select * from uploads1 ");
$rrr=mysqli_num_rows($qu);


?>
<h2 style="color:#00FFCC">All cirrculars</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=addcir">Add New cirrcular</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Date</th>
		<th>file</th>
		<th>size(kb)</th>
		<th>Delete</th>
	</Tr>
		<?php 


$i=1;
while($roww=mysqli_fetch_assoc($qu))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$roww['subject']."</td>";
echo "<td>".$roww['date']."</td>";
?>
<td><a href="uploads1/<?php echo $roww['file'] ?>" target="_blank"><?php echo $roww['file'] ?></a></td>
        
<?php
echo "<td>".$roww['size']."</td>";
?>

<Td><a href="javascript:Deletecir('<?php echo $roww['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php ?>