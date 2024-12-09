<?php
	session_start();
	$title = 'Главная страница';
	require_once 'companents/header.php';
?>
	<h1>Главная страница</h1>
<?php
	// $file = fopen('text.txt', 'r');
	// $file = fopen('text.txt', 'w');
	// $file = fopen('text.txt', 'a');

	// fwrite($file, "Example text\nHello\n");

	// fclose($file);
	$filename = 'text.txt';
	$file = fopen($filename, 'r');
	$content = fread($file, filesize($filename));
	fclose($file);
	
	echo "<pre>".$content.'</pre>';
	
	file_put_contents('a.txt', "Exampe\nHello").'<br>';

	echo file_get_contents('a.txt').'<br>';

	echo file_exists("a.txt").'<br>';
	// rename('a.txt', 'new_name.txt');
	// unlink('new_name.txt');

	echo fileperms(__FILE__);

	require_once 'companents/footer.php';
?>