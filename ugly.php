<?php 

if($_GET['url'])
{
	$page = file_get_contents('http://'.$_GET['url']);
//	$page = preg_replace("/.*<body[^>]*>|<\/body>.*/si", "", $page);
	$search = array ("'<script[^>]*?>.*?</script>'si","'<style[^>]*?>.*?</style>'si","'<link[^>]*?>'si","'<object[^>]*?>.*?</object>'si");
	$replace = array ("","","","","");
	$site = preg_replace ($search, $replace, $page);
	echo $site;
}

