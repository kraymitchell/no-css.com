<?php 

if($_GET['url'])
{
	$resource = "http://";

	if(stristr($_GET['url'],"https"))
	{
		$resource = "https://";
	}

	$url = str_replace(["https://","http://"],'',$_GET['url']);
	$page = file_get_contents($resource.$url);
	if((!stristr($page,"<head>") || !stristr($page,"<body")) && $resource == "https://")
	{
		$page = file_get_contents("http://".$url);
	}
	if((!stristr($page,"<head>") || !stristr($page,"<body")) && $resource == "http://")
	{
		die('<span style="">Did you ask me to check a website or a bananna?</span>');
	}
	$search = array ("'<script[^>]*?>.*?</script>'si","'<style[^>]*?>.*?</style>'si","'<link[^>]*?>'si","'<object[^>]*?>.*?</object>'si");
	$replace = array ("","","","","");
	$site = preg_replace ($search, $replace, $page);
	echo $site;
}
else 
{
	die('<span style="">Hey now, I can\'t do anything without a little direction.</span>');
}
