<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrierung</title>
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
			<nav>
				<ul>
					<li><a href="../HTML/New Plan.html">New Plan</a></li>
					<li><a href="../HTML/My Plans.html">My Plans</a>
					</li>
					<li><a href="../HTML/Training.html">Training</a>
					</li>
					<li><a href="../HTML/System.html">System</a>
					</li>
				</ul>
			</nav>
			<div class="navigation">
				<ul>
					<li><a href="../HTML/New Plan.html">New Plan</a></li>
					<li><a href="../HTML/My Plans.html">My Plans</a>
						<ul>
							<li><a href="../HTML/My Plans/changePlan.html">Plan ändern</a></li>
							<li><a href="../HTML/My Plans/Planloeschen.html">Plan löschen</a></li>
						</ul>
					</li>
					<li><a href="../HTML/Training.html">Training</a>
						<ul>
							<li><a href="../HTML/Training/Fettreduzierung.html">Fettreduzierung</a></li>
							<li><a href="../HTML/Training/Ausdauersteigerung.html">Ausdauersteigerung</a></li>
							<li><a href="../HTML/Training/Kraftausbau.html">Kraftausbau</a></li>
							<li><a href="../HTML/Training/Muskelaufbau.html">Muskelaufbau</a></li>
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
			<h1>Registrierung</h1>
			<fieldset class="signup">
				<form method="post" action="register.php">
					<!-- Fehlermeldungen werden hier angezeigt-->
					<?php include('errors.php'); ?>
					<div class="input-group">
						<label>Name:</label><br>
						<input type="text" name="nachname">
					</div>
					<div class="input-group">
						<label>Vorname:</label><br>
						<input type="text" name="vorname">
					</div>
					<div class="input-group">
						<label>E-Mail:</label><br>
						<input type="email" name="email">
					</div>
					<div class="input-group">
						<label>PLZ:</label><br>
						<input type="text" name="plz">
					</div>
					<div class="input-group">
						<label>Ort:</label><br>
						<input type="text" name="ort">
					</div>
					<div class="input-group">
						<label>Passwort:</label><br>
						<input type="password" name="password">
					</div>
					<div class="input-group">
						<label>Passwort wiederholen:</label><br>
						<input type="password" name="againpassword">
					</div>
					<div class="input-group"><br>
						<button type="submit" name="register" class="btn">Registrieren</button>
					</div>
					<p>
						Schon Registriert? <a href="login.php">Sign in</a>
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