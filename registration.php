<?php
$Name = $_POST["name"];
$Semester = $_POST["semester"];
$Email = $_POST["email"];
$Phone = $_POST["phone"];
$Usn = $_POST["usn"];
$Paid = "Not Paid";


$username = "a5014230_club";
$password = "34boat82";
$database = "a5014230_cseclub";
$host = "mysql12.000webhost.com";
$table = "Registration";
//$mysql_host = "mysql12.000webhost.com";
//$mysql_database = "a5014230_cseclub";
//$mysql_user = "a5014230_club";
//$mysql_password = "34boat82";


// Then change the variables below to pull your credentials from that file.
$cxn = mysqli_connect($host,$username,$password,$database)
             or die("Couldn't connect to server");
             
$db = mysqli_select_db($cxn,$database);
     $sql = "CREATE TABLE IF NOT EXISTS `$table` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `paid` varchar(10) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    mysqli_query($cxn,$sql);
$query = 'INSERT INTO '.$table.'(name,email,phone,usn,semester,paid) VALUES("'.$Name.'","'.$Email.'","'.$Phone.'","'.$Usn.'","'.$Semester.'","'.$Paid.'")';
mysqli_query($cxn,$query);


//email

$subject = 'Technoholix : Confirmation Mail';
$Header = "From : admin@technoholix.com";
$message = "Greetings $Name,\r\n\r\n We have received your application. Please make a payment of Rs 30 with the concerned personal within 3 working days.Thank you.\r\n\r\n-Team Technoholix";
$from = 'Team Technoholix ,Bangalore Institute of Technology';
mail($Email,$subject,$message,$Header);
echo '<script type="text/javascript">alert("You have successfully registered. Thank You !"); </script>';
?>
