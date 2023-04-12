<!-- Page for adding new Products by the admin -->
<?php
session_start();

	include("conn_sql.php");
    include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
        // something was posted
        $txtProductName = $_POST['txtProductName'];
        $txtCategory = $_POST['txtCategory'];
		$txtSKU = $_POST['txtSKU'];
        $txtQuantity = $_POST['txtQuantity'];
		$txtPrice = $_POST['txtPrice'];
        // $txtStatus = $_POST['txtStatus'];
		
        if(!empty($txtProductName) && !empty($txtCategory) && !empty($txtSKU) && !empty($txtQuantity) && !empty($txtPrice)){
            // Save to database
			echo "coming here 2";
            $sql = "INSERT INTO `allitems` (`Product Name`, `Category`, `SKU`, `Quantity`, `Price`) VALUES ('$txtProductName','$txtCategory', '$txtSKU', '$txtQuantity', '$txtPrice')";
            $rs = mysqli_query($conn, $sql);
            if($rs)
            {          
            header("Location: addNewProducts.php");
            die;
            } else{
            echo "Cannot connect to database";
            if ( false===$rs ) {
                printf("error: %s\n", mysqli_error($conn));
              }
        }
        }else{
            echo "Please enter correct information.";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Item Details</title>
	<link rel="stylesheet" href="https://unpkg.com/chota">
<style>
.frame2{
	/* Frame 2 */
position: absolute;
width: 100%;
height: 70px;
left: 0px;
top: 0px;

background: #0071DC;
}
.logout{
	position: absolute;
height: 25px;
left: 1350px;
top: 23px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 600;
font-size: 18px;
line-height: 25px;
}
.logo{
/* LOGO */


position: absolute;
width: 64px;
height: 30px;
left: 30px;
top: 20px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 22px;
line-height: 30px;
/* identical to box height */


color: #E1FFEE;
}
.userProfilePic{
	position: absolute;
width: 30px;
height: 30px;
left: 1288px;
top: 20px;

border: 0px solid #FFFFFF;
}
.userProfileName{
	position: absolute;
width: 51px;
height: 25px;
left: 1326px;
top: 23px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 600;
font-size: 18px;
line-height: 25px;
/* identical to box height */


color: #E1FFEE;
}
.house{position: absolute;
left: 62.15%;
right: 36.6%;
top: 4%;
}
.productsText{
	/* Products */


position: absolute;
width: 107px;
height: 33px;
left: 62px;
top: 100px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;

color: #000;
}
.searchRectangle{
	/* Rectangle 5 */


position: absolute;
width: 438px;
height: 59px;
left: 62px;
top: 168px;

background: #D9D9D9;
}
.iconSearch{
	position: absolute;
	width: 40px;
	height: 39.94px;
	top: 10px;
	left:
}
.inputBox{
	position: relative;
	width: 400px;
	height: 57px;
	left: 40px;
	align: center;
	background: #D9D9D9;
	border: 0;
}
.addNewProductBtn{
	position: absolute;
width: 251px;
height: 53px;
left: 1151px;
top: 168px;

background: #0071DC;
border-radius: 20px;
}
.newProductText{
	position: absolute;
width: 156px;
height: 33px;
left: 1200px;
top: 150px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */
color: #FFFFFF;
}
.iconPlus{
	position: absolute;
	top:17px;
	left:20px;
width: 18px;
height: 18px;
}
.checkBoxHeading{
	position: absolute;
width: 25px;
height: 25px;
left: 76px;
top: 286px;

background: #D9D9D9;
}
.productNameHeading{
	position: absolute;
width: 173px;
height: 33px;
left: 206px;
top: 282px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;

color: #000000;
}
.categoryHeading{
	position: absolute;
width: 108px;
height: 33px;
left: 438px;
top: 282px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;

color: #000000;
}
.sku_heading{
	position: absolute;
width: 48px;
height: 33px;
left: 671px;
top: 282px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;

color: #000000;
}
.quantityHeading{
	position: absolute;
width: 108px;
height: 33px;
left: 823px;
top: 282px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;
color: #000000;
}
.priceHeading{
	position: absolute;
width: 60px;
height: 33px;
left: 957px;
top: 282px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;
color: #000000;
}
.statusHeading{
	position: absolute;
width: 77px;
height: 33px;
left: 1214px;
top: 282px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;
color: #000000;
}
{box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
	position: absolute;
width: 251px;
height: 53px;
left: 1200px;
top: 100px;

background: #0071DC;
border-radius: 20px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 350px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.tableItems{
	margin-left: auto;
  margin-top: 250px;
  border-spacing: 20px;
  border-collapse: separate;
}
.popup_heading{
	color: #000;
}
.topheadings{
    margin-left: 110px;
    margin-top: 50px;
    font-size: 16px;
    color: #000;
  }
</style>

</head>
<body>
<!-- <div class="frame2"></div> -->
<!-- <div class="logo">LOGO</div> -->
<!-- <img src="assets/Ellipse 1.png" class="userProfilePic"> -->
<a class="topheadings" href="contactus.php">Contact Us</a>
<a class="topheadings" href="pricing.php">Pricing</a>
<a href="logout.php" class="topheadings">LOGOUT</a>

<!-- <span class="headings yellow"><a href="index.php"> Home</a></span> -->

<!-- <img src="assets/House.png" class="house"> -->

<!-- <div class="productsText">Products</div> -->

<!-- <div class="searchRectangle"><img src="assets/icon _search_.png" class="iconSearch"><input class="inputBox"></input></div> -->
<!-- <div class="addNewProductBtn"><div class ="iconPlus"><img src="assets/icon_plus_.png"></div></div> -->
<!-- <div class="newProductText">New Product</div> -->
<!-- <div class="checkBoxHeading"></div>
<div class="productNameHeading">Product Name</div>
<div class="categoryHeading">Category</div>
<div class="sku_heading">SKU</div>
<div class="quantityHeading">Quantity</div>
<div class="priceHeading">Price</div>
<div class="statusHeading">Status</div> -->

<!-- A button to open the popup form -->
<button class="open-button newProductText" onclick="openForm()">Add New Product</button>

<!-- The form -->
<div class="form-popup" id="myForm">
  <form class="form-container" method="POST">
    <h1 class="popup_heading">Add new Product</h1>

    <input type="text" placeholder="Enter Product Name" name="txtProductName" required>
    <input type="text" placeholder="Enter Category" name="txtCategory" required>
    <input type="text" placeholder="Enter SKU" name="txtSKU" reqsearchuired>
	<input type="text" placeholder="Enter Quantity" name="txtQuantity" required>
	<input type="text" placeholder="Enter Price" name="txtPrice" required>
	<!-- <input type="text" placeholder="Enter Status" name="txtStatus" required> -->

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<?php
			include("conn_sql.php");
			$result = mysqli_query($conn,"SELECT * FROM allitems");

			echo "<table border='0' class='tableItems'>
			<tr>
			<th>Product Name</th>
			<th>Category</th>
			<th>SKU</th>
			<th>Quantity</th>
			<th>Price</th>
			</tr>";
			
			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['Product Name'] . "</td>";
			echo "<td>" . $row['Category'] . "</td>";
			echo "<td>" . $row['SKU'] . "</td>";
			echo "<td>" . $row['Quantity'] . "</td>";
			echo "<td>" . $row['Price'] . "</td>";
			echo "</tr>";
			}
			echo "</table>";

?>

<script>
      function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
  </script>
</body>
</html>