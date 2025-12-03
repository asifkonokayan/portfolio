<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["message"];

    $to = "your-email@example.com";  // <-- PUT YOUR EMAIL HERE
    $subject = "New message from your portfolio website";

    $message = "Name: $name\nEmail: $email\n\nMessage:\n$msg";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}

?>
