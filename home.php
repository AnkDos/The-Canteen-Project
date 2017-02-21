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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	  <?php 
$pro=mysql_query("select * from Products");
while($fet= mysql_fetch_array($pro))
 {
	  ?>
    <input type="hidden"  pprice="<?php echo $fet['pprice']?>"  pcategory="<?php echo $fet['pcategory']?>" pname="<?php echo $fet['pname']?>" pid="<?php echo $fet['pid']?>">
  
  <?
}
  ?>
  
  </div>
<!-- Smart Cart HTML Ends -->
</form>
</td></tr>
</table>

<footer>

       &nbsp; Wallet Balance :  <?php echo $userRow['Wallet_Bal']; ?>

<a href="getorder.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp; CHECK ORDERS</a>
<a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a>


</footer>

</body>
</html>
