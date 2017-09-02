<?php
include('../User/data-base.php');
session_start();
$title= $_POST['title'];
$content= $_POST['content'];
$vote=0;
$user_id=$_SESSION['user_id'];



$req= $bdd->prepare('INSERT INTO article(title, content, vote, user_id) VALUES(:title, :content, :vote, :user_id)');
$req->execute(array('title'=> $title, 'content'=> $content, 'vote'=> $vote, 'user_id'=> $user_id));

header("Location:article.php");
?>