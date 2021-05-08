<?php
session_start();
include("config.php");
if(isset($_POST['submit']))
{
    $email1 = $_POST['email'];
    $result = mysqli_query($con,"SELECT * FROM login WHERE email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$username=$row['username'];
	$email=$row['email'];
	$password=$row['password'];
	if($email1==$email) {
				$to = $email;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@streamy.com" . "\r\n" .
                "CC: singhjaspreet90006@gmail.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid email';
				}
}
?>



<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>