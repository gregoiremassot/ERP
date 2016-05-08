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


			
					try
					{
						
						$bdd = new PDO('mysql:host=localhost;dbname=erp', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						if(isset($_GET['id']))
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
				<form method="post" action="rechercher1.php">
				<legend>Rechercher des études</legend >
					<label for="Mandat">Mandat </label>
					<select name="Mandat" class="form-control">
					<option>*</option>
					<option>2013</option>
					<option>2014</option>
					</select>
					<label for="Domaine">Domaine </label>
					<select name="Domaine" class="form-control">
					<option>*</option>
					<option>Informatique</option>
					<option>Mécanique</option>
					<option>Traduction Technique</option>
					<option>Génie Industriel</option>
					<option>Procédés & Energie</option>
					<option>Environnement</option>
					<option>Mathématiques</option>
					<option>Ingéniérie & Santé</option>
					</select>
					<label for="Avancement">Avancement :</label>
					<select name="Avancement" class="form-control">
					<option>-</option>
					<option value= "Echec">Abandonné</option>
					<option value= "Deontologie">Déontologie vérifiée</option>
					<option value= "AP">Avant Projet signé</option>
					<option value= "CE">Convention Etudiant signée</option>
					<option value = "PVF">PVRF signé</option>
					<option value = "BV">Bulletin versement signé</option>
					
					</select>
					<label for="Debut_Debut">Debut entre </label>
					<input type="date" name="Debut_Debut" />
					<label for="Debut_Fin"> et  </label>
					<input type="date" name="Debut_Fin" />
					<br />
					<label for="Fin_Debut">Fin entre </label>
					<input type="date" name="Fin_Debut" />
					<label for="Fin_Fin"> et  </label>
					<input type="date" name="Fin_Fin" />
					<input type="submit" value="Envoyer" class="btn btn-primary">
				</form>
				</div>
					
			</p>
			
		
		<br />
		
	</body>
</html>