<!-- Contact US -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.min.css">
	<title>Contact Us</title>
	<meta charset="UTF-8">
<style>
	.getintouch{
		/* Get in Touch */


	position: absolute;
	width: 252px;
	height: 54px;
	left: 165px;
	top: 104px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 700;
	font-size: 40px;
	line-height: 54px;
	text-transform: capitalize;

	color: #000000;
	}
	.subheading{
		/* Our friendly team would love to hear from you */


	position: absolute;
	width: 461px;
	height: 27px;
	left: 165px;
	top: 193px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;
	}
	.subheading1{
		/* Our friendly team would love to hear from you */


	position: absolute;
	width: 461px;
	height: 27px;
	left: 165px;
	top: 193px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;

	}
	.firstname{
		/* First Name */


	position: absolute;
	width: 102px;
	height: 27px;
	left: 155px;
	top: 281px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;

	}
	.firstnamebox{
		/* Rectangle 36 */


	box-sizing: border-box;

	position: absolute;
	width: 294px;
	height: 40px;
	left: 162px;
	top: 320px;

	background: #FFFFFF;
	border: 2px solid #000000;
	border-radius: 10px;
	}
	firstnamehint{
		/* First Name */


	position: absolute;
	width: 102px;
	height: 27px;
	left: 180px;
	top: 330px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;

	mix-blend-mode: darken;
	opacity: 0.3;
	}
	.lastname{
		/* Last Name */


	position: absolute;
	width: 100px;
	height: 27px;
	left: 510px;
	top: 281px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;
	}
	.lastnamebox{
		/* Rectangle 37 */


	box-sizing: border-box;

	position: absolute;
	width: 294px;
	height: 40px;
	left: 510px;
	top: 320px;

	background: #FFFFFF;
	border: 2px solid #000000;
	border-radius: 10px;
	}
	.lastnamehint{
		/* Last Name */


	position: absolute;
	width: 100px;
	height: 27px;
	left: 520px;
	top: 330px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;

	mix-blend-mode: darken;
	opacity: 0.3;
	}
	.email{
		/* Email */


	position: absolute;
	width: 51px;
	height: 27px;
	left: 162px;
	top: 400px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;

	}
	.phoneNo{
		/* Phone no */


	position: absolute;
	width: 93px;
	height: 27px;
	left: 162px;
	top: 500px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;
	}
	.emailBox{
		/* Rectangle 38 */


	box-sizing: border-box;

	position: absolute;
	width: 641px;
	height: 40px;
	left: 162px;
	top: 440px;

	background: #FFFFFF;
	border: 2px solid #000000;
	border-radius: 10px;
	}
	.phoneBox{
		/* Rectangle 39 */


	box-sizing: border-box;

	position: absolute;
	width: 641px;
	height: 40px;
	left: 162px;
	top: 550px;

	background: #FFFFFF;
	border: 2px solid #000000;
	border-radius: 10px;
	}
	.US{
		/* US */


	position: absolute;
	width: 26px;
	height: 27px;
	left: 173px;
	top: 555px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;
	}
	.arrow{
		position: absolute;
	width: 20px;
	height: 14.73px;
	margin-left: 40px;
	margin-top: 10px;
	}
	.message{
		/* Message */


	position: absolute;
	width: 82px;
	height: 27px;
	left: 162px;
	top: 630px;

	font-family: 'Open Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 20px;
	line-height: 27px;
	text-transform: capitalize;

	color: #000000;

	}
	.messageBox{

	box-sizing: border-box;

	position: absolute;
	width: 641px;
	height: 229px;
	left: 162px;
	top: 680px;
	margin-bottom: 20px;

	background: #FFFFFF;
	border: 2px solid #000000;
	border-radius: 10px;

	}
	.messageSend{
		position: absolute;
	width: 391px;
	height: 48px;
	left: 164px;
	top: 941px;

	background: #7F56D9;
	border-radius: 10px;
	color: #FFFFFF;
	}
	.image{
		position: absolute;
	width: 563px;
	height: 718px;
	left: 855px;
	top: 50px;

	background: url(contact-us.jpg);
	}
	.Box1{
		margin-top:250px;
		margin-left:10px;
	}
	.individualInputBox{
		width:250px;
	}
	.individualInputBoxMessage{
		width:250px;
		line-height:100px:
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
<div class="getintouch">Get in touch</div>
<div class="subheading1">Our friendly team would love to hear from you</div>
<a href="logout.php" class="topheadings">LOGOUT</a>
<a class="topheadings" href="contactus.php">Contact Us</a>
<a class="topheadings" href="pricing.php">Pricing</a>
<a class="topheadings" href="addNewProducts.php">Add Products</a>
<!-- <div class="firstname">First Name</div>
<div class="firstnamebox"></div>
<div class="lastname">Last Name</div>
<div class="lastnamebox"></div>
<div class="email">Email</div>
<div class="emailBox"></div>
<div class="phoneNo">Phone</div>
<div class="phoneBox"><img class="arrow" src="assets/icon _chevron bottom_.png"></div>
<div class="US">US</div>
<div class="message">Message</div>
<div class="messageBox"></div>
<div class="messageSend">Send Message</div> -->
<div class="Box1">
<form method="post" action="send-email.php">
<input placeholder="Full Name" name="name" id="name" class="individualInputBox"></input>
<input placeholder="Email" name="email" id="email" class="individualInputBox"></input>
<input placeholder="PhoneNo" name="PhoneNo" id="PhoneNo" class="individualInputBox"></input>
<input placeholder="Subject" name="subject" id="subject" class="individualInputBox"></input>
<input placeholder="Message" name="message" id="message" class="individualInputBox"></input>
<button>SEND</button>
</form>
</div>
<a href="index.php"><button>GO BACK</button></a>
<img src="assets/contact-us.jpg" class="image">
</body>
</html>