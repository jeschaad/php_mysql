<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Welcome</title>
		<meta http-equiv="content-type"
			content="text/html; charset=utf-8"/>
	</head>
	<body>
		<?php
			$firstname = $_REQUEST['firstname'];
			$lastname = $_REQUEST['lastname'];
			if ( $firstname == 'Jim' and $lastname == 'Schaad' ) {
				echo 'All systems are operating within normal parameters.';
			}
			else {
				echo 'Welcome to our website, ' . 
				htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' . 
				htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
			}
		?>
	</body>
</html>
