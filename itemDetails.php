<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Item Details</title>
<style>
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
left: 1200px;
top: 20px;

background: url(.png);
border: 0px solid #FFFFFF;
}
.userProfileName{
	position: absolute;
width: 51px;
height: 25px;
left: 1250px;
top: 23px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 600;
font-size: 18px;
line-height: 25px;
/* identical to box height */


color: #E1FFEE;
}
.logout{
	position: absolute;
width: 51px;
height: 25px;
left: 1350px;
top: 23px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 600;
font-size: 18px;
line-height: 25px;
}
.sideicon1{
	position: absolute;
	width: 49px;
	height: 51px;
	left: 51px;
	top: 215px;
}
.sideicon1{
	position: absolute;
	width: 49px;
	height: 51px;
	left: 51px;
	top: 215px;
}
.frame2{
	/* Frame 2 */
position: absolute;
width: 100%;
height: 70px;
left: 0px;
top: 0px;

background: #0071DC;
}
.topProducttext{/* Top product of the month */


position: absolute;
width: 316px;
height: 33px;
left: 30px;
top: 110px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;

color: #000000;}
.topProduct1{
	/* Rectangle 6 */


position: absolute;
width: 443px;
height: 336px;
left: 30px;
top: 163px;

background: url(.jpg), #D9D9D9;
border-radius: 12px 12px 0px 0px;
}
.topProduct2{
/* Rectangle 7 */


position: absolute;
width: 443px;
height: 335.74px;
left: 498px;
top: 163px;

background: url(.jpg), #D9D9D9;
border-radius: 12px 12px 0px 0px;
}
.topProduct3{
	/* Rectangle 8 */


position: absolute;
width: 446px;
height: 335.74px;
left: 966px;
top: 163px;

background: url(.jpg), #D9D9D9;
border-radius: 12px 12px 0px 0px;
}
.topProduct1Rectangle{
	/* Rectangle 9 */


position: absolute;
width: 443px;
height: 128px;
left: 30px;
top: 492px;

background: #F9E189;
border-radius: 0px 0px 12px 12px;
font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 27px;
text-align: center;
color: #000000;
}
.topProduct2Rectangle{/* Rectangle 10 */


position: absolute;
width: 442.38px;
height: 127.84px;
left: 498.62px;
top: 492.46px;

background: #A14343;
border-radius: 0px 0px 12px 12px;
font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 27px;

text-align: center;
color: #FFFFFF;}
.topProduct3Rectangle{/* Rectangle 11 */


position: absolute;
width: 446px;
height: 127.84px;
left: 966px;
top: 492.46px;

background: #006A53;
border-radius: 0px 0px 12px 12px;
font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 27px;

text-align: center;
color: #FFFFFF;
}
.detailsArrow{
left: 22.9%;
right: 74.99%;

background: #000000;
}
.newProduct{/* New product */


position: absolute;
width: 156px;
height: 33px;
left: 31px;
top: 650px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;

color: #000000;}
.prod1{position: absolute;
width: 261px;
height: 239px;
left: 30px;
top: 703px;

background: url(.png), #FFFFFF;
border-radius: 12px 12px 0px 0px;
font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 27px;

color: #000000;
}
.prod2{
	position: absolute;
width: 261px;
height: 239px;
left: 310px;
top: 703px;

background: url(.png);
border-radius: 12px 12px 0px 0px;
font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 27px;

color: #000000;
}
.prod3{
	position: absolute;
width: 261px;
height: 239px;
left: 591px;
top: 703px;

background: url(.png);
border-radius: 12px 12px 0px 0px;
font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 27px;

color: #000000;
}
.prod4{
	position: absolute;
width: 261px;
height: 239px;
left: 871px;
top: 703px;

background: url(.png);
border-radius: 12px 12px 0px 0px;
font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 27px;

color: #000000;
}
.prod5{
	position: absolute;
width: 261px;
height: 239px;
left: 1149px;
top: 703px;

background: url(.png);
border-radius: 12px 12px 0px 0px;
font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 20px;
line-height: 27px;

color: #000000;
}
.sellingFast{
/* Selling fast */


position: absolute;
width: 136px;
height: 33px;
left: 32px;
top: 1094px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;

color: #000000;
}
.showmore{/* Show more */


position: absolute;
width: 130px;
height: 33px;
left: 1282px;
top: 650px;

font-family: 'Open Sans';
font-style: normal;
font-weight: 600;
font-size: 24px;
line-height: 33px;
/* identical to box height */

text-transform: capitalize;

color: #0074DF;
}

</style>
</head>
<body>

<div class="frame2"></div>
<div class="logo">LOGO</div>
<a href="logout.php" class="logout">LOGOUT</a>
<img src="assets/Ellipse.png" class="sideicon1"></div>
<img src="assets/Ellipse 1.png" class="userProfilePic">
<div class="userProfileName">UserName</div>
<div class="topProducttext">Top product of the month</div>
<img src="assets/Rectangle 6.jpg" class="topProduct1"></div>
<img src="assets/Rectangle 7.jpg" class="topProduct2"></div>
<img src="assets/Rectangle 8.jpg" class="topProduct3"></div>
<div class="topProduct1Rectangle">Find Your Perfect Moisturizer<br><br><br>Details<img src="assets/Vector.jpg" class="detailsArrow"></div>
<div class="topProduct2Rectangle">Find Your Perfect Moisturizer<br><br><br>Details<img src="assets/Vector.jpg" class="detailsArrow"></div>
<div class="topProduct3Rectangle">Find Your Perfect Moisturizer<br><br><br>Details<img src="assets/Vector.jpg" class="detailsArrow"></div>
<div class="newProduct">New Product</div>
<div class="showmore">Show more</div>
<div class="prod1"><img src="assets/Rectangle 17.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
<div class="prod2"><img src="assets/Rectangle 18.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
<div class="prod3"><img src="assets/Rectangle 19.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
<div class="prod4"><img src="assets/Rectangle 20.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
<div class="prod5"><img src="assets/Rectangle 21.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
<p class="sellingFast">Selling fast</p>
<div class="showmore" style="top: 1094px;">Show more</div>
<div class="prod1" style="top: 1150px;"><img src="assets/Rectangle 19.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
<div class="prod2" style="top: 1150px;"><img src="assets/Rectangle 18.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
<div class="prod3" style="top: 1150px;"><img src="assets/Rectangle 17.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
<div class="prod4" style="top: 1150px;"><img src="assets/Rectangle 21.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
<div class="prod5" style="top: 1150px;"><img src="assets/Rectangle 20.png">Glossier<br>Glossier Glossier You Eau de Parfum</div>
</body>
</html>