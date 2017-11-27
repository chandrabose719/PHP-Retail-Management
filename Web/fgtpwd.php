
<?php session_start();
include "connect.php"; //connects to the database
if (isset($_POST['username'])){
	$username = $_POST['username'];
	$query="SELECT * FROM `user` WHERE username='$username'";
	$result   = mysql_query($query) or die(mysql_error($connection));
	$count=mysql_num_rows($result);
	// If the count is equal to one, we will send message other wise display an error message.
	if($count==1)
	{
		$rows=mysql_fetch_array($result);
		$pass  =  $rows['password'];//FETCHING PASS
		//echo "your pass is ::".($pass)."";
		$to = $rows['email'];
		echo "your email is ::".$to;
		//Details for sending E-mail

$url = "http://www.re-store.com/";

require_once('C:\xampp\PHPMailer-master\class.phpmailer.php');
require_once('C:\xampp\PHPMailer-master\class.smtp.php');
// include("C:\xampp\PHPMailer-master\class.smtp.php"); optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "balapc4@gmail.com";
$mail->Password = "herbal07";
$mail->SetFrom("Re-Store Admin");
$mail->Subject = "Password recovered";
$mail->Body = "Password Recovery <br>
	          ----------------------------------------------<br>
Hi $username, As per your request your password has been recovered and the following are the details:<br>
		Url : $url;<br>
		Email Details is : $to;<br>
		Here is your password  : <b>$pass;</b><br>
		Sincerely,<br>
		Admin";

$mail->AddAddress($to);


$mai = $mail->Send();



	} else {
	if ($_POST ['email'] != "") {
	    $fmsg = "Not found your email in our database";
		}
		}

//If the message is sent successfully, display sucess message otherwise display an error message.
 if(!$mai) {

	 echo "Mailer Error: " . $mail->ErrorInfo;
                   if($_POST['email']!="")
		$nmsg = "Cannot send password to your e-mail address.Problem with sending mail...";
	 
 } else {
 

    $smsg = "Your Password Has Been Sent To Your Email Address.";
 header('Location: index.html');	
	}

}
?>

 <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($nmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $nmsg; ?> </div><?php } ?>