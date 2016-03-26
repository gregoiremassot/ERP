<?php 
$bdd1 = new PDO('mysql:host=mySQL5-3.perso;dbname=mepjejoomla', 'mepjejoomla', '392144JE', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
						
						$Rep_Mandat = $bdd1->query("SELECT id AS id FROM document WHERE Mandat = '".$_POST['Mandat']."';");
						$Mandat = $Rep_Mandat->fetch();
						echo $Mandat['id'];
						$Mandat = $Rep_Mandat->fetch();
						echo $Mandat['id'];
						

?>