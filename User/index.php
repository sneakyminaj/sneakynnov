<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sneakynnov</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">

 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  </head>

  <body>
  	<div class="col-md-6 col-md-offset-3">
	    <div class="container" >
	      <form class="form-signin" action="login.php" method="post">
	        <br/><br/><br/>
	        <h2 class="form-signin-heading">Sneakynnov</h2>
	        <br/><br/><br/>
	        <label for="inputPseudo" class="sr-only">Pseudo</label>
	        <input type="text" name="name" class="form-control" placeholder="Pseudo" required autofocus>
	        <label for="inputPassword" class="sr-only">Mot de passe</label>
	        <input type="password" name="pass" class="form-control" placeholder="Mot de passe" required>
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Se souvenir de moi
	          </label>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Connection</button>
	      </form>
	      <a href="new-account.php">Créer un compte</a>
		</div> <!-- /container -->
   	</div>
	
  </body>
</html>
