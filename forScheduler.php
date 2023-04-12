<?php
include("conn_sql.php");
require 'PHPMailer/PHPMailerAutoload.php';

$result = mysqli_query($conn,"SELECT * FROM allitems");
$message = '';

$message.="<table border='0' class='tableItems'>
			<tr>
			<th>Product Name</th>
			<th>Category</th>
			<th>SKU</th>
			<th>Quantity</th>
			<th>Price</th>
			</tr>";
			
			while($row = mysqli_fetch_array($result))
			{
            $message.="<tr>";
			$message.="<td>" . $row['Product Name'] . "</td>";
			$message.="<td>" . $row['Category'] . "</td>";
			$message.="<td>" . $row['SKU'] . "</td>";
			$message.="<td>" . $row['Quantity'] . "</td>";
			$message.="<td>" . $row['Price'] . "</td>";
			$message.="</tr>";
			}
			$message.="</table>";

$message2 = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are todays report!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// while($row = mysqli_fetch_array($result))
// <table>
// 			{
// 			echo "<tr>";
// 			echo "<td>" . $row['Product Name'] . "</td>";
// 			echo "<td>" . $row['Category'] . "</td>";
// 			echo "<td>" . $row['SKU'] . "</td>";
// 			echo "<td>" . $row['Quantity'] . "</td>";
// 			echo "<td>" . $row['Price'] . "</td>";
// 			echo "</tr>";
// 			}

// $name = $_POST["name"];
// $email = $_POST["email"];
// $subject = $_POST["subject"];
//$message = $result;

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'upqqbkn710@outlook.com';                 // SMTP username
$mail->Password = 'irjmP53_kl';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('upqqbkn710@outlook.com', 'Aman');
$mail->addAddress('amanbhamra721@gmail.com', 'Deep');     // Add a recipient
$mail->addAddress('amandeepnull721@gmail.com');               // Name is optional
$mail->addReplyTo('upqqbkn710@outlook.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Todays Report';
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    // header("Location: contactus.php");
}