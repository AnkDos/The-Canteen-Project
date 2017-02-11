<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
 
 // it will never let you open index(login) page if session is set
//  if ( isset($_SESSION['user'])!="" ) {
//   header("Location: home.php");
//   exit;
//  }
 
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
 
 if(isset($_GET['up'])&&isset($_GET['uname'])&&isset($_GET['eemail'])&&isset($_GET['passs'])&&isset($_GET['REGe'])) {
  
 $unamee = trim($_GET['uname']);
 $emaill = trim($_GET['eemail']);
 $upasss = trim($_GET['passs']);
$REGg = trim($_GET['REGe']);

 
 $unamee = strip_tags($unamee);
 $emaill = strip_tags($emaill);
 $upasss = strip_tags($upasss);
$REGg = strip_tags($REGg); 


 // password encrypt using SHA256();
 $password = hash('sha256', $upasss);
 
 // check email exist or not
 $query = "SELECT userEmail FROM users WHERE userEmail='$emaill' ";
 $result = mysql_query($query);
 
 $count = mysql_num_rows($result); // if email not found then proceed
 
 if ($count==0) {
  
  $query = "INSERT INTO users(userName,userEmail,userPass,REG_NUM) VALUES('$unamee','$emaill','$password','$REGg')";
  $res = mysql_query($query);
  
  if ($res) {
   $errTyp = "success";
   $errMSGa = "successfully registered, you may login now";
  } else {
   $errTyp = "danger";
   $errMSGa = "Something went wrong, try again later..."; 
  } 
   
 } else {
  $errTyp = "warning";
  $errMSGa = "Sorry Email already in use ...";
 }
 
}
 

if (isset($_GET['gd']))
{
header("Location: getorder.php");

} 
 
?>
