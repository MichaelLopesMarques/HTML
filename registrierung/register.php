<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrierung</title>
	<link rel="stylesheet" href="Design-PHP.css" type="text/css">
</head>
<body>
<div class="navlogo">
	<a href="../HTML/Startseite.html">
			<img src="Bilder/MyTimeLogo.png" alt="MyTime" title="MyTime" class="logo" height="auto" width="auto">
			</a>
</div>
	<div class="header">
		<h2>Registrierung</h2>
	</div>
	
	<form method="post" action="register.php">
		<!-- Fehlermeldungen werden hier angezeigt-->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Name:</label>
			<input type="text" name="nachname">
		</div>
		<div class="input-group">
			<label>Vorname:</label>
			<input type="text" name="vorname">
		</div>
		<div class="input-group">
			<label>E-Mail:</label>
			<input type="email" name="email">
		</div>
		<div class="input-group">
			<label>PLZ:</label>
			<input type="text" name="plz">
		</div>
		<div class="input-group">
			<label>Ort:</label>
			<input type="text" name="ort">
		</div>
		<div class="input-group">
			<label>Passwort:</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<label>Passwort wiederholen:</label>
			<input type="password" name="againpassword">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Registrieren</button>
		</div>
		<p>
			Schon Registriert? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>