<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Einloggen</title>
	<link rel="stylesheet" href="Design-PHP.css" type="text/css">
</head>
<body>
	<div class="header">
		<h2>Einloggen</h2>
	</div>
	
	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>E-Mail</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Passwort</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Einloggen</button>
		</div>
		<p>
			Noch kein Konto? <a href="register.php">Registrieren</a>
		</p>
	</form>
</body>
</html>