<?php

$erorMessage = '';
if (isset($_POST ['textUserId']) && 
isset($_POST['textPassword'])){
	//Cek Username and Password
	if ($_POST['textUserId'] === 'admin' && 
$_POST ['textPassword'] ==== '1234'){
		$_SESSION['basic_is_logged_in'] = true;

	header('Location : home.php');
	exit;
	} else {
		$erorMessage = 'Sorry, wrong username / password';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html charset=iso-8859-1">
	<title>Login From</title>
	<style type="text/css">
		.style5{
			color: blue;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php if ($erorMessage !=''){
		?> <p> <div align="center"><span class="style5"><?php echo $erorMessage; ?>
		</span></p>
		<?php
	} ?>
</div>
<form action="" method="post" name="frmLogin" id="frmLogin"><table width="400" border="1" align="center">
	<tr>
		<th width="160" scope="cool"><div align="left"><input type="text" name="textUserId" id="textUserId">
		</div></th>
	</tr>
	<tr>
		<td><div align="left">Password</div></td>
		<td><div align="left"><input type="password" name="textPassword" id="textPassword">
		</div></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="btnLogin" id="btnLogin" value="Login"></td>
	</tr>
</table>
</form>
</body>
</html>