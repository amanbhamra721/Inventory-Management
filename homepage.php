<?php      
    session_start();
    $userId = $password = "";
    // echo("<script type='text/javascript'> window.alert('Hi There, I am the Alert Box!') </script>");

    // Importing json from composer.json
    $userID_from_json = $password_from_json = 0;
    $str = file_get_contents('composer.json');
    $arr = json_decode($str, true); // decode the JSON into an associative array
    // -----------------------------

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['userId'];  
    $password = $_POST['password'];  
      
    function check_if_element_present($value_session, &$arr, $element){
      $element_is_present = 0;
      foreach($arr['person'] as $key => $value) {
          foreach($value as $child_key => $child_value) {
              if($child_key==$element and $child_value==$value_session){
                $element_is_present = 1;
                return array($element_is_present,$value);
              }
            }
        }
      return array($element_is_present,$value);
    }

    $id_is_present = check_if_element_present($userId,$arr,"id")[0];
    if($id_is_present==1){
      $user_data = check_if_element_present($password,$arr,"password");
      $password_is_present = $user_data[0];
      if($password_is_present){
        $_SESSION['user_data']=$user_data;
        $_SESSION['login_user'] = $userId;
        $_SESSION['password'] = $password;

        // include this line to redirect ot other page after login
        header("Location:output.php");
        echo "<h1><center> Login successful </center></h1>"; 
      }
    }else{
      echo "password not match";
    }
  }
?>  

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOMEPAGE</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <style>
  body,h1 {font-family: "Raleway", sans-serif}
  body, html {height: 100%}
  body
  {
    background-image: url("dashboard_background.jpg");
    background-size: 100% 100%;
    color: white;
    overflow: hidden
  }
  .bgimg {
    min-height: 100%;
    background-position: center;
    background-size: cover;
  }
  .container{position: relative;
    /* width: 300px;
    height: 200px; */
  }
  .block {
    background-color: black;
    opacity: 0.5;
  }
  .text {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  input[type=text]:focus {
  border: 3px solid #FF00FF;
  text-align: left;
    /* margin-top: 100px; */
}input[type=number]:focus {
  border: 3px solid #FF00FF;
  text-align: left;
    /* margin-top: 100px; */
}input {
  text-align: left;
  /* margin-top: 100px; */
}
  .b_logout{position: absolute;left: 1150px;top: 22px;font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: normal;font-size: 30px;line-height: 34px;color: black;font-size: 25px}
  .b_login{font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: normal;font-size: 30px;color: black;font-size: 25px; background:#FF00FF; align-self: center;}
  .square {
    /* padding: 50px; margin: 150px; margin-top: 0px;  */
    text-align: center; background: rgba(0, 0, 0, .5)    /*  40% opaque green */}
  .heading_center{font-family: "Raleway", sans-serif; text-align: center;}
  .dashboard{font-family: "Raleway", sans-serif;align-self: center;text-align: center;z-index:100;}
  </style>
</head>
<body>
<h1 id="header" class="heading_center">MAVERICK FINANCING</h1>
<br>
<!-- <a href="/MaverickFinancing.github.io/try1.html">TRY1 PAGE</a> -->

    
    <div class="square">
      <br><br>
      <!-- <input id="inputUserId" type="number" placeholder="User Id">
      <input id="inputPassword" class="input" type="text" placeholder="Password"><br><br>
      <button id="login" class="b_login" onclick="myFunction()">LOGIN</button><br> -->
      <!-- <h2 id="demo"></h2> -->
      <a href="output.php">go to homepage</a>
      <h1 id="dashboard_text" class="dashboard">DASHBOARD</h1>
      <hr id="border_underline" class="w3-border-grey" style="margin:auto;width:40%">
      
         <!-- <br><br><br>
         <h2 id="invested">YOU INVESTED :</h2>
         <h2 id="profit">YOUR PROFIT :</h2>
         <br><br> -->

         <form action = "" method = "post">
      <br><br>
      UserName  :<input type = "text" name = "userId" value="<?php echo $userId;?>"><br /><br />
        Password  :<input type = "password" name = "password" value="<?php echo $password;?>"><br/><br />
        <input class="b_notify_me" type = "submit" value = " Submit "/><br /><br />
    </form>
      
    </div>
  <!-- <script>
    // Setting visibility
    let flag = false;
    if(flag === false){
      //WHEN USER HAS NOT LOGGED IN
      document.getElementById('dashboard_text').style.visibility = 'hidden';
      document.getElementById('border_underline').style.visibility = 'hidden';
      document.getElementById('invested').style.visibility = 'hidden';
      document.getElementById('profit').style.visibility = 'hidden';
    }
    

    function myFunction() {
    
      var inputUserId = document.getElementById("inputUserId").value;
      var inputPassword = document.getElementById("inputPassword").value;

      let xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(xhttp.readyState==4 && xhttp.status==200){
          var data = JSON.parse(xhttp.responseText);

          let txt = "";
          let count = 0;
          let index = -1;
          // let flag = false;    //Used if I need to redirect to a new page
  
          // Checking whether id is present in json
          for(var i = 0; i < data.length; i++) {
            if(inputUserId === data[i].id){
              count = 1;
              index = i;
  
            }
          }
          if(count === 1){
              if(inputPassword === data[index].password){
                txt = data[index].amount;
                flag = true;
              } else {
                txt = "Invaid Credentials!";
              }
  
          }
          else{
            txt = "No Such User found";
          }
          document.getElementById("demo").innerHTML = txt;
          if(flag === true){
            document.getElementById('dashboard_text').style.visibility = 'visible';
            document.getElementById('border_underline').style.visibility = 'visible';
            document.getElementById('invested').style.visibility = 'visible';
            document.getElementById('profit').style.visibility = 'visible';

            // elem.style.display = 'none';
            document.getElementById('inputUserId').style.display = 'none';
            document.getElementById('inputPassword').style.display = 'none';
            document.getElementById('login').style.display = 'none';
            document.getElementById('demo').style.display = 'none';
            // window.location.replace('/MaverickFinancing.github.io/try1.html');
            document.getElementById("invested").innerHTML = "YOU INVESTED :"+txt;
            document.getElementById("profit").innerHTML = "YOUR PROFIT :"+txt;
          }
        } else{
          document.getElementById("demo").innerHTML = "sorry! ERROR";
          console.log("HeLLO");
          console.
        }
      }
      xhttp.open("GET","composer.json",true);
      xhttp.send();
    }
  </script> -->
</body>
</html>
