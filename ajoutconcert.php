<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
				<titleC></title>
				<meta name="Author" content="BUSQUET_TOURNU" />
				<meta name="Keywords" content="ConcertAll" />
				<meta name="Description" content="Ajouter un concert" />
				<link rel="stylesheet" type="text/css" href="css/formulaire.css" media="screen" />
				<?php include("concert.php"); // on appelle le fichier?>
	<
	<header>
		<?php include('header.php'); ?>
	</header>	
		<body>
			 <h1>Ajout d'un concert</h1>

			 <form action="concert.php" method="post" class="connect">
  				
	  			<label for="artiste">Nom de l'artisite ou du groupe:  </label> 
	    		<input type="text" name="artiste" placeholder="Saisir l'artiste"   id="artiste" >
	    		<br>
	    		<br>
	   			<label for="date">Date:  </label> 
	   			<input type="date" name="date" placeholder="Saisir la date du concert " id="date" >
	   			<br>
	   			<br>
    			<label for="heure">Heure</label> 
	    		<input type="time" name="heure" placeholder="Saisir l'heure du concert" id="heure" >
      			<br>
	    		<br>
	    		<label for="pays">Pays: </label> 
	    		<input type="text" name="pays" placeholder="Pays ou a lieu le concert" id="pays" >
	   			<br>
	    		<label for="ville">Ville: </label> 
	    		<input type="text" name="ville" placeholder="Ville ou a lieu le concert" id="ville" >
	   			<br>
	   			<label for="salle">Salle: </label> 
	    		<input type="text" name="salle" placeholder="Salle ou a lieu le concert" id="salle" >
	   			<br>
	   			<label for="adresse">Adresse: </label> 
	    		<input type="text" name="adresse" placeholder="Adresse ou a lieu le concert" id="adresse" >
	   			<br>
	   			<label for="cp">Code postal: </label> 
	    		<input type="text" name="cp" placeholder="Code postal ou a lieu le concert" id="cp" >
	   			<br>
	   			<br>
				<input  type="submit" value="Enregister le concert" name="concert" href="">
			
			</form>

		</body>
	</html>