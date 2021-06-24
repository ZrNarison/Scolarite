<?php
	require_once ("comm.php");
	$req="SELECT * FROM etudiants";
	$ps=$pdo->prepare($req);
	$ps->execute() ;
?>
<html>
<head>
	<meta charset="utf-8">
	<title>etudiants</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
</head>
<body>
	<div class="col-sx-4"><?php require_once("entete.php")?></div>
	<div class="col-md-12 col-xs-12 spacer">
		<div class="panel panel-info">
			<div class="panel-heading">Liste des étudiants</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>CODE</th><th>NOM</th><th>EMAIL</th><th>PHOTO</th>
						</tr>
					</thead>
						<tbody>
							<?php while($et=$ps->fetch()) { ?>
								<tr>
									<td><?php echo($et['CODE']) ?></td>
									<td><?php echo($et['NOM']) ?></td>
									<td><?php echo($et['EMAIL']) ?></td>
									<td><img src="images/"<?php echo($et['PHOTO']) ?> width="50" heigth="50"> </td>
									<td><a href="EditEtudiant.php?code=<?php echo($et['CODE']) ?>">Edit</a> </td>
									<td><a onclick="return confirm('Etes vous sur?');" href="SupprimeEtudiant.php?code=<?php echo($et['CODE']) ?>">Supprimer</a> </td>
								</tr>
							<?php } ?>
						</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>