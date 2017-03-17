<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ffacture','root',''/*,array(PDO::ATTR_ERRMODE=>ERRMODE_EXEPTION)*/);
	}
	catch (Exeption $e)
	{
		die('Erreur : '. $e->getMessage());
	}
	
	$test=0;
	
	$reponse =$bdd->query('SELECT User,Password FROM compte');
	
	while($req = $reponse->fetch()){
		if($test!=1){
			$_SESSION['user']=$req['User'];
			$_SESSION['pass']=$req['Password'];
			
			if(($_SESSION['user']==$_POST['user'])&&(password_verify($_POST['password'],$_SESSION['pass']))){	
				header('Location:Site.php');
				$test=1;
			}else{
				echo 'Nom d'.'utilisateur ou mot de passe invalide<br/>';
				header('Location:connexion.php');
			}
		}
	}

	$reponse->closeCursor();
	
	
	

	?>