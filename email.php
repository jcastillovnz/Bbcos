
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';



$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);


$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'castillotestjose@gmail.com';
    $mail->Password = 'passtest1992';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    ## MENSAJE A ENVIAR
    $mail->setFrom('jcastillovnz@gmail.com');
    $mail->addAddress('jcastillovnz@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'BBCOS - FORMULARIO';
    $mail->Body = "

Nombre: $data->nombre
<br>
Email: $data->email
<br>
Numero celular: $data->numero_celular
<br>
Ciudad: $data->ciudad
<br>
Provincia: $data->provincia



";

    $exito = $mail->send();

return json_encode($exito);

} catch (Exception $exception) {
return json_encode($exito);
}