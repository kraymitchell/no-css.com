<?php 

if($_GET['url'])
{
	$resource = "http://";

	if(stristr($_GET['url'],"https"))
	{
		$resource = "https://";
	}

	$url = explode($resource,$_GET['url']);
	$page = file_get_contents($resource.$url[1]);
	$search = array ("'<script[^>]*?>.*?</script>'si","'<style[^>]*?>.*?</style>'si","'<link[^>]*?>'si","'<object[^>]*?>.*?</object>'si");
	$replace = array ("","","","","");
	$site = preg_replace ($search, $replace, $page);
	echo $site;
}
else 
{
	die('<span style="">Hey now, I can\'t do anything without a little direction.</span>');
}
