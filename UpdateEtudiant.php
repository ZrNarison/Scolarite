<?php
$code=$_POST["code"];
$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo']['name'];
require_once ("comm.php");
if($nomPhoto==""){
	$ps=$pdo->prepare("UPDATE etudiants SET NOM=?, EMAIL=? WHERE CODE=?");
$params=array($nom,$email,$code);
$ps->execute($params);
}
else{
	$fichierTompo=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTompo, 'images/'.$nomPhoto);
}



header("location:etudiants.php")
?>
