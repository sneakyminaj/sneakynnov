<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sneakynnov</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/article.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

  <?php
  	$id = $_GET['id'];

  	include('../User/data-base.php');

  	$reponse = $bdd->query("SELECT * FROM article WHERE article_id= '$id'");
  ?>

  	<div class="container bg-info" style="padding-top:20px;  padding-bottom: 20px; margin-top: 50px;">
  		<h3>Modifier l'article</h3>
  		<form role="form" action="edit.php" method="post">
  		<?php 
  		while ($donnees = $reponse->fetch())
  		{
  		?>
  		<input type="hidden" name="id" value="<?php echo $donnees['article_id']; ?>">
  			<div class="form-group">
  				<label>Titre de l'article</label>
  				<input type="text" name="title" class="form-control" value="<?php echo $donnees['title']; ?>">
  			</div>

  			<div class="form-group">
  				<label>Contenu de l'article</label>
  				<input type="text" name="content" class="form-control" value="<?php echo $donnees['content']; ?>">
  			</div>
  			<button type="submit" class="btn btn-success btn-block">Modifier l'article</button>
  		<?php 
  		}
  		$reponse->closeCursor();
  		?>
  		</form>
  	</div>
  </body>
  </html>