<?php session_start();
	$bdd1 = new PDO('mysql:host=localhost;dbname=erp', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
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
				<li><a href="http://127.0.0.1/ERP/etudes.php">Etudes en cours</a></li>
				<li><a href="http://127.0.0.1/ERP/ajouter.php">Ajouter une étude</a></li>
				<li><a href="http://127.0.0.1/ERP/rechercher.php">Rechercher une étude</a></li>
				<li><a href="http://127.0.0.1/ERP/historique.php">Historique des modifications</a></li>
				<li><a href="http://127.0.0.1/ERP/historique_connexions.php">Historique des connexions</a></li>
				<li><a href="http://127.0.0.1/ERP/deconnexion.php">Déconnexion</a></li>
				<li><a href="http://127.0.0.1/ERP/passwd.php">Changer de mot de passe</a></li>
				
			</ul>
		</nav>
		<section>
			<p>
			
				<table class="table table-bordered table-striped table-condensed">
					<caption>
						<h2>Historique des connexions</h2>
					</caption>
					<thead>
						<th> Nom </th>
					
						<th> Date </th>
						
					</thead>
					<tbody>
				<?php
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=erp', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
						
						
						
					}
					catch (Exception $e)
					{
						echo "coucou";
					}
				
						$Tableau = $bdd->query('SELECT * FROM historique_connexion');
						
						$Rep_Nom = $bdd->query('SELECT login AS Nom FROM historique_connexion ORDER BY date DESC');
						
						$Rep_Date = $bdd->query('SELECT date AS Date FROM historique_connexion ORDER BY date DESC');
						
						
				
						
					while($Tableau->fetch())
					{	
						
						$Nom = $Rep_Nom->fetch();
					
						$Date = $Rep_Date->fetch();
						
						
						echo "<tr>";
							echo "<td>".$Nom['Nom']."</td>";
						
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