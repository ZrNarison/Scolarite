
<?php
$code=$_GET['code'];
require_once('comm.php');
$ps=$pdo->prepare("SELECT * FROM etudiants WHERE CODE=?");
$params=array($code);
$ps->execute($params);
$etudiant=$ps->fetch();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SaisieEtudiants</title>
		<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	</head>
	<body>
		<?php require_once("entete.php")?>
		<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
			<div class="panel panel-info">
				<div class="panel-heading">Saisie des Etudiants</div>
				<div class="panel-body">
					<form method="post" action="UpdateEtudiant.php" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label">Code: <?php echo($etudiant['CODE'])?></label>
							<input type="hidden" name="code" value="<?php echo($etudiant['CODE'])?>" class="form-control"/>	
						</div>
						<div class="form-group">
							<label class="control-label">Nom:</label>
							<input type="text" name="nom" value="<?php echo($etudiant['NOM'])?>" class="form-control"/>	
						</div>
						<div class="form-group">
							<label class="control-label">Email:</label>
							<input type="text" name="email" value="<?php echo($etudiant['EMAIL'])?>" class="form-control"/>	
						</div>
						<div class="form-group">
							<label class="control-label">Photo:</label>
							<input type="file" name="photo" class="from-control" />	
							<img src="images/<?php echo($etudiant['PHOTO'])?>" width="100" heidth="100"/>
						</div>
						<div>
							<button type="submit">Enregistrer</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
