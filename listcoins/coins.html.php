<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>List of Coins</title>
		<meta http-equiv="content-type"
			content="text/html; charset=utf-8"/>
	</head>
	<body>
		<p>Here are all the coins in the database:</p>
			<?php foreach ($coins as $coin): ?>
			  <blockquote><p>
			  <?php echo htmlspecialchars($coin, ENT_QUOTES, 'UTF-8'); ?>
		  </p></blockquote>
		<?php endforeach; ?>
	</body>
</html>
