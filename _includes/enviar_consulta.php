<?php

declare (strict_types=1);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as PHPMailerException;



date_default_timezone_set('America/Argentina/Buenos_Aires');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");


//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$httpStatusCode = 200;
$errors = [];
$message = 'Gracias por contactarse con nosotros, le responderemos a la brevedad';
$fechaHora = date('Y-m-d H:i:s');
$mailer = new PHPMailer(true);

$data = json_decode( file_get_contents('php://input'), true);

try {
    //Server settings
    $mailer->SMTPDebug = SMTP::DEBUG_OFF;                     
    $mailer->isSMTP();                                           
    $mailer->Host = 'mail.transportescr.com.ar';                     
    $mailer->SMTPAuth = true;                                   
    $mailer->Username = 'info@transportescr.com.ar';                     
    $mailer->Password = 'Transportes$CR2024';                             
    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mailer->Port = 465;   
    $mailer->CharSet = 'utf8';
    //Recipients
    $mailer->setFrom($data['email'], $data['nombre']);
    $mailer->addAddress('info@transportescr.com.ar', 'Formulario de contacto de la web transportescr.com.ar');
    $mailer->addReplyTo($data['email'], $data['nombre']);

    //Content
    $mailer->isHTML(true);                                  //Set email format to HTML
    $mailer->Subject = "Contacto desde la web transportescr.com.ar de {$data['nombre']}";
    $mailer->Body = <<<eot
<h1>Contacto desde la web transportescr.com.ar</h1>
<div>
<ul>
<li><b>Fecha Hora:</b> {$fechaHora}</li>
<li><b>Nombre:</b> {$data['nombre']}</li>
<li><b>Email:</b> {$data['email']}</li>
</ul>
</div>
<div>
<h2>Consulta:</h2>
<p>
{$data['consulta']}
</p>
</div>
eot;
    $mailer->AltBody = <<<eot
CONTACTO DESDE LA WEB transportescr.com.ar:
-------------------------------------------
            
Fecha Hora: {$fechaHora}

Nombre: {$data['nombre']}
Email: {$data['email']}

Consulta:
{$data['consulta']}
eot;

    $mailer->send();
} catch (PHPMailerException $e) {
    $httpStatusCode = 400;
    $errors[] = [
        'code' => 400,
        'message' => "El mensaje no podido ser enviado. Error: {$mailer->ErrorInfo}"
            ];
}

header('Content-Type: application/json');
http_response_code($httpStatusCode);

echo json_encode([
    'success' => count($errors) < 1,
    'message' => $message,
    'errors' => $errors,
]);
