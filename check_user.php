<?php if(is_not_logged_in('logged-in')) redirect_to('page_login.php');

elseif(!is_not_logged_in('logged-in') && !is_admin($_SESSION['logged-in']) && !is_author($_SESSION['logged-in-id'], $_GET['id'])){

	set_flash_message('danger', 'Можно редактировать только свой профиль!');
	redirect_to('users.php');

}
elseif((!is_not_logged_in('logged-in') && is_admin($_SESSION['logged-in'])) || (!is_not_logged_in('logged-in') && !is_admin($_SESSION['logged-in']) && is_author($_SESSION['logged-in-id'], $_GET['id']))){}