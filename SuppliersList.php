<html>
<body>
<?php

$servername = "52.60.109.91:3306";
$database = "db5";
$username = "userDB5";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


// Setting the query and running it...
$sql = "SELECT * FROM Suppliers";

$result = $conn->query($sql);

?>
<table>
<tr>
<th>Supplier ID</th>
<th>Supplier Name</th>

</tr>

<?php
foreach($result as $row)
{
	?>
	
	 <td><?php echo $row['suppID']?></td>
     <td><?php echo $row['suppName']?></td>
     </tr>
	<?php
}
?>
</table>
</body>
</html>

