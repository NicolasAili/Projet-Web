<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Mon site web concert</title>
		<meta name="Author" content="BUSQUET_TOURNU" />
		<meta name="Keywords" content="ConcertAll" />
		<meta name="Description" content="page d'acceuil" />
		<link rel="stylesheet" type="text/css" href="css/header.css" media="screen" />	
	</head>
	<header>
		<?php include('header.php'); ?>
	</header>
	<body>
		<div class="main">
		<h1> Objectifs du site </h1>
		<p> L'objectif de notre site web est de trouver des concerts de hiphop facilement. 
			Pour cela, chaque personne qui accède au site va pouvoir ajouter un concert, peut importe l'endroit dans le monde, qu'il soit utilisateur ou non. 
			De plus, notre site propose un état de connexion de façon à pouvoir supprimer des concerts qui ont mal était renseigné, nous faisons confiance à notre communauté. 
		</p>
		<br/>
		<h1>Fonctionnement du site</h1>
		<p> <h2>Informations sur un concert</h2>
			Une fois sur la page d'accueil, nous avons plusieurs onglet qui corresponde aux concerts (artiste, pays, ville). Ces onglets vont nous informer des concerts qu'il y a en fonction de la page qu'on choisi. </p>

			<h2>Consulter tous les concerts</h2>
			<p>Nous pouvons aussi accéder à la pas "Tous les concerts", comme son nom l'indique, cette page référence tous les concerts qui ont été ajouté par notre communauté. </p>

			<h2>Comment ajouter un concert</h2>
			<p>Pour ajouter un concert il faut cliquer sur le bouton ajouter concert, et celui si va vous rediriger vers un formulaire et vous aurez plus qu'a rensigné les informations necessaire du concert pour l'ajouter.</p>

			<h2>Inscription et connexion au site</h2>
			<p> Pour s'inscrire c'est simple, vous avez juste à cliquer sur le bouton inscription et remplir le formulaire demandé en respectant les paramètres (exemple : le mot de passe doit contenir au moins 8 caractères). Une fois inscri vous allez être redirigé vers la page de connexion et vous aurez juste à saisir votre pseudo et votre mot de passe.
			Si vous êtes déjà inscri, cliquez sur le bouton connexion et entré vos identifiants. </p>

			<h2> A savoir </h2>
			<p> Seul une personne connecté pourra supprimer des concerts qui ont était annulé, repporté, ou seulement mal référencé.</p>

		</div>

	</body>
		<!--
		<div class="main">
			<nav class="index">
				<ul style="padding-left: 0px">			
					<li><a href=".\artistes.html">Artistes</a></li>
					<li><a href=".\villes.html">Villes</a></li>
					<li><a href=".\pays.html">Pays</a></li>
					<li><a href=".\concert.html">Tous les concerts</a></li>
					<li><a href=".\leg.html">Mentions légales</a></li>
					<li><a href=".\sources.html">Qui sommes-nous ?</a></li>
				</ul>
			</nav>
			<div class="submain">
				<div class="ajouts">
					derniers concerts ajout&acute;s
					<ul>
						<li> un </li>
						<li> deux </li>
						<li> trois </li>
					</ul>
				</div>
				<div class="cadrepos">
					<div class="txtpro"> Prochainement </div>
					<div class="prochainement">
							<li data-num="1"><img src="image/concert1.jpg" alt="" height="300" class="imgli"  />
	            			<li data-num="2"><img src="image/concert2.jpeg" alt="" height="300" class="imgli" />
	             			<li data-num="3"><img src="image/concert3.jpg" alt="" height="300" class="imgli" /> 
					</div>
				</div>
				<div class="map">
					<!--<iframe width=100% height="576" src="https://maphub.net/embed/108114?legend=1&panel=1&panel_closed=1" frameborder="0"></iframe>-->
					<!--salut biloute
				</div>
			</div>
		</div>
		<div class="footer">
		<footer>
			Un bug? Une question? Une id&eacute;e d'am&eacute;lioration? <br /> <br/>
			<a href="mailto:Ailiganon@gmail.com">Envoyez-moi un mail !</a>	
		</footer>
	</div>
	</body>-->
	<script type="text/javascript" src="./js/scrollnav.js"></script> 
</html>