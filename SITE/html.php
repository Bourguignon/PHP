<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Traitement Formulaire</title>
		<link rel="stylesheet" href="Site.css">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<p>Quel table voulez vous consulter ?<br/></p>
			<form action="Site.php" method="POST">
			
			<SELECT name="Choix" size="1">
			<OPTION>Client
			<OPTION>Facture
			<OPTION>Detail
			<OPTION>Produit
			</SELECT>
			<input type="submit" value="Rechercher">
		</header>
	</body>