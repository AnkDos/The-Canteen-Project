<?php


ob_start();
session_start();



include_once 'dbconnect.php';

$pro=mysql_query("select * from Products");
 
while($fet=mysql_fetch_array($pro)){
$product_array = array(
  $fet['pid'] =>array('product_id'=>$fet['pid'], 'product_name'=>$fet['pname'],'product_desc'=>'Enjoy da', 'product_price'=>$fet['pprice'], 'product_img'=>$fet['pimage']  ));
 $product[]=$product_array;
 }
 
 echo $product['100']['Samosa'];
?>