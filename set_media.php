<?php
session_start();
require "function.php";

upload_user_avatar('img_src', $_GET['id']);

set_flash_message('success', 'Профиль успешно обновлен');

redirect_to('page_profile.php?id='.$_GET['id']);