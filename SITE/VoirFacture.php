<?php
try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ffacture','root',''/*,array(PDO::ATTR_ERRMODE=>ERRMODE_EXEPTION)*/);
	}
	catch (Exeption $e)
	{
		die('Erreur : '. $e->getMessage());
	}

if(!isset($_POST['cliinfo'])){
				
			$reponse=$bdd->query('SELECT * FROM client');
			
			while($donnée = $reponse->fetch()){
				
				}
			}
			$reponse->closeCursor();
		}
?>