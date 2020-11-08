<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
				<title>contact</title>
				<meta name="Author" content="BUSQUET_TOURNU" />
				<meta name="Keywords" content="ConcertAll" />
				<meta name="Description" content="Contact" />
				<link rel="stylesheet" type="text/css" href="css/header.css" media="screen" />	
				<link rel="stylesheet" type="text/css" href="css/formulaire.css" media="screen" />	
	</head>
	<header>
		<?php include('header.php'); ?>
	</header>	
	<body>
		<h1> Contactez nous ! </h1>
		<form action="mailto:paul.tournu@orange.fr?subject=Formulaired'appréciation" method="post">
			<fieldset>
				<legend>Informations personelles</legend>
					<p>
						<label for="Nom">Pseudo </label>
						<input type="text" name="Nom" id="Nom" size="30" autofocus />
					</p>
					<p>
						<label for="email">Adresse E-mail: </label>
						<input type="email" name="email" id="email" size="50" required />
					</p>
			</fieldset> <br />
			<fieldset>
				<legend>Appréciation sur le site Web</legend>
					<p>
						Appreciation globale du site: <br />
						<input type="radio" name="glo" value="Très utile" id="Très_utile" /><label for="Très_utile">Très utile</label>
						<input type="radio" name="glo" value="Utile" id="Utile" /><label for="Utile">Utile</label>
						<input type="radio" name="glo" value="Inutile" id="Inutile" /><label for="Inutile">Inutile</label>
						<br />
					</p>
					<p>
						Ce site vous à t'il aidé à trouver un concert ? <br />
						<input type="radio" name="glo" value="Oui" id="Oui" /><label for="Oui">oui</label>
						<input type="radio" name="glo" value="Non" id="Non" /><label for="Non">non</label>
					</p>
					<label for="appréciation">Qu'avez-vous le plus apprécié sur le site wab ? </label><br />
					<select id="appréciation" multiple="multiple" name="appréciation">
						<option value="contenu">Le contenu informatif</option>
						<option value="thème">Le thème graphique du site</option>
						<option value="navigation">la navigation à l'interieur du site </option>
					</select>
					<p>
						<label for="non">Apres avoir donner votre avis sur le site voulez vous ajouter quelques choses?</label><br />
						<textarea name="commentaire" id="commentaire" cols="40" rows="5"></textarea>
					</p>
			</fieldset>
			<p>	
				Merci, une appréciation est toujours bonne à prendre <br />
				<input type="checkbox" id="info" name="info" />
				<label for="info"> oui, je souhaite recevoir plus d'information sur l'évolution de notre site web'</label>
			</p>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Envoyer" />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Effacer" />
			</p>
		</form>
		<hr />
	</body>
	<footer>
		<p>Formulaire d'appreciation</p>
	</footer>
	<script type="text/javascript" src="./js/scrollnav.js"></script> 
</html>