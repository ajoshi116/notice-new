<script>
	function Deleteor(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_of.php?id="+id;
		}
	}
</script>
<?php 
$que=mysqli_query($conn,"select * from uploads2 ");


?>
<h2 style="color:#00FFCC">All office orders</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=addof">Add New office order</a></th>
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
while($rowww=mysqli_fetch_assoc($que))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$rowww['subject']."</td>";
echo "<td>".$rowww['date']."</td>";
?>
<td><a href="uploads2/<?php echo $rowww['file'] ?>" target="_blank"><?php echo $rowww['file'] ?></a></td>
        
<?php
echo "<td>".$rowww['size']."</td>";
?>

<Td><a href="javascript:Deleteor('<?php echo $rowww['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php ?>