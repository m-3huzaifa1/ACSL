<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "mohdhuzaifa80@gmail.com"; // Replace with your email address
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html\r\n";

    $mailBody = "Name: $name<br>";
    $mailBody .= "Email: $email<br>";
    $mailBody .= "Subject: $subject<br>";
    $mailBody .= "Message:<br>$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>
