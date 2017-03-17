<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Traitement Formulaire</title>
		<link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
	</head>
	<body>
	Connexion<br/>
			<form action="Verif.php" method="POST">
			<label for="user">user : </label><input type="text" name="user"required/>
			<br/>
			<br/>
			<label for="password">password : </label><input type="password" name="password"required/>
			<br/>
			<br/>
			<br/>
			<br/>		
			<p>
			<input type="submit" value="Connexion"/>
			</p>
			</form>
	</body>