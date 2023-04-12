<?php
session_start();
include("conn_sql.php");
$idallitems = $_GET['idallitems'];
$quantity = $_GET['quantity'];
echo "Total Quantity: $quantity";

if($_SERVER['REQUEST_METHOD'] == "POST"){
      // something was posted
      $txtQty = (int)$quantity - (int)$_POST['txtQty'];
      if(!empty($txtQty)){
          // Save to database
          $sql = "UPDATE `allitems` SET `Quantity`='$txtQty' WHERE `idallitems`='$idallitems'";
          $rs = mysqli_query($conn, $sql);
          if($rs)
          {          
          echo "Contact Records Updated";
          header("Location: sellingTill.php");
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
<link rel="stylesheet" href="https://unpkg.com/chota"><title>DASHBOARD</title>
</head>
<body>
      <form class="form-container" method="post">
          <h1>Complete Purchase</h1>

          <label for="email"><b>Quantity</b></label>
          <input type="text" placeholder="Enter Quantity" name="txtQty" required>

          <button type="submit" class="signUpBtn">PURCHASE</button>
        </form>
</body>
</html>