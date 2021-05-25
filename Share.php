<?php

if(!isset($_POST['submit']))
{
	echo "<script>window.alert('Enter the Secret Key and try again...')
    window.open('Admin_Page2.html', '_self')</script>";
}

$password = $_POST['password'];

$to_email = $_POST['usermail'];
$subject = "Secret Key";
$body = "Secret Key for Decryption : $password";
$headers = "From:smithaakulal@gmail.com";

if(mail($to_email, $subject, $body, $headers)) {
    echo "<script>window.alert('Secret Key mailed successfully!')
    window.open('Admin_Page2.html', '_self')</script>";
}

?>