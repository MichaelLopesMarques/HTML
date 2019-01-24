<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>MyTime - Login</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../HTML/Design.css" type="text/css">
		<link rel="icon" type="image/png" href="../HTML/Bilder/Icon.png">
	</head>
	<body>
		<header class="header">
			<a href="../HTML/Startseite.html">
				<img src="../HTML/Bilder/MyTimeLogo.png" alt="MyTime" title="MyTime" class="logo" height="auto" width="auto">
			</a>
			<div class="login">
				<a href="http://localhost/registrierung/index.php">
					<img src="../HTML/Bilder/Login.png" alt="Login" title="Login" class="login" height="auto" width="auto">
				</a>
			</div>
			<div class="navigation">
				<ul>
					<li><a href="../HTML/New Plan.html">New Plan</a></li>
					<li><a href="../HTML/My Plans.html">My Plans</a></li>
					<li><a href="../HTML/Training.html">Training</a>
						<ul>
							<li><a href="../HTML/Training/Weightlifting.html">Weightlifting</a></li>
							<li><a href="../HTML/Training/Bodyweight.html">Bodyweight</a></li>
							<li><a href="../HTML/Training/Cardio.html">Cardio</a></li>
							<li><a href="../HTML/Training/Running.html">Running</a></li>
						</ul>
					</li>
					<li><a href="../HTML/System.html">System</a>
						<ul>
							<li><a href="../HTML/System/Kontakt.html">Kontakt</a></li>
							<li><a href="../HTML/System/Überuns.html">Über uns</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</header>
		<main class="content">
			<h1>Einloggen</h1>
			<fieldset class="signup">
				<form method="post" action="login.php">
					<!-- Fehlermeldungen werden hier angezeigt-->
					<?php include('errors.php'); ?>
					<div class="input-group">
						<label>E-Mail:</label><br>
						<input type="email" name="email">
					</div>
					<div class="input-group">
						<label>Passwort:</label><br>
						<input type="password" name="password">
					</div>
					<div class="input-group"><br>
						<button type="submit" name="login" class="btn">Einloggen</button>
					</div>
					<p>
						Noch kein Konto? <a href="register.php">Registrieren</a>
					</p>
				</form>
			</fieldset>
		</main>
		<footer class="footer">
			<h3>Jetzt Anmelden und gleich Loslegen:</h3>
			<a href="http://localhost/registrierung/index.php" >
				<button class="anmelden">Anmelden</button>
			</a>
			<h3>Unser Social Media:</h3>
			<a href="#"><span class="Facebook"></span></a>
			<a href="#"><span class="Twitter"></span></a>
			<a href="#"><span class="Instagram"></span></a>
			<a href="#"><span class="Youtube"></span></a>
			<a href="#"><span class="Google"></span></a>
			<div class="fussbereich">
				<p>©2019 by Henri Katzenberg, Michael Lopes Marques & Leon Wessel | <a href="../HTML/Quellenangabe.html">Quellenangabe</a></p>
			</div>
		</footer>
	</body>
</html>