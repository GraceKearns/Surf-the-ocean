<?php
if (isset($_POST['sendEmail'])) {
    $to = $_POST['email'];
    
    $subject = 'Image from your website';

    $message = "<html><head><title>Your email at the time</title></head><body>";
    

    ob_start(); 
    include 'fetch_image.php'; 
    $imageContent = ob_get_clean(); 
    
    $message .= "<img src='data:image/jpeg;base64," . base64_encode($imageContent) . "' />";
    
    $message .= "</body></html>";
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: yourname@example.com\r\n";
    $headers .= "Reply-To: yourname@example.com\r\n";
    echo $message;
    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Image sent successfully!");</script>';
        header("Location: index.php");
    } else {
        echo '<script>alert("Error sending image.");</script>';
    }
}
?>