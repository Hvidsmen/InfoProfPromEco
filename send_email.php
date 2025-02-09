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

$yourEmail = 'hvids@yandex.ru'; // ваш email на яндексе
$password = 'powmqrzfzzlzwuyp'; // ваш пароль к яндексу или пароль приложения

// настройки SMTP
$mail->Mailer = 'smtp';
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = $yourEmail; // ваш email - тот же что и в поле From:
$mail->Password = $password; // ваш пароль;

// формируем письмо

// от кого: это поле должно быть равно вашему email иначе будет ошибка
$mail->setFrom($yourEmail, 'Hvids Hvids');

// кому - получатель письма
//$mail->addAddress('info@profpromeco,pro', 'BOSS');  // кому
$mail->addAddress('info@profpromeco.pro', 'BOSS');  // кому
$mail->Subject = 'Request Site';  // тема письма

$mail->msgHTML("<html><body>
				<h1>Привет, BOSS, Заявка от $name </h1>
				<p>Номер телефона. Перезвонить $telephone </p>
				</html></body>");

if ($name != '' and $telephone != '') {
    if ($mail->send()) { // отправляем письмо
        echo 'Письмо отправлено!';
    } else {
        echo 'Ошибка: ' . $mail->ErrorInfo;
    } $mail->send();
}


header("Location: ./index.php");
?>