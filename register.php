<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php   
		// ob_start();
	
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Technoholix | BIT CSE Official Club</title>
<link rel="shortcut icon" href="images/Capture1232.png" />


    <!-- CSS STYLE -->
    <link rel="stylesheet" type="text/css" href="css/styleR.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/preview.css" media="screen" />
     <link rel="stylesheet" href="css/header1.css">
     <link rel="stylesheet" href="css/font-awesome.css">


    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
     <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css"> <!-- footer css -->

<style>

.circle {
  display: block;
  width: 150px;
  height: 150px;
  margin: 1em auto;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-border-radius: 99em;
  -moz-border-radius: 99em;
  border-radius: 99em;
  box-shadow: 0 0 8px rgba(0, 0, 0, .8);
}
.copyrightbit {
	width:100%;
	background-color:#3CC;
	padding:5px;
	text-shadow: 0px 0px 1px #000000;
	box-shadow: 0 0 8px rgba(0, 0, 0, .8);
}

.title {
    font-family: 'Myriad Pro';
	color: #666666;
	font-size: 24px;
	text-shadow: 1px 1px 2px #00E8E8; 
	float:right;
	padding-right:20px;
	padding-top:3px;
}
.registered{
	height:570px;
	
}
</style>
</head>
</head>
<body style="background-image:url(images/tf5.jpg)">
<div class="navbar navbar-default navbar-fixed-top" role="navigation" style="box-shadow: 0px 10px 5px #888888;">
  <div style="max-height:50px">
  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <div style="width:220px;padding-left:20px;margin-right:40px">
          <div style="padding-top:4px;"> <img src="images/Capture11.PNG" height="40px;" width="45px"/>
          <div class="title"> Technoholix   </div></div>
          </div>
        </div>
	    </div>
         
        <div>
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
           <li style="padding-bottom:5px;padding-right:0px;font-size:18px;text-shadow: 0px 0px 0.5px #666666;color:#639;"><a href="index.html">Home</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      <li><a id="login"></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
 </div>
 </div></div>
 </div><!--=== Style Switcher ===-->  

<div style="width:100%;height:45px">
</div>
<div class="container">
		<div class="page-header">
			<div class="row">
			
				<div class="col-md-2">
					<img src="images/Capture1232.png" width="125px">
					
				</div>
				<div class="col-md-8">
					<h1><span style="font-size:150%;">Technoholix</span><br> <small> Where Technology Meets Entertainment</small></h1>
				</div>
				<div class="col-md-2">
					<div style="background:url(images/Bitlogo.png) no-repeat;height:150px; background-size:contain ;"></div>				
				</div>
			</div>			
		</div>
	</div>




<?php



		$connection=mysql_connect("","","");
		if(!$connection)
		{
			die("error in connection  reg1" . mysql_error());	
		}
	
		$db=mysql_select_db("club_members",$connection);
		if(!$db)
		{
			die( "error in db" . mysql_error());
		}
		
		$code=md5(uniqid(rand())); 
		$firstname=$_POST['firstname'];
		$secondname=$_POST['secondname'];
		$youremail=$_POST['youremail'];
		$newpassword=$_POST['newpassword'];
		$sex=$_POST['sex'];
		
		
		$fname=mysql_real_escape_string($firstname);
		$sname=mysql_real_escape_string($secondname);
		$email=mysql_real_escape_string($youremail);
		$pass=mysql_real_escape_string($newpassword);
		

		
		
		$query= "INSERT INTO temp_members (code,firstname,secondname,youremail,newpassword,sex) VALUES('$code' , '$fname' , '$sname','$email','$pass','$sex')";
		
			
		$result=mysql_query($query) or  die("This Email ID is already registered. Check for a confirmation link which has been sent to this registered email Id. ") ;

 ?>


<div class="registered">

<h1>You've been registered at our site!</h1>
<br />
<h3> Please pay the amount of 50 bucks to the club committee.  <br />
      If you had paid the amount, an email will be sent to you in a couple of days with the UserID. 
     </h3>   <br />
<h2>Have a great day!</h2> 
</div>
<?php

if($result){
	
			$to=$youremail;
			$subject="Confirmation link for facesofbit ";
			$header="from: FacesofBit@bit_bangalore";
			$message="Your Comfirmation link \r\n";
			$message.="Click on this link to activate your account \r\n";
			$message.="http://facesofbit.pixub.com/confirmation.php?passkey=$code";
			$sentmail = mail($to,$subject,$message,$header);
}
else {
		echo "Not found your email in our database";
}



?>
<div class="copyrightbit">
	<div class="container">
		<div class="row">
			<div class="col-md-9" style="padding-top:10px">						
                    Copyright &copy; 2014 Technoholix CSE Club, BIT Bangalore. All Rights Reserved. 
			</div>
            <div class="col-md-3">
             <div class="col-md-2"></div>
                    <div class="col-md-5">	
                       <a href="https://www.facebook.com/teknoholix" target="_blank" title="Facebook"> 
                       <div  style="height:25px; width:25px;background-image: 
                   url(images/82b6.jpg);float:left;margin-top:10px " class="circle" > 
                 
                       </div>   </a>  
                     <a href="https://plus.google.com/u/0/113389285033140892850/posts"target="_blank"  title="Google+"> 
                      <div  style="height:25px; width:25px;background-image: 
                   url(images/cb51.jpg);float:left;margin-left:20px;margin-top:10px;" class="circle">
                      </div> 
                 </div></a>
                <div class="col-md-5" style="padding-top:10px">						
                    <a href="contactus.html" style="color:#000;text-decoration:none;">
                        Contact Us
                    </a>
                </div>	
              </div>
		</div><!--/row-->
	</div><!--/container-->	
</div><!--/copyright-->	
<!--=== End Copyright ===-->
</body>
</html>

<?php

 	 mysql_close($connection);
	 ob_end_flush();

?>
