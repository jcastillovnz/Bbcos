<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class EmailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //


    }



public function send( Request $request)
{

header('Content-Type: application/json');


$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);
$mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;
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


if(!$mail->send()) {
return json_encode(array('success' => false, 'result' => "0"));

} else {
return json_encode(array('success' => true, 'result' => "1"));

}








}












    //
}
