<?php

if (isset($_POST)) {
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $message = "Заявка от $name номер $telephone";
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require $_SERVER["DOCUMENT_ROOT"].'/src/Exception.php';
require $_SERVER["DOCUMENT_ROOT"].'/src/PHPMailer.php';
require $_SERVER["DOCUMENT_ROOT"].'/src/SMTP.php';

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

//$mail->Username     = 'hvids@yandex.ru'; // Если почта для домена, то логин это полный адрес почты
//$mail->Password     = 'powmqrzfzzlzwuyp';


// формируем письмо

// от кого: это поле должно быть равно вашему email иначе будет ошибка
$mail->setFrom($yourEmail, 'Hvids Hvids');

// кому - получатель письма
$mail->addAddress('danchicscomp@gmail.com', 'Имя Получателя');  // кому

$mail->Subject = 'Проверка';  // тема письма

$mail->msgHTML("<html><body>
				<h1>Проверка связи!</h1>
				<p>Это тестовое письмо.</p>
				</html></body>");


$mail->send();


header("Location: ./index.php");
?>