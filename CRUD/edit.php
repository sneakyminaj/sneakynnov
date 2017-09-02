<?php
include('../User/data-base.php');
session_start();

$id = $_POST['id'];

$title = $_POST['title'];

$content = $_POST['content'];

$vote=0;

$user_id=$_SESSION['user_id'];


$req = $bdd->prepare('UPDATE article SET title = :title, content = :content WHERE article_id = :id');

$req->execute(array('title' => $title, 'content' => $content, 'id' => $id));

header("Location:article.php");

?>