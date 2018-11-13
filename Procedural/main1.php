<?php
if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true) {
	header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Main User Page</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1">
</head>
<body>
	<p>&nbsp;</p>
	<p><a href="logout.php">Logout</a></p>
</body>
</html>