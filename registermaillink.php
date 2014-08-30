<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php   
		ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>You've been registered!</title>
<link rel="stylesheet" type="text/css" href="demo.css">
<?php

$Name = $_POST["name"];
$Semester = $_POST["semester"];
$Email = $_POST["email"];
$Phone = $_POST["phone"];
$Usn = $_POST["usn"];
$Paid = "Not Paid";
$Code = md5(uniqid(rand())); 


$connection=mysql_connect("mysql.1freehosting.com","u737891303_cse","bitcse2014");
		if(!$connection)
		{
			die("error in connection  reg1" . mysql_error());	
		}
	
		$db=mysql_select_db("u737891303_club",$connection);
		if(!$db)
		{
			die( "error in db" . mysql_error());
		}
$query = "INSERT INTO temp (code,name,email,phone,usn,semester,paid) VALUES('$Code','$Name','$Email','$Phone','$Usn','$Semester','$Paid')";
		
			
		$result=mysql_query($query) or  die( "error in db" . mysql_error());
		
 ?>

</head>

<body>

<div class="registered">

<h1>You've been registered at our site!</h1>
<br />
<h3>Your Confirmation link Has Been Sent To Your Email Address. <br />
      Do check your spam in case you did not receive our email.</h3>   <br />
<h2>Have a great day!</h2> 
</div>
<?php

if($result){
	
			$to=$Email;
			$subject="Confirmation link for Technoholix Club Membership ";
			$header="from: Technoholix@bit_bangalore";
			$message="Your Comfirmation link \r\n";
			$message.="Click on this link to activate your account \r\n";
			$message.="http://technoholixbit.com/confirmation.php?passkey=$code";
			$sentmail = mail($to,$subject,$message,$header);
}
else {
		echo "Not found your email in our database";
}

if($sentmail){
		//echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
		//echo "Cannot send Confirmation link to your e-mail address";
}


?>

</body>
</html>

<?php

 	 mysql_close($connection);
	 ob_end_flush();

?>
