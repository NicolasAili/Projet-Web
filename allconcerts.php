<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tous les concerts</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/header.css" media="screen" />	
		<link rel="stylesheet" type="text/css" href="css/body/allconcerts.css" media="screen" />	
		<?php include("salle.php"); // on appelle le fichier?>
		<meta name="Author" content="BUSQUET_TOURNU" />
		<meta name="Keywords" content="ConcertAll" />
		<meta name="Description" content="Recap" />
	</head>
	<header>
		<?php include('header.php'); ?>
	</header>
	<body>
		<h1>Tous les concerts</h1>
		<?php
			//echo $_SESSION['pseudo'];
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
			//echo $_SESSION['pseudo'];
			//echo $admin;
			?>
			<div id="concertsall">
				<?php
					while($row = mysqli_fetch_array($result)) 
					{
						?> 
						<div class="inwhile"> 
							<div class="artiste"> <?php echo $row['artiste'] ?> </div>  
							<div class="date"> <?php echo  $row['date'] ?> </div>  
							<div class="heure"> <?php echo $row['heure'] ?> </div>  
							<div class="pays"> <?php echo  $row['pays'] ?> </div> 
							<div class="ville"> <?php echo $row['ville'] ?> </div>  
							<div class="salle"> <?php echo  $row['salle'] ?> </div> 
							<div class="adresse"> <?php echo $row['adresse'] ?> </div>  
							<div class="cp"> <?php echo  $row['cp'] ?> </div>
							?>
						</div>
						<?php
						/*echo "success1";
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
						}*/
					}
				?>
			</div>
	</body>
	<script type="text/javascript" src="./js/scrollnav.js"></script> 
</html>


