<?php 
$q=mysqli_query($conn,"select * from user ");
?>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
<h2 style="color:#00FFCC"><a href="index.php?page=addusers">Add Users</a></h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7">All users</th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Delete</th>
	</Tr>
<?php 
$i=1;
while($row=mysqli_fetch_assoc($q))
{
echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
?>

<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'>delete</a></td><?php 

echo "</Tr>";
$i++;
}
?>
		
</table>