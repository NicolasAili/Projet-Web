<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
				<titleC></title>
				<meta name="Author" content="BUSQUET_TOURNU" />
				<meta name="Keywords" content="ConcertAll" />
				<meta name="Description" content="page d'acceuil" />
				<link rel="stylesheet" type="text/css" href="css/formulaire.css" media="screen" />
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
							<?php 
								if (isset($_SESSION['pseudo']) == null)
								 {
							?>
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
										<a href="./inscrire.php" class="inscrlink" role="button">Inscription </a>
									</div>
									<div class=contactimg>
										<img src="./image/bulle.png" class="imgbulle">
										<a href="./contact.html" class="contact" role="button">Contact</a>
									</div>
								</div>
							</div>
							<?php
												}
												else 
												{
									?>
									<div class="identification">
								<div class="ajoutconcert">
									<img src="./image/concert.png" class="imgconcert">
									<a href="./ajoutconcert.php" class="button" role="button">Ajouter un concert</a>
								</div>

								<div class="barre"></div>
								<div class="memberspace">
									<div class="space">							
										<img src="./image/cadenas.png" class="imgcadenas">
										<a href="./deconnexion.php" class="spacelink" role="button">Deconnexion</a>
										</div>
									<div class="inscription">
										<a href="./profil.php" class="inscrlink" role="button">Profil de <?php echo $_SESSION['pseudo']; ?>  </a>
									</div>
									<div class=contactimg>
										<img src="./image/bulle.png" class="imgbulle">
										<a href="./contact.html" class="contact" role="button">Contact</a>
									</div>
								</div>
							</div>
									<?php
												}
									?>
						</div>
						<div class="lowernav">
							<a href=".\artistes.html" class="liun">Fonctionnement du site</a>	
							<a href=".\artistes.html" class="lideux">Artistes</a>
							<a href=".\villes.html" class="litrois">Villes</a>
							<a href=".\pays.html" class="liquatre">Pays</a>
							<a href=".\allconcerts.php" class="licinq">Tous les concerts</a>
							<a href=".\leg.html" class="lisix">Qui sommes-nous ?</a>
							<a href=".\mention.html" class="lisept">Mentions légales</a>
						</div>
					</div>
				</div>		
	</head>

	<body>
		<div class="test">
		salut



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
</html>