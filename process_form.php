<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Replace 'bassil@amincitravels.com' with the actual email address where you want to receive form submissions
    $to = "bassil@amincitravels.com";
    $subject = "New Form Submission from Aminci Travels";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect to the thank you page
    header("Location: thank_you.html");
    exit();
}
?>
