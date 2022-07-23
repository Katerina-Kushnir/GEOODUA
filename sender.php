<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];

	$to = "Geoodua@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Телефон: $phone"; 	
	mail($to, $subject, $msg);

?>

<p>Заявка успешно отправлена</p>
