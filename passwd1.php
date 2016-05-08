 <?php session_start();
	$bdd1 = new PDO('mysql:host=localhost;dbname=erp', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
						$reponse1 = $bdd1->query("SELECT password AS password FROM connexion WHERE login = '".$_SESSION['nom']."';");
						
						
						if($reponse1 != NULL)
						{
							$donnees1 = $reponse1->fetch();
							
							
							if($donnees1['password'] == $_POST['Mot_de_passe_old'] && $donnees1['password'] != "")
							{
								$reponse = $bdd1->query("UPDATE connexion SET password = '".$_POST['Mot_de_passe_new']."' WHERE login = '".$_SESSION['nom']."' ;");
								echo "Mot de passe changé";
								
							}
							else
							{
								echo "Mot de passe actuel non vérifié";
							}
							
						}

 ?>

<?php
			
					try
					{
						
						$bdd = new PDO('mysql:host=localhost;dbname=erp', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
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
		<script src="jquery.js"></script>
		<script src="bootstrap.js"></script>
		<script src="tab.js"></script >
	</head>
	<body>
		<header>
			<img src="head_bar.png">
		</header>
		<nav>
			<ul>
				<li><a href="http://127.0.0.1/ERP/etudes.php">Etudes en cours</a></li>
				<li><a href="http://127.0.0.1/ERP/ajouter.php">Ajouter une étude</a></li>
				<li><a href="http://127.0.0.1/ERP/rechercher.php">Rechercher une étude</a></li>
				<li><a href="http://127.0.0.1/ERP/historique.php">Historique des modifications</a></li>
				<li><a href="http://127.0.0.1/ERP/historique_connexions.php">Historique des connexions</a></li>
				<li><a href="http://127.0.0.1/ERP/deconnexion.php">Déconnexion</a></li>
				<li><a href="http://127.0.0.1/ERP/passwd.php">Changer de mot de passe</a></li>
				
			</ul>
		</nav>
		<div class="col-md-6 col-md-offset-3">
			<p>
				<form method="post" action="passwd1.php" class="col-md-6 col-md-offset-3">
				<legend>Changer de mot de passe </legend >
					<label for="Nom">Mot de passe actuel : </label>
					<input type="password" name="Mot_de_passe_old" class="form-control" />
					<label for="Mot_de_passe">Nouveau mot de passe : </label>
					<input type="password" name="Mot_de_passe_new" class="form-control" />
					<input type="submit" value="Envoyer" class="btn btn-primary">
				</form>
		</body>
</html>