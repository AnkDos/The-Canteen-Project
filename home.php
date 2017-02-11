<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
//  if( !isset($_SESSION['user']) ) {
//   header("Location: index.php");
//   exit;
//  }

$dayum=$_SESSION['user'];
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
$qua=mysql_query("SELECT * FROM Items WHERE PID= '100'");
 $tit=mysql_fetch_array($qua);

if (isset($_GET['gd']))
{
header("Location: getorder.php");

}



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Smart Cart 2 - a javascript jQuery shopping cart plugin" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>

<!-- Smart Cart Files Include -->
<link href="styles/smart_cart.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.smartCart-2.0.js"></script>

<script type="text/javascript">
   
    $(document).ready(function(){
    	// Call Smart Cart    	
  		$('#SmartCart').smartCart();
		});
</script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head><body>

<header>


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
					
					 <li><a href="index.php">signin</a></li>
					<?
					}
					else{
				?>	
				<li> <a class="scroll" href="?gd"><span data-hover="ORDERS ">HI <?php  echo $userRow['userName'];?></a></li>		
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

						
					<!-- //script-for sticky-nav -->		
			 </div>

				</div>
			</div>
		</div>

</header>



<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr><td>  
<form action="results.php" method="post">
<!-- Smart Cart HTML Starts -->
  <div id="SmartCart" class="scMain">
    <input type="hidden" pimage="products/product1.jpg" pprice="10" pdesc="QUANTITY LEFT : <?php echo $tit['QUANTITY']?>" pcategory="SRM Good Foods" pname="Samosa" pid="100" QUANTITY="<?php echo $tit['QUANTITY']?>">
    <input type="hidden" pimage="products/product6.jpg" pprice="30" pdesc="Flavoured Milk Available in:Chocolate, Butterscotch, Vanila flavours" pcategory="SRM Good Foods" pname="Cavins Milk" pid="101">
    <input type="hidden" pimage="products/product3.jpg" pprice="10" pdesc="Available in many flavours...Mix and combine different flavours" pcategory="Soda Wala" pname="Soda" pid="200">
    <input type="hidden" pimage="products/product4.jpg" pprice="750.00" pdesc="Re-defining the perception of advanced mobile phones? the HTC Touch Diamond? signals a giant leap forward in combining hi-tech prowess with intuitive usability and exhilarating design." pcategory="Mobile Phones" pname="HTC Touch Diamond" pid="103">
    <input type="hidden" pimage="products/product2.jpg" pprice="1600.00" pdesc="IMAC G5/1.8 256MB 160GB SD 20IN OS10.3" pcategory="Computers" pname="Apple iMac G5 Desktop" pid="104">
    <input type="hidden" pimage="products/product5.jpg" pprice="1150.00" pdesc="" pcategory="Mobile Phones" pname="Blackberry 8900" pid="105">
    <input type="hidden" pimage="products/product8.jpg" pprice="148.85" pdesc="" pcategory="Accessories" pname="Headphone with mic" pid="106">                       
  </div>
<!-- Smart Cart HTML Ends -->
</form>
</td></tr>
</table>

<footer>
&nbsp;Hi' <?php echo $userRow['userEmail']; ?>
       &nbsp; Wallet Balance :  <?php echo $userRow['Wallet_Bal']; ?>

<a href="getorder.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp; CHECK ALL ORDERS</a>
<a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a>


</footer>

</body>
</html>
