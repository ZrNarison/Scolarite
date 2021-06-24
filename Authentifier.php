<?php

	require_once("comm.php");

	$login=$_POST["username"];
	$pass=md5($_POST['password']);
	$ps=$pdo->prepare("SELECT * FROM user WHERE LOGIN=? AND PASSWORD=?");
	$params=array($login,$pass);
	$ps->execute($params);

	if($user=$ps->fetch()){
		header("location:etudiants.php");
		}
	else{
		header("location:Login.php");
		}
?>
 