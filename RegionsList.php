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
$sql = "SELECT * FROM Regions";

$result = $conn->query($sql);

?>

<table>
<tr>
<th>Region ID</th>
<th>Region Name</th>

</tr>

<?php
foreach($result as $row)
{
?>
	 <td><?php echo $row['regionID']?></td>
     <td><?php echo $row['regionName']?></td>
     </tr>
<!-- 	echo("Region ID"); -->
<!-- 	echo "\x20\x20\x20 =>"; -->
<!-- 	echo $row['regionID']; -->
<!-- 	echo"<br>"; -->
<!-- 	echo("Region Name"); -->
<!-- 	echo $row['regionName']; -->
<!-- 	echo"<br>"; -->
	<?php
}
?>
 </table>
 
</body>
</html>