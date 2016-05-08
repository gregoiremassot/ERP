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

<?php
			
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
		<script src="jquery.js"></script>
		<script src="bootstrap.js"></script>
		<script src="tab.js"></script >
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
		<nav>
			<ul>
				
				
			</ul>
		</nav>
<ul class ="nav nav-tabs nav-justified nav-pills navbar-fixed-top ">
	<li class ="active "><a href ="#Fiche" data-toggle ="tab ">Fiche Présentation</a></li >
	<li class ="active "><a href ="#Avancement" data-toggle ="tab ">Avancement</a></li >
	<li class ="active "><a href ="#Envoyer" data-toggle ="tab ">Envoyer</a></li >
</ul >
 <div class ="tab-content ">
	
	


		<div class="col-md-6 col-md-offset-3">
			<p>
				<form method="post" action="ajouter1.php?id=<?php echo $_GET['id'];?>">
				<legend>Ajouter une étude</legend >
				<div class ="tab-pane fade active in" id="Fiche"></div>
					<label for="Nom">Nom de l'étude </label>
					<textarea name="Nom" class="form-control" rows="1" cols="20"><?php echo $donnes['Name'];?></textarea>
					
					<label for="Reference">Référence </label>
					<textarea name="Reference" class="form-control" rows="1" cols="20"><?php echo $donnes['Reference'];?></textarea>
					
					<label for="BriefDescription">Descritption brève </label>
					<textarea name="BriefDescription" class="form-control" rows="10" cols="20"><?php echo $donnes['BriefDescription'];?></textarea>
					
					<label for="Commercial">Commercial : </label>
					<textarea name="Commercial" class="form-control" rows="1" cols="20"><?php echo $donnes['Commercial'];?></textarea>
					
					<label for="Suiveur">Suiveur : </label>
					<textarea name="Suiveur" class="form-control" rows="1" cols="20"><?php echo $donnes['Suiveur'];?></textarea>
					
					<label for="Qualite">Qualité : </label>
					<textarea name="Qualite" class="form-control" rows="1" cols="20"><?php echo $donnes['Qualite'];?></textarea>
					
					<label for="TypeClient">Type de Client : </label>
					<textarea name="TypeClient" class="form-control" rows="1" cols="20"><?php echo $donnes['TypeClient'];?></textarea>
					
					<label for="Contact">Contact : </label>
					<textarea name="Contact" class="form-control" rows="1" cols="20"><?php echo $donnes['Contact'];?></textarea>
					
					<label for="Signataire">Signataire : </label>
					<textarea name="Signataire" class="form-control" rows="1" cols="20"><?php echo $donnes['Signataire'];?></textarea>
					
					<label for="Payeur">Payeur : </label>
					<textarea name="Payeur" class="form-control" rows="1" cols="20"><?php echo $donnes['Payeur'];?></textarea>
					
					<label for="Contexte">Contexte :</label>
					<textarea name="Contexte" class="form-control" rows="10" cols="20"><?php echo $donnes['Contexte'];?></textarea>
					
					<label for="Problematique">Problématique :</label>
					<textarea name="Problematique" class="form-control" rows="10" cols="20"><?php echo $donnes['Problematique'];?></textarea>
					
					<label for="Objectif">Objectif :</label>
					<textarea name="Objectif" class="form-control" rows="10" cols="20"><?php echo $donnes['Objectif'];?></textarea>
					
					<label for="Domaine">Domaine : </label>
					
					<select name="Domaine"  class="form-control">
					<option><?php echo $donnes['Domaine'];?></option>
					<option>Informatique</option>
					<option>Mécanique</option>
					<option>Traduction Technique</option>
					<option>Génie Industriel</option>
					<option>Procédés & Energie</option>
					<option>Environnement</option>
					<option>Mathématiques</option>
					<option>Ingéniérie & Santé</option>
					</select>
					
					<label for="Mandat">Mandat :</label>
					<select name="Mandat"  class="form-control">
					<option><?php echo $donnes['Mandat'];?></option>
					<option>2013</option>
					<option>2014</option>
					</select>
					
					<label for="Deontologie">Deontologie :</label>
					<select name="Deontologie"  class="form-control">
					<option><?php echo $donnes['Deontologie'];?></option>
					<option>oui</option>
					<option>En attente OK qualite</option>
					<option>non</option>
					</select>
					
					<label for="ConfidentialiteAbsolue">Confidentialité Absolue :</label>
					<select name="ConfidentialiteAbsolue"  class="form-control">
					<option><?php echo $donnes['ConfidentialiteAbsolue'];?></option>
					<option>oui</option>
					<option>non</option>
					</select>
					
		
					
					<label for="BienUneEtude">Pourquoi est-ce bien une étude ? :</label>
					<textarea name="BienUneEtude" class="form-control" rows="10" cols="20"><?php echo $donnes['BienUneEtude'];?></textarea>
					
					<label for="Analyse">En quoi l’analyse et la technicité sont suffisantes ? :</label>
					<textarea name="Analyse" class="form-control" rows="10" cols="20"><?php echo $donnes['Analyse'];?></textarea>
					
					<label for="MaitreOeuvre">MEP reste-t-elle bien maître d’œuvre ? :</label>
					<textarea name="MaitreOeuvre" class="form-control" rows="10" cols="20"><?php echo $donnes['MaitreOeuvre'];?></textarea>
					
					<label for="Logiciels">L’étude nécessite-t-elle des logiciels spécifiques ? Si oui avons-nous les licences commerciales ? :</label>
					<textarea name="Logiciels" class="form-control" rows="10" cols="20"><?php echo $donnes['Logiciels'];?></textarea>
					
					<label for="Cnil">Y a-t-il des bases de données nominatives à déclarer à la CNIL ? :</label>
					<textarea name="Cnil" class="form-control" rows="10" cols="20"><?php echo $donnes['Cnil'];?></textarea>
					
					<label for="Commentaires">Commentaires :</label>
					<textarea name="Commentaires" class="form-control" rows="10" cols="20"><?php echo $donnes['Commentaires'];?></textarea>
					
					<br />
					<div class ="tab-pane fade" id="Avancement"></div >
					<h2> Documents de l'étude</h2>
					<table class="table table-bordered table-striped table-condensed">
					<tr>
					<td><label for="AP">Avant Projet :</label></td>
					<td>
					
					 <input type="radio" name="AP" value=1 
							<?php if ($donnes['AP']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="AP" value=0 
					<?php if ($donnes['AP']==0){?> checked <?php }?>/> Non  
					<input type="radio" name="AP" value=3 <?php if ($donnes['AP']==3){?> checked <?php }?>/> En attente OK qualité </p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateAP" value="<?php if($donnes['DateAP']>'0000-00-01')
												{ echo $donnes['DateAP'];}
												?>"/>
												
												</td>
												</tr>
												
												
												<tr>
					<td><label for="CC">Convention Client :</label></td>
					<td>
					
					 <input type="radio" name="CC" value=1 
							<?php if ($donnes['CC']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="CC" value=0 
					<?php if ($donnes['CC']==0){?> checked <?php }?>/> Non 
<input type="radio" name="CC" value=3 <?php if ($donnes['CC']==3){?> checked <?php }?>/> En attente OK qualité					</p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateCC" value="<?php if($donnes['DateCC']>'0000-00-01')
												{ echo $donnes['DateCC'];}
												?>"/>
												
												</td>
												</tr>
												
												<tr>
					<td><label for="CE">Convention Etudiant :</label></td>
					<td>
					
					 <input type="radio" name="CE" value=1 
							<?php if ($donnes['CE']==1){?> checked <?php }?>/> Oui
						<input type="radio" name="CE" value=0 
					<?php if ($donnes['CE']==0){?> checked <?php }?>/> Non 
					 <input type="radio" name="CE" value=3 <?php if ($donnes['CE']==3){?> checked <?php }?>/> En attente OK qualité </p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateCE" value="<?php if($donnes['DateCE']>'0000-00-01')
												{ echo $donnes['DateCE'];}
												?>"/>
												
												</td>
												</tr>
												
												<td><label for="RDM">Récapitulatif de mission :</label></td>
					<td>
					
					 <input type="radio" name="RDM" value=1 
							<?php if ($donnes['RDM']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="RDM" value=0 
					<?php if ($donnes['RDM']==0){?> checked <?php }?>/> Non  
					<input type="radio" name="RDM" value=3 <?php if ($donnes['RDM']==3){?> checked <?php }?>/> En attente OK qualité</p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateRDM" value="<?php if($donnes['DateRDM']>'0000-00-01')
												{ echo $donnes['DateRDM'];}
												?>"/>
												
												</td>
												</tr>
												
												<td><label for="PVF">PVRF :</label></td>
					<td>
					
					 <input type="radio" name="PVF" value=1 
							<?php if ($donnes['PVF']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="PVF" value=0 
					<?php if ($donnes['PVF']==0){?> checked <?php }?>/> Non 
<input type="radio" name="PVF" value=3 <?php if ($donnes['PVF']==3){?> checked <?php }?>/> En attente OK qualité					</p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DatePVF" value="<?php if($donnes['DatePVF']>'0000-00-01')
												{ echo $donnes['DatePVF'];}
												?>"/>
												
												</td>
												</tr>
																			<tr>
					<td><label for="FS">Facture Solde :</label></td>
					<td>
					
					 <input type="radio" name="FS" value=1 
							<?php if ($donnes['FS']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="FS" value=0 
					<?php if ($donnes['FS']==0){?> checked <?php }?>/> Non 
<input type="radio" name="FS" value=3 <?php if ($donnes['FS']==3){?> checked <?php }?>/> En attente OK comptable	</p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateFS" value="<?php if($donnes['DateFS']>'0000-00-01')
												{ echo $donnes['DateFS'];}
												?>"/>
												
												</td>
												</tr>
												
												<tr>
												
												<td><label for="RP">Rapport pédagogique :</label></td>
					<td>
					
					 <input type="radio" name="RP" value=1 
							<?php if ($donnes['RP']==1){?> checked <?php }?>/> Oui
						<input type="radio" name="RP" value=0 
					<?php if ($donnes['RP']==0){?> checked <?php }?>/> Non  
					<input type="radio" name="RP" value=3 <?php if ($donnes['RP']==3){?> checked <?php }?>/> En attente OK qualité</p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateRP" value="<?php if($donnes['DateRP']>'0000-00-01')
												{ echo $donnes['DateRP'];}
												?>"/>
												
												</td>
												</tr>
												
												
												<tr>
												
					<td><label for="QSCrempli">Questionnaire satisfaction Client rempli :</label></td>
					<td>
					
					 <input type="radio" name="QSCrempli" value=1 
							<?php if ($donnes['QSCrempli']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="QSCrempli" value=0 
					<?php if ($donnes['QSCrempli']==0){?> checked <?php }?>/> Non 
<input type="radio" name="QSCrempli" value=3 <?php if ($donnes['QSCrempli']==3){?> checked <?php }?>/> En attente OK qualité					</p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateQSC" value="<?php if($donnes['DateQSC']>'0000-00-01')
												{ echo $donnes['DateQSC'];}
												?>"/>
												
												</td>
												</tr>
												
												
												<tr>
												
					<td><label for="BV">Bulletin de versement :</label></td>
					<td>
					
					 <input type="radio" name="BV" value=1 
							<?php if ($donnes['BV']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="BV" value=0 
					<?php if ($donnes['BV']==0){?> checked <?php }?>/> Non  
					<input type="radio" name="BV" value=3 <?php if ($donnes['BV']==3){?> checked <?php }?>/> En attente OK comptable </p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateBV" value="<?php if($donnes['DateBV']>'0000-00-01')
												{ echo $donnes['DateBV'];}
												?>"/>
												
												</td>
												</tr>
												
												</table>
												
												
												<label for="QSC">Questionnaire satisfaction client :</label>
					<textarea name="QSC" class="form-control" rows="10" cols="20"><?php echo $donnes['QSC'];?></textarea>
					<br />
												<table class="table table-bordered table-striped table-condensed">
												<tr>
					<td><label for="FDA">Facture d'accompte :</label></td>
					<td>
					
					 <input type="radio" name="FDA" value=3 
							<?php if ($donnes['FDA']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="FDA" value=0 
					<?php if ($donnes['FDA']==0){?> checked <?php }?>/> Non  
					<input type="radio" name="FDA" value=3 <?php if ($donnes['FDA']==3){?> checked <?php }?>/> En attente OK comptable</p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateFDA" value="<?php if($donnes['DateFDA']>'0000-00-01')
												{ echo $donnes['DateFDA'];}
												?>"/>
												
												</td>
												</tr>
												
					<tr>
					<td><label for="PVI">PVRI :</label></td>
					<td>
					
					 <input type="radio" name="PVI" value=3 
							<?php if ($donnes['PVI']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="PVI" value=0 
					<?php if ($donnes['PVI']==0){?> checked <?php }?>/> Non  
					<input type="radio" name="PVI" value=3 <?php if ($donnes['PVI']==3){?> checked <?php }?>/> En attente OK qualité </p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DatePVI" value="<?php if($donnes['DatePVI']>'0000-00-01')
												{ echo $donnes['DatePVI'];}
												?>"/>
												
												</td>
												</tr>
												<tr>
												<td><label for="FI">Facture intermédiaire :</label></td>
					<td>
					
					 <input type="radio" name="FI" value=3 
							<?php if ($donnes['FI']==1){?> checked <?php }?>/> Oui
						<input type="radio" name="FI" value=0 
					<?php if ($donnes['FI']==0){?> checked <?php }?>/> Non 
<input type="radio" name="FI" value=3 <?php if ($donnes['FI']==3){?> checked <?php }?>/> En attente OK comptable					</p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateFI" value="<?php if($donnes['DateFI']>'0000-00-01')
												{ echo $donnes['DateFI'];}
												?>"/>
												
												</td>
												</tr>
												<tr>
												<td><label for="Avenant">Avenant :</label></td>
					<td>
					
					 <input type="radio" name="Avenant" value=3 
							<?php if ($donnes['Avenant']==1){?> checked <?php }?>/> Oui
						<input type="radio" name="Avenant" value=0 
					<?php if ($donnes['Avenant']==0){?> checked <?php }?>/> Non  
					<input type="radio" name="Avenant" value=3 <?php if ($donnes['Avenant']==3){?> checked <?php }?>/> En attente OK qualité</p>
					</select>
					</td>
					<td>
					
					 <input type="date" name="DateAV" value="<?php if($donnes['DateAV']>'0000-00-01')
												{ echo $donnes['DateAV'];}
												?>"/>
												
												</td>
												</tr>
												</table>
									<label for="AVDescription">Raisons de l'avenant :</label>
					<textarea name="AVDescription" class="form-control" rows="10" cols="20"><?php echo $donnes['AVDescription'];?></textarea>			
												<br />
												<table class="table table-bordered table-striped table-condensed">
					<tr>
					<td><label for="Echec">Echec :</label></td>
					<td>
					
					 <input type="radio" name="Echec" value=1 
							<?php if ($donnes['Echec']==1 ){?> checked <?php }?>/> Oui
						<input type="radio" name="Echec" value=0 
					<?php if ($donnes['Echec']==0){?> checked <?php }?>/> Non  </p>
					</select>
					</td>
					</table>
												
												<label for="QE">Questionnaire echec :</label>
					<textarea name="QE" class="form-control" rows="10" cols="20"><?php echo $donnes['QE'];?></textarea>
												
												
					<input type="submit" value="Envoyer" id="Envoyer" class="btn btn-primary">
					
				</form>
				</div>
				</div >
					
			</p>
			
		
		<br />
		
	</body>
</html>