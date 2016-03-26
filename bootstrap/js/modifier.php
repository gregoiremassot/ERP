<?php session_start();
	$bdd1 = new PDO('mysql:host=mySQL5-3.perso;dbname=mepjejoomla', 'mepjejoomla', '392144JE', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
						$reponse1 = $bdd1->query("SELECT password AS password FROM connexion WHERE login = '".$_SESSION['nom']."';");
						
						
						if($reponse1 != NULL)
						{
							$donnees1 = $reponse1->fetch();
							
							
							if($donnees1['password'] == $_SESSION['password'])
							{
								
								
							}
							else
							{
								header('Location: index.php');
							}
							
						}

 ?>

<?php
			
					try
					{
						
						$bdd = new PDO('mysql:host=mySQL5-3.perso;dbname=mepjejoomla', 'mepjejoomla', '392144JE', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						if($_GET['id'] != NULL)
						{
						$reponse = $bdd->query("SELECT * FROM document WHERE id=".$_GET['id']."");
					$donnes = $reponse->fetch(); 
					}
					}
					catch (Exception $e)
					{
						echo $e;
					}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8" />
		<link rel="stylesheet" href="style.css">
		<title> Titre </title>
		<link href ="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="jquery.js"></script >
		<script src="bootstrap.js"></script >
	</head>
	<body>
		<header>
			<img src="head_bar.png">
		</header>
		<nav>
			<ul>
				<li><a href="http://mep-je.fr/test/etudes.php">Etudes en cours</a></li>
				<li><a href="http://mep-je.fr/test/ajouter.php">Ajouter une étude</a></li>
				<li><a href="http://mep-je.fr/test/rechercher.php">Rechercher une étude</a></li>
				<li><a href="http://mep-je.fr/test/historique.php">Historique des modifications</a></li>
			</ul>
		</nav>
		<div class="col-md-6 col-md-offset-3">
			<p>
				<form method="post" action="modifier1.php?id=<?php echo $_GET['id'];?>">
				<legend>Ajouter une étude</legend >
					<label for="Nom">Nom de l'étude </label>
					<textarea name="Nom" class="form-control" rows="1" cols="20"><?php echo $donnes['Name'];?></textarea>
					
					<label for="Commercial">Commercial : </label>
					<textarea name="Commercial" class="form-control" rows="1" cols="20"><?php echo $donnes['Commercial'];?></textarea>
					
					<label for="Suiveur">Suiveur : </label>
					<textarea name="Suiveur" class="form-control" rows="1" cols="20"><?php echo $donnes['Suiveur'];?></textarea>
					
					<label for="TypeClient">Type de Client : </label>
					<textarea name="TypeClient" class="form-control" rows="1" cols="20"><?php echo $donnes['TypeClient'];?></textarea>
					
					<label for="Contact">Contact : </label>
					<textarea name="Contact" class="form-control" rows="1" cols="20"><?php echo $donnes['Contact'];?></textarea>
					
					<label for="Signataire">Signataire : </label>
					<textarea name="Signataire" class="form-control" rows="1" cols="20"><?php echo $donnes['Signataire'];?></textarea>
					
					<label for="Payeur">Payeur : </label>
					<textarea name="Payeur" class="form-control" rows="1" cols="20"><?php echo $donnes['Payeur'];?></textarea>
					
					<label for="Contexte">Contexte :</label>
					<textarea name="Contexte" class="form-control" rows="10" cols="20"><?php echo $donnes['Contexte'];?></textarea>
					
					<label for="Problematique">Problématique :</label>
					<textarea name="Problematique" class="form-control" rows="10" cols="20"><?php echo $donnes['Problematique'];?></textarea>
					
					<label for="Objectif">Objectif :</label>
					<textarea name="Objectif" class="form-control" rows="10" cols="20"><?php echo $donnes['Objectif'];?></textarea>
					
					<label for="Domaine">Domaine : </label>
					
					<select name="Domaine" class="form-control">
					<option><?php echo $donnes['Domaine'];?></option>
					<option>Informatique</option>
					<option>Mécanique</option>
					<option>Traduction Technique</option>
					<option>Génie Industriel</option>
					<option>Procédés & Energie</option>
					<option>Environnement</option>
					<option>Mathématiques</option>
					<option>Ingéniérie & Santé</option>
					</select>
					
					
		
					
					<label for="BienUneEtude">Pourquoi est-ce bien une étude ? :</label>
					<textarea name="BienUneEtude" class="form-control" rows="10" cols="20"><?php echo $donnes['BienUneEtude'];?></textarea>
					
					<label for="Analyse">En quoi l’analyse et la technicité sont suffisantes ? :</label>
					<textarea name="Analyse" class="form-control" rows="10" cols="20"><?php echo $donnes['Analyse'];?></textarea>
					
					<label for="MaitreOeuvre">MEP reste-t-elle bien maître d’œuvre ? :</label>
					<textarea name="MaitreOeuvre" class="form-control" rows="10" cols="20"><?php echo $donnes['MaitreOeuvre'];?></textarea>
					
					<label for="Logiciels">L’étude nécessite-t-elle des logiciels spécifiques ? Si oui avons-nous les licences commerciales ? :</label>
					<textarea name="Logiciels" class="form-control" rows="10" cols="20"><?php echo $donnes['Logiciels'];?></textarea>
					
					<label for="Cnil">Y a-t-il des bases de données nominatives à déclarer à la CNIL ? :</label>
					<textarea name="Cnil" class="form-control" rows="10" cols="20"><?php echo $donnes['Cnil'];?></textarea>
					
					<input type="submit" value="Envoyer" class="btn btn-primary">
				</form>
				</div>
					
			</p>
			
		
		<br />
		
	</body>
</html>