<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 if(isset($_SESSION['user'])){$in=true;}
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
 

 
 if( isset($_POST['btn-login']) ) { 
  
  $email = $_POST['email'];
  $upass = $_POST['pass'];
 // $REG = $_POST['REG'];


  $email = strip_tags(trim($email));
  $upass = strip_tags(trim($upass));
//  $REG = strip_tags(trim($REG));


  $password = hash('sha256', $upass); // password hashing using SHA256
  
  $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
  
  $row=mysql_fetch_array($res);
  
  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
  
  if( $count == 1 && $row['userPass']==$password ) {
   $_SESSION['user'] = $row['userId'];
   header("Location: home.php");
  } else {
   $errMSG = "Wrong Credentials, Try again...";
  }
 }
 
 /*if(isset($_GET['up'])) {
	 
	 
	 ?>
 
 <script>
 	 $("#u").trigger('click');
 </script>
 
 
 <?
 }
 ?>
	 
	 <?*/
  if(isset($_POST['upa'])) {
 $unamee = trim($_POST['uname']);
 $emaill = trim($_POST['eemail']);
 $upasss = trim($_POST['passs']);
$REGg = trim($_POST['REGe']);

 
 $unamee = strip_tags($unamee);
 $emaill = strip_tags($emaill);
 $upasss = strip_tags($upasss);
$REGg = strip_tags($REGg); 


 // password encrypt using SHA256();
 $password = hash('sha256', $upasss);
 
 // check email exist or not
 $query = "SELECT userEmail FROM users WHERE userEmail='$emaill' ";
 $result = mysql_query($query);
 
 $count = mysql_num_rows($result); // if email not found then proceed
 
 if ($count==0) {
  
  $query = "INSERT INTO users(userName,userEmail,userPass,REG_NUM) VALUES('$unamee','$emaill','$password','$REGg')";
  $res = mysql_query($query);
  
  if ($res) {
   $errTyp = "success";
   $errMSGa = "successfully registered, you may login now";
  } else {
   $errTyp = "danger";
   $errMSGa = "Something went wrong, try again later..."; 
  } 
   
 } else {
  $errTyp = "warning";
  $errMSGa = "Sorry Email already in use ...";
 }
 
}
 

if (isset($_GET['gd']))
{
header("Location: getorder.php");

} 
 
?>























<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Fast Food a Food and restaurant Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<link href="css/main.css" rel="stylesheet" type="text/css">

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fastfood Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,700,800' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/scripts.js" type="text/javascript"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->
<!------ Light Box ------>
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
    <!------ Eng Light Box ------>	
    <script src="js/responsiveslides.min.js"></script>
    <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 700,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <link rel="stylesheet" type="text/css" href="css/style4.css" />
<script type="text/javascript">
		// Don't use this code on your site
  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', 'UA-7243260-2']);
 		_gaq.push(['_trackPageview']);

  		(function() {
    			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
	</script>
	<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<!---/End-Animation---->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
<body>
	<div class="header-banner" id="head">
		  <div class="slider">
	    <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li>
	          <img src="images/goodfood.jpg" alt="">
	          <div class="caption wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
	          	<div class="logo">
	          		<a href="index.php">SRM GOOD FOODS</a>
	          		</div>
	          	<h3>online orders</h3>
	          </div>
	        </li>
	        <li>
	          <img src="images/coffee.jpg" alt="">
	        	 <div class="caption wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
	        	 	<div class="logo">
	          		<a href="index.php">SRM GOOD FOODS</a>
	          		</div>
	        	 <h3>online orders</h3>
	         </li>
	        <li>
	          <img src="images/ice.jpg" alt="">
	          <div class="caption wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
	          	<div class="logo">
	          		<a href="index.php">SRM GOOD FOODS</a>
	          		</div>
	          	<h3>online orders</h3>
	          	</div>
	        </li>
	        <li>
	          <img src="images/roti.jpg" alt="">
	          <div class="caption wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
	          	<div class="logo">
	          		<a href="index.php-">SRM GOOD FOODS</a>
	          		</div>
	          	<h3>Online Orders</h3>
	          	</div>
	        </li>
	      </ul>
	  </div>
  </div>
	<div class="header-bottom">
			<div class="fixed-header">
			<div class="container">
				<div class="top-menu">
					<span class="menu"><img src="images/nav.png" alt=""/> </span>
                     <ul>
						<nav class="cl-effect-5">
					 <li><a  href="index.php"><span data-hover="Home">home</span></a></li>
					
					
					
					<?php
					if( !isset($_SESSION['user']) ) {
                     ?>
					
					<li><a class="scroll" href="#contact">Sign in</a></li>
					<?
					}
					else{
				?>	
				<li> <a  href="getorder.php"><span data-hover="ORDERS ">Hi <?php  echo $userRow['userName'];?></a></li>	
					<?
					}

					?>
					
					<?php
					if( !isset($_SESSION['user']) ) {
                     ?>
					
					<li><a class="scroll" href="#services">Sign up</a></li>
					<?
					}
					else{
				?>	
				<li> <span data-hover="Home"><a href="logout.php?logout">Sign out ?</a></li>		
					<?
					}

					?>
					
					
					
					 
					 <li><a class="scroll" href="#about"><span data-hover="help">assist</span></a></li>
					 <li><a href="home.php"><span data-hover="food">menu/cart</span></a></li>
				 </ul>
				 <!-- script for menu -->
					<!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>

					<!-- //script for menu -->

						<!-- script-for sticky-nav -->
						<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-bottom").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-bottom").addClass("fixed");
				}else{
					$(".header-bottom").removeClass("fixed");
				}
			 });
			 
		});
		</script>
					<!-- //script-for sticky-nav -->		
			 </div>

				</div>
			</div>
		</div>
			<? if($in!=true)
					{
					?>
		<form method="post">
		<div class="content">
		<div class="service-section" id="services">
			<div class="container">
				<h2>Sign Up  </h2>
				<p>If you are looking for tasty,pocket friendly food then beat the queue and get direct access with a few clicks,Sign Up and continue </p>
				
				<p> <?php echo $errMSGa;?>  </p>
				
				
				
				<div  class="contact-grids wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
			<div class="col-md-4 contactgrid">
				<input type="text"  name="uname" class="text" value="NAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
				</div>
			
			
			
				
				<div  class="col-md-4 contactgrid">
				<input type="text" name="REGe"  class="text"  value="REG NUMBER" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'REG';}">
				</div>
				<div  class="col-md-4 contactgrid">
				<input type="text" name="passs" class="text" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				</div>
				<div class="col-md-4 contactgrid">
				<input type="text" name="eemail"  class="text"  value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				</div>
				
				
				
				
				<input type="submit" class="button" value="Sign up" name="upa" id="u"    >
					
			</form>	
							
				
				
				</div>
			
			<?
					}?>
			</div>
			

				<div class="about-section" id="about">
					<div class="container">
						<h3>WE OFFER</h3>
						 <div class="main wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;"> 
               	 <div class="view view-fourth ">
                    <img src="images/breakfast.jpg" />
                    
                    
                    <div class="mask">
                        <center><h2>BreakFast</h2><center>
                        <p>Crispy dosas and wholesome idlis to charge you ! </p>
                    </div>
                </div>
                <div class="view view-fourth view1">
                    <img src="images/lunch.jpg" />
                    <div class="mask">
                        <h2>Lunch</h2>
                        <p>choose from a variety of dishes</p>
                    </div>
                </div>
                <div class="view view-fourth">
                    <img src="images/snacks.jpg" />
                    <div class="mask">
                        <h2>Snacks</h2>
                        <p>sodas samosas and more</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                </div>
					</div>
				</div>
				<div class="menu-section">
					<div class="container">
						<h3>TOP CHOICES</h3>
						<div class="menu-grids wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<div class="col-md-3 menu-grid">
								<img src="images/friedrice.jpg" class="img-responsive" alt="" />
								<div class="menu-info">
									<h4>Rs.50</h4>
									<h5>veg fried rice</h5>
									</div>
								</div>
								<div class="col-md-3 menu-grid ">
								<img src="images/snacks.jpg" class="img-responsive" alt="" />
								<div class="menu-info">
									<h4>Rs.10</h4>
									<h5>Veg samosa</h5>
									</div>
								</div>
								<div class="col-md-3 menu-grid menu1 ">
								<img src="images/dosa.jpg" class="img-responsive" alt="" />
								<div class="menu-info">
									<h4>Rs.35</h4>
									<h5>plain dosa</h5>
									</div>
								</div>
								<div class="col-md-3 menu-grid menu1">
								<img src="images/sodamachine.jpg" class="img-responsive" alt="" />
								<div class="menu-info">
									<h4>Rs.10</h4>
									<h5>Soda</h5>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="events-section">
						<div class="container">
							<h3>How we work</h3>
							<div class="event-grids  wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
								<div class="col-md-6 event-left">
									<div class="even-info">
									<div class="icon">
										<img src="images/icon1.png" class="img-responsive" alt="" />
										</div>
										<div class="event-info">
											<h4>In a flash ! </h4>
												<p>Select your item and add to cart.That's all it takes to eat from any of the canteens in SRM RAMAPURAM ! </p>
											</div>
											<div class="clearfix"> </div>
											</div>
									</div>
									<div class="col-md-6 event-right">
									<div class="even-info1">
									<div class="icon1">
										<img src="images/money.png" class="img-responsive" alt="" />
										</div>
										<div class="event-info1">
											<h4>Payment and security </h4>
												<p>your wallet is rechargable in the counters and valid throught the year . Your money and time is precious to us ! we ensure security and service for all registered students and staff.</p>
											</div>
											<div class="clearfix"> </div>
											</div>
									</div>
									<div class="clearfix"></div>
							</div>
							<div class="butt">
							<a href="event.html" class="button2">view </a>
							</div>
						</div>
				</div>
				<div class="test-section" id="tests">
					<div class="container">
						
								<div class="clearfix"> </div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					
					<? if($in!=true)
					{
					?>
			<form method ="post">
			<div class="contact-section" id="contact">
				<div class="container">
					<h3>Sign In 
						<?php echo $errMSG;?>
					</h3>
					
					<div class="contact-grids wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
			<div class="col-md-4 contactgrid">
				<input type="text" name="email" class="text" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				</div>
				
				<div align="center" class="col-md-4 contactgrid">
				<input type="text" name="pass" class="text" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				</div>
				<div class="col-md-4 contactgrid">
                <input type="submit" value="Sign in" name="btn-login" class='button'> 
				</input>
			   </div>
			   <div class="clearfix"></div>
				</div>
				</div>
				</div>
			</div>
			</form>
			<?}
					  ?>
			<div class="footer-section">
				<div class="container">
					<div class="footer-top wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">">
								<div class="social-icons">
										<a href="#"><i class="icon4"></i></a>
										<a href="#"><i class="icon5"></i></a>
										<a href="#"><i class="icon6"></i></a>
									</div>
								</div>
							<div class="footer-bottom">
						<p> Copyright &copy;2015  All rights  Reserved </p>
						</div>
						<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a class="scroll" href="#head" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


					</div>
				</div>
</body>
</html>

