<?php
			include("conn_sql.php");
			$result = mysqli_query($conn,"SELECT * FROM allitems");

			echo "<table border='0' class='tableItems'>
			<tr>
			<th>Product Name</th>
			<th>Category</th>
			<th>SKU</th>
			<th>Price</th>
			</tr>";
			
			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['Product Name'] . "</td>";
			echo "<td>" . $row['Category'] . "</td>";
			echo "<td>" . $row['SKU'] . "</td>";
			echo "<td>" . $row['Price'] . "</td>";
            echo "<td><a href='updateTill.php?idallitems=$row[idallitems]&quantity=$row[Quantity]'>PURCHASE</td>";
			echo "</tr>";
			}
			echo "</table>";

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://unpkg.com/chota">
<title>Get Started</title>
<style>
.tableItems{

  border-spacing: 20px;
  border-collapse: separate;
}
</style>
<body></body>
</html>