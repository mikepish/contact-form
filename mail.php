<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = 'From: ".$name."<".$emil.">\r\n";

$recipient = "mikepish@yahoo.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
  </head>
  <body>
    <div class="container">
      <h1>
        Thank you for contacting me. I will get back to you as soon as possible.
      </h1>
      <p class="back">Return to <a href="index.html">HOME</a>.</p>
    </div>
  </body>
</html>
';

?>