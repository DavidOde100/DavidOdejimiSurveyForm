<?php
  if (isset($_POST['submit'])) {
    $to = 'david.odejimi677@gmail.com';
    $subject = 'David Odejimi Survey Form';
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .= 'Age: ' . $_POST['age'] . "\r\n\r\n";
    $message .= 'Role: ' . $_POST['role'] . "\r\n\r\n";
    $message .= 'Favorite Color: ' . $_POST['favorite-color'] . "\r\n\r\n";
    $message .= 'Best Feature: ' . $_POST['feature'] . "\r\n\r\n";
    $message .= 'Improvement: ' . implode(', ', $_POST['prefer']) . "\r\n\r\n";
    $message .= 'Comment: ' . $_POST['comment'] . "\r\n\r\n";
    $headers = 'From: ' . $_POST['email'];

    mail($to, $subject, $message, $headers);
  }
?>
