<?php 
	$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
	$phone = substr(htmlspecialchars(trim($_POST['phone'])), 0, 1000);

	$to  = 'info@ya.ru';

	// Тема сообщения
	$subject = 'Заявка (Строительство домов)';
	// Сообщение в виде HTML-формате
	$message =  '
			<html>
			<head>
			<title>'.$subject.'</title>
			</head>
			<body>
			<div style="padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px; font-weight: bold; font-size: 17px;">'.$subject.'</div>
			<div style="padding: 5px 0px 0px 0px; margin: 0px 0px 0px 0px; font-size: 14px; font-weight: 700;">Имя: <span style="font-style: italic; font-weight: 400;">'.$name.'</span></div>
			<div style="padding: 5px 0px 0px 0px; margin: 0px 0px 0px 0px; font-size: 14px; font-weight: 700;">Телефон: <span style="font-style: italic; font-weight: 400;">'.$phone.'</span></div>
			<div style="padding: 35px 0px 0px 0px; margin: 0px 0px 0px 0px; font-size: 11px; font-weight: 700;">Создано в <a href="http://yovvo.ru/" style="color: #1573b5;">Yovvo.ru</a> - <span style="font-style: italic; font-weight: 400;">разработка сайтов и лендингов</span></div>	
			</body>
			</html>
	';
				
	$headers  =  'MIME-Version: 1.0' . "\r\n";
	$headers .=  'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .=  'To: <'.$to.'>, '."\r\n";
	$headers .=  'From: <maxter0404@gmail.com' . "\r\n";

	mail($to, $subject, $message, $headers);	
	echo 'Спасибо! Ваше письмо отправлено.'; 
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>