<!DOCTYPE html>
<html>
	<head>
	<title> COURS PHP / MYSQL </title>
	<meta charset= 'utf-8'>
	</head>
	<body>
	<h1>Base de données MySQL</h1>
	
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		
		$conn = new mysqli($servername,$username, $password);
		
		if($conn -> connect_error){
			die("Erreur : " . $conn->connect_error);
			
		}
		echo "Connexion réussie";
		
		//on ferme la connexion
		$conn->close();
	?>
	<body>
</html>