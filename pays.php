<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Artistes</title>
		<meta name="Author" content="BUSQUET_TOURNU" />
		<meta name="Keywords" content="ConcertAll" />
		<meta name="Description" content="Artistes" />
		<link rel="stylesheet" type="text/css" href="css/header.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/formulaire.css" media="screen" />	
	</head>
	<header>
		<?php include('header.php'); ?>
	</header>
	<body>
		<h1> Pays </h1>

		<?php
			$servername = 'localhost';
			$username = 'root';
			$password = '';
			$dbname = 'webbd';

			//Connexion à la BDD
			$con = mysqli_connect($servername, $username, $password, $dbname);

			//Vérification de la connexion
			if(mysqli_connect_errno($con)){
			echo "Erreur de connexion" .mysqli_connect_error();
			}
		?>

		<?php
			$str = "SELECT pays, artiste, date FROM concert ORDER BY pays ASC";
			$result = mysqli_query($con, $str);
			while($row = mysqli_fetch_array($result)) 
			{


					 	echo $row['pays'] ."  ";

					if ($row['pays'] != null)
					{
						echo $row['artiste'] . "  " . $row['date'];
					}
					echo "<br/>";
			}

		?>	
	</body>
	<script type="text/javascript" src="./js/scrollnav.js"></script> 
</html>