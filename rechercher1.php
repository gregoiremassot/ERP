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
						<h2>Liste des études en cours</h2>
					</caption>
					<thead>
						<th>Nom de l'étude</th>
						<th>Date de début</th>
						<th>Date de Fin</th>
						<th>Suiveur</th>
						<th>Qualité</th>
						<th>Deontologie</th>
						<th>AP</th>
						<th>CC</th>
						<th>CE</th>
						<th>RDM</th>
						<th>FDA</th>
						<th>RF</th>
						<th>PVF</th>
						<th>RP</th>
						<th>BV</th>
						<th>PVI</th>
						<th>FI</th>
						<th>Avenant</th>
					</thead>
					<tbody>
				<?php
				
				$date = DateTime::createFromFormat('d/m/Y', $_POST['Debut_Debut']);
				if($_POST['Debut_Debut'] != "")
				{
					
				}
				echo strtotime($_POST['Debut_Debut']);
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=erp', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
						
						
						
					}
					catch (Exception $e)
					{
						echo "coucou";
					}
				
						$Tableau = $bdd->query('SELECT * FROM document');
						$Rep_Nom = $bdd->query('SELECT Name AS Nom FROM document');
						$Rep_Id = $bdd->query('SELECT id AS id FROM document');
						
						$Rep_Ref = $bdd->query('SELECT Reference AS Ref FROM document');
						
						$Rep_DebutDate = $bdd->query('SELECT DebutDate AS DebutDate FROM document');
						
						$Rep_FinDate = $bdd->query('SELECT FinDate AS FinDate FROM document');
						
						$Rep_BriefDescription = $bdd->query('SELECT BriefDescription AS BriefDescription FROM document');
						
						$Rep_Suiveur = $bdd->query('SELECT Suiveur AS Suiveur FROM document');
						
						$Rep_Qualite = $bdd->query('SELECT Qualite AS Qualite FROM document');
						
						$Rep_ConfidentialiteAbsolue = $bdd->query('SELECT ConfidentialiteAbsolue AS ConfidentialiteAbsolue FROM document');
						
						$Rep_AP = $bdd->query('SELECT AP AS AP FROM document');
						
						$Rep_CC = $bdd->query('SELECT CC AS CC FROM document');
						
						$Rep_CE = $bdd->query('SELECT CE AS CE FROM document');
						
						$Rep_RDM = $bdd->query('SELECT RDM AS RDM FROM document');
						
						$Rep_FDA = $bdd->query('SELECT FDA AS FDA FROM document');
						
						$Rep_PVI = $bdd->query('SELECT PVI AS PVI FROM document');
						
						$Rep_FI = $bdd->query('SELECT FI AS FI FROM document');
						
						$Rep_Avenant = $bdd->query('SELECT Avenant AS Avenant FROM document');
						
						$Rep_RF = $bdd->query('SELECT RF AS RF FROM document');
						
						$Rep_PVF = $bdd->query('SELECT PVF AS PVF FROM document');
						
						$Rep_RP = $bdd->query('SELECT RP AS RP FROM document');
						
						$Rep_BV = $bdd->query('SELECT BV AS BV FROM document');
						
						$Rep_Mandat = $bdd->query('SELECT Mandat AS Mandat FROM document');
						$Rep_Domaine = $bdd->query('SELECT Domaine AS Domaine FROM document');
						$Rep_Debut = $bdd->query('SELECT DebutDate AS DebutDate FROM document');
						$Rep_Fin = $bdd->query('SELECT FinDate AS FinDate FROM document');
						$Rep_Echec = $bdd->query('SELECT Echec AS Echec FROM document');
						
						
						
					while($Tableau->fetch())
					{	
						$CE = $Rep_CE->fetch();
						$Id = $Rep_Id->fetch();
						$Nom = $Rep_Nom->fetch();
						$Ref = $Rep_Ref->fetch();
						$DebutDate = $Rep_DebutDate->fetch();
						$FinDate = $Rep_FinDate->fetch();
						$BriefDescription = $Rep_BriefDescription->fetch();
						$Suiveur = $Rep_Suiveur->fetch();
						$Qualite = $Rep_Qualite->fetch();
						$ConfidentialiteAbsolue = $Rep_ConfidentialiteAbsolue->fetch();
						$AP = $Rep_AP->fetch();
						$CC = $Rep_CC->fetch();
						$RDM = $Rep_RDM->fetch();
						
						//$DateCC = $Rep_DateCC->fetch();
						$FDA = $Rep_FDA->fetch();
						$PVI = $Rep_PVI->fetch();
						$FI = $Rep_FI->fetch();
						$Avenant = $Rep_Avenant->fetch();
						$RF = $Rep_RF->fetch();
						$PVF = $Rep_PVF->fetch();
						$RP = $Rep_RP->fetch();
						$BV = $Rep_BV->fetch();
						$Mandat = $Rep_Mandat->fetch();
						$Domaine = $Rep_Domaine->fetch();
						$DebutDate = $Rep_Debut->fetch();
						$FinDate = $Rep_Fin->fetch();
						$Echec = $Rep_Echec->fetch();
						//$Avancement = $Rep_Avancement->fetch();
						
						if($_POST['Avancement'] == "Echec")
						{
							$Avancement = $Echec['Echec'];
						}
						
						if($_POST['Avancement'] == "AP")
						{
							$Avancement = $AP['AP'];
						}
						
						if($_POST['Avancement'] == "CE")
						{
							$Avancement = $CE['CE'];
						}
						
						if($_POST['Avancement'] == "PVF")
						{
							$Avancement = $PVF['PVF'];
						}
						
						if($_POST['Avancement'] == "BV")
						{
							$Avancement = $BV['BV'];
						}
						
						//echo $Avancement['Avancement'];
						if(($Mandat['Mandat']==$_POST['Mandat'] || $_POST['Mandat'] == "*") && 
						($Domaine['Domaine']==$_POST['Domaine'] || $_POST['Domaine'] == "*") && 
						(strtotime($DebutDate['DebutDate']) > strtotime($_POST['Debut_Debut']) || strtotime($_POST['Debut_Debut']) == "")
						&& (strtotime($DebutDate['DebutDate']) < strtotime($_POST['Debut_Fin']) || strtotime($_POST['Debut_Fin']) == "")
						&&(strtotime($FinDate['FinDate']) > strtotime($_POST['Fin_Debut']) || strtotime($_POST['Fin_Debut']) == "")
						&& (strtotime($FinDate['FinDate']) < strtotime($_POST['Fin_Fin']) || strtotime($_POST['Fin_Fin']) == ""
						&& $Avancement == 1 || $_POST['Avancement'] == "-")
						)
						{
						echo "<tr>";
							echo "<td>"; echo " <div title='".$BriefDescription['BriefDescription']."'>"; if ($ConfidentialiteAbsolue['ConfidentialiteAbsolue'] == "oui") echo '<img src="star.png">';  echo "<a  href=http://127.0.0.1/ERP/modifier.php?id=".$Id['id'].">".$Nom['Nom']."</a></div></td>";
							echo "<td>".$DebutDate['DebutDate']."</td>";
							echo "<td>".$FinDate['FinDate']."</td>";
							echo "<td>".$Suiveur['Suiveur']."</td>";
							echo "<td>".$Qualite['Qualite']."</td>";
							echo "<td>"; if($Deontologie['Deontologie'] == "oui") echo '<img src="right.jpg">'; else if($Deontologie['Deontologie'] == "En attente OK qualite") echo '<img src="qualit.png">';  else echo "-"; echo "</td>";
							echo "<td>"; if($AP['AP'] == 1) echo '<img src="right.jpg">'; else if($AP['AP'] == 3) echo '<img src="qualit.png">';  else echo "-"; echo "</td>";
							echo "<td>"; if($CC['CC'] == 1) echo '<img src="right.jpg">'; else if($CC['CC'] == 3) echo '<img src="qualit.png">';  else echo "-"; echo "</td>";
							echo "<td>"; if($CE['CE'] == 1) echo '<img src="right.jpg">'; else if($CE['CE'] == 3) echo '<img src="qualit.png">';  else echo "-"; echo "</td>";
							echo "<td>"; if($RDM['RDM'] == 1) echo '<img src="right.jpg">'; else if($RDM['RDM'] == 3) echo '<img src="qualit.png">';  else echo "-"; echo "</td>";
							echo "<td>"; if($FDA['FDA'] == 1) echo '<img src="right.jpg">'; else if($FDA['FDA'] == 3) echo '<img src="euro.jpg">';  else echo "-"; echo "</td>";
							echo "<td>"; if($RF['RF'] == 1) echo '<img src="right.jpg">'; else echo "-"; echo "</td>";
							echo "<td>"; if($PVF['PVF'] == 1) echo '<img src="right.jpg">'; else if($PVF['PVF'] == 3) echo '<img src="qualit.png">';  else echo "-"; echo "</td>";
							echo "<td>"; if($RP['RP'] == 1) echo '<img src="right.jpg">'; else if($RP['RP'] == 3) echo '<img src="qualit.png">';  else echo "-"; echo "</td>";
							echo "<td>"; if($BV['BV'] == 1) echo '<img src="right.jpg">'; else if($BV['BV'] == 3) echo '<img src="euro.jpg">';  else echo "-"; echo "</td>";
							echo "<td>"; if($PVI['PVI'] == 1) echo '<img src="right.jpg">'; else if($PVI['PVI'] == 3) echo '<img src="qualit.png">';  else echo "-"; echo "</td>";
							echo "<td>"; if($FI['FI'] == 1) echo '<img src="right.jpg">'; else if($FI['FI'] == 3) echo '<img src="euro.jpg">';  else echo "-"; echo "</td>";
							echo "<td>"; if($Avenant['Avenant'] == 1) echo '<img src="right.jpg">'; else if($Avenant['Avenant'] == 3) echo '<img src="qualit.png">';  else echo "-"; echo "</td>";
						echo "</tr>";
						}
					}		
						?>	
						
					</tbody>
				</table>
			</p>
			
		</section>
		<br />
		
	</body>
</html>