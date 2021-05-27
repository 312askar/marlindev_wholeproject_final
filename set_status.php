<?php
session_start();
require "function.php";

$userStatus = $_POST['status'];

set_user_status($userStatus, $_GET['id']);

set_flash_message('success', 'Профиль успешно обновлен!');

redirect_to('page_profile.php?id='.$_GET['id']);
