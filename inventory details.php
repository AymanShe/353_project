<!DOCTYPE html>
<html lang="en">
<head>
<title>Inventory Details</title>
<meta charset="UTF-8"/>
<body>

<h2> Inventory Details</h2>


<table align="left"	cellspacing="5" cellpadding="8">
	 
	<tr>
	<td align="left"><b>Name</b></td>
	<td align="left"><b>Category</b></td>
	<td align="left"><b>Price</b></td>
	<td align="left"><b>Quantity</b></td>
	</tr>
</table>


<?php
$code=$_POST['code'];
$query = "SELECT name, category, price FROM product WHERE name=$code";//check $code
$response = @mysqli_query($connection, $query);

if($response){
	$row = mysqli_fetch_array($response);
	echo '
	<table align="left" cellspacing="5" cellpadding="8">
		<tr>
			<td align="left">'.$row['name'].'</td>
			<td align="left">'.$row['category'].'</td>
			<td align="left">'.$row['price'].'</td>
		</tr>
	</table>';//need to fetch quantity from item table
	}else
	echo 'Could not find any record';
?>

</br>
</br>
</br>
<button onclick="location.href='inventory.html'">New search</button>
</br>
</br>
<button onclick="location.href='main.html'">Home</button>


</body>
</html>