<?php 
	require_once 'header.php';

	$page = isset($_GET['page']) ? $_GET['page']:'main';
	$pages =['about', 'main','contact', 'products'];

	if(in_array($page, $pages)) {
		require_once $page.'.php';
	}

	include 'form.php';
	include 'show.php';

	require_once 'footer.php';
?>