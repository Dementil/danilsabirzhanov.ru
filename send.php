<?php
$userName = $_POST['userName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$userName = htmlspecialchars($userName);
$email = htmlspecialchars($email);
$email = htmlspecialchars($email);
$email = htmlspecialchars($email);
$userName = urldecode($userName);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);
$userName = trim($userName);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);


if (mail("dementil89@rambler.ru", "Заявка с сайта", "ФИО:".$userName.". E-mail: ".$email ,
"Сообщение:" .$message. .$phone, "\r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>
