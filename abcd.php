<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Do something with the data (e.g., send an email)
    $to = "shindesaish9191@gmail.com";
    $subject = "New Pass";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Example: Sending an email
    mail($to, $subject, $body);

    // Redirect back to the form page
    header("Location: contact_form.html");
    exit();
}
?>
