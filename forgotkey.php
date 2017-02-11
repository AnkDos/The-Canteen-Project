<?php
require_once('dbconnect.php');

if(isset($_POST['dude']))
{
$uid=trim($_POST['mid']); 
$email=trim($_POST['mid0']);//use this to insert in db
$upass1=trim($_POST['mid1']);
$upass2=trim($_POST['mid2']);
 
//$query =mysql_query("Insert into recover(id,user_mail) VALUES('$rand','$email')");
$do=mysql_query("select * from recover WHERE id='$uid'");
$do1=mysql_num_rows($do);
if($do1=='1' && $upass1==$upass2)
{
    $upass=$upass1;
     $password = hash('sha256', $upass); // password hashing using SHA256
    
    $do3=mysql_query("UPDATE  users SET userPass='$password' WHERE userEmail='$email'");
    echo "done";
}


}


?>
<html><head>
    </head>
    <body>
        
        <form method="post">
        <input type="text" name="mid" placeholder="PIN">
        
        <input type="email" name="mid0" placeholder="Mail ID">
        
        <input type="password" name="mid1" placeholder="password">
    
        <input type="password" name="mid2" placeholder="confirm password">
    
   
    
    
    
        <button type="submit" name="dude">CLICK</button></form>
        
        
        
        </body>
        </html>