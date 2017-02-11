<?php
require_once('dbconnect.php');

if(isset($_POST['dude']))
{
$email=trim($_POST['mid']); //use this to insert in db
//$rand=3;   
$rand = rand(653,37214); //will generate random number 
//echo $rand; //mail

$query =mysql_query("Insert into recover(id,user_mail) VALUES('$rand','$email')");
//$do=mysql_query("select * from recover WHERE id='$rand'");
$to = $email ;
$subj = 'Aurganon 16';
$mess = "Your PIN is:   $rand  ";

$mailsend = mail($to,$subj,$mess);
header("Location: forgotkey.php");



}


?>
<html><head>
    </head>
    <body>
        
        <form method="post">
        <input type="email" name="mid">
        <button type="submit" name="dude">CLICK</button>
        
        
        
        </body>
        </html>
