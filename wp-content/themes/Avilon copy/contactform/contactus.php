<?php
require("home/usuario/directorioinstalado/PHPMailer-master/src/PHPMailer.php");
require("home/usuario/directorioinstalado/PHPMailer-master/src/SMTP.php");
 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "selvaware.com";
 $mail->Port = 465;
 $mail->IsHTML(true);
 $mail->Username = "info@selvaware.com";
 $mail->Password = "claveSW14";
 $mail->SetFrom("info@selvaware.com");
 $mail->Subject = "Contact us Form";
 $mail->Body = "Desde el contact us form";
 $mail->AddAddress("info@selvaware.com");

    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Selvaware - contact form';
        $mail->isHTML(false);
        $mail->Body = $_POST['body'];
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Share it with us!';
    }
?>