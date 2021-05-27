<?php
session_start();
require "function.php";

$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$old_user_inf = get_user_by_id($_GET['id']);

if ($password != $confirm_password) {

	set_flash_message('danger', 'Введенные пароли не совпадают');
	redirect_to('security.php?id='.$_GET['id']);

}
elseif (($password == $confirm_password && $email == $old_user_inf['email']) || ($password == $confirm_password && $email != $old_user_inf['email'] && empty(have_same_email($email, $_GET['id'])))) {

	edit_credentials($_GET['id'], $email, $password);
	set_flash_message('success', 'Профиль успешно обновлен!');
	redirect_to('page_profile.php?id='.$_GET['id']);

}
else{

	set_flash_message('danger', 'Введенный email уже занят другим пользователем');
	redirect_to('security.php?id='.$_GET['id']);

}