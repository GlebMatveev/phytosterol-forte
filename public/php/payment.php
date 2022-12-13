<?php

use YooKassa\Client;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/YooKassa/lib/autoload.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/php/PHPMailer/src/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/PHPMailer/src/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/PHPMailer/src/SMTP.php';

$value = "";

$fio = "";
$phone = "";
$city = "";
$zipcode = "";
$address = "";


if (isset($_POST["value"])) $value = number_format($_POST["value"], 2, '.', '');

if (isset($_POST["fio"])) $fio = $_POST["fio"];
if (isset($_POST["phone"])) $phone = $_POST["phone"];
if (isset($_POST["city"])) $city = $_POST["city"];
if (isset($_POST["zipcode"])) $zipcode = $_POST["zipcode"];
if (isset($_POST["address"])) $address = $_POST["address"];


$return_url = "https://phytosterol-forte.ru";
$description = $phone . ", " . $city . ", " . $fio;



$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

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

$mail->setFrom('***', '***');
$mail->addAddress('***', '***');
$mail->addAddress('***', '***');

$mail->Subject = "Новый заказ с сайта phytosterol-forte.ru";
$body = '<p><strong>Новый заказ с сайта phytosterol-forte.ru</strong></p>';

$body = $body . "<br>ФИО: " . $fio;
$body = $body . "<br>Телефон: " . $phone;
$body = $body . "<br>Город: " . $city;
$body = $body . "<br>Индекс: " . $zipcode;
$body = $body . "<br>Адрес: " . $address;
$body = $body . "<br>Сумма: " . $value;
$body = $body . "<br>";

$mail->msgHTML($body);

$mail->send();



$client = new Client();
$client->setAuth('***', '***');
$payment = $client->createPayment(
    array(
        'amount' => array(
            'value' => $value,
            'currency' => 'RUB',
        ),
        'confirmation' => array(
            'type' => 'redirect',
            'return_url' => $return_url,
        ),
        'capture' => true,
        'description' => $description,
    ),
    uniqid('', true)
);

$confirmationUrl = $payment->getConfirmation()->getConfirmationUrl();
if ($confirmationUrl) {
    header("Location: " . $confirmationUrl);
    die();
}
