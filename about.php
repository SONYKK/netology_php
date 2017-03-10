<?php 

header('Content-Type: text/html; charset=utf-8');
$name = "Александр";
$age = "24";
$email = "alexvasenev@yandex.ru";
$city = "Москва";
$aboutMe = "Студент, программист PHP";
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>домашнее задание 1</title>
  </head>
  <body>

 	<p>Имя:	<?=	 $name ?></p>
 	<p>Возраст:	<?=	 $age ?></p>
 	<p>Адрес электронной почты: <a href="mailto:<?= $email ?>"><?= $email ?></a></p>
 	<p>Город:	<?=	 $city ?></p>
 	<p>О себе:	<?=	 $aboutMe ?></p>
		
 </body>
</html>