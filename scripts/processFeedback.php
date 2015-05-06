<?php

$drinks = implode(", ", $_POST['drink']);
$messageToBusiness =
    "From: ".$_POST['name']."\r\n" .
    "E-mail address: ".$_POST['email']."\r\n".
    "Phone number: ".$_POST['phone']."\r\n".
    "Order: ".$drinks."\r\n".
    "Rating: ".$_POST['rating']."\r\n".
    "Comments: ".$_POST['comments']."\r\n";

$headerToBusiness = "From: $_POST[email]\r\n";
mail("bobaboy2015@gmail.com", $_POST['name'], $messageToBusiness, $headerToBusiness);

$messageToClient =
    "Dear ".$_POST['name'].":\r\n".
    "The following message was received from you by Moba Boba:\r\n\r\n".
    $messageToBusiness.
    "------------------------\r\nThank you for the feedback and your business.\r\n" .
    "Le Favorite Boba Shop\r\n------------------------\r\n";

$headerToClient = "From: bobaboy2015@gmail.com\r\n";
mail($_POST['email'], "Re: ".$_POST['name'], $messageToClient, $headerToClient);

$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
    "<html><head><title>Your Message</title></head><body><tt>".
    $display.
    "</tt></body></html>";
echo $display;

$fileVar = fopen("../data/feedback.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar, "\n-------------------------------------------------------\n")
    or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write to the log file.");


?>