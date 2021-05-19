<?php

$login=$_POST['login'];
$pass=$_POST['pass'];


$mysql= new mysqli('localhost','root','','reg');

$result=$mysql->query("SELECT * FROM `paydalaniwshi` WHERE `login`='$login' AND `parol`='$pass'");
$user=$result->fetch_assoc();
if(count($user)==0){
 echo "Siz dizimnen otpediniz!!!";
 exit();
}
 
setcookie('paydalaniwshi',$user['fio'], time()+3600, "/");

$mysql->close();
header ('Location: /');

?>