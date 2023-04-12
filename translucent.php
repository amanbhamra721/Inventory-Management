
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT Sans' rel='stylesheet' type='text/css'>
<title>HOMEPAGE</title>
<style>
    body, html {
  height: 100%;
  margin: 0;
  background-color:#1B4D46;
}
.black_translucent_background{
  /* The image used */
  background-color : black;
  color: white;
  opacity:0.5;
  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }
  /* .translucent_img{
  box-shadow: inset 0 0 0 1000px rgba(0,0,0,.2);
  } */
  /* Set a style for the submit/login button */
  .form-popup {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 3px solid #f1f1f1;
  z-index: 9; 
  text-align: center;
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
button{
  cursor: pointer;
}
  </style>
</head>
<body>
    <div id="makeTranslucentBackground">
    <div>HeLLO World</div>
    <img src="Rightmodel.jpg" width="680px" height="595px" id="img_given">
    </div>

    <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
          <h1>Login</h1>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
  </div>
    
  <button onclick="openForm()">Login</button>
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
