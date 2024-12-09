<?php
ob_start();
session_start();
$title = 'Куки и сессии';
require_once 'companents/header.php';
?>
<h1>Куки и сессии в PHP</h1>
<?php
$user_name = 'Alex';
// setcookie("user_name", $user_name, time() + 180);
// print_r($_COOKIE);
// setcookie("user_name", $user_name, time() - 180);
// echo $_COOKIE['user_name'];

// $_SESSION['user_name'] = $user_name;

// unset($_SESSION['user_name']);
// session_destroy();

if($_SESSION['user_name'] == 'Alex')
	echo 'Да, сессия установлена!';
else
	echo 'Сессия не установлена!';

require_once 'companents/footer.php';
ob_end_flush();
?>
