<?php

include('../User/data-base.php');
$id = $_GET['id'];

$req = $bdd->prepare("DELETE FROM article WHERE article_id = '$id'");
$req->execute(array('id' => $id));
header("Location:article.php");
?>