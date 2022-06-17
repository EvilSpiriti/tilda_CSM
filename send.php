<?php
$name = $_POST['Name'];
$phone = $_POST['Phone'];
$service = $_POST['Service'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$service = htmlspecialchars($service);

$name = urldecode($name);
$phone = urldecode($phone);
$service = urldecode($service);

$name = trim($name);
$phone = trim($phone);
$service = trim($service);

if (mail("14052001lvv@gmail.com", "Заявка с сайта", "Имя: ".$name.". Телефон: ".$phone. ". Интересующая услуга: ". $service ,"From: csm@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>