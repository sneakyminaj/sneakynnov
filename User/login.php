<?php
require('data-base.php');
// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);
$name=$_POST['name'];
// Vérification des identifiants
$req = $bdd->prepare('SELECT user_id FROM user WHERE name = :name AND pass = :pass');
$req->execute(array(
    'name' => $_POST['name'],
    'pass' => $pass_hache));
$resultat = $req->fetch();
if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['user_id'] = $resultat['user_id'];
    $_SESSION['name'] = $name;
    include 'home.php';
}

   

?>