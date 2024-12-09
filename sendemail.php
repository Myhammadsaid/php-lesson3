<?php
	$title = 'Отправка почты с сайта';
	require_once 'companents/header.php';
?>
<h1>Отправка почты с сайта</h1>
<?php
	$message = 'Сообщение';
	$to = 'admin@itproger.com';
	$from = 'example@itproger.com';
	$subject = 'Тема сообщения';

	$subject = '=?utf-8?B?'.base64_encode($subject).'?=';
	$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=urf-8\r\n";
 
	mail($to, $subject, $message, $headers);

	require_once 'companents/footer.php';
?>