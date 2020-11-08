<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Connexion</title>
		<meta name="Author" content="BUSQUET_TOURNU" />
		<meta name="Keywords" content="ConcertAll" />
		<meta name="Description" content="connexion" />
		<link rel="stylesheet" type="text/css" href="css/header.css" media="screen" />	
		<link rel="stylesheet" type="text/css" href="css/formulaire.css" media="screen" />
	</head>
	<header>
		<?php include('header.php'); ?>
	</header>
	<body>
	</body>
		<body>
			 <h1>Connexion</h1> 
				 <?php 
				 	if(!empty($_GET['message'])) 
				 	{
						$message = $_GET['message'];
						 echo '<p class="message"> '.$message.'</p>';
					}
				?>
			<form action="connect.php" method="post" class="form-example">
  				<div class="form">
	  			 	<label for="name">Pseudo:  </label> 
	    			<input type="text" name="pseudo" placeholder="Entrer pseudo"   id="prenom" required>
	    			<br>
	    			<br>
	    			<label for="name">Mot de passe:</label> 
	    			<input type="password" name="password" placeholder="Entrer mdp" id="password" required>
      				<br>
					<input class="bouton" type="submit" value="connexion" name="connexion">
				</div>
			</form>

		</body>
		<script type="text/javascript" src="./js/scrollnav.js"></script> 
	</html>