<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'fatalsc2@gmail.com';

    $email_subject = 'Website Form Submission';

    $email_body = "User name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";


    $to = "fatalsc2@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
}
?>