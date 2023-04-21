<?php      
    session_start();
    include("conn_sql.php");
    include("functions.php");

    $err = filter_input(INPUT_GET, 'error');
    if ($err === "login") echo "<script>alert('Invalid Credentials!');</script>";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // something was posted
        $txtEmail = $_POST['txtEmail'];
        $txtPassword = $_POST['txtPassword'];

        if(!empty($txtEmail) && !empty($txtPassword) &&!is_numeric($txtEmail)){
            // read from database
            $sql = "SELECT * FROM `userdb_asset_management` WHERE email='$txtEmail' limit 1";
            $rs = mysqli_query($conn, $sql);
            if($rs){
              if($rs && mysqli_num_rows($rs)>0){
                $user_data = mysqli_fetch_assoc($rs);
                
                if($user_data['password'] === $txtPassword){
                  $_SESSION['email'] = $user_data['email'];
                  header("Location: addNewProducts.php");
                  die;
                }else{
                  echo "<script>alert('Invalid Credentials!');</script>";
                }
              }
            }
            else{
                echo "Cannot connect to database\n";
                printf("error: %s\n", mysqli_error($conn));
              }
        }else{
            // echo "Please enter correct information.";
            echo "<script>alert('Invalid Credentials!');</script>";
            header("Location:index.php?error=login");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT Sans' rel='stylesheet' type='text/css'>
<title>HOMEPAGE</title>
<style>
  body, html{
    background: blue;
    height: 100%;
    margin: 0;
  }
      .square {
    /* padding: 50px; margin: 150px; margin-top: 0px;  */
    text-align: center;}      
    .split {
    height: 100%;
    width: 50%;
    position: absolute;
    /* z-index: 1;  changed for Login anchor*/
    top: 0;
    overflow-x: hidden;
    padding:50px;
    /* border-style: solid;
    border-width: thick;   */
    margin-top: 10px;
    margin-left:100px; 
    margin-right:50px;
  }

  .left {
    left: 0;
    overflow: hidden;
    left: -5%;
  }

  .right {
    right: 0;
    overflow: hidden;
  }

  .centered {
    position: absolute;
    top: 50%;     /*change to 50%*/
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }
  .main_content{
    font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 700;
  font-size: 46px;
  line-height: 54px;
  color: #FFFFFF;
  text-align: left;
  }
  .sub_content{
    font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #FFFFFF;
  text-align: left;
  }
  .main_content_yellow{
    font-family: 'Roboto Condensed';
  font-style: normal;
  font-weight: 700;
  font-size: 46px;
  line-height: 54px;
  color: #E2BE36;
  text-align: left;
  }
  .know_more{
    font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
  text-align: center;
  color: #E2BE36;
  }
  .know_more_border{
    color: #fff;
    border-style: solid;
    border-width: 1px;
    width:50%;
  }
  .arrow{color: #fff}
  .right_side_text1{
    display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  padding: 10px 22px;
  gap: 10px;
  color: #fff;
  font-family: 'Lato';
  font-style: normal;
  font-weight: 800;
  font-size: 18px;
  }
  .right_side_text2{
    display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  padding: 10px 22px;
  gap: 10px;
  color: #fff;
  font-family: 'Lato';
  font-style: normal;
  font-weight: 800;
  font-size: 18px;
  }
  .right_side_text3{
    display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  padding: 10px 22px;
  gap: 10px;
  color: #fff;
  font-family: 'Lato';
  font-style: normal;
  font-weight: 800;
  font-size: 18px;
  }
  .right_side_text_box1{
    background: #3046F5;
    position: absolute;
    width: 353px;
    height: 42px;
    box-shadow: 3px 13px 5px 3px rgba(0, 0, 0, 0.25);
    border-radius: 6px;
    top: 30%;
    left: -50%;
  }
  .right_side_text_box2{
    background: #3046F5;
    position: absolute;
    width: 241px;
    height: 42px;
    box-shadow: 3px 13px 5px 3px rgba(0, 0, 0, 0.25);
    border-radius: 6px;
    top: 10%;
    left: -30%;
  }
  .right_side_text_box3{
    background: #3046F5;
    position: absolute;
    width: 349px;
    height: 42px;
    box-shadow: 3px 13px 5px 3px rgba(0, 0, 0, 0.25);
    border-radius: 6px;
    top: 92%;
    left: 40%;
  }
  .heading_tags{
    display: inline;
    margin-top: 100px;
  }
  .headings{
    position: relative;
    float: right;
    margin-left: 30px;
    margin-top: 43px;
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 19px;
    color: #fff;
    z-index: 9;
  }
  .fist_heading{
    margin-top: 43px;
    margin-left: 1px;
    float: left;
    font-family: 'PT Sans';
    font-style: normal;
    font-weight: 400;
    font-size: 26px;
    color: #FFFFFF;
  }
  .first_heading_yellow{
    color: #E2BE36;
    font-weight: 700;
    margin-left: 140px;
  }
  .yellow{
    color: #E2BE36;
  }
  .last_heading{
    margin-right:140px;
    border:none;
    background-color:transparent;
    outline:none;
  }
  .black_translucent_background{
    background-color : #000;
    opacity:0.5;
    /* background-color: rgba(255,255,255,0.5); */
    height: 100%; 
    /* z-index:9; */
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  * {box-sizing: border-box;}

  /* The popup form - hidden by default */
  .form-popup {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 3px solid #f1f1f1;
    text-align: center;
    z-index:9;
  }

  /* Add styles to the form container */
  .form-container {
    max-width: 300px;
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
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    /* opacity: 0.8; */
  }

  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: red;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  }
  button{
    cursor: pointer;
  }
  .imgRightModel{
    position: absolute;
top:80px;
  }
</style>
</head>
<body>

<div class="form-popup" id="myForm">
        <form class="form-container" method="post">
          <h1>Login</h1>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="txtEmail" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="txtPassword" required>

          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
  </div>
<div id="makeTranslucentBackground">
  <div>
      <span class="fist_heading first_heading_yellow">Easy </span><span class="fist_heading"> Asset Management</span>
      <!-- <a class="headings last_heading" href="homepage.php">Login</a> -->
      <button class="headings last_heading cursor" onclick="openForm()">Login</button>
      
      <a class="headings" href="contactus.php">Contact Us</a>
      <a class="headings" href="pricing.php">Pricing</a>
      <span class="headings yellow">Home</span>
      
  </div>

      <br>
      <div class="split left">
            <div class="centered">
                  <div class="main_content">Best platform to manage a store</div>
                  <br>
                  <p class="sub_content">The most complete and easiest store manager platform ever. Take a trial and enjoy the features!</p>
                  <div class="know_more_border"><a href="getStarted.php" class="know_more">Get Started &#8594</a></div>
            </div>
      </div>

      <div class="split right">
            <img src="Rightmodel.jpg" class="imgRightModel" width="680px";
 height="480px"; id="img_given">
            <!-- <img src="product.jpg" width="150px" height="200px" id="img_given"> -->
      </div>
</div>      
  <script>
      function openForm() {
        document.getElementById("myForm").style.display = "block";
        document.getElementById("makeTranslucentBackground").classList.add('black_translucent_background');
        document.getElementById("img_given").style.zIndex = "-1";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
        document.getElementById("makeTranslucentBackground").classList.remove('black_translucent_background');
      }
  </script>
</body>
</html>