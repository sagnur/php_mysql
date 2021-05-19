<?php

$login=$_POST['login'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$borth=$_POST['borth'];
$pol=$_POST['pol'];



$mysql= new mysqli('localhost','root','','reg');

$mysql->query("INSERT INTO `paydalaniwshi`(`fio`, `pochta`, `login`, `parol`, `pol`, `borth`) 
VALUES('$name', '$email', '$login','$pass','$pol','$borth')");

$mysql->close();
header ('Location: /');

/*if($mysql)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');*/





?>