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
					
					//$bdd = new PDO('mysql:host=localhost;dbname=erp', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
								$bdd = mysqli_connect('localhost', 'root', '');
									mysqli_set_charset($bdd,"utf8");

				mysqli_select_db($bdd,'erp'); 
		$_POST['BriefDescription']= mysqli_real_escape_string($bdd, $_POST['BriefDescription']);
		$_POST['Contexte']= mysqli_real_escape_string($bdd, $_POST['Contexte']);
		$_POST['Problematique']= mysqli_real_escape_string($bdd, $_POST['Problematique']);
		$_POST['Objectif']= mysqli_real_escape_string($bdd, $_POST['Objectif']);
		$_POST['AVDescription']= mysqli_real_escape_string($bdd, $_POST['AVDescription']);
		$_POST['Commentaires']= mysqli_real_escape_string($bdd, $_POST['Commentaires']);
		$_POST['QSC']= mysqli_real_escape_string($bdd, $_POST['QSC']);
		$_POST['BienUneEtude']= mysqli_real_escape_string($bdd, $_POST['BienUneEtude']);
		$_POST['Analyse']= mysqli_real_escape_string($bdd, $_POST['Analyse']);
		$_POST['MaitreOeuvre']= mysqli_real_escape_string($bdd, $_POST['MaitreOeuvre']);
		$_POST['Logiciels']= mysqli_real_escape_string($bdd, $_POST['Logiciels']);
		$_POST['Cnil']= mysqli_real_escape_string($bdd, $_POST['Cnil']);
		$_POST['QE']= mysqli_real_escape_string($bdd, $_POST['QE']);
		
		$_POST['Commercial']= mysqli_real_escape_string($bdd, $_POST['Commercial']);
		$_POST['Suiveur']= mysqli_real_escape_string($bdd, $_POST['Suiveur']);
		$_POST['Signataire']= mysqli_real_escape_string($bdd, $_POST['Signataire']);
		$_POST['Payeur']= mysqli_real_escape_string($bdd, $_POST['Payeur']);
		$_POST['Contact']= mysqli_real_escape_string($bdd, $_POST['Contact']);
	
						
						/*$reponse = mysqli_query($bdd, "INSERT INTO document (Name, Commercial, Suiveur, TypeClient, Signataire, Payeur, Contexte, Problematique, Objectif, Domaine, BienUneEtude, Analyse, MaitreOeuvre, Logiciels, Contact, Cnil,
						AP, DateAP, CE, DateCE, CC, DateCC, RDM, DateRDM, PVF, DatePVF, FS, DateFS, RP, DateRP, BV, DateBV, PVI, DatePVI, FI, DateFI, Avenant, AVDescription, DateAV,
						Deontologie, ConfidentialiteAbsolue, Qualite, Mandat, QE, QSC, DateQSC, QSCrempli, Echec, Commentaires, Reference, BriefDescription, FDA,
						DateFDA) 
						VALUES ('".$_POST['Nom']."', 
						'".$_POST['Commercial']."', 
						'".$_POST['Suiveur']."', 
						'".$_POST['TypeClient']."', 
						'".$_POST['Signataire']."',
						'".$_POST['Payeur']."',
						'".$_POST['Contexte']."',
						'".$_POST['Problematique']."',
						'".$_POST['Objectif']."',
						'".$_POST['Domaine']."',
						'".$_POST['BienUneEtude']."',
						'".$_POST['Analyse']."',
						'".$_POST['MaitreOeuvre']."',
						'".$_POST['Logiciels']."',
						'".$_POST['Contact']."',
						'".$_POST['Cnil']."',
						'".$_POST['AP']."',
						'".$_POST['DateAP']."',
						'".$_POST['CE']."',
						'".$_POST['DateCE']."',
						'".$_POST['CC']."',
						'".$_POST['DateCC']."',
						'".$_POST['RDM']."',
						'".$_POST['DateRDM']."',
						'".$_POST['PVF']."',
						'".$_POST['DatePVF']."',
						'".$_POST['FS']."',
						'".$_POST['DateFS']."',
						'".$_POST['RP']."',
						'".$_POST['DateRP']."',
						'".$_POST['BV']."',
						'".$_POST['DateBV']."',
						'".$_POST['PVI']."',
						'".$_POST['DatePVI']."',
						'".$_POST['FI']."',
						'".$_POST['DateFI']."',
						'".$_POST['Avenant']."',
						'".$_POST['AVDescription']."',
						'".$_POST['DateAV']."',
						'".$_POST['Deontologie']."',
						'".$_POST['ConfidentialiteAbsolue']."',
						'".$_POST['Qualite']."',
						'".$_POST['Mandat']."',
						'".$_POST['QE']."',
						'".$_POST['QSC']."',
						'".$_POST['DateQSC']."',
						'".$_POST['QSCrempli']."',
						'".$_POST['Echec']."',
						'".$_POST['Commentaires']."',
						'".$_POST['Reference']."',
						'".$_POST['BriefDescription']."',
						'".$_POST['FDA']."',
						'".$_POST['DateFDA']."'
						);");*/
						$reponse = mysqli_query($bdd, "INSERT INTO document (Name, Reference, DebutDate, FinDate, BriefDescription, Commercial, Suiveur, Qualite, TypeClient,
						Contact, Signataire, Payeur, Contexte, Problematique, Objectif, Domaine, Mandat, Deontologie, ConfidentialiteAbsolue, BienUneEtude
						) VALUES 
						('".$_POST['Nom']."',
						'".$_POST['Reference']."',
						'".$_POST['DebutDate']."',
						'".$_POST['FinDate']."',
						'".$_POST['BriefDescription']."',
						'".$_POST['Commercial']."',
						'".$_POST['Suiveur']."',
						'".$_POST['Qualite']."',
						'".$_POST['TypeClient']."',
						'".$_POST['Contact']."',
						'".$_POST['Signataire']."',
						'".$_POST['Payeur']."',
						'".$_POST['Contexte']."',
						'".$_POST['Problematique']."',
						'".$_POST['Objectif']."',
						'".$_POST['Domaine']."',
						'".$_POST['Mandat']."',
						'".$_POST['Deontologie']."',
						'".$_POST['ConfidentialiteAbsolue']."',
						'".$_POST['BienUneEtude']."'
						);");
						$reponse2 = mysqli_query($bdd, "INSERT INTO historique (login, date, action)
							VALUES ( '".$_SESSION['nom']."', NOW(), 'Ajout de ".$_POST['Nom']." ');");
					}
					catch (Exception $e)
					{
						
					}
					header('Location: etudes.php');  
					?>