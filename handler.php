<?
$mail_to_send_to = "contact@thewyattjames.com";
$from_email = "wjfgiggem92@gmail.com";   
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message= "\r\n" . "Name: $name" . "\r\n"; //get recipient name in contact form
$message = $message.$_REQUEST['message'] . "\r\n" . "from: " . $email; //add message and email from the contact form to existing message(name of the client)

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = $from_email;
$mail->Password = "recycle100/100";
$mail->SetFrom($from_email);
$mail->Subject = "Test";
$mail->Body = $message;
$mail->AddAddress($mail_to_send_to);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
        ?>
