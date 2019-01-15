<?php include('server.php');

	//wenn die Benutzer nicht angemeldet sind können sie drauf nicht zugreifen
	if (empty($_SESSION['email'])) {
		header('location: login.php');
	}
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" href="Design-PHP.css" type="text/css">
</head>
<body>

<div class="header">
	<h2>Profil</h2>
</div>
<div class="content">
  	<!-- Nachricht das man Angemeldet ist -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- Looged in Benutzer informationen -->
    <?php  if (isset($_SESSION['vorname'])) : ?>
    	<p>Willkommen <?php echo $_SESSION['vorname']; ?></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Ausloggen</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>