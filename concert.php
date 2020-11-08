<!DOCTYPE html>
<html>
	<head>
		<title>Recap</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/accueil.css">
		<?php include("salle.php"); // on appelle le fichier?>
		<titleC></title>
		<meta name="Author" content="BUSQUET_TOURNU" />
		<meta name="Keywords" content="ConcertAll" />
		<meta name="Description" content="Recap" />
	</head>
	<header>
		<?php include('header.php'); ?>
	</header>
	<body>
		<?php	      
			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$dbname = 'webbd';

			//Connexion à la BDD
			$con = mysqli_connect($servername, $username, $password, $dbname);

			//Vérification de la connexion
			if(mysqli_connect_errno($con))
			{
				echo "Erreur de connexion" .mysqli_connect_error();
			}
			else 
			{
				echo 'Connexion réussie';
			}

			if (isset($_POST['concert']))
			{
				echo "bonjour";
				echo "<br>";
				$artiste = $_POST['artiste'];
				$date = $_POST['date'];
				$heure = $_POST['heure'];
				$pays = $_POST['pays'];
				$ville = $_POST['ville'];
				$salle = $_POST['salle'];
				$adresse = $_POST['adresse'];
				$cp = $_POST['cp'];


				$sql = "INSERT INTO concert (artiste, date, heure, pays, ville, salle, adresse, cp) VALUES ('$artiste', '$date', '$heure', '$pays', '$ville', '$salle', '$adresse', '$cp')";
				mysqli_query($con, $sql);
				echo nl2br("Le concert à était ajouté à la base de donné \n \n");
				echo nl2br("Recapitulatif \n \n");
				echo  nl2br(" \n Le nom de l'artiste est :");
				echo $_POST['artiste'];
				echo  nl2br(" \n La date de concert est le :");
				echo $_POST['date'];
				echo  nl2br(" \n Le concert démare à :");
				echo $_POST['heure'];
				echo  nl2br(" \n Pays du concert : ");
				echo $_POST['pays'];
				echo  nl2br(" \n Ville du concert : ");
				echo $_POST['ville'];
				echo  nl2br(" \n Le nom de la salle est :");
				echo $_POST['salle'];
				echo  nl2br(" \n L'adresse de la salle est :");
				echo $_POST['adresse'];
				echo  nl2br(" \n Le code postal de la salle est :");
				echo $_POST['cp'];
			}
		?>
	</body>
	<script type="text/javascript" src="./js/scrollnav.js"></script> 
</html>

