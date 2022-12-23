<?php 
if(isset($_POST['submit'])){
    $to = "contact@thewyattjames.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    }
?>
