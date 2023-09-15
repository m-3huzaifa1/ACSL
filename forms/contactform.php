<?php

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

    $txt = "Name: $name<br>Email: $email<br>Subject: $subject<br>Message:<br>$message";
    
    //$mailBody = "Name: $name<br>";
    //$mailBody .= "Email: $email<br>";
    //$mailBody .= "Subject: $subject<br>";
    //$mailBody .= "Message:<br>$message";

    
    //error_log("body: " . $mailbody);
    
    //if (mail($to, $subject, $mailBody, $headers)) {
    if ($email!=NULL) {
        mail($to, $subject, $txt, $headers);
        echo "success";
        error_log("Success");
    } else {
        echo "error";
        error_log("Error");
    }
header('Location:index.html');

?>
