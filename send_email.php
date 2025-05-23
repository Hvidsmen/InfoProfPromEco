<?php

if (isset($_POST)) {
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $message = "Заявка от $name номер $telephone";
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER["DOCUMENT_ROOT"] . '/src/Exception.php';
require $_SERVER["DOCUMENT_ROOT"] . '/src/PHPMailer.php';
require $_SERVER["DOCUMENT_ROOT"] . '/src/SMTP.php';

// Настройки сервера на примере Яндекс почты
$mail = new PHPMailer;

$yourEmail = 'request-profpromeco@yandex.ru'; // ваш email на яндексе
$password = 'ijyrxjliicwfkjio'; // ваш пароль к яндексу или пароль приложения

// настройки SMTP
$mail->Mailer = 'smtp';
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = $yourEmail; // ваш email - тот же что и в поле From:
$mail->Password = $password; // ваш пароль;

// формируем письмо

// от кого: это поле должно быть равно вашему email иначе будет ошибка
$mail->setFrom($yourEmail, 'Request ProfPromEco');

// кому - получатель письма
//$mail->addAddress('danchicscomp@gmail.com', 'BOSS');  // кому
$mail->addAddress('info@profpromeco.pro', 'BOSS');  // кому
$mail->Subject = 'Request Site';  // тема письма

$mail->msgHTML("<html><body>
				<h1>Привет, BOSS, Заявка от $name </h1>
				<p>Номер телефона. Перезвонить +7$telephone </p>
				</html></body>");

if ($name != '' and $telephone != '') {
    $mail->send();

}

header("Location: ./index.php");
?>