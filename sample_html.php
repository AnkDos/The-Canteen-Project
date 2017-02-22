<?php

require_once("qrcode.php");

//--------------------------------------------------------

$ar=array("A","B","C");
$br=array("Aa","Bb","Cc");
/*
$qr = new QRCode();

$qr->setErrorCorrectLevel(QR_ERROR_CORRECT_LEVEL_L);

$qr->setTypeNumber(3);


for($i=0;$i<=2;$i++)
{
$qr->addData("Name");

$qr->addData($ar[$i]);
echo "<br>";
$qr->printHTML();

}
$qr->make();
}
//---------------------------------------------------------
*/

for($i=0;$i<=2;$i++)
{

$qr = QRCode::getMinimumQRCode($ar[$i] ." ". $br[$i],QR_ERROR_CORRECT_LEVEL_L);

echo "<br>";

$qr->printHTML();
//$qr1->printHTML();
}

?>
