<?php


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $subject = $_POST['area'];
    $query = $_POST['query'];


require '../libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;                                 
        $mail->isSMTP();                                      
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;                         
        $mail->Username = 'dar3mo.test@gmail.com';              
        $mail->Password = 'slaptazodis626';                      
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

    //CIA REIKIA SUDELIOTI KINTAMUOSIUS:
    echo $email;
    //Recipients
    $mail->setFrom($email, 'Client');
    $mail->addAddress('dar3mo.test@gmail.com', 'Admin');
    $mail->addReplyTo($email, 'Response');

    
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $query;  
    $mail->AltBody = $query; 

    $mail->send();
} catch (Exception $e) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

include("./functions.php");
    createQuery($name, $surname, $email, $subject, $query);
?>