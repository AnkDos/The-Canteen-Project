<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="Smart Cart 2 - a javascript jQuery shopping cart plugin" />  
  <title>Smart Cart 2 - a javascript jQuery shopping cart plugin</title>

  <link href="styles/smart_cart.css" rel="stylesheet" type="text/css">
  
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php


ob_start();
session_start();



include_once 'dbconnect.php';
echo "Today is " . date("Y/m/d") . "<br>";
echo "The time is " . date("h:i:sa");

if(isset($_SESSION['user'])) {
echo "<BR>Your session is running " . $_SESSION['user'];
 $userRow=$_SESSION['user'];
}

?>

<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr><td>                    
<div class="scMain">  
 

<?php

$les=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRo=mysql_fetch_array($les);

$qua=mysql_query("SELECT * FROM Items WHERE PID= '100'");
 $tit=mysql_fetch_array($qua);






 


// creating product array, can be from database
$product_array = array(
  "100" =>array('product_id'=>'100', 'product_name'=>'Samosa','product_desc'=>$tit['QUANTITY'], 'product_price'=>'10', 'product_img'=>'products/product1.jpg'  ),
  "101" =>array('product_id'=>'101', 'product_name'=>'Cavins Milk','product_desc'=>'Flavoured Milk Available in:Chocolate, Butterscotch, Vanila flavours', 'product_price'=>'30', 'product_img'=>'products/product6.jpg'),
  "102" =>array('product_id'=>'102', 'product_name'=>'Soda Wala','product_desc'=>'Available in many flavours...Mix and combine different flavours', 'product_price'=>'10', 'product_img'=>'products/product3.jpg'),
  "103" =>array('product_id'=>'103', 'product_name'=>'X','product_desc'=>'Re-defining the perception of advanced mobile phones� the HTC Touch Diamond� signals a giant leap forward in combining hi-tech prowess with intuitive usability and exhilarating design.', 'product_price'=>'750.00', 'product_img'=>'products/product4.jpg'),
  "104" =>array('product_id'=>'104', 'product_name'=>'Y','product_desc'=>'IMAC G5/1.8 256MB 160GB SD 20IN OS10.3', 'product_price'=>'1600.00', 'product_img'=>'products/product2.jpg'),
  "105" =>array('product_id'=>'105', 'product_name'=>'Z','product_desc'=>'', 'product_price'=>'1150.00', 'product_img'=>'products/product5.jpg'),
  "106" =>array('product_id'=>'106', 'product_name'=>'A','product_desc'=>'', 'product_price'=>'148.85', 'product_img'=>'products/product8.jpg')
  );
// get the selected product array
// here we get the selected product_id/quantity combination asa an array
$product_list = $_REQUEST['products_selected'];
echo  "<br>"."<strong>Selected products result:</strong><br />";
var_dump($product_list);
echo "<br /><br />";
if(!empty($product_list)) {
?>             
<div class="scCartHeader">
  <label class="scCartTitle scCartTitle1">Products</label>
  <label class="scCartTitle scCartTitle2">Price</label>
  <label class="scCartTitle scCartTitle3">Quantity</label>
  <label class="scCartTitle scCartTitle4">Total</label>
  <label class="scCartTitle scCartTitle5"></label>
</div>	 
 <div class="scCartList">

















<?  
    $sub_total = 0;
    foreach($product_list as $product){
      $chunks = explode('|',$product);
      $product_id = $chunks[0];
      $product_qty = $chunks[1];
      $product_name = $product_array[$product_id]['product_name'];
      $product_desc = $product_array[$product_id]['product_desc'];
      $product_img = $product_array[$product_id]['product_img'];
      $product_price = $product_array[$product_id]['product_price'];
      $product_amount = $product_price*$product_qty;
      // calculate the subtotal
      $sub_total = $sub_total + $product_amount;
     // echo "Product Id: ".$product_id." Quantity: ".$product_qty."<br>";


if($userRo['Wallet_Bal']<$sub_total)
{

 $errMSG = "Not Sufficient Or you must sign in first"; 

}


 if ( isset($errMSG) ) {

echo $errMSG;

}


 if ( !isset($errMSG) ) {
 $query = "INSERT INTO goods(PID,Pname,Price,TOTAL,UID,quantity) VALUES('$product_id',' $product_name',' $product_price','   $product_amount','$userRow','$product_qty')";
 $Des = mysql_query($query);
 $duery = "UPDATE users SET Wallet_bal=Wallet_bal-$product_amount where userId=$userRow;";
 $wes = mysql_query($duery);

$TRY = "UPDATE Items SET QUANTITY=QUANTITY-$product_qty where PID=$product_id;";
 $TRYO = mysql_query($TRY);




}
  
   
?>

   <div id="divCartItem2" class="scCartItem">
      <div class="scCartItemTitle scCartItemTitle1">
        
      <div>
        <strong><? echo $product_name; ?></strong>

      </div>
   </div>
   <label class="scCartItemTitle scCartItemTitle2"><? echo $product_price; ?></label>
   <label id="lblQuantity2" class="scCartItemTitle scCartItemTitle3"><? echo $product_qty; ?></label>
   <label id="lblTotal2" class="scCartItemTitle scCartItemTitle4"><? echo $product_amount; ?></label>
   </div>
<? } ?>
 </div>
 
<div style="border:0px;" class="scBottomBar">
<form action="home.php" method="post">
<?
    // set the request for continue shopping
    if(isset($product_list)){
      foreach($product_list as $p_list){
        $prod_options .='<input type="hidden" name="products_selected[]" value="'.$p_list.'">';
      }
      echo $prod_options;
    }
?>
 <input style="width:200px;height:32px;float:left;padding-top:0px;" type="submit" class="scCheckoutButton" value="Continue Shopping">
</form>

<label class="scLabelSubtotalValue"><? echo $sub_total; ?></label>
<label class="scLabelSubtotalText">Subtotal: </label>
</div>          
<?    
} else {	
	echo "<strong>Cart is Empty</strong>";
	?>
	<form action="home.php" method="post">
    <input style="width:200px;height:32px;float:left;padding-top:0px;" type="submit" class="scCheckoutButton" value="Back to Cart">
  </form>
  <?
}
?>
</div>
</td></tr>
</table>

</body>
</html>
