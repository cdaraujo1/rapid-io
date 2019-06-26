<?php

require 'src/PHPMailer.php';
require 'src/Exception.php';
require 'src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function mailNewPack($pcode, $statusId, $location, $customerId)
{
    require 'mailpass.php';
    
    $mail = new PHPMailer();
    
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $emailadd;            // SMTP username
        $mail->Password = $pass;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
        $mail->Port = 587;

        $mail->From = $from;
        $mail->FromName = $fromname;
        $mail->addAddress('carlosdanaraujo@gmail.com', 'Daniel Dan');     // Add a recipient


        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->Subject = '{$customerId}, sua encomenda foi postada!';
        $mail->Body    = '
            Olá, {$customerId}. <br>
            A sua encomenda foi postada e o prazo de entrega é de 2 dias úteis. <br>
            Você pode rastreá-la através do código <b>{$pcode}</b> <a href="#">através do nosso site</a>.<br>
            Obrigado!<br>
            <br><br>
            Caso não consiga clicar no endereço, copie e cole rapid.io/rastreio/ no seu navegador.
            ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
    }
}

function mailUpdatePack($pcode, $statusId, $location)
{
    require 'mailpass.php';
  
        $mail = new PHPMailer();

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $emailadd;            // SMTP username
        $mail->Password = $pass;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
        $mail->Port = 587;

        $mail->From = $from;
        $mail->FromName = $fromname;
        $mail->addAddress('carlosdanaraujo@gmail.com', 'Daniel Dan');     // Add a recipient


        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->Subject = '{$customerId}, sua encomenda foi atualizada!';
        $mail->Body    = '
            Olá, {$customerId}. <br>
            A sua encomenda foi atualizada e o prazo de entrega é de 2 dias úteis. Ela se encontra em transito.<br>
            Você pode rastreá-la através do código <b>{$pcode}</b> <a href="#">através do nosso site</a>.<br>
            Obrigado!<br>
            <br><br>
            Caso não consiga clicar no endereço, copie e cole rapid.io/rastreio/ no seu navegador.
            ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
    }
}
?>


