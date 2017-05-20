<html>
<head>
<h1><center>Add New Wine to Database</center></h1>
</head>
<body>

<form name= "f1" action="" method="POST">
<table>
<tr><th>Product ID:</th><td> <textarea type="text" name="prodID"></textarea></td></tr>

<tr><th>Product Number: </th><td><textarea type="text" name="prodNo"></textarea></td></tr>

<tr><th>Product Name: </th><td><textarea type="text"  name="prodName"></textarea></td></tr>

<tr><th>Product Color ID: </th><td><textarea type="text" name="prodColorID"></textarea></td></tr>

<tr><th>Product Pack: </th><td><textarea type="text" name="prodPack"></textarea></td></tr>

<tr><th>Product Region ID: </th><td><textarea type="text" name="prodRegionID"></textarea></td></tr>

<tr><th>Product Number Request : </th><td><textarea type="text" name="prodNumberRequest"></textarea></td></tr>

<tr><th>Product ID Supplier : </th><td><textarea type="text" name="prodIDSupplier"></textarea></td></tr>

<tr><th>Product Date Buy : </th><td><textarea type="text" name="prodDateBuy"></textarea></td></tr>

<tr><th>Product Quantity Buy : </th><td><textarea type="text" name="prodQuantityBuy"></textarea></td></tr>

<tr><th>Product Format : </th><td><textarea type="text" name="prodFormat"></textarea></td></tr>

<tr><th>Product Price Buy : </th><td><textarea type="text" name="prodPriceBuy"></textarea></td></tr>

<tr><th>Product Label Charge : </th><td><textarea type="text" name="prodLabelChargeBuy"></textarea></td></tr>

<tr><th>Product Bottle Charge : </th><td><textarea type="text" name="prodBottleCharge"></textarea></td></tr>

<tr><th>Product Bottle Charge Person : </th><td><textarea type="text" name="prodBottleChargePerson"></textarea></td></tr>

<tr><th>Product Sell Price : </th><td><textarea type="text" name="prodSellPrice"></textarea></td></tr>

<tr><th>Product Sold Out : </th><td><textarea type="text" name="prodSoldOut"></textarea></td></tr>

<tr><th>Product Available : </th><td><textarea type="text" name="prodAvailable"></textarea></td></tr>

<tr><th>Product Comment: </th><td><textarea type="text" name="prodComment"></textarea></td></tr>

<tr>
<tr><td><br></td></tr>
<th colspan = 2><center>
<input type="submit" value="Submit" name="submit">
</center>
</td>
</tr>

</table>
</form>


<?php 

if(isset($_POST['submit']))
{
	$prodID = $_POST['prodID'];
	$prodNo = $_POST['prodNo'];
	$prodName = $_POST['prodName'];
	$prodColorID= $_POST['prodColorID'];
	$prodPack = $_POST['prodPack'];
	$prodRegionID= $_POST['prodRegionID'];
	$prodNumberRequest = $_POST['prodNumberRequest'];
	$prodIDSupplier= $_POST['prodIDSupplier'];
	$prodDateBuy= $_POST['prodDateBuy'];
	$prodQuantityBuy = $_POST['prodQuantityBuy'];
	$prodFormat = $_POST['prodFormat'];
	$prodPriceBuy= $_POST['prodPriceBuy'];
	$prodLabelChargeBuy= $_POST['prodLabelChargeBuy'];
	$prodBottleCharge= $_POST['prodBottleCharge'];
	$prodBottleChargePerson= $_POST['prodBottleChargePerson'];
	$prodSellPrice= $_POST['prodSellPrice'];
	$prodSoldOut = $_POST['prodSoldOut'];
	$prodAvailable = $_POST['prodAvailable'];
	$prodComment = $_POST['prodComment'];
	$servername = "52.60.109.91:3306";
	$database = "db5";
	$username = "userDB5";
	$password = "password";
	
	echo "in post";
$conn = mysqli_connect($servername, $username, $password, $database);


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


// Setting the query and running it...
$sql = "INSERT INTO Products (prodID, prodNum, prodName, prodColorID, prodPack, prodRegionID, prodNoRequest, prodIDSupplier, prodDateBuy, prodQtyBuy, prodFormat, prodPriceBuy, prodLabelCharge, prodBottleCharge, prodBottleChargePerson, prodSellPrice, prodSoldOut, prodAvailable, prodComment) values ('$prodID', '$prodNo', '$prodName', '1', '$prodPack' , '$prodRegionID', '$prodNumberRequest', '$prodIDSupplier', '$prodDateBuy', '$prodQuantityBuy', '$prodFormat', '$prodPriceBuy', '$prodLabelChargeBuy', '$prodBottleCharge', '$prodBottleChargePerson', '$prodSellPrice', '$prodSoldOut', '$prodAvailable', '$prodComment');";

//$sql = "INSERT INTO Products (prodID, prodNum, prodName, prodColorID, prodPack, prodRegionID, prodNoRequest, prodIDSupplier, prodDateBuy, prodQtyBuy, prodFormat, prodPriceBuy, prodLabelCharge, prodBottleCharge, prodBottleChargePerson, prodSellPrice, prodSoldOut, prodAvailable, prodComment) VALUES ('$prodID', '1234567', 'TestProductName', '1', ' ', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '');";

//$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
	echo "New records created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>

</body>
</html>
