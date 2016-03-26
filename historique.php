<?php session_start();
	$bdd1 = new PDO('mysql:host=mySQL5-3.perso;dbname=mepjejoomla', 'mepjejoomla', '392144JE', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
						$reponse1 = $bdd1->query("SELECT password AS password FROM connexion WHERE login = '".$_SESSION['nom']."';");
						
						
						if($reponse1 != NULL)
						{
							$donnees1 = $reponse1->fetch();
							
							
							if($donnees1['password'] == $_SESSION['password'] && $donnees1['password'] != "")
							{
								
								
							}
							else
							{
								header('Location: index.php');
							}
							
						}

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8" />
		<link rel="stylesheet" href="style.css">
		<title> Titre </title>
		<link href ="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<header>
			<img src="head_bar.png">
		</header>
		<nav>
			<ul>
				<li><a href="http://mep-je.fr/ERP2/etudes.php">Etudes en cours</a></li>
				<li><a href="http://mep-je.fr/ERP2/ajouter.php">Ajouter une étude</a></li>
				<li><a href="http://mep-je.fr/ERP2/rechercher.php">Rechercher une étude</a></li>
				<li><a href="http://mep-je.fr/ERP2/historique.php">Historique des modifications</a></li>
				<li><a href="http://mep-je.fr/ERP2/historique_connexions.php">Historique des connexions</a></li>
				<li><a href="http://mep-je.fr/ERP2/deconnexion.php">Déconnexion</a></li>
				<li><a href="http://mep-je.fr/ERP2/passwd.php">Changer de mot de passe</a></li>
				
			</ul>
		</nav>
		<section>
			<p>
			
				<table class="table table-bordered table-striped table-condensed">
					<caption>
						<h2>Historique des modifications</h2>
					</caption>
					<thead>
						<th> Nom </th>
						<th> Action </th>
						<th> Date </th>
						
					</thead>
					<tbody>
				<?php
					try
					{
						$bdd = new PDO('mysql:host=mySQL5-3.perso;dbname=mepjejoomla', 'mepjejoomla', '392144JE', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
						
						
						
					}
					catch (Exception $e)
					{
						echo "coucou";
					}
				
						$Tableau = $bdd->query('SELECT * FROM historique ORDER BY Date DESC');
						
						$Rep_Nom = $bdd->query('SELECT login AS Nom FROM historique ORDER BY Date DESC ');
						
						$Rep_Date = $bdd->query('SELECT Date AS Date FROM historique ORDER BY Date DESC ');
						
						$Rep_Action = $bdd->query('SELECT Action AS Action FROM historique ORDER BY Date DESC');
				
						
					while($Tableau->fetch())
					{	
						
						$Nom = $Rep_Nom->fetch();
						$Action = $Rep_Action->fetch();
						$Date = $Rep_Date->fetch();
						
						
						echo "<tr>";
							echo "<td>".$Nom['Nom']."</td>";
							echo "<td>".$Action['Action']."</td>";
							echo "<td>".$Date['Date']."</td>";
							
						echo "</tr>";
					}		
						?>	
						
					</tbody>
				</table>
			</p>
			
		</section>
		<br />
		
	</body>
</html>