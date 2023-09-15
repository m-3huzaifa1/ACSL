<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    error_log("Name: " . $name);
    error_log("Email: " . $email);
    error_log("Subject: " . $subject);
    error_log("Message: " . $message);
    
    $to = "mohdhuzaifa80@gmail.com"; // Replace with your email address
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html\r\n";
    
    error_log("headers: " . $headers);
    
    $mailBody = "Name: $name<br>";
    $mailBody .= "Email: $email<br>";
    $mailBody .= "Subject: $subject<br>";
    $mailBody .= "Message:<br>$message";
    
    error_log("body: " . $mailbody);
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "success";
        error_log("Success");
    } else {
        echo "error";
        error_log("Error");
    }
} else {
    echo "Invalid request";
    error_log("Invalid request");
}
?>
