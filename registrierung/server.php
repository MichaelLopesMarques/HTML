<?php 
	session_start();
	$email = "";
	$vorname = "";
	$errors = array();
	
	//Verbindung zu der Datenbank
	$db = mysqli_connect('localhost', 'root', '', 'mytime login-daten');

	//wenn Regestieren button geklickt wird 
	if (isset($_POST['register'])){
		$nachname = mysqli_real_escape_string($db, $_POST['nachname']);
		$vorname = mysqli_real_escape_string($db, $_POST['vorname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$plz = mysqli_real_escape_string($db, $_POST['plz']);
		$ort = mysqli_real_escape_string($db, $_POST['ort']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$againpassword = mysqli_real_escape_string($db, $_POST['againpassword']);
		
		//Felder müssen ausgefüllt sein -> Fehlermeldung
		if (empty($nachname)) {
			array_push($errors, "Name erforderlich");
		}
		if (empty($vorname)) {
			array_push($errors, "Vorname erforderlich");
		}
		if (empty($email)) {
			array_push($errors, "E-Mail erforderlich");
		}
		if (empty($plz)) {
			array_push($errors, "PLZ erforderlich");
		}
		if (empty($ort)) {
			array_push($errors, "Ort erforderlich");
		}
		if (empty($password)) {
			array_push($errors, "Passwort erforderlich");
		}
		if ($password != $againpassword) {
			array_push($errors, "Beide Passwörter müssen gleich sein");
		}
		
		//wenn keine Fehler dann, Daten in der Datenbank speichern
		if (count($errors) == 0){
			$password = md5($password); //password encrypten bevor es in die Datenbank gespeichert wird
			$sql = "INSERT INTO users (nachname, vorname, email, plz, ort, password) 
				VALUES ('$nachname', '$vorname', '$email', '$plz', '$ort', '$password')";
			mysqli_query($db, $sql);
			
			
		}
				
	}
	
	//Einloggen von der Login Seite
	if (isset($_POST['login'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		
		if (empty($email)) {
			array_push($errors, "E-Mail erforderlich");
		}
		if (empty($password)) {
			array_push($errors, "Passwort erforderlich");
		}
		
		if (count($errors) == 0) {
			$password = md5($password); //Encrypt bevor das Passowort mit der Datenbank verglichen wird
			$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['vorname'] = $vorname;
				$_SESSION['success'] = "Du bist angemeldet";
				header('location: index.php'); //zur Homepage
			}else{
				array_push($errors, "Die E-Mail/Passwort is falsch");
			}
		}
	}
	
	//Ausloggen
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['vorname']);
		header('location: login.php');
	}
	
?>