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
			
			
			while($donnée = $reponse->fetch()){
				
				echo 
				'<tr>'.
					'<td>'.$donnée['NumClient'].'</td>'.
					'<td>'.$donnée['NomClient'].'</td>'.
					'<td>'.$donnée['PrenomClient'].'</td>'.
					'<td>'.$donnée['AdresseClient'].'</td>'.
					'<td>'.$donnée['Cp'].'</td>'.
					'<td>'.$donnée['VilleClient'].'</td>'.
					'<td>'.$donnée['PaysClient'].'</td>'.
					'<td>'.
						'<form action="ModifClient.php" method="POST">
							<input type="radio" name="numcli" value="'.$donnée['NumClient'].'" checked />
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
			
			while($donnée = $reponse->fetch()){
				echo 
				'<tr>'.
				'<td>'.$donnée['NumClient'].'</td>'.
				'<td>'.$donnée['NumFacture'].'</td>'.
				'<td>'.$donnée['DateFacture'].'</td>'.
				'<td>'.
				'<form action="ModifClient.php" method="POST">
				<input type="radio" name="numcli" value="'.$donnée['NumClient'].'"checked>
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
			<th>Quantité</th>
			</tr>';
			
			while($donnée = $reponse->fetch()){
				echo 
				'<tr>'.
				'<td>'.$donnée['NumFacture'].'</td>'.
				'<td>'.$donnée['NumProduit'].'</td>'.
				'<td>'.$donnée['Qte'].'</td>'.
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
			
			while($donnée = $reponse->fetch()){
				echo 
				'<tr>'.
				'<td>'.$donnée['NumProduit'].'</td>'.
				'<td>'.$donnée['Des'].'</td>'.
				'<td>'.$donnée['PUHT'].'</td>'.
				'</tr>';
			}
			
			echo '</table>';
			
			$reponse->closeCursor();
			
			echo '<br/>';
		}
	}
	
	