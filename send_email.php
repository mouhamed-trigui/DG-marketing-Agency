<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email subject
    $subject = "New Message from your Website";

    // Email message
    $email_message = "Name: ".$name."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Message: ".$message."\n";

    // Headers
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "X-Mailer: PHP/".phpversion();

    // Send email
    $to = "youremail@example.com"; // Change this to your email address
    if(mail($to, $subject, $email_message, $headers)) {
        echo "Your message has been sent.";
    } else {
        echo "There was a problem sending the email.";
    }
}
?>