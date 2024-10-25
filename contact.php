<?php
session_start();

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$subjectnew = $_POST['subjectnew'];
$message = $_POST['message'];
$to = "charlytravelandtours@gmail.com";
$subject = "Mail From website:";
$txt = "Name: " . $name . "\n\nEmail: " . $email . "\n\nSubject: " . $subjectnew . "\n\nMessage:\n" . $message;
$headers = "From: noreply@charlytravelandtours.com";

if ($email != NULL) {
    if (mail($to, $subject, $txt, $headers)) {
        $_SESSION['success_message'] = "Message sent successfully!";
    } else {
        $_SESSION['error_message'] = "Failed to send Message. Please try again later.";
    }
} else {
    $_SESSION['error_message'] = "Message field is empty.";
}

// Redirect
header("Location: ./#contact");

