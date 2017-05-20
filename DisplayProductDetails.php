<?php
$val = $_GET["val"];
//echo $val;
$servername = "52.60.109.91:3306";
$database = "db5";
$username = "userDB5";
$password = "password";
$conn = mysqli_connect($servername, $username, $password, $database);


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


// Setting the query and running it...
$sql = "SELECT * FROM Products WHERE prodNum = $val";

$result = $conn->query($sql);


foreach($result as $row)
{
	//print_r($row);
	echo "Product ID";
	echo "\x20\x20\x20 =>";
	echo $row['prodID'];
	echo"<br>";
	echo "Product Number";
	echo "\x20\x20\x20 =>";
	echo $row['prodNum'];
	echo"<br>";
	echo "Product Name";
	echo "\x20\x20\x20 =>";
	echo $row['prodName'];
	echo"<br>";
	echo "Product Color ID";
	echo "\x20\x20\x20 =>";
	echo $row['prodColorID'];
	echo"<br>";
	echo "Product Region ID";
	echo "\x20\x20\x20 =>";
	echo $row['prodRegionID'];
	echo"<br>";
	echo "Product Number Request";
	echo "\x20\x20\x20 =>";
	echo $row['prodNoRequest'];
	echo"<br>";
	echo "Product ID Supplier";
	echo "\x20\x20\x20 =>";
	echo $row['prodIDSupplier'];
	echo"<br>";
	echo "Product Date Buy";
	echo "\x20\x20\x20 =>";
	echo $row['prodDateBuy'];
	echo"<br>";
	echo "Product Quantity Buy";
	echo "\x20\x20\x20 =>";
	echo $row['prodQtyBuy'];
	echo"<br>";
	echo "Product Format";
	echo "\x20\x20\x20 =>";
	echo $row['prodFormat'];
	echo"<br>";
	echo "Product Price Buy";
	echo "\x20\x20\x20 =>";
	echo $row['prodPriceBuy'];
	echo"<br>";
	echo "Product Label Charge";
	echo "\x20\x20\x20 =>";
	echo $row['prodLabelCharge'];
	echo"<br>";
	echo "Product Bottle Charge";
	echo "\x20\x20\x20 =>";
	echo $row['prodBottleCharge'];
	echo"<br>";
	echo "Product Bottle Charge Person";
	echo "\x20\x20\x20 =>";
	echo $row['prodBottleChargePerson'];
	echo"<br>";
	echo "Product Sell Price";
	echo "\x20\x20\x20 =>";
	echo $row['prodSellPrice'];
	echo"<br>";	
	echo "Product Sold Out";
	echo "\x20\x20\x20 =>";
	echo $row['prodSoldOut'];
	echo"<br>";
	echo "Product Available";
	echo "\x20\x20\x20 =>";
	echo $row['prodAvailable'];
	echo"<br>";
	echo "Product Comment";
	echo "\x20\x20\x20 =>";
	echo $row['prodComment'];
	echo"<br>";
}

?>
