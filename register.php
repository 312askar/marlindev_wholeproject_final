<?php
session_start();
require "function.php";

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST)) {

	if ($_POST['email'] != "") {

		get_user_by_email($email);

		if (get_user_by_email($email) == false) {

			add_user($email, $password);

			set_flash_message('success', 'Регистрация успешна');

			redirect_to('page_login.php');


		}else{

			set_flash_message('danger', 'Такой email уже существует, введите другой email!');

			redirect_to('page_register.php');

		}

	}

 }


