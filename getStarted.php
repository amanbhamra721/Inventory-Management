<!-- Contact US -->
<?php
    session_start();
    include("conn_sql.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // something was posted
        $txtEmail = $_POST['txtEmail'];
        $txtPassword = $_POST['txtPassword'];

        if(!empty($txtEmail) && !empty($txtPassword) &&!is_numeric($txtEmail)){
            // Save to database
            $sql = "INSERT INTO `userdb_asset_management` (`email`, `password`) VALUES ('$txtEmail', '$txtPassword')";
            $rs = mysqli_query($conn, $sql);
            if($rs)
            {          
            echo "Contact Records Inserted";
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
	<title>Get Started</title>
<style>

.frame1{
    position: absolute;
width: 100%;
height: 70px;
left: 0px;
top: 0px;

background: #0071DC;
}
.textFrame{
    position: absolute;
width: 1053px;
height: 706px;
left: 75px;
top: 20px;

background: #D9D9D9;
}
.textInFrame{
    position: absolute;


font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 28px;
line-height: 39px;

color: #000000;
}
.signUpBtn{
    position: absolute;
width: 178px;
height: 48px;
left: 1199px;
top: 600px;

background: #7F56D9;
border-radius: 10px;
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
  max-width: 300px;
  padding: 10px;
  background-color: white;
  margin-left: 1150px;
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
  color: white;
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
.goback{
    margin-left:1150px;
}
.inputbox1{
    width:20px;
}
</style>

</head>
<body>
<!-- <div class="frame1"></div> -->
<div class="textFrame"><div class="textInFrame">Operating a business may be a stressful experience, especially if you have a significant number of items and sales. It's easy to get lost in the shuffle and overlook important details, which can result in lost sales, disgruntled customers, and lower profits. This is where an inventory management system can help. <br><br>An inventory management system is equivalent to having a superpower that allows you to view every product, sale, and piece of data in real time. You can watch your inventory levels, keep track of your suppliers, and monitor your sales channels all in one place with the help of an inventory management system. <br><br>So why not bestow superpowers on your company? Invest in an inventory management system today and enjoy the convenience and efficiency of having a real-time view of your inventory and sales.</div></div>
<a href="index.php" class="goback">Go Back</a>

    <form class="form-container" method="post">
          <h1>SignUp</h1>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="txtEmail" class="inputbox1" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="txtPassword" class="inputbox1" required>

          <button type="submit" class="signUpBtn">SignUp</button>
        </form>


        
</div>

</body>
</html>