<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
				<title>inscrire</title>
				<meta name="Author" content="BUSQUET_TOURNU" />
				<meta name="Keywords" content="ConcertAll" />
				<meta name="Description" content="Inscription" />
				<link rel="stylesheet" type="text/css" href="css/accueil.css" media="screen" />
				<?php include("ident.php"); // on appelle le fichier?>
	</head>
	<header>
		<?php include('header.php'); ?>
	</header>
	<body>
		 <h1>Inscription</h1>  
		<form action="ident.php" method="post" class="connect">
			 	<label for="pseudo">Pseudo:  </label> 
			<input type="text" name="pseudo" placeholder="Entrer pseudo"   id="prenom" >
			<br>
			<br>
			<label for="email">Email:  </label> 
			<input type="email" name="email" placeholder="Entrer email" id="mail" >
			<br>
			<br>
			<label for="password">Mot de passe: (8 caractères minimum)</label> 
			<input type="password" name="password" placeholder="Entrer mdp" id="password" >
				<br>
			<br>
			<label for="cpassword">Confirmer votre mot de passe:  </label> 
			<input type="password" name="cpassword" placeholder="Confirmer mdp" id="password" >
			<br>
			<br>
			<input  type="submit" value="s'inscrire" name="inscription">
		</form>
	</body>
	<script type="text/javascript" src="./js/scrollnav.js"></script> 
</html>