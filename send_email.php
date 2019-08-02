<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $from = 'From: evolet.in'; 
    $to = 'dilovarmudinov@gmail.com'; 
    $subject = 'Evolet.in web';
    $body = "From: $name\n Phone: $phone\n E-Mail: $email\n Message:\n $message";

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html\r\n";
    $headers .= 'From: from@example.com' . "\r\n" .
    'Reply-To: reply@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    if ($_POST) {
        if (mail ($to, $subject, $body, $headers)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }
    
?>