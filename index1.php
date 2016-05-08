<?php session_start();
$_SESSION['nom'] = $_POST['Nom'];
$_SESSION['password'] = $_POST['Mot_de_passe'];
	$bdd1 = new PDO('mysql:host=localhost;dbname=erp', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
						$reponse1 = $bdd1->query("SELECT password AS password FROM connexion WHERE login = '".$_SESSION['nom']."';");
						
						
						if($reponse1 != NULL)
						{
							$donnees1 = $reponse1->fetch();
							
							
							if($donnees1['password'] == $_SESSION['password'] && $donnees1['password'] != "")
							{
								
								header('Location: etudes.php');
								$reponse2 = $bdd1->query("INSERT INTO historique_connexion (login, date)
							VALUES ( '".$_SESSION['nom']."', NOW());");
							}
							else
							{
								header('Location: index.php');
							}
							
						}

 ?>