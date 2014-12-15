<!DOCTYPE html>
<!-- saved from url=(0039)http://getbootstrap.com/examples/cover/ -->
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>The Web Without The Facelift</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link href="css/cover.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a href="/"><h3 class="masthead-brand"><span class="glyphicon glyphicon-ban-circle"></span> No CSS</h3></a>
        </div>
        <ul class="nav masthead-nav">
          <li><a href="#">Show Me Another</a></li>
        </ul>
      </div>
    </nav>
    
    <section class="container-fluid no-padding">
      <div style="background:#fff; color: black; overflow: scroll;">
		<?php 
			if(!empty($_GET['url']))
			{
				$page = file_get_contents('http://'.$_GET['url']);
				$search = array ("'<script[^>]*?>.*?</script>'si","'<style[^>]*?>.*?</style>'si","'<link[^>]*?>'si","'<object[^>]*?>.*?</object>'si");
				$replace = array ("","","","","");
				$site = preg_replace ($search, $replace, $page);
				echo $site;
			}
		?>
		</div>
    </section>

    <footer class="mastfoot navbar-fixed-bottom container">
        <div class="inner">
          <p>Concept by <a href="https://twitter.com/kraymitchell" target="_blank">@kraymitchell</a>.
        </div>
    </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="js/docs.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript">
  var clicky_site_ids = clicky_site_ids || [];
  clicky_site_ids.push(100799826);
  (function() {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = '//static.getclicky.com/js';
    ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
  })();
  </script>
  <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100799826ns.gif" /></p></noscript>
</body>
</html>
