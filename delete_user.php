<?php
session_start();
require "function.php";

delete_user_by_id($_GET['id']);

set_flash_message('success', 'Пользователь удален!');

if($_GET['id'] == $_SESSION['logged-in-id']) {

	logout();
	redirect_to('page_register.php');

}else redirect_to('users.php');