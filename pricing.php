<!-- Page for Pricing -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pricing</title>
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

background: url(.png);
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
left: 82.15%;
right: 36.6%;
top: 4%;
}
.headerSection{/* Header section */


/* Auto layout */

display: flex;
flex-direction: column;
align-items: center;
padding: 96px 0px;
gap: 64px;

width: 1440px;
height: 342px;

/* Base/White */

background: #FFFFFF;

/* Inside auto layout */

flex: none;
order: 0;
align-self: stretch;
flex-grow: 0;}
.header1{/* Heading */


width: 768px;
height: 60px;

/* Display lg/Semibold */

font-family: 'Inter';
font-style: normal;
font-weight: 600;
font-size: 48px;
line-height: 90px;
/* Gray/900 */
color: #101828;
}
.supportingText{
	/* Supporting text */


width: 768px;
height: 30px;

/* Text xl/Regular */

font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 30px;
/* identical to box height, or 150% */


/* Gray/600 */

color: #475467;


/* Inside auto layout */

flex: none;
order: 1;
align-self: stretch;
flex-grow: 0;
}
.box1{
	/* Header section */


/* Auto layout */

display: flex;
flex-direction: column;
align-items: center;
padding: 30px 0px;
gap: 64px;

width: 1440px;
height: 60px;

/* Base/White */

background: #FFFFFF;

/* Inside auto layout */

flex: none;
order: 0;
align-self: stretch;
flex-grow: 0;
}
.box2{
	/* _Pricing tier card */
box-sizing: border-box;
margin-top:10px;
/* Auto layout */

display: flex;
flex-direction: column;
align-items: flex-start;
padding: 0px;
align-items: center;

width: 384px;
height: 570px;

/* Base/White */

background: #FFFFFF;
/* Gray/200 */

border: 1px solid #EAECF0;
/* Shadow/lg */

box-shadow: 0px 12px 16px -4px rgba(16, 24, 40, 0.08), 0px 4px 6px -2px rgba(16, 24, 40, 0.03);
border-radius: 16px;

/* Inside auto layout */

flex: none;
order: 0;
flex-grow: 1;
}
.price1{/* Price */


width: 190px;
height: 60px;

/* Display lg/Semibold */

font-family: 'Inter';
font-style: normal;
font-weight: 600;
font-size: 48px;
line-height: 60px;
/* identical to box height, or 125% */

text-align: center;
letter-spacing: -0.02em;

/* Gray/900 */

color: #101828;


/* Inside auto layout */

flex: none;
order: 0;
flex-grow: 0;
z-index: 0;
}
.button1{
	/* Button */


box-sizing: border-box;

/* Auto layout */

display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px 20px;
gap: 8px;
margin-left: 40px;

width: 320px;
height: 48px;

/* Primary/600 */

background: #7F56D9;
/* Primary/600 */

border: 1px solid #7F56D9;
/* Shadow/xs */

box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);
border-radius: 8px;

/* Inside auto layout */

flex: none;
order: 0;
align-self: stretch;
flex-grow: 0;
}
.button2{
	/* Button */


box-sizing: border-box;

/* Auto layout */

display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px 20px;
gap: 8px;
margin-left: 40px;

width: 320px;
height: 48px;

/* Base/White */

background: #FFFFFF;
/* Gray/300 */

border: 1px solid #D0D5DD;
/* Shadow/xs */

box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);
border-radius: 8px;

/* Inside auto layout */

flex: none;
order: 1;
align-self: stretch;
flex-grow: 0;
}
.priceSection{
	/* Section */


/* Auto layout */

display: flex;
flex-direction: column;
align-items: center;
padding: 0px 0px 96px;
gap: 64px;

width: 1440px;
height: 666px;

/* Base/White */

background: #FFFFFF;

/* Inside auto layout */

flex: none;
order: 1;
align-self: stretch;
flex-grow: 0;
}
.box3{
/*Box for price 2 -> $20/month	*/
/* _Pricing tier card */


box-sizing: border-box;

/* Auto layout */

display: flex;
flex-direction: column;
align-items: flex-start;
padding: 0px;
align-items: center;

width: 384px;
height: 570px;

/* Base/White */

background: #FFFFFF;
/* Gray/200 */

border: 1px solid #EAECF0;
/* Shadow/lg */

box-shadow: 0px 12px 16px -4px rgba(16, 24, 40, 0.08), 0px 4px 6px -2px rgba(16, 24, 40, 0.03);
border-radius: 16px;

/* Inside auto layout */

flex: none;
order: 1;
flex-grow: 1;
}
.price2{
	/* Price */


width: 197px;
height: 60px;

/* Display lg/Semibold */

font-family: 'Inter';
font-style: normal;
font-weight: 600;
font-size: 48px;
line-height: 60px;
/* identical to box height, or 125% */

text-align: center;
letter-spacing: -0.02em;

/* Gray/900 */

color: #101828;


/* Inside auto layout */

flex: none;
order: 0;
flex-grow: 0;
z-index: 0;
}
.section3{
	/* CTA section */


/* Auto layout */

display: flex;
flex-direction: column;
align-items: center;
padding: 96px 0px;
gap: 64px;

width: 1440px;
height: 422px;

/* Base/White */

background: #FFFFFF;

/* Inside auto layout */

flex: none;
order: 4;
align-self: stretch;
flex-grow: 0;

}
.startTrial{
	/* Heading */


width: 768px;
height: 44px;

/* Display md/Semibold */

font-family: 'Inter';
font-style: normal;
font-weight: 600;
font-size: 36px;
line-height: 44px;
/* identical to box height, or 122% */

letter-spacing: -0.02em;

/* Gray/900 */

color: #101828;


/* Inside auto layout */

flex: none;
order: 0;
align-self: stretch;
flex-grow: 0;
}
.learnMoreBox{
	/* Button */


box-sizing: border-box;

/* Auto layout */

display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px 20px;
gap: 8px;

width: 128px;
height: 48px;

/* Base/White */

background: #FFFFFF;
/* Gray/300 */

border: 1px solid #D0D5DD;
/* Shadow/xs */

box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);
border-radius: 8px;

/* Inside auto layout */

flex: none;
order: 0;
flex-grow: 0;
}
.topheading1{
    margin-left: 1000px;
    margin-top: 50px;
    font-size: 16px;
    color: #000;
  }
  .topheading2{
    margin-top: 50px;
    font-size: 16px;
    color: #000;
  }
  .topheading3{
    margin-top: 50px;
    font-size: 16px;
    color: #000;
  }
</style>

</head>
<body>
<!-- <div class="logo">LOGO</div> -->
<a class="topheading1" href="contactus.php">Contact Us</a>
<a class="topheadings2" href="addNewProducts.php">Add Products</a>
<a href="logout.php" class="topheadings3">LOGOUT</a>
<a href="index.php"><img src="assets/House.png" class="house"></a>
<p class="header1">Simple, transparent pricing</p>
<div class="supportingText">We believe Untitled should be accessible to all companies, no matter the size.</div>
<!-- <div class="box1"></div> -->
<div class="priceSection">
	<div class="box2">
		<p class="price1">$10/month</p>
		<p style="font-size: 20px;">Basic price</p>
		<p style="font-size: 16px;color: #475467;">Billed annually</p>
		<p style="font-family: 'Inter';">Access to all basic features</p>
		<p style="font-family: 'Inter';">Basic reporting and finishing</p>
		<p style="font-family: 'Inter';">10 GB data for the user</p>
		<p style="font-family: 'Inter';">Basic chat and email support</p>
		<a href="getStarted.php"><button class="button1" style="color: #FFFFFF;">Get Started</button></a>
		<a href="contactus.php"><button class="button2">Chat to sales</button></a>
	</div>
	<div class="box3">
		<p class="price2">$20/month</p>
		<p style="font-size: 20px;">Basic price</p>
		<p style="font-size: 16px;color: #475467;">Billed annually</p>
		<p style="font-family: 'Inter';">Access to all basic features</p>
		<p style="font-family: 'Inter';">Basic reporting and finishing</p>
		<p style="font-family: 'Inter';">10 GB data for the user</p>
		<p style="font-family: 'Inter';">Basic chat and email support</p>
		<a href="getStarted.php"><button class="button1" style="color: #FFFFFF;">Get Started</button></a>
		<a href="getStarted.php"><button class="button2">Chat to sales</button></a>
	</div>

<!-- <div class="section3">
	<p class="startTrial">Start your free Trial</p>
	<div class="learnMoreBox">Learn more</div>
</div> -->
</div>
</body>
</html>