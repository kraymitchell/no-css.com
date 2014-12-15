<?php 

if($_GET['url'])
{
	$page = file_get_contents('http://'.$_GET['url']);
	$search = array ("'<script[^>]*?>.*?</script>'si","'<style[^>]*?>.*?</style>'si","'<link[^>]*?>'si","'<object[^>]*?>.*?</object>'si");
	$replace = array ("","","","","");
	$site = preg_replace ($search, $replace, $page);
	echo $site;
}
