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
					<form method="post" action="SaveEtudiant.php" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label">Nom:</label>
							<input type="text" name="nom" class="form-control"/>	
						</div>
						<div class="form-group">
							<label class="control-label">Email:</label>
							<input type="text" name="email" class="form-control"/>	
						</div>
						<div class="form-group">
							<label class="control-label">Photo:</label>
							<input type="file" name="photo" class="form-control"/>	
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
