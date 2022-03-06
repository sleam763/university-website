<?php
$name = _POST ['name'];
$student_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'sleamedu@university.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
                "User Enaik: $student_email.\n".
                "subject: $subject.\n".
                "User Message: $message.\n";

$to = 'olufayotobi@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $student_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>