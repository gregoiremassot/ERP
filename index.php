<?php session_start();

 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8" />
		<link rel="stylesheet" href="style2.css">
		<title> Titre </title>
		<link href ="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
	
		
		<div class="col-md-6 col-md-offset-3">
			<p>
				<form method="post" action="index1.php" class="col-md-6 col-md-offset-3">
				<legend>Connexion </legend >
					<label for="Nom">Nom : </label>
					<input type="text" name="Nom" class="form-control" />
					<label for="Mot_de_passe">Mot de Passe : </label>
					<input type="password" name="Mot_de_passe" class="form-control" />
					<input type="submit" value="Envoyer" class="btn btn-primary">
				</form>
		
					<?php
			
					try
					{
						
						$bdd = new PDO('mysql:host=mySQL5-3.perso;dbname=mepjejoomla', 'mepjejoomla', '392144JE', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
					
						
					}
					catch (Exception $e)
					{
						echo "coucou";
					}
					
					?>
			</p>
			
		</div>
		<br />
		
	</body>
</html>