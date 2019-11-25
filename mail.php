<?php
    $to = 'revitalize.gtba@gmail.com';
    $firstname = $_POST["fname"];
    $email= $_POST["email"];
    $text= $_POST["message"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>E-mail: '.$email.'</td></tr>
        <tr><td>Nome: '.$firstname.'</td></tr>
        <tr><td>Texto: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo "Olá! Sua mensagem foi enviada. Em breve retornaremos o contato.";
    }else{
        echo "<font color='red'>Erro ao enviar a mensagem. Tente novamente.</font>";
    }

?>
