<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
 $ses=$_SESSION['user'];
$res=mysql_query("SELECT * FROM goods WHERE UID=$ses order by order_num desc");
$fetch=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($fetch);
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
				<li> <span data-hover="Home"><a>HI <?php  echo $userRow['userName'];?></a></li>		
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





<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
    font-size:11px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>



 
       <table>
  <tr>

 


<th>PID</th>
<th>Pname</th>
<th>quantity</th>
<th>TOTAL</th>
<th>order_DT</th>
<th>delivery_status</th>
<th>Order Number</th>

 </tr>






<?php 
 while($row = mysql_fetch_array($res))
 {
    $rname =$row['PID'];
    $pname =$row['Pname'];
    $mname =$row['quantity'];                           
    
    $jname =$row['TOTAL'];  
    $sname =$row['order_DT']; 
    $ab=$row['delivery_status'];
    $on=$row['order_num'];
?>

<tr>
 	 
    <td>&nbsp;<?php echo $rname; ?></td>
    <td>&nbsp;<?php echo $pname; ?></td>
       <td>&nbsp;<?php echo $mname; ?></td>
     <td>&nbsp;<?php echo $jname; ?></td>
       <td>&nbsp;<?php echo $sname; ?></td>
     <td>&nbsp;<?php echo $ab; ?></td>
       <td>&nbsp;<?php echo $on; ?></td>
     
  
  
  </tr>




<?php
}
?>
</table><center>
<font face='monotype corosiva' size="5">WALLET BALANCE : <?php echo $userRow['Wallet_Bal']; ?><br>
<a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a>
</center>
 
