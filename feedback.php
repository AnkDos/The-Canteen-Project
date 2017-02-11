<?php







if(isset($_POST['email_field']))
	{
		$name = $_POST['name_field'];
		$email = $_POST['email_field'];
		$feedback = $_POST['feedback_field'];


		$whole_feedback = "Name : {$name}\r\nEmail : {$email}\r\nFeedback : {$feedback}\r\n\r\n";

		echo "THANK YOU FOR THE FEEDBACK<br>";


		$file = fopen("/var/www/feedback.txt",'a');  // TODO : CHANGE THE DIRECTORY DURING PRODUCTION
		fwrite($file, $whole_feedback);
		fclose($file);
	}

else{
?>

<html>
<body>
<form method="post" action="feedback.php">
	<input type='text' name="name_field" placeholder='Name'><br>
	<input type='email' name="email_field" placeholder='Email' required><br>
	<textarea name="feedback_field" placeholder='Your feedback' required></textarea><br>
	<input type='submit' value='Submit'>
</form>
</body>
</html>
<?php
}
?>	
