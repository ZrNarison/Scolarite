<?php
$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo']['name'];
$fichierTompo=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTompo, 'images/'.$nomPhoto);
require_once ("comm.php");
$ps=$pdo->prepare("INSERT INTO etudiants(NOM,EMAIL,PHOTO) VALUES (?,?,?)");
$params=array($nom,$email,$nomPhoto);
$ps->execute($params);
header("location:etudiants.php")
?>
