<?php
if(isset($_POST['EMAIL']))
{
	$email = $_POST['EMAIL'];
	$email = "$email\n";
	$file = 'registrants.txt';
	
	file_put_contents($file, file_get_contents(($file)).$email);
	session_start();
	$_SESSION['done'] = true;
}
header('location: /');