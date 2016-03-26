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
		
		
    <div class="span text-center">
			
				<a href="supprimer1.php?id=<?php echo $_GET['id'];?>" class="btn btn-danger">Supprimer l'étude</a>
				<a href="etudes.php" class="btn btn-success">Ne pas supprimer l'étude</a>
			
			
		</div>
		<br />
		
	</body>
</html>