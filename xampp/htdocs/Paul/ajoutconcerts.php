<!DOCTYPE html>
<html>
		<head>
			<title>Ajouter Concert</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="">
			<titleC></title>
			<meta name="Author" content="BUSQUET_TOURNU" />
			<meta name="Keywords" content="ConcertAll" />
			<meta name="Description" content="Ajouts Concerts" />
		</head>

		<body>
			    <h1>Ajouter un concert</h1>  


				<form action="" method="get" class="form-example">
  				<div class="form">
	  			 	<label for="name">Entrer le nom de l'artiste: </label> 
	    			<input type="text" name="artiste" id="name" required>
	    			<br>
	  			 	<label for="name">Entrer la date du concert: </label>
	    			<input type="date"  required>
	    			<br>
	<!-- BDD connect -->
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
		            else {
		            	echo 'Connexion réussie';
		            }

		        ?>
				
				<!-- Liste déroulante pays -->
				<form action='index.php' method='get'>			
					<div>
						<br/>
						<label>Pays:</label><br/>
						<select name='pays' id='liste-pays'>

			        <?php
			            // Affichage des pays
						$sql ="SELECT * FROM pays";
						$result=mysqli_query($con, $sql);

						while ( $row = mysqli_fetch_array($result)) {
							if(isset($_GET['pays'])){
								if($_GET['pays'] == $row['Nom_Pays']){
									echo"<option value='".$row['Nom_Pays']."' selected='selected' >".$row['Nom_Pays']."</option>";
								}
								else{
									echo"<option value='".$row['Nom_Pays']."'>".$row['Nom_Pays']."</option>";
								}
							}else{
								echo"<option value='".$row['Nom_Pays']."'>".$row['Nom_Pays']."</option>";
							}
						//echo "<br/>" . $row['Nom_Pays']   ;
						}

					?>
			    		</select>
					</div>
					<input type="submit" value="Valider"/>
				</form>

				<!-- Liste déroulante villes -->		
				<div>
					<br/>
					<label>Villes:</label><br/>
					<select name='villes' id='liste-villes'>
						<?php
							if(isset($_GET['pays'])){
								$sql ="SELECT * FROM ville V WHERE V.id_pays = (SELECT P.id_pays FROM pays P WHERE nom_pays = '".$_GET['pays']."')";
								echo $sql."</BR>";
								$result=mysqli_query($con, $sql);
								while ( $row = mysqli_fetch_array($result)) {
									echo "<option value ='".$row['Nom_Ville']."'> " .$row['Nom_Ville']."</option>";
								}
								unset($_GET['pays']);
							}
						?>
			    	</select>
				</div>



<!-- BDD Disconnect -->
				<?php
					mysqli_free_result($result);
					mysqli_close($con);
		        ?>
		        </div>

		</body>
</html> 