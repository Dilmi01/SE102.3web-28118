<html>
<body>
<?php
$conn=mysqli_connect("localhost","root","","university");
if(!$conn){
die("Connection failed!");
}
$sql="SELECT * FROM student";
$result=$conn->query($sql);
?>
<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>
<?php
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
	{
	echo"<tr>";
	echo"<td>".$row["ID"]."</td>";//<?php echo $row["ID"]?> </td>
	echo"<td>".$row["Name"]."</td>";//<td><?php echo $row["Email"]?> 	</td>
	echo"<td>".$row["Email"]."</td>";
	echo"</tr>";
	}
}
else
	{
	echo"<tr><td colspan='3'>No data </td></tr>";
	}
?>
</table>

</body>
</html>