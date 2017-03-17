<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ffacture','root',''/*,array(PDO::ATTR_ERRMODE=>ERRMODE_EXEPTION)*/);
	}
	catch (Exeption $e)
	{
		die('Erreur : '. $e->getMessage());
	}
	
	$reponse=$bdd->query('SELECT User FROM compte');
	
	$test=0;
	
	while($req = $reponse->fetch()){
		$tamp=$req['User'];
		echo ''.$tamp.'<br/>';
		
		if(($_POST['user'])==($tamp)){
			$test=1;
		}
	}
	
	if($test==1){
		echo 'Utilisateur deja utiliser<br/>';
		header('Location:inscription.php');
	}else{
	
	$Username=$_POST['user'];
	$Userpass= password_hash ( $_POST['password'], PASSWORD_BCRYPT,['cost' => 12]);
	
	//echo ''.$Username.','.$Userpass.'';
	
	$req = $bdd-> prepare('INSERT INTO compte(User,Password) VALUES(:User,:Password)');
	$req->execute(array('User' => $Username,
                   'Password' => $Userpass
                   ));
	
	//$req->execute(array('User'=>$Username));
	$reponse->closeCursor();
	
		echo('Compte crée avec succes');
		header('Location:connexion.php');
	}
	?>