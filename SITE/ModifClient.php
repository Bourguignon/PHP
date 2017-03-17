<?php
try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ffacture','root',''/*,array(PDO::ATTR_ERRMODE=>ERRMODE_EXEPTION)*/);
	}
	catch (Exeption $e)
	{
		die('Erreur : '. $e->getMessage());
	}
	
	//$reponse=$bdd->query('SELECT * FROM client');
	
	//$delete=$_POST['numcli'];
	
	//echo $delete;

	//$bdd->exec("DELETE FROM 'client' WHERE 'NumClient' = '".$_POST['numcli']."'");
	$bdd->exec("DELETE FROM client WHERE NumClient = 4");
	
	echo "ok";
	//$bdd->closeCursor();
	
	//$req->closeCursor();
	
	
	//$delete->prepare('DELETE * FROM client WHERE NumClient=');
	//$bdd->execute($delete);





?>