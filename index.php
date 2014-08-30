<?php



$Name = $_POST["name"];
$Semester = $_POST["semester"];
$Email = $_POST["email"];
$Phone = $_POST["phone"];
$Usn = $_POST["usn"];
$Paid = "Not Paid";
$Code = md5(uniqid(rand())); 


$username = "a5014230_club";
$password = "bitcse2014";
$database = "a5014230_cseclub";
$host = "mysql12.000webhost.com";
$table = "Registration";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Technoholix | BIT CSE Official Club</title>
<link rel="shortcut icon" href="logomain.PNG" />

<!-- jQuery.js above 1.7  -->
  <!-- get jQuery from the google apis --> <!-- nav dropdown  next 4 script -->
    <script type="text/javascript" src="jquery.js"></script>
    <script type='text/javascript' src="jquery-ui.js"></script>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>   

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.flipcountdown.js"></script>

<link rel="stylesheet" type="text/css" href="jquery.flipcountdown.css" />


    <!-- CSS STYLE -->
    <link rel="stylesheet" type="text/css" href="styleR.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="preview.css" media="screen" />
     <link rel="stylesheet" href="header1.css">
     <link rel="stylesheet" href="font-awesome.css">
     <link rel="stylesheet" type="text/css" href="css_uow_clubs.css" media="screen" />


    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar-fixed-top.css" rel="stylesheet">
     <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css"> <!-- footer css -->
                       
<!-- jQuery KenBurn Slider  -->
	<script type="text/javascript" src="jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="jquery.themepunch.revolution.min.js"></script>    

<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="captions.css" media="screen" />
</head>
<body style="background-image:url(tf5.jpg)">
<div class="navbar navbar-default navbar-fixed-top" role="navigation" style="box-shadow: 0px 10px 5px #888888;">
      <div class="container" style="height:90px;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <img src="Capture1.PNG" height="90px;" width="150px"  />
        </div>
        <div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li style="padding-top:40px;padding-bottom:5px;padding-left:22px;padding-right:12px;font-size:18px"><a href="index.html">Home</a></li>
            <li class="dropdown" style="padding-top:40px;">
              <a href="#" class="dropdown-toggle" style="margin-bottom:5px;padding-left:22px;padding-right:22px;font-size:18px;color:#639" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            About Us</a> 
                <ul class="dropdown-menu">
                <li><a href="whatwedo.html">What We Do</a></li>
                            <li><a href="coremember.html">Core Committee Members</a></li>
                            <li><a href="clubmember.html">Club Members</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Club T-shirts</li>
                <li><a href="tshirt.html">Place a Order</a></li>
              </ul>
            </li>
            <li style="padding-top:40px;padding-bottom:5px;"><a href="events.html" style="padding-left:22px;padding-right:22px;font-size:18px;">Events</a></li>
             <li class="dropdown" style="padding-top:40px;">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-bottom:5px;padding-left:22px;padding-right:22px;font-size:18px" data-hover="dropdown" data-delay="0" data-close-others="false">  Achievements </a>
              <ul class="dropdown-menu">
                <li><a href="laurels.html">Club's Laurels</a></li>
                <li><a href="starofhonor.html">Star of Honor</a></li>
                 <li><a href="futurecore.html">Future Core Members </a></li>

              </ul>
            </li>
            <li class="dropdown" style="padding-top:40px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-bottom:5px;padding-left:22px;padding-right:22px;font-size:18px" data-hover="dropdown" data-delay="0" data-close-others="false"> Placements </a>
              <ul class="dropdown-menu">
                <li><a href="placementreport.html">Placement Report</a></li>
                <li><a href="internships.html">Internships</a></li>
              </ul>
            </li>
            <li class="dropdown" style="padding-top:40px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-bottom:5px;padding-left:22px;padding-right:22px;font-size:18px" data-hover="dropdown" data-delay="0" data-close-others="false">  Downloads </a>
              <ul class="dropdown-menu">
                <li><a href="internals.html">Internal Papers</a></li>
                 <li><a href="sempapers.html">Semester Papers</a></li>
                <li><a href="#">Notes</a></li>
              </ul>
            </li>   
             <li class="dropdown" style="padding-top:40px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-bottom:5px;
               padding-left:22px;padding-right:22px;font-size:18px" data-hover="dropdown" data-delay="0" data-close-others="false">  Gallery </a>
              <ul class="dropdown-menu">
                <li><a href="#">Inaugural </a></li>
                 <li><a href="#">Alumni Seminar</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <img src="4940.jpg"  width="20px" style="float:left;margin-top:15px;"/>
            <li style="width:50px;padding-right:60px;"><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sml">Login</button></li>
            <li style="width:50px;"><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Register</button></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      	</div>
    </div>
<!--=== Style Switcher ===-->    
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
	<div class="modal-content" style="padding-top:30px;padding-bottom:30px;padding-left:30px;padding-right:30px">
			<form role="form" action="registermaillink.php" method="post">
				<div class="form-group">
				<label for="TeamName">Full Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
				</div>					
				<div class="form-group">
				<label for="USN">USN</label>
				<input type="text" class="form-control" id="usn" name="usn" placeholder="USN" required>
				</div>				
				<div class="form-group">
				<label for="semester">Semester</label>
				<input type="text" class="form-control" id="semester" name="semester" placeholder="Semester" required>
				</div>		
				<div class="form-group">
				<label for="EmailId">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>               <label for="EmailId">An Email will be sent for confirmation</label>
				</div>				
				<div class="form-group">
				<label for="EmailId">Phone Number</label>
				<input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-sml" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
	<div class="modal-content" style="padding-top:30px;padding-bottom:30px;padding-left:30px;padding-right:30px">
			<form role="form" action="index.php" method="post">
				<div class="form-group">
				<label for="TeamName">UserID</label>
				<input type="text" class="form-control" id="userid" name="userid" placeholder="UserID" required>
				</div>					
				<div class="form-group">
				<label for="USN">Password</label>
				<input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
				</div>				
				
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>

<div style="width:100%;height:135px">
</div>
<div class="bannercontainer responsive">
    <div class="banner">
        <ul>
            <!-- THE 1 SLIDE -->
            <li data-transition="turnoff" data-slotamount="1" data-masterspeed="300" >
                        <img src="1384113_164784040383185_1578823473_n.jpg" >

                        <div class="caption large_text sfl" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="50"
                             data-y="230"
                             data-speed="300"
                             data-start="3400"
                             data-easing="easeOutExpo"  > T</div>
                             
						<div class="caption large_text sfl" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="120"
                             data-y="230"
                             data-speed="300"
                             data-start="3500"
                             data-easing="easeOutExpo"  > E</div>
                             
                         <div class="caption large_text sfr" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="190"
                             data-y="230"
                             data-speed="300"
                             data-start="3600"
                             data-easing="easeOutExpo"  > C</div>
                             
                          <div class="caption large_text sft" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="260"
                             data-y="230"
                             data-speed="300"
                             data-start="3700"
                             data-easing="easeOutExpo"  > H</div>
                             
                            
                         <div class="caption large_text sfr" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="330"
                             data-y="230"
                             data-speed="300"
                             data-start="3800"
                             data-easing="easeOutExpo"  >N</div>
                             
                         <div class="caption large_text fade" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="400"
                             data-y="230"
                             data-speed="300"
                             data-start="3900"
                             data-easing="easeOutExpo"  > O</div>
                             
                           <div class="caption large_text sfr" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="480"
                             data-y="230"
                             data-speed="300"
                             data-start="4000"
                             data-easing="easeOutExpo"  > H</div>
                             
                          <div class="caption large_text sfr" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="550"
                             data-y="230"
                             data-speed="300"
                             data-start="4100"
                             data-easing="easeOutExpo"  > O</div>
                             
                           <div class="caption large_text fade" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="630"
                             data-y="230"
                             data-speed="300"
                             data-start="4200"
                             data-easing="easeOutExpo"  > L</div>
                             
                           <div class="caption large_text sfb" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="690"
                             data-y="230"
                             data-speed="300"
                             data-start="4300"
                             data-easing="easeOutExpo"  > I</div> 
                             
                            <div class="caption large_text sfr" style="color:#396;text-shadow:#000 3px 0.6px;font-size:100px;"
                             data-x="730"
                             data-y="230"
                             data-speed="300"
                             data-start="4400"
                             data-easing="easeOutExpo"  > X</div> 

                         <div class="caption large_text fade"
                             data-x="31"
                             data-y="40"
                             data-speed="300"
                             data-start="300"
                             data-easing="easeOutExpo"  >The</div>
                             
                          <div class="caption large_text sft"
                             data-x="121"
                             data-y="40"
                             data-speed="500"
                             data-start="1100"
                             data-easing="easeOutExpo"  >Official</div>

                        <div class="caption large_text sfb"
                             data-x="282"
                             data-y="40"
                             data-speed="600"
                             data-start="1600"
                             data-easing="easeOutExpo"  >BIT CSE</div>

                        <div class="caption large_text fade"
                             data-x="470"
                             data-y="40"
                             data-speed="300"
                             data-start="1900"
                             data-easing="easeOutExpo"  >Club</div>
                            
                       
                        <div class="caption large_text sfl"
                             data-x="590"
                             data-y="40"
                             data-speed="300"
                             data-start="2000"
                             data-easing="easeOutExpo"  > is </div>
                             
                        <div class="caption large_text sfb" style="color:#FF5E5E"
                             data-x="660"
                             data-y="40"
                             data-speed="1500"
                             data-start="2400"
                             data-easing="easeOutExpo"  > Rolling</div>
                             
                             
                         <div class="caption large_text fade"
                              data-x="820"
                             data-y="40"
                             data-speed="300"
                             data-start="2600"
                             data-easing="easeOutExpo"  > Out</div>
                             
            </li>
			<!-- THE SECOND SLIDE -->
							<li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-delay="9400" data-thumb="images/thumbs/thumb2.jpg">
										<img src="w2.jpg" >

										<div class="caption big_white lft stt"
											 data-x="18"
											 data-y="310"
											 data-speed="300"
											 data-start="500"
											 data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine" >Benefits of </div>

										<div class="caption big_white lfl str"
											 data-x="210"
											 data-y="349"
											 data-speed="300"
											 data-start="600"
											 data-easing="easeOutExpo" data-end="9100" data-endspeed="300" data-endeasing="easeInSine" >Club Membership</div>

										<div class="caption lft ltb"
											 data-x="500"
											 data-y="0"
											 data-speed="600"
											 data-start="1100"
											 data-easing="easeOutExpo" data-end="2000" data-endspeed="600" data-endeasing="easeInSine" ><img src="48d6.jpg" alt="Image 3"></div>

										<div class="caption big_black sfb stb" style="color:#666"
											 data-x="520"
											 data-y="350"
											 data-speed="300"
											 data-start="1400"
											 data-easing="easeOutExpo" data-end="2000" data-endspeed="2000" data-endeasing="easeInSine" >Concession in Workshop/Seminars.</div>

										<div class="caption lft ltb"
											 data-x="500"
											 data-y="100"
											 data-speed="600"
											 data-start="2600"
											 data-easing="easeOutExpo" data-end="5800" data-endspeed="600" data-endeasing="easeInSine" ><img src="f846.jpg" alt="Image 6"></div>

										<div class="caption big_black sfb stb" style="color:#666"
											 data-x="520"
											 data-y="40"
											 data-speed="300"
											 data-start="3900"
											 data-easing="easeOutExpo" data-end="5800" data-endspeed="300" data-endeasing="easeInSine" >Get access to Internal Papers,</div>
                                             
										<div class="caption big_black sfb stb" style="color:#666"
											 data-x="520"
											 data-y="90"
											 data-speed="500"
											 data-start="4400"
											 data-easing="easeOutExpo" data-end="5800" data-endspeed="300" data-endeasing="easeInSine" >Notes, Lab programs</div>
                                             
                                             <div class="caption big_black sfb stb" style="color:#666"
											 data-x="520"
											 data-y="140"
											 data-speed="800"
											 data-start="4700"
											 data-easing="easeOutExpo" data-end="5800" data-endspeed="300" data-endeasing="easeInSine" >And other CSE materials.</div>
									<!--	<div class="caption big_black sfb stb"
											 data-x="720"
											 data-y="320"
											 data-speed="300"
											 data-start="4200"
											 data-easing="easeOutExpo" data-end="5700" data-endspeed="300" data-endeasing="easeInSine" >$ 5.99</div>  -->

										<div class="caption lft ltb"
											 data-x="500"
											 data-y="100"
											 data-speed="600"
											 data-start="6100"
											 data-easing="easeOutExpo" data-end="8100" data-endspeed="300" data-endeasing="easeInSine" ><img src="658f.jpg" alt="Image 9"></div>

										<div class="caption big_black sfb stb" style="color:#666"
											 data-x="520"
											 data-y="100"
											 data-speed="300"
											 data-start="6500"
											 data-easing="easeOutExpo" data-end="8300" data-endspeed="300" data-endeasing="easeInSine" >Selection of</div>
                                             
                                             <div class="caption big_black sfb stb" style="color:#666"
											 data-x="520"
											 data-y="150"
											 data-speed="300"
											 data-start="6800"
											 data-easing="easeOutExpo" data-end="8300" data-endspeed="300" data-endeasing="easeInSine" >Future Core Committee Members</div>
                                             
                                             <div class="caption big_black sfb stb" style="color:#666"
											 data-x="520"
											 data-y="220"
											 data-speed="300"
											 data-start="7100"
											 data-easing="easeOutExpo" data-end="8300" data-endspeed="300" data-endeasing="easeInSine" >Based on Performance Rating</div>
										
			</li>
							
            <!-- THE 3 SLIDE -->
            <li data-transition="slideleft" data-slotamount="1" data-masterspeed="300" data-thumb="http://www.oftaldent.pl/gfx/slider/images/thumbs/thumb5.jpg">

                    <img src="qq.jpg" >

                    <div class="caption large_text sft"
                         data-x="50"
                         data-y="44"
                         data-speed="300"
                         data-start="1400"
                         data-easing="easeOutExpo"  >Tons of Technical Events</div>

                    <div class="caption medium_text sfl"
                         data-x="79"
                         data-y="82"
                         data-speed="300"
                         data-start="1600"
                         data-easing="easeOutExpo"  >AND</div>

                    <div class="caption large_text sfr"
                         data-x="128"
                         data-y="78"
                         data-speed="300"
                         data-start="2700"
                         data-easing="easeOutExpo"  ><span style="color: #ffc600;">Seminars &amp; Workshops</span></div>

            <!--         <div class="caption lfl"
                         data-x="53"
                         data-y="192"
                         data-speed="300"
                         data-start="1400"
                         data-easing="easeOutExpo"  ><img src="994c.jpg" alt="Image 4"></div>

                    <div class="caption lfl"
                         data-x="253"
                         data-y="282"
                         data-speed="300"
                         data-start="1500"
                         data-easing="easeOutExpo"  ><img src="http://www.oftaldent.pl/gfx/slider/images/slides/ipad.png" alt="Image 5"></div>

                    <div class="caption lfl"
                         data-x="322"
                         data-y="313"
                         data-speed="300"
                         data-start="1600"
                         data-easing="easeOutExpo"  ><img src="http://www.oftaldent.pl/gfx/slider/images/slides/iphone.png" alt="Image 6"></div>
            </li>   -->


            <!-- THE 4 SLIDE -->
            <li data-transition="flyin" data-slotamount="1" data-masterspeed="300" data-thumb="http://www.oftaldent.pl/gfx/slider/images/thumbs/thumb6.jpg">
                    <img src="1426447_10152029502097179_1034749692_n-001.jpg" >

                    <div class="caption large_text sfl"
                         data-x="325"
                         data-y="40"
                         data-speed="300"
                         data-start="1000"
                         data-easing="easeOutExpo"  >Experience Shared By </div>

                    <div class="caption large_text sfl"
                         data-x="560"
                         data-y="90"
                         data-speed="300"
                         data-start="2200"
                         data-easing="easeOutExpo"  >Alumni's</div>

               <!--     <div class="caption randomrotate"
                         data-x="610"
                         data-y="174"
                         data-speed="800"
                         data-start="1600"

                         data-easing="easeOutExpo"  ><img src="flower-image-abstract-background-blue-flower-image-nature-yellow-1024x1280.jpg" alt="Image 4"></div>  -->
            </li>
            <!-- THE 5 SLIDE -->
							<li data-transition="3dcurtain-vertical" data-slotamount="1" data-masterspeed="300" data-thumb="images/thumbs/thumb1.jpg">
										<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
										<img src="blue-matrix_00422484.jpg" >

										<!-- THE CAPTIONS IN THIS SLDIE -->
										<div class="caption large_text sfb"
											 data-x="220"
											 data-y="25"
											 data-speed="300"
											 data-start="800"
											 data-easing="easeOutExpo" style="text-shadow:#666 5px 3px"  >Core Committee Members</div>

										<div class="caption randomrotate"
											 data-x="139"
											 data-y="75"
											 data-speed="600"
											 data-start="1100"
											 data-easing="easeOutExpo"  ><img src="9dce.jpg" style="padding:5px; background-color:#FFF" alt="Image 2"></div>

										<div class="caption randomrotate"
											 data-x="10"
											 data-y="102"
											 data-speed="600"
											 data-start="1200"
											 data-easing="easeOutExpo"  ><img src="8ede.jpg" style="padding:5px; background-color:#FFF" alt="Image 3"></div>

										<div class="caption randomrotate"
											 data-x="170"
											 data-y="342"
											 data-speed="600"
											 data-start="1300"
											 data-easing="easeOutExpo"  ><img src="ff61.jpg" style="padding:5px; background-color:#FFF" alt="Image 4"></div>

										<div class="caption randomrotate"
											 data-x="327"
											 data-y="267"
											 data-speed="300"
											 data-start="1400"
											 data-easing="easeOutExpo"  ><img src="a692.jpg" style="padding:5px; background-color:#FFF" alt="Image 5"></div>

										<div class="caption randomrotate"
											 data-x="54"
											 data-y="282"
											 data-speed="600"
											 data-start="1500"
											 data-easing="easeOutExpo"  ><img src="1f01.jpg" style="padding:5px; background-color:#FFF" alt="Image 6"></div>

										<div class="caption randomrotate"
											 data-x="638"
											 data-y="201"
											 data-speed="300"
											 data-start="1600"
											 data-easing="easeOutExpo"  ><img src="4054.jpg" style="padding:5px; background-color:#FFF" alt="Image 7"></div>

										<div class="caption randomrotate"
											 data-x="687"
											 data-y="324"
											 data-speed="300"
											 data-start="1700"
											 data-easing="easeOutExpo"  ><img src="9ce1.jpg" style="padding:5px; background-color:#FFF"  alt="Image 8"></div>

										<div class="caption randomrotate"
											 data-x="682"
											 data-y="79"
											 data-speed="300"
											 data-start="1800"
											 data-easing="easeOutExpo"  ><img src="7436.jpg" alt="Image 9" style="padding:5px; background-color:#FFF"></div>

										<div class="caption randomrotate"
											 data-x="807"
											 data-y="71"
											 data-speed="300"
											 data-start="1900"
											 data-easing="easeOutExpo"  ><img src="754d.jpg" alt="Image 10" style="padding:5px; background-color:#FFF"></div>

										<div class="caption randomrotate"
											 data-x="818"
											 data-y="271"
											 data-speed="300"
											 data-start="2000"
											 data-easing="easeOutExpo"  ><img src="ed3d.jpg" alt="Image 11" style="padding:5px; background-color:#FFF"></div>

										<div class="caption randomrotate"
											 data-x="215"
											 data-y="200"
											 data-speed="300"
											 data-start="2100"
											 data-easing="easeOutExpo"  ><img src="64a3.jpg" style="padding:5px; background-color:#FFF" alt="Image 12"></div>

									<!--	<div class="caption randomrotate"
											 data-x="762"
											 data-y="165"
											 data-speed="300"
											 data-start="2200"
											 data-easing="easeOutExpo"  ><img src="" style="padding:5px; background-color:#FFF" alt="Image 13"></div>   -->
																		</li>

        </ul>

        <!-- CORRED -->
        <div class="tp-bannertimer"></div>
    </div>
</div>
<div  style="width:100% ;height:340px;">
    <div style="width:40% ;height:340px;float:left">
   <div class="inner" id="home-calendar">
      <div id="calendar-box" style="width:80%;">
      
	<div class="events-title">Events</div>
	<div class="events-view-all"><a href="/events-calendar/">View All</a></div>
	<div class="events-month">April 2014</div>
	
	<table class="calendar-days wide-calendar-days">
		<tr>
		    <th width="14%">M</th>
		    <th width="14%">T</th>
		    <th width="14%">W</th>
		    <th width="14%">T</th>
		    <th width="14%">F</th>
		    <th width="14%">S</th>
		    <th width="14%">S</th>
		</tr>
	</table>
	
	<table class="calendar-table ">
	<tbody>
		
			<tr>
				
					<td class="31 dates not-in-month past has-event" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-03-31">31</a>
						<ul class="3011 3801 3738 3508" style="display: none;"><li style='list-style: none;'><span style='color: #0397D7'>Board and Card Games</span></li> <li style='list-style: none;'><span style='color: #0397D7'>GMC Game Development Workshop</span></li> <li style='list-style: none;'><span style='color: #D97A2D'>Hapkido Training</span></li> <li style='list-style: none;'><span style='color: #0397D7'>AYCC WEEKLY MEETING</span></li></ul>
					</td>
				
					<td class="01 dates 
								
								
								today
								has-event
								selected
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-01">01</a>
					</td>
				
					<td class="02 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-02">02</a>
					</td>
				
					<td class="03 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-03">03</a>
					</td>
				
					<td class="04 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-04">04</a>
					</td>
				
					<td class="05 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-05">05</a>
					</td>
				
					<td class="06 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-06">06</a>
					</td>
				
			</tr>
		
			<tr>
				
					<td class="07 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-07">07</a>
						<ul class="2086 3002 3802 3742 3148 3509" style="display: none;"><li style='list-style: none;'><span style='color: #edb832'>Mechsoc Touch football team</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Prayer with the Word</span></li> <li style='list-style: none;'><span style='color: #0397D7'>GMC Game Development Workshop</span></li> <li style='list-style: none;'><span style='color: #D97A2D'>Hapkido Training</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Board and Card Games</span></li> <li style='list-style: none;'><span style='color: #0397D7'>AYCC WEEKLY MEETING</span></li></ul>
					</td>
				
					<td class="08 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-08">08</a>
						<ul class="2086 3002 3240 3404 3693 3823" style="display: none;"><li style='list-style: none;'><span style='color: #edb832'>Mechsoc Touch football team</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Prayer with the Word</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Rise of the Runelords</span></li> <li style='list-style: none;'><span style='color: #edb832'>Physics Society Dodgeball</span></li> <li style='list-style: none;'><span style='color: #D97A2D'>SPARTA AGM</span></li> <li style='list-style: none;'><span style='color: #edb832'>PhilSoc Book Club: Ethics is for Bad Guys</span></li></ul>
					</td>
				
					<td class="09 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-09">09</a>
						<ul class="2086 3002 3263 3237 3582 3599 3672 3707" style="display: none;"><li style='list-style: none;'><span style='color: #edb832'>Mechsoc Touch football team</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Prayer with the Word</span></li> <li style='list-style: none;'><span style='color: #edb832'>Unibar Trivia with Physics Society</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Rogue Trader</span></li> <li style='list-style: none;'><span style='color: #17cbd1'>Market Alley</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>ECU Weekly Lunchtime Bible Talks</span></li> <li style='list-style: none;'><span style='color: #edb832'>EFSOC Trivia Night @ UniBar</span></li> <li style='list-style: none;'><span style='color: #edb832'>Guest speaker: Roger Montgomery</span></li></ul>
					</td>
				
					<td class="10 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-10">10</a>
						<ul class="2086 2854 2883 3002 3231 3238 3239" style="display: none;"><li style='list-style: none;'><span style='color: #edb832'>Mechsoc Touch football team</span></li> <li style='list-style: none;'><span style='color: #443590'>OBRAS! </span></li> <li style='list-style: none;'><span style='color: #17cbd1'>The Good Life Series - Aussie Culture & Slang</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Prayer with the Word</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Faith Formation Program @ UOW</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Oldschool D&D- Rappan Athuk</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Wargaming</span></li></ul>
					</td>
				
					<td class="11 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-11">11</a>
						<ul class="2086 2913 3002 3745 3236 3241 3705" style="display: none;"><li style='list-style: none;'><span style='color: #edb832'>Mechsoc Touch football team</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Friday Night Stitch</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Prayer with the Word</span></li> <li style='list-style: none;'><span style='color: #D97A2D'>Hapkido Training</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Skies of Escarnum: War of the Burning Sky</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Stargate RPG</span></li> <li style='list-style: none;'><span style='color: #edb832'>nEWBie Night</span></li></ul>
					</td>
				
					<td class="12 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-12">12</a>
						<ul class="2086 2799 3002" style="display: none;"><li style='list-style: none;'><span style='color: #edb832'>Mechsoc Touch football team</span></li> <li style='list-style: none;'><span style='color: #443590'>Routine Soccer Practice</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Prayer with the Word</span></li></ul>
					</td>
				
					<td class="13 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-13">13</a>
						<ul class="2086 3002 3235 3648" style="display: none;"><li style='list-style: none;'><span style='color: #edb832'>Mechsoc Touch football team</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Prayer with the Word</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Miniatures (and boardgames)</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Popsicle Petitioning</span></li></ul>
					</td>
				
			</tr>
		
			<tr>
				
					<td class="14 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-14">14</a>
						<ul class="2086 3002 3803 3743 3234 3510" style="display: none;"><li style='list-style: none;'><span style='color: #edb832'>Mechsoc Touch football team</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Prayer with the Word</span></li> <li style='list-style: none;'><span style='color: #0397D7'>GMC Game Development Workshop</span></li> <li style='list-style: none;'><span style='color: #D97A2D'>Hapkido Training</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Board and Card Games</span></li> <li style='list-style: none;'><span style='color: #0397D7'>AYCC WEEKLY MEETING</span></li></ul>
					</td>
				
					<td class="15 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-15">15</a>
						<ul class="2086 2884 3002 3405 3557" style="display: none;"><li style='list-style: none;'><span style='color: #edb832'>Mechsoc Touch football team</span></li> <li style='list-style: none;'><span style='color: #17cbd1'>The Good Life Series - Scholarships & Grants</span></li> <li style='list-style: none;'><span style='color: #B2BB38'>Prayer with the Word</span></li> <li style='list-style: none;'><span style='color: #edb832'>Physics Society Dodgeball</span></li> <li style='list-style: none;'><span style='color: #0397D7'>Rise of the Runelords</span></li></ul>
					</td>
				
					<td class="16 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-16">16</a>
					</td>
				
					<td class="17 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-17">17</a>
					</td>
				
					<td class="18 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-18">18</a>
					</td>
				
					<td class="19 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-19">19</a>
					</td>
				
					<td class="20 dates 
								
								
								
								has-event
	
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-20">20</a>
					</td>
				
			</tr>
		
			<tr>
				
					<td class="21 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-21">21</a>
					</td>
				
					<td class="22 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-22">22</a>
					</td>
				
					<td class="23 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-23">23</a>
					</td>
				
					<td class="24 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-24">24</a>
					</td>
				
					<td class="25 dates 
								
								
								
								has-event
								
								
					" style="background: #00C;">
						<a href="/events-calendar/day/2014-04-25">25</a>
					</td>
				
					<td class="26 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-26">26</a>
					</td>
				
					<td class="27 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-27">27</a>
					</td>
				
			</tr>
		
			<tr>
				
					<td class="28 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-28">28</a>
					</td>
				
					<td class="29 dates 
								
								
								
								has-event
								
								
					" style="background: #00C;">
						<a href="/events-calendar/day/2014-04-29">29</a>
					</td>
				
					<td class="30 dates 
								
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-04-30">30</a>
					</td>
				
					<td class="01 dates 
								not-in-month
								
								
								has-event
								selected
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-05-01">01</a>
					</td>
				
					<td class="02 dates 
								not-in-month
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-05-02">02</a>
					</td>
				
					<td class="03 dates 
								not-in-month
								
								
								has-event
								
								
					" style="background: #6e6f73;">
						<a href="/events-calendar/day/2014-05-03">03</a>
					</td>
				
					<td class="04 dates 
								not-in-month
								
								
								has-event
								
								
					" style="background: #999">
						<a href="/events-calendar/day/2014-05-04">04</a>
					</td>
				
			</tr>
		
	</tbody>	
	</table>
	
        <div id="calendar-nav">
            <a href="/home/calendar?m=3&y=2014" class="left">&laquo; Previous</a>
            <a href="/home/calendar?m=5&y=2014" class="right" style="float:right">Next &raquo;</a>
        </div>
    </div>
    </div>
    </div>
    <div style="width:25%;float:left">
  	     <div style="max-width:80%">
         		 <h1 class="latest-news" style="padding-left:20px;padding-top:20px;color:#09C">News/Updates</h1>
		       <div class="news purple" style="width:100%;">
                    <div class="boxtitle green-bg" style="background-color:#09C"><a href="/news/2014-unicentre-cup">03/04/2014</a></div>
                    <p class="news-title"><a href="/news/2014-unicentre-cup"></a> </p>
                    <p> Registration Opens</p>
	          </div>      
	      
            <div class="news purple" style="width:100%;">
                    <div class="boxtitle green-bg" style="background-color:#09C"><a href="/news/2014-unicentre-cup">10/05/2014</a></div>
                    <p class="news-title"><a href="/news/2014-unicentre-cup"></a></p>
                     <p> Club's First Meeting</p>
	         </div>      
	      </div>  

    </div>
    <div style="width:30%;height:340px;float:right">
      	 <div style="width:80%;">
         		 <h1 class="latest-news" style="padding-left:20px;padding-top:20px;">Next Event</h1>
		       <div class="news purple" style="width:100%">
                    <div class="boxtitle green-bg"><a href="/news/2014-unicentre-cup">10/05/2014</a></div>
                    <p class="news-title"><a href="/news/2014-unicentre-cup"></a>Java Essential Workshop</p>
                    <p>Java programming fundamentals from creating simple variables to implementing object oriented programming concepts.</p>
	          </div>      
	      </div>  
          <link rel="stylesheet" href="jbclock.css" type="text/css" media="all" />
        <script type="text/javascript" src="jbclock.js"></script>
                <script type="text/javascript">
            $(document).ready(function(){
                JBCountDown({
                    secondsColor : "#ffdc50",
                    secondsGlow  : "none",
                    
                    minutesColor : "#9cdb7d",
                    minutesGlow  : "none",
                    
                    hoursColor   : "#378cff",
                    hoursGlow    : "none",
                    
                    daysColor    : "#ff6565",
                    daysGlow     : "none",
                    
                    startDate   : "13885",
                    endDate     : "1412330",
                    now         : "13992"
                });
            });
        </script>
   
        <div class="wrapper">
      
        <div class="clock">
            <!-- Days -->
            <div class="clock_days">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_days" width="45" height="45">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_days">Days</p>
                    </div>
                </div>
            </div>
            <!-- Days -->
            <!-- Hours -->
            <div class="clock_hours">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_hours" width="45" height="45">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_hours">Hours</p>
                    </div>
                </div>
            </div>
            <!-- Hours -->
            <!-- Minutes -->
            <div class="clock_minutes">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_minutes" width="45" height="45">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_minutes">Minutes</p>
                    </div>
                </div>
            </div>
            <!-- Minutes -->
            <!-- Seconds -->
            <div class="clock_seconds">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_seconds" width="45" height="45">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_seconds">Seconds</p>
                    </div>
                </div>
            </div>
            <!-- Seconds -->
        </div>
       
        </div><!--/wrapper-->
  
     </div>
       
      </div>  
    
</div>




  <!--  new section -->
 
    

	
  <!--  <div class="col-md-3">
            <div class="headline"><h2>Upcoming Event</h2></div>
            <ul class="list-unstyled who margin-bottom-30">
                <li><a href="#"><i class="icon-home"></i></a></li>
            </ul>
            </div>
            </div>
            <table style="border:0px;">
		<tr>
			<td style="width:110px;text-align:center;">Days</td>
			<td style="width:120px;text-align:center;">Hours</td>
			<td style="width:110px;text-align:center;">Minutes</td>
			<td style="width:120px;text-align:center;">Seconds</td>
		</tr>
		<tr>
			<td colspan="4"><span id="new_year"></span></td>
		</tr>
	</table>
    <script>
	$(function(){
	$('#flipcountdownbox1').flipcountdown();
})
	</script>
<div id="flipcountdownbox1"></div>
            
</div>   -->
  <div class="footer" style="background-color:transparent;box-shadow: #000;padding:0px;">
	<div class="container" style="margin-bottom:30px;">
		<div class="row">
			<div class="col-md-4 md-margin-bottom-40" >
                <!-- About -->
		        <div class="headline"><h2 style="color:#333;border-bottom-color:#00C">Motto</h2></div>	
				<p class="margin-bottom-25 md-margin-bottom-40" style="margin-bottom:25px;color:#333">The purpose of this club shall be to upsurge the interaction between the students and engage in extracurricular activities to explore their interests and personal development.</p>	

			</div><!--/col-md-4-->	
			
		 <!--	<div class="col-md-4 md-margin-bottom-40">
                <div class="posts">
                    <div class="headline"><h2 style="color:#333">What does Technoholix means?</h2></div>
                  <dl class="dl-horizontal" style="padding-bottom:10px;">
                             <div style="width: 65px;
	height:60px;
	border-radius: 150px;
	-webkit-border-radius: 150px;
	-moz-border-radius: 150px;
    float:left;
	background: url(c944.jpg) no-repeat;"></div>  -->	
                    <!--       <dd>  -->	
                        <!--      <p ><a href="#" style="color:#FFF;color:#333">Technoholix is a blend of Technology and Entertainment</a></p> 
                         </dd>  -->	
            <!--          </dl>
                   
                        <dd>
                            <p  ><a href="#" style="color:#FFF;color:#333">Basically Technoholic is a person who is in addiction with technology  </a></p> 
                        </dd>
                    </dl>
                        <dd>
                            <p ><a href="#" style="color:#FFF;color:#333">Here Technoholix is a group of technoholics </a></p> 
                        </dd>
                    </dl>
                </div>
			</div><!--/col-md-4  -->	
           <div class="col-md-4">
				<div class="headline"><h2  style="color:#333;border-bottom-color:#00C">Stay Connected</h2></div>	
                <ul class="social-icons">
                   <img src="82b6.jpg" style="padding:10px;" /> 
                   <img src="cb51.jpg"  /> <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                    <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                    <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                    <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                    <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                    <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                    <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                </ul>
			</div><!--/col-md-4-->
           
			<div class="col-md-4">
	            <!-- Monthly Newsletter -->
		        <div class="headline"><h2 style="color:#333;border-bottom-color:#00C">Contact Us</h2></div>	
                <address class="md-margin-bottom-40" style="color:#333">
					5th Floor <br />
					Bangalore Institute Of Technology <br />
                    VV Puram, Bangalore, Karnataka <br />
					Phone:7676396363 <br />
					Email: <a href="mailto:technoholixbit@gmail.com" style="color:#00C">technoholixbit@gmail.com</a>
                </address>

                <!-- Stay Connected -->
		        
		</div><!--/row-->	
	</div><!--/container-->	
</div><!--/footer-->	
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6">						
	            <p class="copyright-space">
                    2013 &copy; Technoholix CSE Club, BIT Bangalore. All Rights Reserved. 
                </p>
			</div>
		</div><!--/row-->
	</div><!--/container-->	
</div><!--/copyright-->	
<!--=== End Copyright ===-->
<script type="text/javascript" src="qTip.js"></script> 
<script src="countdown.js" type="text/javascript"></script>

<script>

    jQuery(document).ready(function() {
       jQuery('.banner').revolution(
          {
              delay:5000,
              startheight:500,
              startwidth:960,
    
              hideThumbs:300,
    
              thumbWidth:100,	
              thumbHeight:50,
              thumbAmount:5,
    
              navigationType:"both",					
              navigationArrows:"verticalcentered",		
              navigationStyle:"round",				
    
              touchenabled:"on",					
              onHoverStop:"on",					
    
              navOffsetHorizontal:0,
              navOffsetVertical:20,
    
              stopAtSlide:-1,
              stopAfterLoops:-1,
    
              shadow:1,						
              fullWidth:"off"					
          });
    });
</script>
</body>

</html>
