<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/PHPMailer/src/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/PHPMailer/src/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/PHPMailer/src/SMTP.php';

$name = "не определено";
$email = "не определен";
$phone = "не определен";
$select = "не определен";
$text = "не определен";


if (isset($_POST["name"])) $name = $_POST["name"];
if (isset($_POST["email"])) $email = $_POST["email"];
if (isset($_POST["phone"])) $phone = $_POST["phone"];
if (isset($_POST["select"])) $select = $_POST["select"];
if (isset($_POST["text"])) $text = $_POST["text"];


$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = '***';
$mail->Password = '***';

// От кого
$mail->setFrom('***', '***');

// Кому
$mail->addAddress('***', '***');
$mail->addAddress('***', '***');

// Тема письма
$mail->Subject = "Новая заявка с сайта phytosterol-forte.ru";

// Тело письма
$body = '<p><strong>Новая заявка с сайта phytosterol-forte.ru</strong></p>';

$body = $body . "<br>Имя: " . $name;
$body = $body . "<br>email: " . $email;
$body = $body . "<br>Телефон: " . $phone;
$body = $body . "<br>Тема: " . $select;
$body = $body . "<br>Сообщение: " . $text;
$body = $body . "<br>";

$mail->msgHTML($body);

$mail->send();

header("Location: /");
die();
