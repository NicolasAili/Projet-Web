<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
				<titleC></title>
				<meta name="Author" content="BUSQUET_TOURNU" />
				<meta name="Keywords" content="Tous les concerts" />
				<meta name="Description" content="Mentions Légales" />
				<link rel="stylesheet" type="text/css" href="css/formulaire.css" media="screen" />
				<div class="recherche">
	<header>
		<?php include('header.php'); ?>
	</header>
		<body>
			 <h1>Tous les concerts</h1>
<?php
echo $_SESSION['pseudo'];
echo "</br>";
echo "</br>";
?>

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

				$str = "SELECT * FROM concert";
				$result = mysqli_query($con, $str);
				$admin = 'administateur';
				echo $_SESSION['pseudo'];
				echo $admin;
				while($row = mysqli_fetch_array($result)) {
					echo $row['artiste'] . "  " . $row['date'] . "  " . $row['heure'] . "  " . $row['pays'] . "  " . $row['ville'] . "  " . $row['salle'] . "  " . $row['adresse'] . "  " . $row['cp'] ;
					echo "success1";
					if ($_SESSION['pseudo'] == $admin)
						 {
						 	echo "success2";
						 	?>

	    						
								<input  type="submit" value="Supprimer le concert" name="supprimer">
								</br>
								
						 	<?php

						 }
					else
					{
						echo "success3";
					}

				}
				?>


