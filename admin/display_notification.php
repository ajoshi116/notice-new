<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from uploads ");
$rr=mysqli_num_rows($q);


?>
<h2 style="color:#00FFCC">All Notice</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=add_notice">Add New notice</a></th>
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
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['date']."</td>";
?>
<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank"><?php echo $row['file'] ?></a></td>
        
<?php
echo "<td>".$row['size']."</td>";
?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php ?>