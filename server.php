<?php 
if (empty($_POST['login'])) {
	echo 'Укажите логин';
} elseif (empty($_POST['password'])) {
	echo 'Укажите пароль';
} else {
	echo 'Авторизация...';
}
?>