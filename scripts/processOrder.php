<?php

$messageToBusiness = $_POST['order-result'];

$headerToBusiness = "From: $_POST[email]\r\n";
mail("bobaboy2015@gmail.com", $_POST['email'], $messageToBusiness, $headerToBusiness);

$messageToClient =
    "Dear ".$_POST['email'].":\r\n".
    "The following order was received from you by Moba Boba:\r\n\r\n".
    $messageToBusiness.
    "------------------------\r\nThank you for your business. Here is your receipt. We look forward to serving you again.\r\n" .
    "Le Favorite Boba Shop\r\n------------------------\r\n";

$headerToClient = "From: bobaboy2015@gmail.com\r\n";
mail($_POST['email'], "Re: ".$_POST['email'], $messageToClient, $headerToClient);

$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
    "<html><head><title>Your Message</title></head><body><tt>".
    $display.
    "</tt></body></html>";
echo $display;

$fileVar = fopen("../data/order.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar, "\n-------------------------------------------------------\n")
    or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write to the log file.");


?>