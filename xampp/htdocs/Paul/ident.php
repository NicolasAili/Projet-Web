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

if (isset($post['inscription']))
{
	$pseudo = $_POST['pseudo'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if (strcmp($password, $cpassword) == 0)
	{
			$sql = "SELECT pseudo FROM utilisateur WHERE pseudo = $pseudo";
			$result = mysqli_query($con, $sql);
			if ($result == null)
			{
				$sql = "INSERT INTO utilisateur (pseudo, email, password) VALUES ('$pseudo', '$email', '$password')";
				mysqli_query($con, $sql);
			}
			else{echo'Erreur, l\'utilisateur existe deja';}
	}
	else{echo'Confirmation du mot de passe non valide, réessayer';}
}