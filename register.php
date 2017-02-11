<?php
ob_start();
session_start();
if( isset($_SESSION['user'])!="" ){
 header("Location: index.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
  
 $uname = trim($_POST['uname']);
 $email = trim($_POST['email']);
 $upass = trim($_POST['pass']);
$REG = trim($_POST['REG']);

 
 $uname = strip_tags($uname);
 $email = strip_tags($email);
 $upass = strip_tags($upass);
$REG = strip_tags($REG); 


 // password encrypt using SHA256();
 $password = hash('sha256', $upass);
 
 // check email exist or not
 $query = "SELECT userEmail FROM users WHERE userEmail='$email' ";
 $result = mysql_query($query);
 
 $count = mysql_num_rows($result); // if email not found then proceed
 
 if ($count==0) {
  
  $query = "INSERT INTO users(userName,userEmail,userPass,REG_NUM) VALUES('$uname','$email','$password','$REG')";
  $res = mysql_query($query);
  
  if ($res) {
   $errTyp = "success";
   $errMSG = "successfully registered, you may login now";
  } else {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later..."; 
  } 
   
 } else {
  $errTyp = "warning";
  $errMSG = "Sorry Email already in use ...";
 }
 
}
?>
<html>
<head>
<meta charset="utf-8">
<title>SRM Canteen SignUp page</title>
<style type="text/css">
body {
background-color: #0A2143;
/*background-image: url("fruits2.jpg");*/
background-attachment: fixed;
-webkit-background-size: cover;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 70px;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 20px;
margin-left: 10px;
border-collapse: collapse;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
form fieldset input[type="text"], input[type="password"]{
background-color: white;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 290px;
-webkit-appearance:none;

}/*
.lastname{
	float:right;
}*/

form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size: 12px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align: center;
text-transform: uppercase;
width: 50px;
}

.signup{
background-color: #0FB900;
color: white;
cursor:pointer;
height:50px;
width:200px;
text-transform: uppercase;
border:none;
border-radius: 3px;
font-size: 15px;
}

</style>
</head>
<body>
    <div id="signup">

   <form method="post" autocomplete="off">
    
     <fieldset>
           
 <p><input type="text" name="uname" class="form-control" placeholder="Enter Username" required /></p>
 <p><input type="text" name="REG" class="form-control" placeholder="REG NUM" required /></p>
<p> <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required /></p>
 <p><input type="password" name="pass" class="form-control" placeholder="Enter Password" required /></p>
 
<p><input type="submit" class="signup" value="Sign Up" name="btn-signup">
</p>
 <p>              
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <?php echo ($errTyp=="success") ? "success" : $errTyp; header("Location: index.php"); ?>">
   <?php echo $errMSG; ?>
    <?php
   }
   ?>
   </p> 

</fieldset>
</form>
<a href="index.html">CLICK HERE TO GO TO MAIN PAGE</a>
</div>

</body>
</html>
