<?php

$to = "shresthasujal07@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a test email message.";
$from = "cleckhuddersfaxonlinemart@gmail.com";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers);
?>
