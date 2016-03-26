
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
	
		//$bdd = new PDO('mysql:host=mySQL5-3.perso;dbname=mepjejoomla', 'mepjejoomla', '392144JE', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		$bdd = mysqli_connect('mysql5-3.perso', 'mepjejoomla', '392144JE');
		mysqli_set_charset($bdd,"utf8");

				mysqli_select_db($bdd,'mepjejoomla'); 
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
		
		$reponse = mysqli_query($bdd, "UPDATE document SET Name = '".$_POST['Nom']."', 
			Commercial = '".$_POST['Commercial']."', 
			BriefDescription = '".$_POST['BriefDescription']."',
			Suiveur = '".$_POST['Suiveur']."', 
			DebutDate = '".$_POST['DebutDate']."', 
			FinDate = '".$_POST['FinDate']."', 
			TypeClient = '".$_POST['TypeClient']."', 
			Signataire = '".$_POST['Signataire']."',
			Payeur = '".$_POST['Payeur']."',
			Contexte = '".$_POST['Contexte']."',
			Problematique = '".$_POST['Problematique']."',
			Objectif = '".$_POST['Objectif']."',
			Domaine = '".$_POST['Domaine']."',
			BienUneEtude = '".$_POST['BienUneEtude']."',
			Analyse = '".$_POST['Analyse']."',
			MaitreOeuvre = '".$_POST['MaitreOeuvre']."',
			Logiciels = '".$_POST['Logiciels']."',
			Contact = '".$_POST['Contact']."',
			Cnil = '".$_POST['Cnil']."',
			AP = '".$_POST['AP']."',
			DateAP = '".$_POST['DateAP']."',
			CE = '".$_POST['CE']."',
			DateCE = '".$_POST['DateCE']."',
			CC = '".$_POST['CC']."',
			DateCC = '".$_POST['DateCC']."',
			RDM = '".$_POST['RDM']."',
			DateRDM = '".$_POST['DateRDM']."',
			PVF = '".$_POST['PVF']."',
			DatePVF = '".$_POST['DatePVF']."',
			FS = '".$_POST['FS']."',
			DateFS = '".$_POST['DateFS']."',
			RP = '".$_POST['RP']."',
			DateRP = '".$_POST['DateRP']."',
			BV = '".$_POST['BV']."',
			DateBV = '".$_POST['DateBV']."',
			PVI = '".$_POST['PVI']."',
			DatePVI = '".$_POST['DatePVI']."',
			FI = '".$_POST['FI']."',
			DateFI = '".$_POST['DateFI']."',
			FI2 = '".$_POST['FI2']."',
			DateFI2 = '".$_POST['DateFI2']."',
			Avenant = '".$_POST['Avenant']."',
			AVDescription = '".$_POST['AVDescription']."',
			DateAV = '".$_POST['DateAV']."',
			Deontologie = '".$_POST['Deontologie']."',
			Mandat = '".$_POST['Mandat']."',
			Qualite = '".$_POST['Qualite']."',
			ConfidentialiteAbsolue = '".$_POST['ConfidentialiteAbsolue']."',
			QE = '".$_POST['QE']."',
			QSC = '".$_POST['QSC']."',
			DateQSC = '".$_POST['DateQSC']."',
			QSCrempli = '".$_POST['QSCrempli']."',
			Echec = '".$_POST['Echec']."',
			Commentaires = '".$_POST['Commentaires']."',
			Reference = '".$_POST['Reference']."',
			FDA = '".$_POST['FDA']."',
			DateFDA = '".$_POST['DateFDA']."' WHERE id=".$_GET['id'].";");
			
			 $reponse2 = mysqli_query($bdd, "INSERT INTO historique (login, date, action)
							VALUES ( '".$_SESSION['nom']."', NOW(), 'Modification de  ".$_POST['Nom']."');");
	}
catch (Exception $e){}
header('Location: etudes.php');  
?>