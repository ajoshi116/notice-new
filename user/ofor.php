<?php 
$qu=mysqli_query($conn,"select * from uploads2" );
?>
<h2>All Office orders</h2>
<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>File</th>
		<th>Date</th>
		</Tr>
		<?php 


$i=1;
while($roww=mysqli_fetch_assoc($qu))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$roww['subject']."</td>";
?>
<td><a href="/notice/admin/uploads2/<?php echo $roww['file'] ?>" target="_blank"><?php echo $roww['file'] ?></a></td>
<?php
echo "<td>".$roww['date']."</td>";

echo "</Tr>";
$i++;
}
		?>
		
</table>