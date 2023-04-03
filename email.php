<?php
if(isset($_POST['submit']))
{
    echo "Please fill out the following fields to send a valid email!";
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($email))
{
    echo "Name and email are required.";
    exit;
}

$from = 'kiddwi@kean.edu';
$subject = "New Email!";
$body = "You have received a message from $name.\n"
        "email address: $email\n"
        "Here is the message:\n $message"

$receiver = "kiddwi@kean.edu";
$header = "From: $from \r\n";

mail($receiver,$subject,$body,$header);

?>