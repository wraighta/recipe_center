<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="mystyle.css" >

	<title>The Recipe Center</title>

</head>

<body>


<header>
<?php include("header.inc.php"); ?>
</header>

<div id="content">

	<div id="nav">
		<?php include("nav.inc.php"); ?>
	</div>

	<div id="main">
		<?php
			if (!isset($_REQUEST['content']))
				include("main.inc.php");
			else
			{
				$content = $_REQUEST['content'];
				$nextpage = $content . ".inc.php";
				include($nextpage);
			}
		?>
	</div>

	<div id="news">
		<?php include("news.inc.php"); ?>
	</div>

</div>

<footer>
	<?php include("footer.inc.php"); ?>
</footer>

</body>

</html>