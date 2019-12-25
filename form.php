<?php 
	$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
	$phone = substr(htmlspecialchars(trim($_POST['phone'])), 0, 1000);

	$to  = 'maxter0404@gmail.com';

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
			</body>
			</html>
	';
				
	$headers  =  'MIME-Version: 1.0' . "\r\n";
	$headers .=  'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .=  'To: <'.$to.'>, '."\r\n";
	$headers .=  'From: <yovvo.ru-zakaz@mail.ru>' . "\r\n";

	mail($to, $subject, $message, $headers);	
	header("Location: thanks.html");
?>