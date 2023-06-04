<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'king.need.4@gmail.com'; // replace with your email address
    $subject = 'New message from your website';
    $headers = 'From: ' . $_POST['name'] . ' <' . $_POST['email'] . ">\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $message = $_POST['message'];
    mail($to, $subject, $message, $headers);
    echo 'Your message has been sent. Thank you!';
}
?>