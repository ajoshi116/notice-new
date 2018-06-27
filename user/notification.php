<?php 
$q=mysqli_query($conn,"select * from uploads" );
$rr=mysqli_num_rows($q);
?>
<h2>All Notices</h2>
<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>File</th>
		<th>Date</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
?>
<td><a href="/notice/admin/uploads/<?php echo $row['file'] ?>" target="_blank"><?php echo $row['file'] ?></a></td>
<?php
echo "<td>".$row['date']."</td>";

echo "</Tr>";
$i++;
}
		?>
		
</table>