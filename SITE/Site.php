<?php
try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ffacture','root',''/*,array(PDO::ATTR_ERRMODE=>ERRMODE_EXEPTION)*/);
	}
	catch (Exeption $e)
	{
		die('Erreur : '. $e->getMessage());
	}
	include 'html.php';
	

	if(isset($_POST['Choix'])){
		if($_POST['Choix']=='Client'){
		
			$reponse=$bdd->query('SELECT * FROM client');
			?>
			<table>
			<tr>
			<th>Numeros Client</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Adresse</th>
			<th>Code Postal</th>
			<th>Ville</th>
			<th>Pays</th>
			</tr>
			<?php
			
			
			while($donn�e = $reponse->fetch()){
				
				echo 
				'<tr>'.
					'<td>'.$donn�e['NumClient'].'</td>'.
					'<td>'.$donn�e['NomClient'].'</td>'.
					'<td>'.$donn�e['PrenomClient'].'</td>'.
					'<td>'.$donn�e['AdresseClient'].'</td>'.
					'<td>'.$donn�e['Cp'].'</td>'.
					'<td>'.$donn�e['VilleClient'].'</td>'.
					'<td>'.$donn�e['PaysClient'].'</td>'.
					'<td>'.
						'<form action="ModifClient.php" method="POST">
							<input type="radio" name="numcli" value="'.$donn�e['NumClient'].'" checked />
							<input type="submit" name="Supprimer" value="Supprimer" />
						</form>'.
					'</td>'.
				'</tr>';
			}
			
			?></table><?php
			
			$reponse->closeCursor();
			
			
			echo '<br/>';
		}
		
		if($_POST['Choix']=='Facture'){
			$reponse=$bdd->query('SELECT * FROM facture');
			
			echo '<table>
			<tr>
			<th>Numeros Client</th>
			<th>Numeros Factures</th>
			<th>Date Factures</th>
			</tr>';
			
			while($donn�e = $reponse->fetch()){
				echo 
				'<tr>'.
				'<td>'.$donn�e['NumClient'].'</td>'.
				'<td>'.$donn�e['NumFacture'].'</td>'.
				'<td>'.$donn�e['DateFacture'].'</td>'.
				'<td>'.
				'<form action="ModifClient.php" method="POST">
				<input type="radio" name="numcli" value="'.$donn�e['NumClient'].'"checked>
				<input type="submit" name="Supprimer" value="Supprimer"></form>'.'</td>'.
				'</tr>';
			}
			
			echo '</table>';
			
			$reponse->closeCursor();
			
			echo '<br/>';
		}
		
		if($_POST['Choix']=='Detail'){
			$reponse=$bdd->query('SELECT * FROM d_facture');
			
			echo '<table>
			<tr>
			<th>Numeros Factures</th>
			<th>Numeros Produit</th>
			<th>Quantit�</th>
			</tr>';
			
			while($donn�e = $reponse->fetch()){
				echo 
				'<tr>'.
				'<td>'.$donn�e['NumFacture'].'</td>'.
				'<td>'.$donn�e['NumProduit'].'</td>'.
				'<td>'.$donn�e['Qte'].'</td>'.
				'</tr>';
			}
			
			echo '</table>';
			
			$reponse->closeCursor();
			
			echo '<br/>';
		}
		
		if($_POST['Choix']=='Produit'){
			$reponse=$bdd->query('SELECT * FROM produits');
			
			echo '<table>
			<tr>
			<th>Numeros Produit</th>
			<th>Descriptif</th>
			<th>Prix Unitaire HT</th>
			</tr>';
			
			while($donn�e = $reponse->fetch()){
				echo 
				'<tr>'.
				'<td>'.$donn�e['NumProduit'].'</td>'.
				'<td>'.$donn�e['Des'].'</td>'.
				'<td>'.$donn�e['PUHT'].'</td>'.
				'</tr>';
			}
			
			echo '</table>';
			
			$reponse->closeCursor();
			
			echo '<br/>';
		}
	}
	
	