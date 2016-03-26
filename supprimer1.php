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
						
					try
					{
						
						$bdd = new PDO('mysql:host=mySQL5-3.perso;dbname=mepjejoomla', 'mepjejoomla', '392144JE', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						if($_GET['id'] != NULL)
						{
						$Name = $bdd->query("SELECT Name AS Name FROM document WHERE id=".$_GET['id']."");
						$Name = $Name->fetch();
						$reponse = $bdd->query("DELETE FROM document WHERE id=".$_GET['id']."");
						
						 $reponse2 = $bdd->query("INSERT INTO historique (login, date, action) VALUES ('".$_SESSION['nom']."', NOW(), 'Suppression de ".$Name['Name']." ');");
					
					}
					}
					catch (Exception $e)
					{
						
					}
					header('Location: etudes.php');
?>
