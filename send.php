<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$descr = $_POST['descr'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$descr = htmlspecialchars($descr);

$name = urldecode($name);
$phone = urldecode($phone);
$email = urldecode($email);
$descr = urldecode($descr);

$name = trim($name);
$phone = trim($phone);
$email = trim($email);
$descr = trim($descr);

if (mail("psyhodelhs@gmail.com",
"Новое письмо с сайта",
"Имя: ".$name."\n".
"Телефон: ".$phone."\n".
"Email: ".$email."\n".
"Описание товара: ".$descr,
"From: ddoctavo@mail.ru \r\n")
) {
   echo ('Письмо успешно отправлено!');
}

else {
   echo ('Есть ошибки! Проверьте данные...');
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
</script>
</head>
<body>
<h1>Спасибо! Мы свяжемся с вами!</h1>
</body>
</html>