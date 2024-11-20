<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    // Email settings
    $to = "Dylan.Goldstein@stonecastleroofing.com";
    $subject = "New Lead: Appointment Request";
    $message = "You have a new lead!\n\n";
    $message .= "Name: $name\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Email: $email\n";
    $headers = "From: no-reply@stonecastleroofing.com";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect to Thank You page
    header("Location: thank_you.html");
    exit();
}
?>
