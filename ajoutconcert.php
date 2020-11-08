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
				<div class="recherche">
					<div class="logo">
						<img src="./image/logo.png" class="imglogo">
					</div>
					<div class="nav">
						<div class="uppernav">
							<div class="searchbar">
									<input class="champ" type="recherche" placeholder="Artistes,Salles,Villes,Concerts,...">
								<!--<img class="searchbutton"  src="./image/loupe.jpg" type="button">-->
								<input class="o-search-submit" value=" " type="submit">
							</div>
							<div class="identification">
								<div class="ajoutconcert">
									<img src="./image/concert.png" class="imgconcert">
									<a href="./ajoutconcert.php" class="button" role="button">Ajouter un concert</a>
								</div>
								<div class="barre"></div>
								<div class="memberspace">
									<div class="space">
										<img src="./image/cadenas.png" class="imgcadenas">
										<a href="./connexion.php" class="spacelink" role="button">Mon espace</a>
									</div>
									<div class="inscription">
										<div class="mv">
										</div>
										<a href="./inscrire.php" class="inscrlink" role="button">Inscription </a>
									</div>
									<div class=contactimg>
										<img src="./image/bulle.png" class="imgbulle">
										<a href="./contact.html" class="contact" role="button">Contact</a>
									</div>
								</div>
							</div>
						</div>
						<div class="lowernav">
							<a href=".\artistes.html" class="liun">Fonctionnement du site</a>	
							<a href=".\artistes.html" class="lideux">Artistes</a>
							<a href=".\villes.html" class="litrois">Villes</a>
							<a href=".\pays.html" class="liquatre">Pays</a>
							<a href=".\allconcerts.php" class="licinq">Tous les concerts</a>
							<a href=".\nous.html" class="lisix">Qui sommes-nous ?</a>
							<a href=".\mention.html" class="lisept">Mentions légales</a>
						</div>
					</div>
				</div>		
	</head>
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