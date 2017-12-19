<?php 
if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>MindCourager - <?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/css/staff.css');?> "/>
  </head>

  <body>

	<header>
		<h1>MindCourager - Staff Area</h1>
	</header>

	<navigation>
		<ul>
			<li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
		</ul>
	</navigation>