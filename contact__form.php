<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'vishnuks2110@gmail.com';

    $email_subject = "test";

    $email_body = "User name: $name.\n".
                    "User email: $email.\n".
                    "User message: $message.\n";
    
    $to = "vyshnavks85@gmail.com";
    
    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-to: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location : index.html");

?>