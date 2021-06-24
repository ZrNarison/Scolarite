<?php
$code=$_GET['code'];
require_once("comm.php");
$ps=$pdo->prepare("DELETE FROM etudiants WHERE CODE=?");
$params=array($code);
$ps->execute($params);
header("location:etudiants.php");
?>