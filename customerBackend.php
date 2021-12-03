
<head>
	<link href = "storeStyle.css" rel = "stylesheet" type = "text/css"/>
</head>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$crewQ = $_POST["crew"];
$crewC = $crewQ * 50;
$goldQ = $_POST["gold"];
$goldC = $goldQ * 25;
$creamQ = $_POST["cream"];
$creamC = $creamQ * 25;
$shipping = $_POST["shipping"];
$shipC = 0;
$pw = $_POST["pw"];

if ($shipping == "Overnight") {
	$shipC = 50;
} else if ($shipping == "3 Day") {
	$shipC = 5;
}

echo "<h1>Thank you for your purchase!</h1><br>";
echo "Password: " . $pw . "<br>";

echo "<table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Cost Per Item</th>
		<th>Subtotal</th>
	</tr>
	<tr>
		<td><b>Crewneck</b></td>
		<td>" . $crewQ . "</td>
		<td>$50.00</td>
		<td>$" . $crewC . "</td>
	</tr>
	<tr>
		<td><b>Gold T-Shirt</b></td>
		<td>" . $goldQ . "</td>
		<td>$25.00</td>
		<td>$" . $goldC . "</td>
	</tr>
	<tr>
		<td><b>Cream T-Shirt</b></td>
		<td>" . $creamQ . "</td>
		<td>$25.00</td>
		<td>$" . $creamC . "</td>
	</tr>
	<tr>
		<td><b>Shipping</b></td>
		<td colspan='2'>". $shipping . "</td>
		<td>$" . $shipC . "</td>
	</tr>
	<tr>
		<td colspan='3'><b>Total Cost</b></td>
		<td><b>$" . ($crewC + $goldC + $creamC + $shipC) . "</b></td>
	</tr>
</table>";

?>
