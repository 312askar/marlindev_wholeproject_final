<?php
 session_start();
 require "function.php";

 $name = $_POST['name'];
 $job = $_POST['job'];
 $tel = $_POST['tel'];
 $address = $_POST['address'];

 edit_user_basic_inf($name, $job, $tel, $address, $_GET['id']);

 set_flash_message('success', 'Профиль успешно обновлен!');

 redirect_to('page_profile.php?id='.$_GET['id']);
