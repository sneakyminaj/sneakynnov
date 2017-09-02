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

  include('../User/data-base.php');

  $reponse = $bdd->query('SELECT * FROM article');
  ?>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Sneakynnov</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="../User/home.php">Accueil</a></li>
          <li><a href="../Role/index.php">Mini jeu</a></li>
          <li><a href="article.php">CRUD</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <div class="container bg-info" style="margin-top: 10%; padding-top:20px;  padding-bottom: 20px;">
  	<h3>CRUD application</h3>

  	<div class="row">

	  	<div class="col-sm-4">
	  	<h3>Insertion article</h3>

		  	<form role="form" action="insert.php" method="post">

			  	<div class="form-group">
			  		<label>Titre Article</label>
			  		<input type="text" name="title" class="form-control">
			  	</div>

			  	<div class="form-group">
			  		<label>Contenu Article</label>
			  		<input type="text" name="content" class="form-control" style="height: 130px;">
		  		</div>
		  		<button type="submit" class="btn btn-info btn-block">
		  			Ajouter un article
		  		</button>
		  	</form>
	  	</div>

  		<div class="col-sm-8">
  		<h3>Liste des articles</h3>
  		<table class="table">
  			<thead>
  				<tr>
  					<th>Titre de l'article</th>
  					<th>Contenu de l'article</th>
  					<th>CRUD Actions</th>
  				</tr>
  			</thead>
  			<tbody>

  			<?php

  			while ($donnees = $reponse->fetch()){

  			?>

  				<tr>
  					<td><?php echo $donnees['title']; ?></td>
  					<td><?php echo $donnees['content'];?></td>
  					<td>
  						<a href="edit-form.php?id=<?php echo $donnees['article_id']; ?>" class="btn btn-success" role="button">Modifier l'article</a>
  						<a href="delete.php?id=<?php echo $donnees['article_id']; ?>" class="btn btn-danger" role="button">Supprimer l'article</a>
  					</td>
  				</tr>
  				<?php 
  				}
  				$reponse->closeCursor();
  				?>
  			</tbody>
  		</table>
  		</div>
  	</div>
  </div>
  </body>
  </html>