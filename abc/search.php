
<table border="1">
	<tr>
		<th>name</th>
		<th>DOB</th>
		<th>contact</th>
		<th>email</th>
	</tr>




<?php
$conn=mysqli_connect("localhost","root","","place");
$set=$_POST['search'];
if($set)
{
	$show="SELECT * FROM placed WHERE Name='$set'";
	$result= mysqli_query($conn,$show);
	while($rows=mysqli_fetch_array($result))
	{
echo "<tr>";

echo "<td>";
		echo $rows['Name'];
		echo "</td>";
		echo "<td>";
		echo $rows['dof'];
		echo "</td>";
		echo "<td>";
		echo $rows['phn'];
		echo "</td>";


		echo "<td>";
		echo $rows['mail'];
		echo "</td>";
		echo "</tr>";
		echo "<br>";

	}
}
else
{
	echo " there is no same data in databasa..<br>Thank you!";
}
?>
</table>