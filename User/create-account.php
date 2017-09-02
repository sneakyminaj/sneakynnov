<?php 
require('data-base.php');
// Hachage du mot de passe
$pass_hache= sha1($_POST['pass']);
$req= $bdd->prepare('INSERT INTO user(name, pass) VALUES(:name, :pass)');
$req->execute(array(
	'name'=>$_POST['name'],
	'pass'=>$pass_hache));
include 'home.php';
?>