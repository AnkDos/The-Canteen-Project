<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
 }
 
 if( isset($_POST['btn-login']) ) { 
  
  $email = $_POST['email'];
  $upass = $_POST['pass'];
  $REG = $_POST['REG'];


  $email = strip_tags(trim($email));
  $upass = strip_tags(trim($upass));
  $REG = strip_tags(trim($REG));


  $password = hash('sha256', $upass); // password hashing using SHA256
  
  $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email' AND REG_NUM='$REG'");
  
  $row=mysql_fetch_array($res);
  
  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
  
  if( $count == 1 && $row['userPass']==$password ) {
   $_SESSION['user'] = $row['userId'];
   header("Location: home.php");
  } else {
   $errMSG = "Wrong Credentials, Try again...";
  }
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Srm Good Foods</title>
<style type="text/css">
body {
color: #E1E4E8;
background-color: #0A2143; /*#141B3F*/
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 30px;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 20px;
}
strong {
font-weight: bold;
color: #E1E4E8;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */


#login {
margin: 50px auto;
width: 300px;
}
div.opacity{
filter: alpha(opacity=60);
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 300px;
appearance:none;

}
form fieldset input[type="submit"] {
background-color: #0B5FE7;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
appearance:none;
font-size: 15px;
}
form fieldset a {
color: #BBBFC3;
font-size: 10px;
}
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
background-color: #04BB23;
border-radius: 3px;
color: #f4f4f4;	
cursor:pointer;
height: 50px;
text-transform:uppercase;
width:200px;
border:none;
font-size: 15px;
}

.login{
font-size:20;
filter: alpha(opacity=60);
}

.fpass{
	color: #BBBFC3;
}
.h1{
	font-family: 'monotype corosiva';
	font-size: 50px;
	margin-top: 20px;
	text-align: center;
	color:white;
}

</style>
</head>
<body>
    <h1 class="h1"> Welcome to SRM Good Foods</h1>
<div id="login" class="opacity">
<h1 class="login"><strong>Login to your account.</strong></h1>
     <form method="post" autocomplete="off">
    <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
         <fieldset class="box">   
           <p> <input type="text" name="email" placeholder="Your Email" required /> </p>
              
            
           <p> <input type="password" name="pass" placeholder="Your Password" required /></p>
              

       <input type="text" name="REG" placeholder="REG NO." required />
        <p><input type="submit" value="Login" name="btn-login"></p>
</fieldset>
</form>
<p><span class="btn-round">or</span></p>
<p>
<center>Not a member?</center>
<center><a href="index.html">CLICK HERE TO GO TO MAIN PAGE</a></center>
</p>
<p>
<a class="signup"></a> 
<center><a href="register.php"><button class="signup" > Sign Up!</button></a></center>
</p>
</p>

</div>     

            
            
</body>
</html>

