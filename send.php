<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sebandeke.94.ronald@gmail.com';
    $mail->Password = 'ubcu neka eawo kttq';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('sebandeke.94.ronald@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
    
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["messsage"];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'index.php'
    </script>
    ";
}
?>