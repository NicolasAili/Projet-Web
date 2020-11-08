<?php
    session_start();
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
	else {
	echo 'Connexion réussie';
	}

	if ( isset($_POST['connexion'])) {
		$pseudo = $_POST['pseudo'];
		$password = $_POST['password'];
		$sql = "SELECT pseudo FROM utilisateur WHERE pseudo = '$pseudo' AND password = '$password'";
		$result = mysqli_query($con ,$sql);

	$row = mysqli_fetch_assoc($result);

	    if ($row['pseudo'] != null )
    	{
			echo " Bonjour ";		
			echo $row['pseudo'];
			echo " ! ";
			$_SESSION['pseudo'] = $row['pseudo'];
			header('Location: ./accueil.php');

		}
	else 
		{
				echo "Pseudo ou Mot de passe incorect";			
		}
}
/*
		if ($sql == $pseudo ) {
			echo " Bonjour ";		
		}
		else {
				echo "Pseudo ou Mot de passe incorect";			
		}*/

?>		

