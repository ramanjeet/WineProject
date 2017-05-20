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
$sql = "SELECT * FROM Products";

$result = $conn->query($sql);

// echo "Product Number";
// echo "\x20\x20\x20";
// echo "Product Quantity Buy";
// echo "Product Name" ;
// echo "\x20\x20\x20";
// echo("\n");

?>
    <table>
    <tr>
    <th>Product Number</th>
    <th>Product Quantity Buy</th>
    <th>Product Name</th>
    </tr>

    <tr>
<?php

//this is to display your data
 foreach($result as $row) 
 {
 ?>
 		<td><a href = "DisplayProductDetails.php?val=<?php echo $row['prodNum']?>"><?php echo $row['prodNum']?></a></td>
        <td><?php echo $row['prodQtyBuy']?></td>
        <td><?php echo $row['prodName']?></td>
 		 </tr>
<!--  	echo $row['prodNum']; -->
<!--  	echo "\x20\x20\x20"; -->
<!--      echo $row['prodQtyBuy']; -->
<!--      echo "\x20\x20\x20"; -->
<!--      echo $row['prodName']; -->
<!--      echo ("\n"); -->
<?php
      }//end for
 ?>
 
 
 
    </table>
  </body>
  </html>
// Closing the connection.
//$connection = null;


//?>